<?php

  class OptimizedDeviceModels {
    static $ANDROID_MODELS = array();
    static $ASHA_MODELS = array();
    static $BADA_MODELS = array();
    static $BREW_MODELS = array();
    static $FIREFOXOS_MODELS = array();
    static $TIZEN_MODELS = array();
    static $TOUCHWIZ_MODELS = array();
    static $WINDOWS_MOBILE_MODELS = array();
    static $WINDOWS_PHONE_MODELS = array();
    static $S40_MODELS = array();
    static $S60_MODELS = array();
    static $FEATURE_MODELS = array();
    static $BLACKBERRY_MODELS = array();
    static $IOS_MODELS = array();


    static function identify($type, $model) {
      require_once(_BASEPATH_ . '../data/models-' . $type . '.php');

      switch($type) {
        case 'android':   return OptimizedDeviceModels::identifyAndroid($model);
        case 'asha':    return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$ASHA_MODELS, $model);
        case 'bada':    return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$BADA_MODELS, $model);
        case 'blackberry':  return OptimizedDeviceModels::identifyBlackBerry($model);
        case 'brew':    return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$BREW_MODELS, $model);
        case 'firefoxos':   return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$FIREFOXOS_MODELS, $model);
        case 'ios':     return OptimizedDeviceModels::identifyIOS($model);
        case 'tizen':     return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$TIZEN_MODELS, $model);
        case 'touchwiz':  return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$TOUCHWIZ_MODELS, $model);
        case 'wm':      return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$WINDOWS_MOBILE_MODELS, $model);
        case 'wp':      return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$WINDOWS_PHONE_MODELS, $model);
        case 's40':     return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$S40_MODELS, $model);
        case 's60':     return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$S60_MODELS, $model);
        case 'feature':   return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$FEATURE_MODELS, $model);
      }

      return new Device(array('model' => $model));
    }

    static function identifyIOS($model) {
      $model = str_replace('Unknown ', '', $model);
      $model = preg_replace("/iPh([0-9],[0-9])/", 'iPhone\\1', $model);
      $model = preg_replace("/iPd([0-9],[0-9])/", 'iPod\\1', $model);

      return OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$IOS_MODELS, $model);
    }

    static function identifyAndroid($model) {
      $result = OptimizedDeviceModels::identifyList(OptimizedDeviceModels::$ANDROID_MODELS, $model);

      if (!$result->identified) {
        $model = OptimizedDeviceModels::cleanup($model);
        if (preg_match('/AndroVM/i', $model)  || $model == 'Emulator' || $model == 'x86 Emulator' || $model == 'x86 VirtualBox' || $model == 'vm') {

          return new Device(array(
            'type'         => TYPE_EMULATOR,
            'identified'   => ID_PATTERN,
            'manufacturer' => null,
            'model'        => null
          ));
        }
      }

      return $result;
    }

    static function identifyBlackBerry($model) {
      $device = new Device(array(
        'type'         => Device::TYPE_MOBILE,
        'identified'   => ID_PATTERN,
        'manufacturer' => 'RIM',
        'model'        => 'BlackBerry ' . $model
      ));

      if (isset(OptimizedDeviceModels::$BLACKBERRY_MODELS[$model])) {
        $device->setModel('BlackBerry ' . OptimizedDeviceModels::$BLACKBERRY_MODELS[$model] . ' ' . $model);
        $device->setIdentified(ID_MATCH_UA, '|');
      }

      return $device;
    }

    static function identifyList($list, $model) {
      $model = OptimizedDeviceModels::cleanup($model);

      $device = new Device(array(
        'type'  => Device::TYPE_MOBILE,
        'model' => $model
      ));

      foreach ($list as $m => $v) {
        $match = false;
        if (substr($m, -1) == "!")
        {
          $match = preg_match('/^' . substr($m, 0, -1) . '/i', $model);
        }
        else
        {
          $match = strtolower($m) == strtolower($model);
        }

        if ($match) {
          $device->setManufacturer($v[0]);
          $device->setModel($v[1]);
          if (isset($v[2])) $device->setType($v[2]);
          if (isset($v[3])) $device->setFlag($v[3]);
          $device->setIdentified(Device::ID_MATCH_UA);

          if ($device->getManufacturer() == null && $device->getModel() == null) {
            $device->setIdentified(Device::ID_PATTERN);
          }

          break;
        }
      }

      return $device;
    }

    static function cleanup($s = '') {
      $s = preg_replace('/\/[^\/]+$/', '', $s);
      $s = preg_replace('/\/[^\/]+ Android\/.*/', '', $s);

      $s = preg_replace('/UCBrowser$/', '', $s);

      $s = preg_replace('/_TD$/', '', $s);
      $s = preg_replace('/_CMCC$/', '', $s);

      $s = preg_replace('/_/', ' ', $s);
      $s = preg_replace('/^\s+|\s+$/', '', $s);

      $s = preg_replace('/^tita on /', '', $s);
      $s = preg_replace('/^De-Sensed /', '', $s);
      $s = preg_replace('/^ICS AOSP on /', '', $s);
      $s = preg_replace('/^Baidu Yi on /', '', $s);
      $s = preg_replace('/^Buildroid for /', '', $s);
      $s = preg_replace('/^Gingerbread on /', '', $s);
      $s = preg_replace('/^Android (on |for )/', '', $s);
      $s = preg_replace('/^Generic Android on /', '', $s);
      $s = preg_replace('/^Full JellyBean( on )?/', '', $s);
      $s = preg_replace('/^Full (AOSP on |Android on |Cappuccino on |MIPS Android on |Android)/', '', $s);
      $s = preg_replace('/^AOSP on /', '', $s);

      $s = preg_replace('/^Acer( |-)?/i', '', $s);
      $s = preg_replace('/^Iconia( Tab)? /', '', $s);
      $s = preg_replace('/^ASUS ?/', '', $s);
      $s = preg_replace('/^Ainol /', '', $s);
      $s = preg_replace('/^Coolpad ?/i', 'Coolpad ', $s);
      $s = preg_replace('/^ALCATEL /', '', $s);
      $s = preg_replace('/^Alcatel OT-(.*)/', 'one touch $1', $s);
      $s = preg_replace('/^YL-/', '', $s);
      $s = preg_replace('/^Novo7 ?/i', 'Novo7 ', $s);
      $s = preg_replace('/^G[iI]ONEE[ -]/', '', $s);
      $s = preg_replace('/^HW-/', '', $s);
      $s = preg_replace('/^Huawei[ -]/i', 'Huawei ', $s);
      $s = preg_replace('/^SAMSUNG[ -]/i', '', $s);
      $s = preg_replace('/^SAMSUNG SAMSUNG-/i', '', $s);
      $s = preg_replace('/^(Sony ?Ericsson|Sony)/', '', $s);
      $s = preg_replace('/^(Lenovo Lenovo|LNV-Lenovo|LENOVO-Lenovo)/', 'Lenovo', $s);
      $s = preg_replace('/^Lenovo-/', 'Lenovo', $s);
      $s = preg_replace('/^ZTE-/', 'ZTE ', $s);
      $s = preg_replace('/^(LG)[ _\/]/', '$1-', $s);
      $s = preg_replace('/^(HTC.+)\s[v|V][0-9.]+$/', '$1', $s);
      $s = preg_replace('/^(HTC)[-\/]/', '$1', $s);
      $s = preg_replace('/^(HTC)([A-Z][0-9][0-9][0-9])/', '$1 $2', $s);
      $s = preg_replace('/^(Motorola[\s|-])/', '', $s);
      $s = preg_replace('/^(Moto|MOT-)/', '', $s);

      $s = preg_replace('/-?(orange(-ls)?|vodafone|bouygues|parrot|Kust)$/i', '', $s);
      $s = preg_replace('/http:\/\/.+$/i', '', $s);
      $s = preg_replace('/^\s+|\s+$/', '', $s);

      return $s;
    }
  }
