<?php

  class OptimizedBrowserIds {
    static $ANDROID_BROWSERS = array();

    static function identify($type, $model) {
      // return;

      require_once(_BASEPATH_ . '../data/id-' . $type . '.php');

      switch($type) {
        case 'android':   return BrowserIds::identifyList(BrowserIds::$ANDROID_BROWSERS, $model);
      }

      return false;
    }

    static function identifyList($list, $id) {
      if (isset($list[$id])) {
        return $list[$id];
      }

      return false;
    }
  }
