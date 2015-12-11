<?php

class UserAgent {

  private $MobileDetect = null;
  private $ua = [
    'os' => 'unknow',
    'mobile' => false,
    'touch' => false,
    'browser' => 'other',
    'shorty' => '',
    'version' => '',
    'engine' => '',
    'string' => '',
    'class' => '',
  ];

  private $os = [
    'Macintosh'     => array('os'=>'mac',        'mobile'=>false),
    'Windows CE'    => array('os'=>'win-ce',     'mobile'=>true),
    'Windows Phone' => array('os'=>'win-ce',     'mobile'=>true),
    'Windows'       => array('os'=>'win',        'mobile'=>false),
    'iPad'          => array('os'=>'ios',        'mobile'=>false),
    'iPhone'        => array('os'=>'ios',        'mobile'=>true),
    'iPod'          => array('os'=>'ios',        'mobile'=>true),
    'Android'       => array('os'=>'android',    'mobile'=>true),
    'BB10'          => array('os'=>'blackberry', 'mobile'=>true),
    'Blackberry'    => array('os'=>'blackberry', 'mobile'=>true),
    'Symbian'       => array('os'=>'symbian',    'mobile'=>true),
    'WebOS'         => array('os'=>'webos',      'mobile'=>true),
    'Linux'         => array('os'=>'unix',       'mobile'=>false),
    'FreeBSD'       => array('os'=>'unix',       'mobile'=>false),
    'OpenBSD'       => array('os'=>'unix',       'mobile'=>false),
    'NetBSD'        => array('os'=>'unix',       'mobile'=>false),
  ];

  private $browsers = [
    'MSIE'       => array('browser'=>'ie',           'shorty'=>'ie', 'engine'=>'trident', 'version'=>'/^.*MSIE (\d+(\.\d+)*).*$/'),
    'Trident'    => array('browser'=>'ie',           'shorty'=>'ie', 'engine'=>'trident', 'version'=>'/^.*Trident\/\d+\.\d+; rv:(\d+(\.\d+)*).*$/'),
    'Firefox'    => array('browser'=>'firefox',      'shorty'=>'fx', 'engine'=>'gecko',   'version'=>'/^.*Firefox\/(\d+(\.\d+)*).*$/'),
    'Chrome'     => array('browser'=>'chrome',       'shorty'=>'ch', 'engine'=>'webkit',  'version'=>'/^.*Chrome\/(\d+(\.\d+)*).*$/'),
    'OmniWeb'    => array('browser'=>'omniweb',      'shorty'=>'ow', 'engine'=>'webkit',  'version'=>'/^.*Version\/(\d+(\.\d+)*).*$/'),
    'Silk'       => array('browser'=>'silk',         'shorty'=>'si', 'engine'=>'silk',    'version'=>'/^.*Silk\/(\d+(\.\d+)*).*$/'),
    'Safari'     => array('browser'=>'safari',       'shorty'=>'sf', 'engine'=>'webkit',  'version'=>'/^.*Version\/(\d+(\.\d+)*).*$/'),
    'Opera Mini' => array('browser'=>'opera-mini',   'shorty'=>'oi', 'engine'=>'presto',  'version'=>'/^.*Opera Mini\/(\d+(\.\d+)*).*$/'),
    'Opera Mobi' => array('browser'=>'opera-mobile', 'shorty'=>'om', 'engine'=>'presto',  'version'=>'/^.*Version\/(\d+(\.\d+)*).*$/'),
    'Opera'      => array('browser'=>'opera',        'shorty'=>'op', 'engine'=>'presto',  'version'=>'/^.*Version\/(\d+(\.\d+)*).*$/'),
    'IEMobile'   => array('browser'=>'ie-mobile',    'shorty'=>'im', 'engine'=>'trident', 'version'=>'/^.*IEMobile (\d+(\.\d+)*).*$/'),
    'Camino'     => array('browser'=>'camino',       'shorty'=>'ca', 'engine'=>'gecko',   'version'=>'/^.*Camino\/(\d+(\.\d+)*).*$/'),
    'Konqueror'  => array('browser'=>'konqueror',    'shorty'=>'ko', 'engine'=>'webkit',  'version'=>'/^.*Konqueror\/(\d+(\.\d+)*).*$/')
  ];

  use rex_factory_trait;

  public function __construct() {
    $this->MobileDetect = new Mobile_Detect();

    if(!is_object($this->ua))
      $this->ua = (object)$this->ua;

    $this->string = $this->getUserAgents();

    // Operating system
    foreach ($this->os as $k=>$v) {
      if (stripos($this->string, $k) !== false) {
        $this->os = $v['os'];
        $this->mobile = $v['mobile'];
        break;
      }
    }

    // Browser and version
    foreach ($this->browsers as $k=>$v) {
      if (stripos($this->string, $k) !== false) {
        $this->browser = $v['browser'];
        $this->shorty  = $v['shorty'];
        $this->version = explode('.',preg_replace($v['version'], '$1', $ua))[0];
        $this->engine  = $v['engine'];
        break;
      }
    }

    $this->class = [$this->os,$this->browser,$this->engine];

    if ($this->version != '')
      $this->class[] = $this->shorty.$this->version;

    // Android tablets are not mobile (see #4150 and #5869)
    if ($this->os == 'android' && $this->engine != 'presto' && stripos($this->string, 'mobile') === false)
      $this->mobile = false;
    if(($_GET && $_GET['isTouch'] == '1') || ($_POST && $_POST['isTouch'] == '1') || $mobile || $tablet) {
      $this->touch = true;
    }
    if(($_GET && $_GET['isTouch'] == '1') || ($_POST && $_POST['isTouch'] == '1') && $include_touch)
      $mobile = true;

    if($this->mobile)
      $this->class[] = 'mobile';
    if($this->touch)
      $this->class[] = 'touch';
    else $this->class[] = 'noTouch';
    if ($this->tablet)
      $this->class[] = 'tablet';

    $this->tablet   = $tablet;
    $this->browser  = $browser;
    $this->touch    = $touch;
    $this->shorty   = $shorty;
    $this->version  = $version;
    $this->engine   = $engine;
    $this->versions = $versions;
    $this->mobile   = $mobile;
    $this->class = implode(' ',$this->class);
  }

  public function __set($property, $value) {
    if(!is_object($this->ua))
      $this->ua = (object)$this->ua;

    $this->ua->$propery = $value;
  }

  public function __call($func,$var) {
    if(method_exists($this->MobileDetect,$func)) {
      return $this->MobileDetect->func($var);
    }
  }

  public function __get($property) {
    if(!empty($this->ua->$property))
      return $this->ua->$property;
    if(property_exists($this->MobileDetect,$property))
      return $this->MobileDetect->$property;
  }

  public function isTablet() {
    foreach ($this->getTabletDevices() as $device => $regex) {
      $regex = str_replace('/', '\/', $regex);
      $match = (bool) preg_match('/'.$regex.'/is', $userAgent, $matches);
      if($match) return $match;
    }
    return false;
  }

  public function getAgent() {
    return $this->ua;
  }

}