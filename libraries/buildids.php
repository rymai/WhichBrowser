<?php

  class BuildIds {
    static $ANDROID_BUILDS = array();

    static function identify($type, $id) {
      require_once(_BASEPATH_ . '../data/build-' . $type . '.php');

      switch($type) {
        case 'android':   return BuildIds::identifyList(BuildIds::$ANDROID_BUILDS, $id);
      }

      return false;
    }

    static function identifyList($list, $id) {
      if (isset($list[$id])) {
        return new Version(array('value' => $list[$id]));
      }

      return false;
    }
  }
