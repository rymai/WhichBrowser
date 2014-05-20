<?php

  class DeviceProfiles {
    static $PROFILES = array();

    static function identify($url) {
      require_once(_BASEPATH_ . '../data/profiles.php');

      if (isset(DeviceProfiles::$PROFILES[$url])) {
        return DeviceProfiles::$PROFILES[$url];
      }

      return false;
    }
  }
