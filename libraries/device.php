<?php

/**
*
*/
class Device
{

  const ID_NONE = 0;
  const ID_INFER = 1;
  const ID_PATTERN = 2;
  const ID_MATCH_UA = 4;
  const ID_MATCH_PROF = 8;

  const TYPE_DESKTOP = 'desktop';
  const TYPE_MOBILE = 'mobile';
  const TYPE_TABLET = 'tablet';
  const TYPE_GAMING = 'gaming';
  const TYPE_EREADER = 'ereader';
  const TYPE_MEDIA = 'media';
  const TYPE_HEADSET = 'headset';
  const TYPE_WATCH = 'watch';
  const TYPE_EMULATOR = 'emulator';
  const TYPE_TELEVISION = 'television';
  const TYPE_MONITOR = 'monitor';
  const TYPE_CAMERA = 'camera';
  const TYPE_SIGNAGE = 'signage';
  const TYPE_WHITEBOARD = 'whiteboard';
  const TYPE_GPS = 'gps';
  const TYPE_CAR = 'car';
  const TYPE_POS = 'pos';
  const TYPE_BOT = 'bot';

  const FLAG_GOOGLETV = 1;
  const FLAG_GOOGLEGLASS = 2;

  // Backward compatibility
  private $flag = '';
  private $identified = ID_NONE;
  private $type = '';
  private $model = '';
  private $manufacturer = null;

  function __construct($params = array())
  {
    if (isset($params['type'])) $this->type = $params['type'];
    if (isset($params['flag'])) $this->flag = $params['flag'];
    if (isset($params['model'])) $this->model = $params['model'];
    if (isset($params['manufacturer'])) $this->manufacturer = $params['manufacturer'];
    if (isset($params['identified'])) $this->identified = $params['identified'];
  }

  public function getType()
  {
    return $this->type;
  }

  public function getFlag()
  {
    return $this->flag;
  }

  public function getModel()
  {
    return $this->model;
  }

  public function getManufacturer()
  {
    return $this->manufacturer;
  }

  public function getIdentified()
  {
    return $this->identified;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function setFlag($flag)
  {
    $this->flag = $flag;
  }

  public function setModel($model)
  {
    $this->model = $model;
  }

  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }

  public function setIdentified($identified, $operator = null)
  {
    switch ($operator) {
      case '|':
        $this->identified |= $identified;
        break;

      default:
        $this->identified = $identified;
        break;
    }
  }

}
