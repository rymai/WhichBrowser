<?php

  class OptimizedVersion {
    var $value = null;

    function __construct($options = null) {
      if (is_array($options)) {
        if (isset($options['value'])) $this->value = $options['value'];
        if (isset($options['alias'])) $this->alias = $options['alias'];
        if (isset($options['details'])) $this->details = $options['details'];
      }
    }

    function toFloat() {
      return floatval($this->value);
    }

    function toNumber() {
      return intval($this->value);
    }
  }
