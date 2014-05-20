<?php

  class OptimizedDeviceProfiles {
    static $PROFILES = array();

    static function identify($url) {
      // return;

      require_once(_BASEPATH_ . '../data/profiles.php');

      if (isset(DeviceProfiles::$PROFILES[$url])) {
        return DeviceProfiles::$PROFILES[$url];
      }

      return false;
    }
  }
