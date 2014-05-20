<?php

require_once(_BASEPATH_ . 'device.php');
require_once(_BASEPATH_ . 'optimizeddeviceprofiles.php');
require_once(_BASEPATH_ . 'optimizeddevicemodels.php');
require_once(_BASEPATH_ . 'optimizedbrowserids.php');
require_once(_BASEPATH_ . 'optimizedbuildids.php');
require_once(_BASEPATH_ . 'optimizedversion.php');

/**
*
*/
class OptimizedWhichBrowser extends WhichBrowser
{

    static $OTHER_BROWSER = array(
        array('name' => 'AdobeAIR',             'regexp' => '/AdobeAIR\/([0-9.]*)/'),
        array('name' => 'Awesomium',            'regexp' => '/Awesomium\/([0-9.]*)/'),
        array('name' => 'Bsalsa Embedded',      'regexp' => '/EmbeddedWB ([0-9.]*)/'),
        array('name' => 'Bsalsa Embedded',      'regexp' => '/Embedded Web Browser/'),
        array('name' => 'Canvace',              'regexp' => '/Canvace Standalone\/([0-9.]*)/'),
        array('name' => 'Ekioh',                'regexp' => '/Ekioh\/([0-9.]*)/'),
        array('name' => 'JavaFX',               'regexp' => '/JavaFX\/([0-9.]*)/'),
        array('name' => 'GFXe',                 'regexp' => '/GFXe\/([0-9.]*)/'),
        array('name' => 'LuaKit',               'regexp' => '/luakit/'),
        array('name' => 'Titanium',             'regexp' => '/Titanium\/([0-9.]*)/'),
        array('name' => 'OpenWebKitSharp',      'regexp' => '/OpenWebKitSharp/'),
        array('name' => 'Prism',                'regexp' => '/Prism\/([0-9.]*)/'),
        array('name' => 'Qt',                   'regexp' => '/Qt\/([0-9.]*)/'),
        array('name' => 'QtEmbedded',           'regexp' => '/QtEmbedded/'),
        array('name' => 'QtEmbedded',           'regexp' => '/QtEmbedded.*Qt\/([0-9.]*)/'),
        array('name' => 'RhoSimulator',         'regexp' => '/RhoSimulator/'),
        array('name' => 'UWebKit',              'regexp' => '/UWebKit\/([0-9.]*)/'),
        array('name' => 'Node-WebKit',          'regexp' => '/nw-tests\/([0-9.]*)/'),
        array('name' => 'WebKit2.NET',          'regexp' => '/WebKit2.NET/'),

        array('name' => 'PhantomJS',            'regexp' => '/PhantomJS\/([0-9.]*)/'),

        array('name' => 'Google Earth',         'regexp' => '/Google Earth\/([0-9.]*)/'),
        array('name' => 'EA Origin',            'regexp' => '/Origin\/([0-9.]*)/'),
        array('name' => 'SecondLife',           'regexp' => '/SecondLife\/([0-9.]*)/'),
        array('name' => 'Valve Steam',          'regexp' => '/Valve Steam/'),

        array('name' => 'Bluefish',             'regexp' => '/bluefish ([0-9.]*)/'),
        array('name' => 'Songbird',             'regexp' => '/Songbird\/([0-9.]*)/'),
        array('name' => 'Thunderbird',          'regexp' => '/Thunderbird[\/ ]([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Microsoft FrontPage',  'regexp' => '/MS FrontPage ([0-9.]*)/', 'details' => 2, 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Microsoft Outlook',    'regexp' => '/Microsoft Outlook IMO, Build ([0-9.]*)/', 'details' => 2, 'type' => Device::TYPE_DESKTOP),

        array('name' => '1Browser',             'regexp' => '/1Password\/([0-9.]*)/'),
        array('name' => '360 Extreme Explorer', 'regexp' => '/QIHU 360EE/', 'type' => Device::TYPE_DESKTOP),
        array('name' => '360 Safe Explorer',    'regexp' => '/QIHU 360SE/', 'type' => Device::TYPE_DESKTOP),
        array('name' => '360 Phone Browser',    'regexp' => '/360 Android Phone Browser \(V([0-9.]*)\)/'),
        array('name' => '360 Phone Browser',    'regexp' => '/360 Aphone Browser \(Version ([0-9.]*)\)/'),
        array('name' => 'ABrowse',              'regexp' => '/A[Bb]rowse ([0-9.]*)/'),
        array('name' => 'Abrowser',             'regexp' => '/Abrowser\/([0-9.]*)/'),
        array('name' => 'AltiBrowser',          'regexp' => '/AltiBrowser\/([0-9.]*)/i'),
        array('name' => 'AOL Desktop',          'regexp' => '/AOL ([0-9.]*); AOLBuild/i'),
        array('name' => 'AOL Browser',          'regexp' => '/America Online Browser (?:[0-9.]*); rev([0-9.]*);/i'),
        array('name' => 'Arachne',              'regexp' => '/Arachne\/([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Arora',                'regexp' => '/[Aa]rora\/([0-9.]*)/'),                           // see: www.arora-browser.org
        array('name' => 'Avant Browser',        'regexp' => '/Avant Browser/'),
        array('name' => 'Avant Browser',        'regexp' => '/Avant TriCore/'),
        array('name' => 'Baidu Browser',        'regexp' => '/M?BaiduBrowser\/([0-9.]*)/i'),
        array('name' => 'Baidu Browser',        'regexp' => '/BdMobile\/([0-9.]*)/i'),
        array('name' => 'Baidu Browser',        'regexp' => '/FlyFlow\/([0-9.]*)/', 'details' => 2),
        array('name' => 'Baidu Browser',        'regexp' => '/BIDUBrowser[ \/]([0-9.]*)/'),
        array('name' => 'Baidu Browser',        'regexp' => '/BaiduHD\/([0-9.]*)/', 'details' => 2),
        array('name' => 'Baidu Spark',          'regexp' => '/BDSpark\/([0-9.]*)/', 'details' => 2),
        array('name' => 'Black Wren',           'regexp' => '/BlackWren\/([0-9.]*)/', 'details' => 2),
        array('name' => 'BrightSign',           'regexp' => '/BrightSign\/([0-9.]*)/', 'type' => Device::TYPE_SIGNAGE),
        array('name' => 'Byffox',               'regexp' => '/Byffox\/([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Camino',               'regexp' => '/Camino\/([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Canure',               'regexp' => '/Canure\/([0-9.]*)/', 'details' => 3),
        array('name' => 'CometBird',            'regexp' => '/CometBird\/([0-9.]*)/'),
        array('name' => 'Comodo Dragon',        'regexp' => '/Comodo_Dragon\/([0-9.]*)/', 'details' => 2),
        array('name' => 'Conkeror',             'regexp' => '/[Cc]onkeror\/([0-9.]*)/'),
        array('name' => 'CoolNovo',             'regexp' => '/(?:CoolNovo|CoolNovoChromePlus)\/([0-9.]*)/', 'details' => 3, 'type' => Device::TYPE_DESKTOP),
        array('name' => 'ChromePlus',           'regexp' => '/ChromePlus(?:\/([0-9.]*))?$/', 'details' => 3, 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Cunaguaro',            'regexp' => '/Cunaguaro\/([0-9.]*)/', 'details' => 3, 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Daedalus',             'regexp' => '/Daedalus ([0-9.]*)/', 'details' => 2),
        array('name' => 'Demobrowser',          'regexp' => '/demobrowser\/([0-9.]*)/'),
        array('name' => 'Doga Rhodonit',        'regexp' => '/DogaRhodonit/'),
        array('name' => 'Dooble',               'regexp' => '/Dooble(?:\/([0-9.]*))?/'),
        array('name' => 'Dorothy',              'regexp' => '/Dorothy$/'),
        array('name' => 'DWB',                  'regexp' => '/dwb(?:-hg)?(?:\/([0-9.]*))?/'),
        array('name' => 'GNOME Web',            'regexp' => '/Epiphany\/([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'EVM Browser',          'regexp' => '/EVMBrowser\/([0-9.]*)/'),
        array('name' => 'FireWeb',              'regexp' => '/FireWeb\/([0-9.]*)/'),
        array('name' => 'Flock',                'regexp' => '/Flock\/([0-9.]*)/', 'details' => 3, 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Galeon',               'regexp' => '/Galeon\/([0-9.]*)/', 'details' => 3),
        array('name' => 'Helium',               'regexp' => '/HeliumMobileBrowser\/([0-9.]*)/'),
        array('name' => 'Hive Explorer',        'regexp' => '/HiveE/'),
        array('name' => 'IBrowse',              'regexp' => '/IBrowse\/([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'iCab',                 'regexp' => '/iCab\/([0-9.]*)/'),
        array('name' => 'Iceape',               'regexp' => '/Iceape\/([0-9.]*)/'),
        array('name' => 'IceCat',               'regexp' => '/IceCat[ \/]([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Comodo IceDragon',     'regexp' => '/IceDragon\/([0-9.]*)/', 'details' => 2, 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Iceweasel',            'regexp' => '/Iceweasel\/([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'InternetSurfboard',    'regexp' => '/InternetSurfboard\/([0-9.]*)/'),
        array('name' => 'Iron',                 'regexp' => '/Iron\/([0-9.]*)/', 'details' => 2),
        array('name' => 'Isis',                 'regexp' => '/BrowserServer/'),
        array('name' => 'Isis',                 'regexp' => '/ISIS\/([0-9.]*)/', 'details' => 2),
        array('name' => 'Jumanji',              'regexp' => '/jumanji/'),
        array('name' => 'Kazehakase',           'regexp' => '/Kazehakase\/([0-9.]*)/'),
        array('name' => 'KChrome',              'regexp' => '/KChrome\/([0-9.]*)/', 'details' => 3),
        array('name' => 'Kiosk',                'regexp' => '/Kiosk\/([0-9.]*)/'),
        array('name' => 'K-Meleon',             'regexp' => '/K-Meleon\/([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Lbbrowser',            'regexp' => '/LBBROWSER/'),
        array('name' => 'Leechcraft',           'regexp' => '/Leechcraft(?:\/([0-9.]*))?/', 'details' => 2),
        array('name' => 'Lightning',            'regexp' => '/Lightning\/([0-9.]*)/'),
        array('name' => 'Lobo',                 'regexp' => '/Lobo\/([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Lotus Expeditor',      'regexp' => '/Gecko Expeditor ([0-9.]*)/', 'details' => 3),
        array('name' => 'Lunascape',            'regexp' => '/Lunascape[\/| ]([0-9.]*)/', 'details' => 3),
        array('name' => 'Lynx',                 'regexp' => '/Lynx\/([0-9.]*)/'),
        array('name' => 'iLunascape',           'regexp' => '/iLunascape\/([0-9.]*)/', 'details' => 3),
        array('name' => 'Intermec Browser',     'regexp' => '/Intermec\/([0-9.]*)/', 'details' => 2),
        array('name' => 'MaCross Mobile',       'regexp' => '/MaCross\/([0-9.]*)/'),
        array('name' => 'Mammoth',              'regexp' => '/Mammoth\/([0-9.]*)/'),                                        // see: https://itunes.apple.com/cn/app/meng-ma-liu-lan-qi/id403760998?mt=8
        array('name' => 'Mercury Browser',      'regexp' => '/Mercury\/([0-9.]*)/'),
        array('name' => 'MixShark',             'regexp' => '/MixShark\/([0-9.]*)/'),
        array('name' => 'mlbrowser',            'regexp' => '/mlbrowser/'),
        array('name' => 'Motorola WebKit',      'regexp' => '/MotorolaWebKit(?:\/([0-9.]*))?/', 'details' => 3),
        array('name' => 'NetFront LifeBrowser', 'regexp' => '/NetFrontLifeBrowser\/([0-9.]*)/'),
        array('name' => 'NetPositive',          'regexp' => '/NetPositive\/([0-9.]*)/'),
        array('name' => 'Netscape Navigator',   'regexp' => '/Navigator\/([0-9.]*)/', 'details' => 3),
        array('name' => 'Odyssey',              'regexp' => '/OWB\/([0-9.]*)/'),
        array('name' => 'OmniWeb',              'regexp' => '/OmniWeb/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'OneBrowser',           'regexp' => '/OneBrowser\/([0-9.]*)/'),
        array('name' => 'Openwave',             'regexp' => '/Openwave\/([0-9.]*)/', 'details' => 2),
        array('name' => 'Orca',                 'regexp' => '/Orca\/([0-9.]*)/'),
        array('name' => 'Origyn',               'regexp' => '/Origyn Web Browser/'),
        array('name' => 'Otter',                'regexp' => '/Otter Browser\/([0-9.]*)/'),
        array('name' => 'Palemoon',             'regexp' => '/Pale[mM]oon\/([0-9.]*)/'),
        array('name' => 'Phantom',              'regexp' => '/Phantom\/V([0-9.]*)/'),
        array('name' => 'Polaris',              'regexp' => '/Polaris[\/ ]v?([0-9.]*)/i', 'details' => 2),
        array('name' => 'Qihoo 360',            'regexp' => '/QIHU THEWORLD/'),
        array('name' => 'QtCreator',            'regexp' => '/QtCreator\/([0-9.]*)/'),
        array('name' => 'QtQmlViewer',          'regexp' => '/QtQmlViewer/'),
        array('name' => 'QtTestBrowser',        'regexp' => '/QtTestBrowser\/([0-9.]*)/'),
        array('name' => 'QtWeb',                'regexp' => '/QtWeb Internet Browser\/([0-9.]*)/'),
        array('name' => 'QupZilla',             'regexp' => '/QupZilla\/([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Ryouko',               'regexp' => '/Ryouko\/([0-9.]*)/', 'type' => Device::TYPE_DESKTOP),                     // see: https://github.com/foxhead128/ryouko
        array('name' => 'Roccat',               'regexp' => '/Roccat\/([0-9]\.[0-9.]*)/'),
        array('name' => 'Raven for Mac',        'regexp' => '/Raven for Mac\/([0-9.]*)/'),
        array('name' => 'rekonq',               'regexp' => '/rekonq(?:\/([0-9.]*))?/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'RockMelt',             'regexp' => '/RockMelt\/([0-9.]*)/', 'details' => 2),
        array('name' => 'SaaYaa Explorer',      'regexp' => '/SaaYaa/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Sleipnir',             'regexp' => '/Sleipnir\/([0-9.]*)/', 'details' => 3),
        array('name' => 'SlimBoat',             'regexp' => '/SlimBoat\/([0-9.]*)/'),
        array('name' => 'SMBrowser',            'regexp' => '/SMBrowser/'),
        array('name' => 'Sogou Explorer',       'regexp' => '/SE 2.X MetaSr/', 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Sogou Mobile',         'regexp' => '/SogouMobileBrowser\/([0-9.]*)/', 'details' => 2),
        array('name' => 'Snowshoe',             'regexp' => '/Snowshoe\/([0-9.]*)/', 'details' => 2),
        array('name' => 'Sputnik',              'regexp' => '/Sputnik\/([0-9.]*)/i', 'details' => 3),
        array('name' => 'Stainless',            'regexp' => '/Stainless\/([0-9.]*)/'),
        array('name' => 'SunChrome',            'regexp' => '/SunChrome\/([0-9.]*)/'),
        array('name' => 'Surf',                 'regexp' => '/Surf\/([0-9.]*)/'),
        array('name' => 'The World',            'regexp' => '/TheWorld ([0-9.]*)/'),
        array('name' => 'TaoBrowser',           'regexp' => '/TaoBrowser\/([0-9.]*)/', 'details' => 2),
        array('name' => 'TaomeeBrowser',        'regexp' => '/TaomeeBrowser\/([0-9.]*)/', 'details' => 2),
        array('name' => 'TazWeb',               'regexp' => '/TazWeb/'),
        array('name' => 'Tencent Traveler',     'regexp' => '/TencentTraveler ([0-9.]*)/', 'details' => 2),
        array('name' => 'UP.Browser',           'regexp' => '/UP\.Browser\/([a-z0-9.]*)/', 'details' => 2),
        array('name' => 'Uzbl',                 'regexp' => '/^Uzbl/'),
        array('name' => 'Viera',                'regexp' => '/Viera\/([0-9.]*)/'),
        array('name' => 'Villanova',            'regexp' => '/Villanova\/([0-9.]*)/', 'details' => 3),
        array('name' => 'Waterfox',             'regexp' => '/Waterfox\/([0-9.]*)/', 'details' => 2, 'type' => Device::TYPE_DESKTOP),
        array('name' => 'Wavelink Velocity',    'regexp' => '/Wavelink Velocity Browser\/([0-9.]*)/', 'details' => 2),
        array('name' => 'WebLite',              'regexp' => '/WebLite\/([0-9.]*)/', 'type' => Device::TYPE_MOBILE),
        array('name' => 'WebPositive',          'regexp' => '/WebPositive/'),
        array('name' => 'WebRender',            'regexp' => '/WebRender/'),
        array('name' => 'Webster',              'regexp' => '/Webster ([0-9.]*)/'),
        array('name' => 'Wyzo',                 'regexp' => '/Wyzo\/([0-9.]*)/', 'details' => 3),
        array('name' => 'Miui Browser',         'regexp' => '/XiaoMi\/MiuiBrowser\/([0-9.]*)/'),
        array('name' => 'Yandex Browser',       'regexp' => '/YaBrowser\/([0-9.]*)/', 'details' => 2),
        array('name' => 'Yelang',               'regexp' => '/Yelang\/([0-9.]*)/', 'details' => 3),                         // see: wellgo.org
        array('name' => 'YRC Weblink',          'regexp' => '/YRCWeblink\/([0-9.]*)/'),
        array('name' => 'Zetakey',              'regexp' => '/Zetakey Webkit\/([0-9.]*)/'),
        array('name' => 'Zetakey',              'regexp' => '/Zetakey\/([0-9.]*)/'),

        array('name' => 'Nimbus',               'regexp' => '/Nimbus\/([0-9.]*)/'),

        array('name' => 'McAfee Web Gateway',   'regexp' => '/Webwasher\/([0-9.]*)/'),

        array('name' => 'Open Sankoré',         'regexp' => '/Open-Sankore\/([0-9.]*)/', 'type' => Device::TYPE_WHITEBOARD),
        array('name' => 'Coship MMCP',          'regexp' => '/Coship_MMCP_([0-9.]*)/', 'type' => Device::TYPE_SIGNAGE),

        array('name' => '80legs',               'regexp' => '/008\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Ask Jeeves',           'regexp' => '/Ask Jeeves\/Teoma/', 'type' => Device::TYPE_BOT),
        array('name' => 'Baiduspider',          'regexp' => '/Baiduspider[\+ ]\([\+ ]/', 'type' => Device::TYPE_BOT),
        array('name' => 'Baiduspider',          'regexp' => '/Baiduspider\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Bing',                 'regexp' => '/bingbot\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Bing',                 'regexp' => '/msnbot\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Bing Preview',         'regexp' => '/BingPreview\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Bloglines',            'regexp' => '/Bloglines\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Googlebot',            'regexp' => '/Google[Bb]ot\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Google App Engine',    'regexp' => '/AppEngine-Google/', 'type' => Device::TYPE_BOT),
        array('name' => 'Google Web Preview',   'regexp' => '/Google Web Preview/', 'type' => Device::TYPE_BOT),
        array('name' => 'Google Page Speed',    'regexp' => '/Google Page Speed Insights/', 'type' => Device::TYPE_BOT),
        array('name' => 'Google Feed Fetcher',  'regexp' => '/FeedFetcher-Google/', 'type' => Device::TYPE_BOT),
        array('name' => 'Google Font Analysis', 'regexp' => '/Google-FontAnalysis\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Grub',                 'regexp' => '/grub-client-([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'HeartRails Capture',   'regexp' => '/HeartRails_Capture\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'CiteSeerX',            'regexp' => '/heritrix\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Sogou Web Spider',     'regexp' => '/Sogou web spider\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Yahoo Slurp',          'regexp' => '/Yahoo\! Slurp\/([0-9.]*)/', 'type' => Device::TYPE_BOT),
        array('name' => 'Wget',                 'regexp' => '/Wget\/([0-9.]*)/', 'type' => Device::TYPE_BOT)
    );

    private $osAndDeviceAnalyzed = false;
    private $browserAnalyzed = false;

    function __construct($options) {
      $this->options = (object) $options;
      $this->headers = array();
      if (isset($this->options->headers)) $this->headers = $this->options->headers;

      $this->browser = (object) array('stock' => true, 'hidden' => false, 'channel' => '', 'mode' => '');
      $this->engine = (object) array();
      $this->os = (object) array();
      $this->device = new Device;

      $this->camouflage = false;
      $this->features = array();

      // $this->analyseUserAgent($this->hasHeader('User-Agent') ? $this->getHeader('User-Agent') : '');

      // if ($this->hasHeader('X-Original-User-Agent')) $this->analyseAlternativeUserAgent($this->getHeader('X-Original-User-Agent'));
      // if ($this->hasHeader('X-Device-User-Agent')) $this->analyseAlternativeUserAgent($this->getHeader('X-Device-User-Agent'));
      // if ($this->hasHeader('Device-Stock-UA')) $this->analyseAlternativeUserAgent($this->getHeader('Device-Stock-UA'));
      // if ($this->hasHeader('X-OperaMini-Phone-UA')) $this->analyseAlternativeUserAgent($this->getHeader('X-OperaMini-Phone-UA'));
      // if ($this->hasHeader('X-UCBrowser-Device-UA')) $this->analyseAlternativeUserAgent($this->getHeader('X-UCBrowser-Device-UA'));

      // if ($this->hasHeader('X-UCBrowser-Phone-UA')) $this->analyseOldUCUserAgent($this->getHeader('X-UCBrowser-Phone-UA'));
      // if ($this->hasHeader('X-UCBrowser-UA')) $this->analyseNewUCUserAgent($this->getHeader('X-UCBrowser-UA'));
      // if ($this->hasHeader('X-Puffin-UA')) $this->analysePuffinUserAgent($this->getHeader('X-Puffin-UA'));
      // if ($this->hasHeader('Baidu-FlyFlow')) $this->analyseBaiduHeader($this->getHeader('Baidu-FlyFlow'));
      // if ($this->hasHeader('X-Requested-With')) $this->analyseBrowserId($this->getHeader('X-Requested-With'));
      // if ($this->hasHeader('X-Wap-Profile')) $this->analyseWapProfile($this->getHeader('X-Wap-Profile'));

      // $this->detectCamouflage();
    }

    public function deviceType()
    {
        if (!$this->osAndDeviceAnalyzed)
        {
            $this->detectOSAndDevice($this->getHeader('User-Agent'));
        }

        return $this->device->getType();
    }

    public function deviceManufacturer()
    {
        if (!$this->osAndDeviceAnalyzed)
        {
            $this->detectOSAndDevice($this->getHeader('User-Agent'));
        }

        return $this->device->getManufacturer();
    }

    protected function detectOSAndDevice($ua)
    {
        $this->osAndDeviceAnalyzed = true;

        /****************************************************
         *      Unix
         */

        if (preg_match('/Unix/', $ua)) {
            $this->os->name = 'Unix';
        }

        /****************************************************
         *      FreeBSD
         */

        else if (preg_match('/FreeBSD/', $ua)) {
            $this->os->name = 'FreeBSD';
        }

        /****************************************************
         *      OpenBSD
         */

        else if (preg_match('/OpenBSD/', $ua)) {
            $this->os->name = 'OpenBSD';
        }

        /****************************************************
         *      NetBSD
         */

        else if (preg_match('/NetBSD/', $ua)) {
            $this->os->name = 'NetBSD';
        }


        /****************************************************
         *      Solaris
         */

        else if (preg_match('/SunOS/', $ua)) {
            $this->os->name = 'Solaris';
        }


        /****************************************************
         *      IRIX
         */

        else if (preg_match('/IRIX/', $ua)) {
            $this->os->name = 'IRIX';

            if (preg_match('/IRIX ([0-9.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if (preg_match('/IRIX;(?:64|32) ([0-9.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }
        }


        /****************************************************
         *      Syllable
         */

        else if (preg_match('/Syllable/', $ua)) {
            $this->os->name = 'Syllable';
        }


        /****************************************************
         *      Linux
         */

        else if (preg_match('/Linux/', $ua)) {
            $this->os->name = 'Linux';
            $this->device->setType(Device::TYPE_DESKTOP);

            if (preg_match('/CentOS/', $ua)) {
                $this->os->name = 'CentOS';
                if (preg_match('/CentOS\/[0-9\.\-]+el([0-9_]+)/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => str_replace('_', '.', $match[1])));
                }
            }

            else if (preg_match('/Debian/', $ua)) {
                $this->os->name = 'Debian';
            }

            else if (preg_match('/Fedora/', $ua)) {
                $this->os->name = 'Fedora';
                if (preg_match('/Fedora\/[0-9\.\-]+fc([0-9]+)/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => str_replace('_', '.', $match[1])));
                }
            }

            else if (preg_match('/Gentoo/', $ua)) {
                $this->os->name = 'Gentoo';
            }

            else if (preg_match('/gNewSense/', $ua)) {
                $this->os->name = 'gNewSense';
                if (preg_match('/gNewSense\/[^\(]+\(([0-9\.]+)/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => $match[1]));
                }
            }

            else if (preg_match('/Kubuntu/', $ua)) {
                $this->os->name = 'Kubuntu';
            }

            else if (preg_match('/Mandriva Linux/', $ua)) {
                $this->os->name = 'Mandriva';
                if (preg_match('/Mandriva Linux\/[0-9\.\-]+mdv([0-9]+)/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => $match[1]));
                }
            }

            else if (preg_match('/Mageia/', $ua)) {
                $this->os->name = 'Mageia';
                if (preg_match('/Mageia\/[0-9\.\-]+mga([0-9]+)/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => $match[1]));
                }
            }

            else if (preg_match('/Mandriva/', $ua)) {
                $this->os->name = 'Mandriva';
                if (preg_match('/Mandriva\/[0-9\.\-]+mdv([0-9]+)/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => $match[1]));
                }
            }

            else if (preg_match('/Red Hat/', $ua)) {
                $this->os->name = 'Red Hat';
                if (preg_match('/Red Hat[^\/]*\/[0-9\.\-]+el([0-9_]+)/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => str_replace('_', '.', $match[1])));
                }

            }

            else if (preg_match('/Slackware/', $ua)) {
                $this->os->name = 'Slackware';
            }

            else if (preg_match('/SUSE/', $ua)) {
                $this->os->name = 'SUSE';
            }

            else if (preg_match('/Turbolinux/', $ua)) {
                $this->os->name = 'Turbolinux';
            }

            else if (preg_match('/Ubuntu/', $ua)) {
                $this->os->name = 'Ubuntu';
                if (preg_match('/Ubuntu\/([0-9.]*)/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => $match[1]));
                }
            }
        }

        else if (preg_match('/\(Ubuntu; (Mobile|Tablet)/', $ua)) {
            $this->os->name = 'Ubuntu Touch';

            if (preg_match('/\(Ubuntu; Mobile/', $ua)) $this->device->setType(Device::TYPE_MOBILE);
            if (preg_match('/\(Ubuntu; Tablet/', $ua)) $this->device->setType(Device::TYPE_TABLET);
        }




        /****************************************************
         *      iOS
         */

        else if (preg_match('/iPhone/', $ua) || preg_match('/iPad/', $ua) || preg_match('/iPod/', $ua)) {
            $this->os->name = 'iOS';
            $this->os->version = new OptimizedVersion(array('value' => '1.0'));

            if (preg_match('/OS (.*) like Mac OS X/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => str_replace('_', '.', $match[1])));
            }

            if (preg_match('/iPhone Simulator;/', $ua)) {
                $this->device->setType(Device::TYPE_EMULATOR);
            }

            else {
                if (preg_match('/(iPad|iPhone( 3GS| 3G| 4S| 4| 5)?|iPod( touch)?)/', $ua, $match)) {
                    $device = OptimizedDeviceModels::identify('ios', $match[0]);

                    if ($device) {
                        $this->device = $device;
                    }
                }

                else if (preg_match('/(iPad|iPhone|iPod)[0-9],[0-9]/', $ua, $match)) {
                    $device = OptimizedDeviceModels::identify('ios', $match[0]);

                    if ($device) {
                        $this->device = $device;
                    }
                }
            }
        }


        /****************************************************
         *      OS X
         */

        else if (preg_match('/Mac OS X/', $ua)) {
            $this->os->name = 'Mac OS X';
            $this->device->setType(Device::TYPE_DESKTOP);

            if (preg_match('/Mac OS X (10[0-9\._]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => str_replace('_', '.', $match[1])));
            }
        }


        /****************************************************
         *      Windows
         */

        else if (preg_match('/Windows/', $ua)) {
            $this->os->name = 'Windows';
            $this->device->setType(Device::TYPE_DESKTOP);

            if (preg_match('/Windows NT ([0-9]\.[0-9])/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));

                switch($match[1]) {
                    case '6.3':     if (preg_match('/; ARM;/', $ua))
                                        $this->os->version = new OptimizedVersion(array('value' => $match[1], 'alias' => 'RT 8.1'));
                                    else
                                        $this->os->version = new OptimizedVersion(array('value' => $match[1], 'alias' => '8.1'));
                                    break;

                    case '6.2':     if (preg_match('/; ARM;/', $ua))
                                        $this->os->version = new OptimizedVersion(array('value' => $match[1], 'alias' => 'RT'));
                                    else
                                        $this->os->version = new OptimizedVersion(array('value' => $match[1], 'alias' => '8'));
                                    break;

                    case '6.1':     $this->os->version = new OptimizedVersion(array('value' => $match[1], 'alias' => '7')); break;
                    case '6.0':     $this->os->version = new OptimizedVersion(array('value' => $match[1], 'alias' => 'Vista')); break;
                    case '5.2':     $this->os->version = new OptimizedVersion(array('value' => $match[1], 'alias' => 'Server 2003')); break;
                    case '5.1':     $this->os->version = new OptimizedVersion(array('value' => $match[1], 'alias' => 'XP')); break;
                    case '5.0':     $this->os->version = new OptimizedVersion(array('value' => $match[1], 'alias' => '2000')); break;
                    default:        $this->os->version = new OptimizedVersion(array('value' => $match[1], 'alias' => 'NT ' . $match[1])); break;
                }
            }

            if (preg_match('/Windows 95/', $ua) || preg_match('/Win95/', $ua) || preg_match('/Win 9x 4.00/', $ua)) {
                $this->os->version = new OptimizedVersion(array('value' => '4.0', 'alias' => '95'));
            }

            else if (preg_match('/Windows 98/', $ua) || preg_match('/Win98/', $ua) || preg_match('/Win 9x 4.10/', $ua)) {
                $this->os->version = new OptimizedVersion(array('value' => '4.1', 'alias' => '98'));
            }

            else if (preg_match('/Windows ME/', $ua) || preg_match('/WinME/', $ua) || preg_match('/Win 9x 4.90/', $ua)) {
                $this->os->version = new OptimizedVersion(array('value' => '4.9', 'alias' => 'ME'));
            }

            else if (preg_match('/Windows XP/', $ua) || preg_match('/WinXP/', $ua)) {
                $this->os->version = new OptimizedVersion(array('value' => '5.1', 'alias' => 'XP'));
            }

            else if (preg_match('/WPDesktop/', $ua)) {
                $this->os->name = 'Windows Phone';
                $this->os->version = new OptimizedVersion(array('value' => '8', 'details' => 1));
                $this->device->setType(Device::TYPE_MOBILE);
            }

            else if (preg_match('/WP7/', $ua)) {
                $this->os->name = 'Windows Phone';
                $this->os->version = new OptimizedVersion(array('value' => '7', 'details' => 1));
                $this->device->setType(Device::TYPE_MOBILE);
                $this->browser->mode = 'desktop';
            }

            else if (preg_match('/Windows CE/', $ua) || preg_match('/WinCE/', $ua) || preg_match('/WindowsCE/', $ua)) {
                if (preg_match('/ IEMobile/', $ua)) {
                    $this->os->name = 'Windows Mobile';

                    if (preg_match('/ IEMobile 8/', $ua)) {
                        $this->os->version = new OptimizedVersion(array('value' => '6.5', 'details' => 2));
                    }

                    else if (preg_match('/ IEMobile 7/', $ua)) {
                        $this->os->version = new OptimizedVersion(array('value' => '6.1', 'details' => 2));
                    }

                    else if (preg_match('/ IEMobile 6/', $ua)) {
                        $this->os->version = new OptimizedVersion(array('value' => '6.0', 'details' => 2));
                    }
                }
                else {
                    $this->os->name = 'Windows CE';

                    if (preg_match('/WindowsCEOS\/([0-9.]*)/', $ua, $match)) {
                        $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
                    }

                    else if (preg_match('/Windows CE ([0-9.]*)/', $ua, $match)) {
                        $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
                    }
                }

                $this->device->setType(Device::TYPE_MOBILE);
            }

            else if (preg_match('/Windows ?Mobile/', $ua)) {
                $this->os->name = 'Windows Mobile';
                $this->device->setType(Device::TYPE_MOBILE);
            }

            else if (preg_match('/WindowsMobile\/([0-9.]*)/', $ua, $match)) {
                $this->os->name = 'Windows Mobile';
                $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
                $this->device->setType(Device::TYPE_MOBILE);
            }

            else if (preg_match('/Windows Phone/', $ua)) {
                $this->os->name = 'Windows Phone';
                $this->device->setType(Device::TYPE_MOBILE);

                if (preg_match('/Windows Phone (?:OS )?([0-9.]*)/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));

                    if (intval($match[1]) < 7) {
                        $this->os->name = 'Windows Mobile';
                    }
                }

                else if (preg_match('/IEMobile\/[^;]+;(?: ARM; Touch; )?\s*([^;\s][^;]*);\s*([^;\)\s][^;\)]*)[;|\)]/', $ua, $match)) {
                    $this->device->setManufacturer($match[1]);
                    $this->device->setModel($match[2]);
                    $this->device->setIdentified(Device::ID_PATTERN, '|');

                    $device = OptimizedDeviceModels::identify('wp', $match[2]);
                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->device = $device;
                    }
                }

                else if (preg_match('/WPDesktop; \s*([^;\s][^;]*);\s*([^;\)\s][^;\)]*)[;|\)]/', $ua, $match)) {
                    $this->device->setManufacturer($match[1]);
                    $this->device->setModel($match[2]);
                    $this->device->setIdentified(Device::ID_PATTERN, '|');

                    $device = OptimizedDeviceModels::identify('wp', $match[2]);
                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->device = $device;
                    }
                }

                if ($this->device->getManufacturer() != '' && $this->device->getModel() != '') {
                    if ($this->device->getManufacturer() == 'ARM' && $this->device->getModel() == 'Touch') {
                        $this->device->setManufacturer(null);
                        $this->device->setModel(null);
                        $this->device->setIdentified(Device::ID_NONE);
                    }

                    else if ($this->device->getManufacturer() == 'Microsoft' && $this->device->getModel() == 'XDeviceEmulator') {
                        $this->device->setManufacturer(null);
                        $this->device->setModel(null);
                        $this->device->setType(Device::TYPE_EMULATOR);
                        $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                    }
                }
            }
        }



        /****************************************************
         *      Android
         */

        else if (preg_match('/Android/', $ua)) {
            if (preg_match('/Android v(1.[0-9][0-9])_[0-9][0-9].[0-9][0-9]-/', $ua, $match)) {
                $this->os->name = 'Aliyun OS';
                $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            }

            else if (preg_match('/Android (1.[0-9].[0-9].[0-9]+)-R?T/', $ua, $match)) {
                $this->os->name = 'Aliyun OS';
                $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            }

            else if (preg_match('/Android ([12].[0-9].[0-9]+)-R-20[0-9]+/', $ua, $match)) {
                $this->os->name = 'Aliyun OS';
                $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            }

            else if (preg_match('/Android 20[0-9]+/', $ua, $match)) {
                $this->os->name = 'Aliyun OS';
                $this->os->version = null;
            }

            else {
                $this->os->name = 'Android';
                $this->os->version = new OptimizedVersion();

                if (preg_match('/Android(?: )?(?:AllPhone_|CyanogenMod_|OUYA )?(?:\/)?v?([0-9.]+)/', str_replace('-update', ',', $ua), $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
                }

                else if (preg_match('/Android [0-9][0-9].[0-9][0-9].[0-9][0-9]\(([^)]+)\);/', str_replace('-update', ',', $ua), $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
                }

                else if (preg_match('/Android Eclair/', $ua)) {
                    $this->os->version = new OptimizedVersion(array('value' => '2.0', 'details' => 3));
                }

                else if (preg_match('/Android KeyLimePie/', $ua)) {
                    $this->os->version = new OptimizedVersion(array('value' => '4.4', 'details' => 3));
                }

                $this->device->setType(Device::TYPE_MOBILE);
                if ($this->os->version->toFloat() >= 3) $this->device->setType(Device::TYPE_TABLET);
                if ($this->os->version->toFloat() >= 4 && preg_match('/Mobile/', $ua)) $this->device->setType(Device::TYPE_MOBILE);


                if (preg_match('/Eclair; (?:[a-zA-Z][a-zA-Z](?:[-_][a-zA-Z][a-zA-Z])?) Build\/([^\/]*)\//', $ua, $match)) {
                    $this->device->setModel($match[1]);
                }

                else if (preg_match('/; ?([^;]*[^;\s])\s+Build/', $ua, $match)) {
                    $this->device->setModel($match[1]);
                }

                else if (preg_match('/[a-zA-Z][a-zA-Z](?:[-_][a-zA-Z][a-zA-Z])?; ([^;]*[^;\s]);\s+Build/', $ua, $match)) {
                    $this->device->setModel($match[1]);
                }

                else if (preg_match('/\(([^;]+);U;Android\/[^;]+;[0-9]+\*[0-9]+;CTC\/2.0\)/', $ua, $match)) {
                    $this->device->setModel($match[1]);
                }

                else if (preg_match('/;\s?([^;]+);\s?[0-9]+\*[0-9]+;\s?CTC\/2.0/', $ua, $match)) {
                    $this->device->setModel($match[1]);
                }

                else if (preg_match('/Android [^;]+; (?:[a-zA-Z][a-zA-Z](?:[-_][a-zA-Z][a-zA-Z])?; )?([^)]+)\)/', $ua, $match)) {
                    if (!preg_match('/[a-zA-Z][a-zA-Z](?:[-_][a-zA-Z][a-zA-Z])?/', $ua)) {
                        $this->device->setModel($match[1]);
                    }
                }

                /* Sometimes we get a model name that starts with Android, in that case it is a mismatch and we should ignore it */
                if ($this->device->getModel() != '' && substr($this->device->getModel(), 0, 7) == 'Android') {
                    $this->device->setModel(null);
                }

                if ($this->device->getModel() != '') {
                    $this->device->setIdentified(Device::ID_PATTERN, '|');

                    $device = OptimizedDeviceModels::identify('android', $this->device->getModel());
                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->device = $device;
                    }
                }

                if (preg_match('/HP eStation/', $ua)) {
                    $this->device->setManufacturer('HP');
                    $this->device->setModel('eStation');
                    $this->device->setType(Device::TYPE_TABLET);
                    $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                }
                else if (preg_match('/Pre\/1.0/', $ua)) {
                    $this->device->setManufacturer('Palm');
                    $this->device->setModel('Pre');
                    $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                }
                else if (preg_match('/Pre\/1.1/', $ua)) {
                    $this->device->setManufacturer('Palm');
                    $this->device->setModel('Pre Plus');
                    $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                }
                else if (preg_match('/Pre\/1.2/', $ua)) {
                    $this->device->setManufacturer('Palm');
                    $this->device->setModel('Pre 2');
                    $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                }
                else if (preg_match('/Pre\/3.0/', $ua)) {
                    $this->device->setManufacturer('HP');
                    $this->device->setModel('Pre 3');
                    $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                }
                else if (preg_match('/Pixi\/1.0/', $ua)) {
                    $this->device->setManufacturer('Palm');
                    $this->device->setModel('Pixi');
                    $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                }
                else if (preg_match('/Pixi\/1.1/', $ua)) {
                    $this->device->setManufacturer('Palm');
                    $this->device->setModel('Pixi Plus');
                    $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                }
                else if (preg_match('/P160UN?A?\/1.0/', $ua)) {
                    $this->device->setManufacturer('HP');
                    $this->device->setModel('Veer');
                    $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                }
            }

        }



        /****************************************************
         *      Aliyun OS
         */

        else if (preg_match('/Aliyun/', $ua) || preg_match('/YunOs/i', $ua)) {
            $this->os->name = 'Aliyun OS';
            $this->os->version = new OptimizedVersion();
            $this->device->setType(Device::TYPE_MOBILE);

            if (preg_match('/YunOs[ \/]([0-9.]+)/i', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            }

            else if (preg_match('/AliyunOS ([0-9.]+)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            }


            if (preg_match('/; ([^;]*[^;\s])\s+Build/', $ua, $match)) {
                $this->device->setModel($match[1]);
            }

            if ($this->device->getModel()) {
                $this->device->setIdentified(Device::ID_PATTERN, '|');

                $device = OptimizedDeviceModels::identify('android', $this->device->getModel());
                if ($device->identified) {
                    $this->device->setIdentified($this->device->getIdentified(), '|');
                    $this->device = $device;
                }
            }
        }



        /****************************************************
         *      Baidu Yi
         */

        else if (preg_match('/Baidu Yi/', $ua)) {
            $this->os->name = 'Baidu Yi';
            $this->os->version = null;
        }




        /****************************************************
         *      Google TV
         */

        else if (preg_match('/GoogleTV/', $ua)) {
            $this->os->name = 'Google TV';

            /*
            if (preg_match('/Chrome\/5./', $ua)) {
                $this->os->version = new OptimizedVersion(array('value' => '1'));
            }

            if (preg_match('/Chrome\/11./', $ua)) {
                $this->os->version = new OptimizedVersion(array('value' => '2'));
            }
            */

            $this->device->setType(Device::TYPE_TELEVISION);

            if (preg_match('/GoogleTV [0-9\.]+; ?([^;]*[^;\s])\s+Build/', $ua, $match)) {
                $this->device->setModel($match[1]);
            }

            if ($this->device->getModel() != '') {
                $this->device->setIdentified(Device::ID_PATTERN, '|');

                $device = OptimizedDeviceModels::identify('android', $this->device->getModel());
                if ($device->identified) {
                    $this->device->setIdentified($this->device->getIdentified(), '|');
                    $this->device = $device;
                }
            }
        }


        /****************************************************
         *      Chromecast
         */

        else if (preg_match('/CrKey/', $ua)) {
            $this->device->setManufacturer('Google');
            $this->device->setModel('Chromecast');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }


        /****************************************************
         *      WoPhone
         */

        else if (preg_match('/WoPhone/', $ua)) {
            $this->os->name = 'WoPhone';
            $this->device->setType(Device::TYPE_MOBILE);

            if (preg_match('/WoPhone\/([0-9\.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }
        }

        /****************************************************
         *      BlackBerry
         */

        else if (preg_match('/BlackBerry/', $ua) && !preg_match('/BlackBerry Runtime for Android Apps/', $ua)) {
            $this->os->name = 'BlackBerry OS';

            $this->device->setModel('BlackBerry');
            $this->device->setManufacturer('RIM');
            $this->device->setType(Device::TYPE_MOBILE);
            $this->device->setIdentified(Device::ID_NONE);

            if (!preg_match('/Opera/', $ua)) {
                if (preg_match('/BlackBerry([0-9]*)\/([0-9.]*)/', $ua, $match)) {
                    $this->device->setModel($match[1]);
                    $this->os->version = new OptimizedVersion(array('value' => $match[2], 'details' => 2));
                }

                if (preg_match('/; BlackBerry ([0-9]*);/', $ua, $match)) {
                    $this->device->setModel($match[1]);
                }

                else if (preg_match('/; ([0-9]+)[^;\)]+\)/', $ua, $match)) {
                    $this->device->setModel($match[1]);
                }

                if (preg_match('/Version\/([0-9.]*)/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
                }

                if ($this->os->version->toFloat() >= 10) {
                    $this->os->name = 'BlackBerry';
                }

                if ($this->device->getModel()) {
                    $device = OptimizedDeviceModels::identify('blackberry', $this->device->getModel());

                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->device = $device;
                    }
                }
            }
        }

        else if (preg_match('/\(BB(1[^;]+); ([^\)]+)\)/', $ua, $match)) {
            $this->os->name = 'BlackBerry';
            $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));

            $this->device->setManufacturer('BlackBerry');
            $this->device->setModel($match[2]);

            if ($this->device->getModel() == 'Kbd') {
                $this->device->setModel('Q series');
            }

            else if ($this->device->getModel() == 'Touch') {
                $this->device->setModel('A or Z series');
            }

            $this->device->setType(preg_match('/Mobile/', $ua) ? Device::TYPE_MOBILE : Device::TYPE_TABLET);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');

            if (preg_match('/Version\/([0-9.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
            }
        }

        /****************************************************
         *      BlackBerry PlayBook
         */

        else if (preg_match('/RIM Tablet OS ([0-9.]*)/', $ua, $match)) {
            $this->os->name = 'BlackBerry Tablet OS';
            $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));

            $this->device->setManufacturer('RIM');
            $this->device->setModel('BlackBerry PlayBook');
            $this->device->setType(Device::TYPE_TABLET);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        else if (preg_match('/\(PlayBook;/', $ua) && preg_match('/PlayBook Build\/([0-9.]*)/', $ua, $match)) {
            $this->os->name = 'BlackBerry Tablet OS';
            $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));

            $this->device->setManufacturer('RIM');
            $this->device->setModel('BlackBerry PlayBook');
            $this->device->setType(Device::TYPE_TABLET);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        else if (preg_match('/PlayBook/', $ua) && !preg_match('/Android/', $ua)) {
            if (preg_match('/Version\/([0-9.]*)/', $ua, $match)) {
                $this->os->name = 'BlackBerry Tablet OS';
                $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));

                $this->device->setManufacturer('RIM');
                $this->device->setModel('BlackBerry PlayBook');
                $this->device->setType(Device::TYPE_TABLET);
                $this->device->setIdentified(Device::ID_MATCH_UA, '|');
            }
        }


        /****************************************************
         *      WebOS
         */

        else if (preg_match('/(?:web|hpw)OS\/(?:HP webOS )?([0-9.]*)/', $ua, $match)) {
            $this->os->name = 'webOS';
            $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
            $this->device->setType(preg_match('/Tablet/i', $ua) ? Device::TYPE_TABLET : Device::TYPE_MOBILE);

            if (preg_match('/Pre\/1.0/', $ua)) $this->device->setModel('Pre');
            else if (preg_match('/Pre\/1.1/', $ua)) $this->device->setModel('Pre Plus');
            else if (preg_match('/Pre\/1.2/', $ua)) $this->device->setModel('Pre 2');
            else if (preg_match('/Pre\/3.0/', $ua)) $this->device->setModel('Pre 3');
            else if (preg_match('/Pixi\/1.0/', $ua)) $this->device->setModel('Pixi');
            else if (preg_match('/Pixi\/1.1/', $ua)) $this->device->setModel('Pixi Plus');
            else if (preg_match('/P160UN?A?\/1.0/', $ua)) $this->device->setModel('Veer');
            else if (preg_match('/TouchPad\/1.0/', $ua)) $this->device->setModel('TouchPad');

            if (preg_match('/Emulator\//', $ua) || preg_match('/Desktop\//', $ua)) {
                $this->device->setType(Device::TYPE_EMULATOR);
                $this->device->setManufacturer(null);
                $this->device->setModel(null);
            }

            if ($this->device->getModel() != '') $this->device->setManufacturer(preg_match('/hpwOS/', $ua) ? 'HP' : 'Palm');

            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        else if (preg_match('/elite\/fzz/', $ua, $match)) {
            $this->os->name = 'webOS';
        }

        else if (preg_match('/Web[0O]S/', $ua) && preg_match('/Large Screen/', $ua)) {
            $this->os->name = 'webOS';
            $this->device->setType(Device::TYPE_TELEVISION);
        }


        /****************************************************
         *      S80
         */

        else if (preg_match('/Series80\/([0-9.]*)/', $ua, $match)) {
            $this->os->name = 'Series80';
            $this->os->version = new OptimizedVersion(array('value' => $match[1]));

            if (preg_match('/Nokia([^\/;\)]+)[\/|;|\)]/', $ua, $match)) {
                if ($match[1] != 'Browser') {
                    $this->device->setManufacturer('Nokia');
                    $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                    $this->device->setIdentified(Device::ID_PATTERN, '|');
                }
            }
        }


        /****************************************************
         *      S60
         */

        else if (preg_match('/Symbian/', $ua) || preg_match('/Series[ ]?60/', $ua) || preg_match('/S60;/', $ua) || preg_match('/S60V/', $ua)) {
            $this->os->name = 'Series60';
            $this->device->setType(Device::TYPE_MOBILE);

            if (preg_match('/SymbianOS\/9.1/', $ua) && !preg_match('/Series60/', $ua)) {
                $this->os->version = new OptimizedVersion(array('value' => '3.0'));
            }

            else if (preg_match('/Series60\/([0-9.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            else if (preg_match('/S60V([0-9.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if (preg_match('/Nokia([^\/;\)]+)[\/|;|\)]/', $ua, $match)) {
                if ($match[1] != 'Browser') {
                    $this->device->setManufacturer('Nokia');
                    $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                    $this->device->setIdentified(Device::ID_PATTERN, '|');
                }
            }

            else if (preg_match('/Symbian; U; (?:Nokia)?([^;]+); [a-z][a-z]\-[a-z][a-z]/', $ua, $match)) {
                $this->device->setManufacturer('Nokia');
                $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                $this->device->setIdentified(Device::ID_PATTERN, '|');
            }

            else if (preg_match('/Vertu([^\/;]+)[\/|;]/', $ua, $match)) {
                $this->device->setManufacturer('Vertu');
                $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                $this->device->setIdentified(Device::ID_PATTERN, '|');
            }

            else if (preg_match('/Samsung\/([^;]*);/', $ua, $match)) {
                $this->device->setManufacturer('Samsung');
                $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                $this->device->setIdentified(Device::ID_PATTERN, '|');
            }

            if ($this->device->getModel() != '') {
                $device = OptimizedDeviceModels::identify('s60', $this->device->getModel());
                if ($device->identified) {
                    $this->device->setIdentified($this->device->getIdentified(), '|');
                    $this->device = $device;
                }
            }
        }

        /****************************************************
         *      S40
         */

        else if (preg_match('/Series40/', $ua)) {
            $this->os->name = 'Series40';
            $this->device->setType(Device::TYPE_MOBILE);

            if (preg_match('/Nokia([^\/]+)\//', $ua, $match)) {
                $this->device->setManufacturer('Nokia');
                $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                $this->device->setIdentified(Device::ID_PATTERN, '|');
            }

            if ($this->device->getModel() != '') {
                $device = OptimizedDeviceModels::identify('s40', $this->device->getModel());
                if ($device->identified) {
                    $this->device->setIdentified($this->device->getIdentified(), '|');
                    $this->device = $device;
                }
                else
                {
                    $device = OptimizedDeviceModels::identify('asha', $this->device->getModel());
                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->os->name = 'Nokia Asha Platform';
                        $this->device = $device;
                    }
                }
            }
        }

        /****************************************************
         *      MeeGo
         */

        else if (preg_match('/MeeGo/', $ua)) {
            $this->os->name = 'MeeGo';
            $this->device->setType(Device::TYPE_MOBILE);

            if (preg_match('/Nokia([^\)]+)\)/', $ua, $match)) {
                $this->device->setManufacturer('Nokia');
                $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                $this->device->setIdentified(Device::ID_PATTERN, '|');
            }
        }

        /****************************************************
         *      Maemo
         */

        else if (preg_match('/Maemo/', $ua)) {
            $this->os->name = 'Maemo';
            $this->device->setType(Device::TYPE_MOBILE);

            if (preg_match('/(N[0-9]+)/', $ua, $match)) {
                $this->device->setManufacturer('Nokia');
                $this->device->setModel($match[1]);
                $this->device->setIdentified(Device::ID_PATTERN, '|');
            }
        }

        /****************************************************
         *      Tizen
         */

        else if (preg_match('/Tizen/', $ua)) {
            $this->os->name = 'Tizen';
            $this->device->setType(Device::TYPE_MOBILE);

            if (preg_match('/Tizen[\/ ]([0-9.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if (preg_match('/\(([^;]+); ([^\/]+)\//', $ua, $match)) {
                if ($match[1] != 'Linux' && $match[1] != 'Tizen') {
                    $this->device->setManufacturer($match[1]);
                    $this->device->setModel($match[2]);
                    $this->device->setIdentified(Device::ID_PATTERN);

                    $device = OptimizedDeviceModels::identify('tizen', $match[2]);

                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->device = $device;
                    }
                }
            }

            else if (preg_match('/\s*([^;]+);\s+([^;\)]+)\)/', $ua, $match)) {
                if ($match[1] != 'U' && substr($match[2], 0, 5) != 'Tizen') {
                    $this->device->setModel($match[2]);
                    $this->device->setIdentified(Device::ID_PATTERN);

                    $device = OptimizedDeviceModels::identify('tizen', $match[2]);

                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->device = $device;
                    }
                }
            }
        }

        /****************************************************
         *      Jolla Sailfish
         */

        else if (preg_match('/Jolla; Sailfish;/', $ua)) {
            $this->os->name = 'Sailfish';
            $this->device->setType(Device::TYPE_MOBILE);
        }

        /****************************************************
         *      Bada
         */

        else if (preg_match('/[b|B]ada/', $ua)) {
            $this->os->name = 'Bada';
            $this->device->setType(Device::TYPE_MOBILE);

            if (preg_match('/[b|B]ada[\/ ]([0-9.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
            }

            if (preg_match('/\(([^;]+); ([^\/]+)\//', $ua, $match)) {
                if ($match[1] != 'Bada') {
                    $this->device->setManufacturer($match[1]);
                    $this->device->setModel($match[2]);
                    $this->device->setIdentified(Device::ID_PATTERN);

                    $device = OptimizedDeviceModels::identify('bada', $match[2]);

                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->device = $device;
                    }
                }
            }
        }

        /****************************************************
         *      Brew
         */

        else if (preg_match('/BREW/i', $ua) || preg_match('/BMP( [0-9.]*)?; U/', $ua) || preg_match('/BMP\/([0-9.]*)/', $ua)) {
            $this->os->name = 'Brew';
            $this->device->setType(Device::TYPE_MOBILE);

            if (preg_match('/BREW; U; ([0-9.]*)/i', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            else if (preg_match('/BREW MP ([0-9.]*)/i', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            else if (preg_match('/;BREW[\/ ]([0-9.]*)/i', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            else if (preg_match('/BMP( [0-9.]*)?; U/i', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            else if (preg_match('/BMP\/([0-9.]*)/i', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if (preg_match('/\(([^;]+);U;REX\/[^;]+;BREW\/[^;]+;(?:.*;)?[0-9]+\*[0-9]+;CTC\/2.0\)/', $ua, $match)) {
                $this->device->setModel($match[1]);
                $this->device->setIdentified(Device::ID_PATTERN);

                $device = OptimizedDeviceModels::identify('brew', $match[1]);

                if ($device->identified) {
                    $this->device->setIdentified($this->device->getIdentified(), '|');
                    $this->device = $device;
                }
            }
        }

        /****************************************************
         *      MTK
         */

        else if (preg_match('/\(MTK;/', $ua)) {
            $this->os->name = 'MTK';
            $this->device->setType(Device::TYPE_MOBILE);
        }

        /****************************************************
         *      MAUI Runtime
         */

        else if (preg_match('/\(MAUI Runtime;/', $ua)) {
            $this->os->name = 'MAUI Runtime';
            $this->device->setType(Device::TYPE_MOBILE);
        }

        /****************************************************
         *      VRE
         */

        else if (preg_match('/\(VRE;/', $ua)) {
            $this->os->name = 'VRE';
            $this->device->setType(Device::TYPE_MOBILE);
        }

        /****************************************************
         *      SpreadTrum
         */

        else if (preg_match('/\(SpreadTrum;/', $ua)) {
            $this->os->name = 'SpreadTrum';
            $this->device->setType(Device::TYPE_MOBILE);
        }

        /****************************************************
         *      ThreadX
         */

        else if (preg_match('/ThreadX_OS\/([0-9.]*)/i', $ua, $match)) {
            $this->os->name = 'ThreadX';
            $this->os->version = new OptimizedVersion(array('value' => $match[1]));
        }

        /****************************************************
         *      COS
         */

        else if (preg_match('/COS like Android/i', $ua, $match)) {
            $this->os->name = 'COS';
            $this->os->version = null;
        }

        else if (preg_match('/COSBrowser\/([0-9.]*)/i', $ua, $match)) {
            $this->os->name = 'COS';
            $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
        }

        else if (preg_match('/\(Chinese Operating System ([0-9.]*);/i', $ua, $match)) {
            $this->os->name = 'COS';
            $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
        }

        else if (preg_match('/\(COS ([0-9.]*);/i', $ua, $match)) {
            $this->os->name = 'COS';
            $this->os->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
        }

        else if (preg_match('/\(COS;/i', $ua, $match)) {
            $this->os->name = 'COS';
        }


        /****************************************************
         *      CrOS
         */

        else if (preg_match('/CrOS/', $ua)) {
            $this->os->name = 'Chrome OS';
            $this->device->setType(Device::TYPE_DESKTOP);
        }

        /****************************************************
         *      Joli OS
         */

        else if (preg_match('/Joli OS\/([0-9.]*)/i', $ua, $match)) {
            $this->os->name = 'Joli OS';
            $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            $this->device->setType(Device::TYPE_DESKTOP);
        }

        /****************************************************
         *      BeOS
         */

        else if (preg_match('/BeOS/', $ua)) {
            $this->os->name = 'BeOS';
            $this->device->setType(Device::TYPE_DESKTOP);
        }

        /****************************************************
         *      Haiku
         */

        else if (preg_match('/Haiku/', $ua)) {
            $this->os->name = 'Haiku';
            $this->device->setType(Device::TYPE_DESKTOP);
        }

        /****************************************************
         *      QNX
         */

        else if (preg_match('/QNX/', $ua)) {
            $this->os->name = 'QNX';
            $this->device->setType(Device::TYPE_MOBILE);
        }

        /****************************************************
         *      OS/2 Warp
         */

        else if (preg_match('/OS\/2; (?:U; )?Warp ([0-9.]*)/i', $ua, $match)) {
            $this->os->name = 'OS/2 Warp';
            $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            $this->device->setType(Device::TYPE_DESKTOP);
        }

        /****************************************************
         *      Grid OS
         */

        else if (preg_match('/Grid OS ([0-9.]*)/i', $ua, $match)) {
            $this->os->name = 'Grid OS';
            $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            $this->device->setType(Device::TYPE_TABLET);
        }

        /****************************************************
         *      AmigaOS
         */

        else if (preg_match('/AmigaOS ([0-9.]*)/i', $ua, $match)) {
            $this->os->name = 'AmigaOS';
            $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            $this->device->setType(Device::TYPE_DESKTOP);
        }

        /****************************************************
         *      MorphOS
         */

        else if (preg_match('/MorphOS ([0-9.]*)/i', $ua, $match)) {
            $this->os->name = 'MorphOS';
            $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            $this->device->setType(Device::TYPE_DESKTOP);
        }

        /****************************************************
         *      AROS
         */

        else if (preg_match('/AROS/', $ua, $match)) {
            $this->os->name = 'AROS';
            $this->device->setType(Device::TYPE_DESKTOP);
        }

        /****************************************************
         *      Kindle
         */

        else if (preg_match('/Kindle/', $ua) && !preg_match('/Fire/', $ua)) {
            $this->os->name = '';

            $this->device->setManufacturer('Amazon');
            $this->device->setModel('Kindle');
            $this->device->setType(Device::TYPE_EREADER);

            if (preg_match('/Kindle\/2.0/', $ua)) $this->device->setModel('Kindle 2');
            else if (preg_match('/Kindle\/3.0/', $ua)) $this->device->setModel('Kindle 3 or later');

            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      NOOK
         */

        else if (preg_match('/nook browser/', $ua)) {
            $this->os->name = 'Android';

            $this->device->setManufacturer('Barnes & Noble');
            $this->device->setModel('NOOK');
            $this->device->setType(Device::TYPE_EREADER);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Bookeen
         */

        else if (preg_match('/bookeen\/cybook/', $ua)) {
            $this->os->name = '';

            $this->device->setManufacturer('Bookeen');
            $this->device->setModel('Cybook');
            $this->device->setType(Device::TYPE_EREADER);

            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Kobo Reader
         */

        else if (preg_match('/Kobo Touch/', $ua, $match)) {
            $this->os->name = '';
            $this->os->version = null;

            $this->device->setManufacturer('Kobo');
            $this->device->setModel('eReader');
            $this->device->setType(Device::TYPE_EREADER);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Sony Reader
         */

        else if (preg_match('/EBRD([0-9]+)/', $ua, $match)) {
            $this->os->name = '';


            $this->device->setManufacturer('Sony');
            $this->device->setModel('Reader');
            $this->device->setType(Device::TYPE_EREADER);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');

            switch($match[1]) {
                case '1101':    $this->device->setModel('Reader PRS-T1'); break;
                case '1102':    $this->device->setModel('Reader PRS-T1'); break;
                case '1201':    $this->device->setModel('Reader PRS-T2'); break;
                case '1301':    $this->device->setModel('Reader PRS-T3'); break;
            }
        }

        /****************************************************
         *      iRiver
         */

        else if (preg_match('/Iriver ;/', $ua)) {
            $this->os->name = '';

            $this->device->setManufacturer('iRiver');
            $this->device->setModel('Story');
            $this->device->setType(Device::TYPE_EREADER);

            if (preg_match('/EB07/', $ua)) $this->device->setModel('Story HD EB07');

            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Tesla Model S in-car browser
         */

        else if(preg_match('/QtCarBrowser/', $ua)) {
            $this->os->name = '';

            $this->device->setManufacturer('Tesla');
            $this->device->setModel('Model S');
            $this->device->setType(Device::TYPE_CAR);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }


        /****************************************************
         *      Nintendo
         *
         *      Opera/9.30 (Nintendo Wii; U; ; 3642; en)
         *      Opera/9.30 (Nintendo Wii; U; ; 2047-7; en)
         *      Opera/9.50 (Nintendo DSi; Opera/507; U; en-US)
         *      Mozilla/5.0 (Nintendo 3DS; U; ; en) Version/1.7455.US
         *      Mozilla/5.0 (Nintendo 3DS; U; ; en) Version/1.7455.EU
         *
         *      Mozilla/5.0 (Nintendo WiiU) AppleWebKit/534.52 (KHTML, like Gecko) NX/2.1.0.8.8 Version/1.0.0.6760.JP
         *      Mozilla/5.0 (Nintendo WiiU) AppleWebKit/534.53 (KHTML, like Gecko) NWF/1.2.0.USA
         *      Mozilla/5.0 (Nintendo WiiU) AppleWebKit/534.53 (KHTML, like Gecko) NWF/1.2.13993.USA
         *      Mozilla/5.0 (Nintendo WiiU) AppleWebKit/534.53 (KHTML, like Gecko) NWF/1.3.0.USA
         *      Mozilla/5.0 (Nintendo WiiU) AppleWebKit/534.52 (KHTML, like Gecko) NX/2.1.0.10.9 NintendoBrowser/1.5.0.8047.EU
         *      Mozilla/5.0 (Nintendo WiiU) AppleWebKit/536.28 (KHTML, like Gecko) NX/3.0.3.11.12 NintendoBrowser/2.0.0.9098.JP
         *      Mozilla/5.0 (Nintendo WiiU) AppleWebKit/536.28 (KHTML, like Gecko) NX/3.0.3.12.6 NintendoBrowser/2.0.0.9362.EU
         */

        else if(preg_match('/Nintendo Wii/', $ua)) {
            $this->os->name = '';

            $this->device->setManufacturer('Nintendo');
            $this->device->setModel('Wii');
            $this->device->setType(Device::TYPE_GAMING);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        else if(preg_match('/Nintendo Wii ?U/', $ua)) {
            $this->os->name = '';

            $this->device->setManufacturer('Nintendo');
            $this->device->setModel('Wii U');
            $this->device->setType(Device::TYPE_GAMING);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        else if(preg_match('/Nintendo DSi/', $ua)) {
            $this->os->name = '';

            $this->device->setManufacturer('Nintendo');
            $this->device->setModel('DSi');
            $this->device->setType(Device::TYPE_GAMING);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        else if(preg_match('/Nintendo 3DS/', $ua)) {
            $this->os->name = '';

            if(preg_match('/Version\/([0-9.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            $this->device->setManufacturer('Nintendo');
            $this->device->setModel('3DS');
            $this->device->setType(Device::TYPE_GAMING);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Sony Playstation
         *
         *      Mozilla/4.0 (PSP (PlayStation Portable); 2.00)
         *
         *      Mozilla/5.0 (PlayStation Vita 1.00) AppleWebKit/531.22.8 (KHTML, like Gecko) Silk/3.2
         *      Mozilla/5.0 (PlayStation Vita 1.50) AppleWebKit/531.22.8 (KHTML, like Gecko) Silk/3.2
         *      Mozilla/5.0 (PlayStation Vita 1.51) AppleWebKit/531.22.8 (KHTML, like Gecko) Silk/3.2
         *      Mozilla/5.0 (PlayStation Vita 1.52) AppleWebKit/531.22.8 (KHTML, like Gecko) Silk/3.2
         *      Mozilla/5.0 (PlayStation Vita 1.60) AppleWebKit/531.22.8 (KHTML, like Gecko) Silk/3.2
         *      Mozilla/5.0 (PlayStation Vita 1.61) AppleWebKit/531.22.8 (KHTML, like Gecko) Silk/3.2
         *      Mozilla/5.0 (PlayStation Vita 1.80) AppleWebKit/531.22.8 (KHTML, like Gecko) Silk/3.2
         *
         *      Mozilla/5.0 (PLAYSTATION 3; 1.00)
         *      Mozilla/5.0 (PLAYSTATION 3; 2.00)
         *      Mozilla/5.0 (PLAYSTATION 3; 3.55)
         *      Mozilla/5.0 (PLAYSTATION 3 4.11) AppleWebKit/531.22.8 (KHTML, like Gecko)
         *      Mozilla/5.0 (PLAYSTATION 3 4.10) AppleWebKit/531.22.8 (KHTML, like Gecko)
         *
         *      Mozilla/5.0 (PlayStation 3) SonyComputerEntertainmentEurope/531.3 (NCell) NuantiMeta/2.0
         */

        else if(preg_match('/PlayStation Portable/', $ua)) {
            $this->os->name = '';

            $this->device->setManufacturer('Sony');
            $this->device->setModel('Playstation Portable');
            $this->device->setType(Device::TYPE_GAMING);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        else if(preg_match('/PlayStation Vita ([0-9.]*)/', $ua, $match)) {
            $this->os->name = '';
            $this->os->version = new OptimizedVersion(array('value' => $match[1]));

            $this->device->setManufacturer('Sony');
            $this->device->setModel('Playstation Vita');
            $this->device->setType(Device::TYPE_GAMING);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');

            if (preg_match('/VTE\//', $ua, $match)) {
                $this->device->setModel('Playstation Vita TV');
            }
        }

        else if (preg_match('/PlayStation 3/i', $ua)) {
            $this->os->name = '';

            if (preg_match('/PLAYSTATION 3;? ([0-9.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            $this->device->setManufacturer('Sony');
            $this->device->setModel('Playstation 3');
            $this->device->setType(Device::TYPE_GAMING);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        else if (preg_match('/PlayStation 4/i', $ua)) {
            $this->os->name = '';

            if (preg_match('/PlayStation 4 ([0-9.]*)/', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));
            }

            $this->device->setManufacturer('Sony');
            $this->device->setModel('Playstation 4');
            $this->device->setType(Device::TYPE_GAMING);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      XBox
         *
         *      Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; Xbox)
         *      Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0; Xbox; Xbox One)
         */

        else if (preg_match('/Xbox\)$/', $ua, $match)) {
            $this->os->name = '';
            $this->os->version = null;

            $this->device->setManufacturer('Microsoft');
            $this->device->setModel('Xbox 360');
            $this->device->setType(Device::TYPE_GAMING);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');

            if ($this->browser->name == 'Mobile Internet Explorer')
                $this->browser->name = 'Internet Explorer';
        }

        else if (preg_match('/Xbox One\)$/', $ua, $match)) {
            $this->os->name = '';
            $this->os->version = null;

            $this->device->setManufacturer('Microsoft');
            $this->device->setModel('Xbox One');
            $this->device->setType(Device::TYPE_GAMING);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');

            if ($this->browser->name == 'Mobile Internet Explorer')
                $this->browser->name = 'Internet Explorer';
        }

        /****************************************************
         *      Kin
         *
         *      Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12; en-US; KIN.One 1.0)
         *      Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12; en-US; KIN.Two 1.0)
         */

        else if(preg_match('/KIN\.(One|Two) ([0-9.]*)/i', $ua, $match)) {
            $this->os->name = 'Kin OS';
            $this->os->version = new OptimizedVersion(array('value' => $match[2], 'details' => 2));

            switch($match[1]) {
                case 'One':     $this->device->setManufacturer('Microsoft');
                                $this->device->setModel('Kin ONE');
                                $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                                break;

                case 'Two':     $this->device->setManufacturer('Microsoft');
                                $this->device->setModel('Kin TWO');
                                $this->device->setIdentified(Device::ID_MATCH_UA, '|');
                                break;
            }
        }

        /****************************************************
         *      Zune HD
         *
         *      Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12; Microsoft ZuneHD 4.5)
         */

        else if(preg_match('/Microsoft ZuneHD/', $ua)) {
            $this->os->name = '';
            $this->os->version = null;

            $this->device->setManufacturer('Microsoft');
            $this->device->setModel('Zune HD');
            $this->device->setType(Device::TYPE_MEDIA);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Panasonic Smart Viera
         *
         *      Mozilla/5.0 (FreeBSD; U; Viera; ja-JP) AppleWebKit/535.1 (KHTML, like Gecko) Viera/1.2.4 Chrome/14.0.835.202 Safari/535.1
         */

        else if(preg_match('/Viera/', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Panasonic');
            $this->device->setModel('Smart Viera');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }


        /****************************************************
         *      Sharp AQUOS TV
         *
         *      Mozilla/5.0 (DTV) AppleWebKit/531.2  (KHTML, like Gecko) AQUOSBrowser/1.0 (US00DTV;V;0001;0001)
         *      Mozilla/5.0 (DTV) AppleWebKit/531.2+ (KHTML, like Gecko) Espial/6.0.4 AQUOSBrowser/1.0 (CH00DTV;V;0001;0001)
         *      Opera/9.80 (Linux armv6l; U; en) Presto/2.8.115 Version/11.10 AQUOS-AS/1.0 LC-40LE835X
         */

        else if(preg_match('/AQUOSBrowser/', $ua) || preg_match('/AQUOS-AS/', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Sharp');
            $this->device->setModel('Aquos TV');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }


        /****************************************************
         *      Samsung Smart TV
         *
         *      Mozilla/5.0 (SmartHub; SMART-TV; U; Linux/SmartTV; Maple2012) AppleWebKit/534.7 (KHTML, like Gecko) SmartTV Safari/534.7
         *      Mozilla/5.0 (SmartHub; SMART-TV; U; Linux/SmartTV) AppleWebKit/531.2+ (KHTML, like Gecko) WebBrowser/1.0 SmartTV Safari/531.2+
         */

        else if(preg_match('/SMART-TV/', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Samsung');
            $this->device->setModel('Smart TV');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');

            if (preg_match('/Maple([0-9]*)/', $ua, $match)) {
                $this->device->setModel($this->device->getModel() . ' ' . $match[1]);
            }
        }


        /****************************************************
         *      Sony Internet TV
         *
         *      Opera/9.80 (Linux armv7l; U; InettvBrowser/2.2(00014A;SonyDTV115;0002;0100) KDL-46EX640; CC/USA; en) Presto/2.8.115 Version/11.10
         *      Opera/9.80 (Linux armv7l; U; InettvBrowser/2.2(00014A;SonyDTV115;0002;0100) KDL-40EX640; CC/USA; en) Presto/2.10.250 Version/11.60
         *      Opera/9.80 (Linux armv7l; U; InettvBrowser/2.2(00014A;SonyDTV115;0002;0100) N/A; CC/USA; en) Presto/2.8.115 Version/11.10
         *      Opera/9.80 (Linux mips; U; InettvBrowser/2.2 (00014A;SonyDTV115;0002;0100) ; CC/JPN; en) Presto/2.9.167 Version/11.50
         *      Opera/9.80 (Linux mips; U; InettvBrowser/2.2 (00014A;SonyDTV115;0002;0100) AZ2CVT2; CC/CAN; en) Presto/2.7.61 Version/11.00
         *      Opera/9.80 (Linux armv6l; Opera TV Store/4207; U; (SonyBDP/BDV11); en) Presto/2.9.167 Version/11.50
         *      Opera/9.80 (Linux armv6l ; U; (SonyBDP/BDV11); en) Presto/2.6.33 Version/10.60
         *      Opera/9.80 (Linux armv6l; U; (SonyBDP/BDV11); en) Presto/2.8.115 Version/11.10
         */

        else if (preg_match('/SonyDTV|SonyBDP|SonyCEBrowser/', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Sony');
            $this->device->setModel('Internet TV');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Philips Net TV
         *
         *      Opera/9.70 (Linux armv6l ; U; CE-HTML/1.0 NETTV/2.0.2; en) Presto/2.2.1
         *      Opera/9.80 (Linux armv6l ; U; CE-HTML/1.0 NETTV/3.0.1;; en) Presto/2.6.33 Version/10.60
         *      Opera/9.80 (Linux mips; U; CE-HTML/1.0 NETTV/3.0.1; PHILIPS-AVM-2012; en) Presto/2.9.167 Version/11.50
         *      Opera/9.80 (Linux mips ; U; HbbTV/1.1.1 (; Philips; ; ; ; ) CE-HTML/1.0 NETTV/3.1.0; en) Presto/2.6.33 Version/10.70
         *      Opera/9.80 (Linux i686; U; HbbTV/1.1.1 (; Philips; ; ; ; ) CE-HTML/1.0 NETTV/3.1.0; en) Presto/2.9.167 Version/11.50
         */

        else if (preg_match('/NETTV\//', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Philips');
            $this->device->setModel('Net TV');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      LG NetCast TV
         *
         *      Mozilla/5.0 (DirectFB; Linux armv7l) AppleWebKit/534.26+ (KHTML, like Gecko) Version/5.0 Safari/534.26+ LG Browser/5.00.00(+mouse+3D+SCREEN+TUNER; LGE; GLOBAL-PLAT4; 03.09.22; 0x00000001;); LG NetCast.TV-2012
         *      Mozilla/5.0 (DirectFB; Linux armv7l) AppleWebKit/534.26+ (KHTML, like Gecko) Version/5.0 Safari/534.26+ LG Browser/5.00.00(+SCREEN+TUNER; LGE; GLOBAL-PLAT4; 01.00.00; 0x00000001;); LG NetCast.TV-2012
         *      Mozilla/5.0 (DirectFB; U; Linux armv6l; en) AppleWebKit/531.2  (KHTML, like Gecko) Safari/531.2  LG Browser/4.1.4( BDP; LGE; Media/BD660; 6970; abc;); LG NetCast.Media-2011
         *      Mozilla/5.0 (DirectFB; U; Linux 7631; en) AppleWebKit/531.2  (KHTML, like Gecko) Safari/531.2  LG Browser/4.1.4( NO_NUM; LGE; Media/SP520; ST.3.97.409.F; 0x00000001;); LG NetCast.Media-2011
         *      Mozilla/5.0 (DirectFB; U; Linux 7630; en) AppleWebKit/531.2  (KHTML, like Gecko) Safari/531.2  LG Browser/4.1.4( 3D BDP NO_NUM; LGE; Media/ST600; LG NetCast.Media-2011
         *      (LGSmartTV/1.0) AppleWebKit/534.23 OBIGO-T10/2.0
         */

        else if (preg_match('/LG NetCast\.(?:TV|Media)-([0-9]*)/', $ua, $match)) {
            $this->os->name = '';
            $this->device->setManufacturer('LG');
            $this->device->setModel('NetCast TV ' . $match[1]);
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        else if (preg_match('/LGSmartTV/', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('LG');
            $this->device->setModel('Smart TV');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Toshiba Smart TV
         *
         *      Mozilla/5.0 (Linux mipsel; U; HbbTV/1.1.1 (; TOSHIBA; DTV_RL953; 56.7.66.7; t12; ) ; ToshibaTP/1.3.0 (+VIDEO_MP4+VIDEO_X_MS_ASF+AUDIO_MPEG+AUDIO_MP4+DRM+NATIVELAUNCH) ; en) AppleWebKit/534.1 (KHTML, like Gecko)
         *      Mozilla/5.0 (DTV; TSBNetTV/T32013713.0203.7DD; TVwithVideoPlayer; like Gecko) NetFront/4.1 DTVNetBrowser/2.2 (000039;T32013713;0203;7DD) InettvBrowser/2.2 (000039;T32013713;0203;7DD)
         *      Mozilla/5.0 (Linux mipsel; U; HbbTV/1.1.1 (; TOSHIBA; 40PX200; 0.7.3.0.; t12; ) ; Toshiba_TP/1.3.0 (+VIDEO_MP4+AUDIO_MPEG+AUDIO_MP4+VIDEO_X_MS_ASF+OFFLINEAPP) ; en) AppleWebKit/534.1 (KHTML, like Gec
         */

        else if (preg_match('/Toshiba_?TP\//', $ua) || preg_match('/TSBNetTV\//', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Toshiba');
            $this->device->setModel('Smart TV');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      NetRange MMH
         */

        else if (preg_match('/NETRANGEMMH/', $ua)) {
            $this->os->name = '';
            $this->os->version = null;
            $this->browser->name = '';
            $this->browser->version = null;
            $this->device->setModel('NetRange MMH');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      MachBlue XT
         */

        else if (preg_match('/mbxtWebKit\/([0-9.]*)/', $ua, $match)) {
            $this->os->name = '';
            $this->browser->name = 'MachBlue XT';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
            $this->device->setType(Device::TYPE_TELEVISION);
        }

        else if ($ua == 'MachBlue') {
            $this->os->name = '';
            $this->browser->name = 'MachBlue XT';
            $this->device->setType(Device::TYPE_TELEVISION);
        }


        /****************************************************
         *      Motorola KreaTV
         */

        else if (preg_match('/Motorola KreaTV STB/', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Motorola');
            $this->device->setModel('KreaTV');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      ADB
         */

        else if (preg_match('/\(ADB; ([^\)]+)\)/', $ua, $match)) {
            $this->os->name = '';
            $this->device->setManufacturer('ADB');
            $this->device->setModel(($match[1] != 'Unknown' ? str_replace('ADB', '', $match[1]) . ' ' : '') . 'IPTV receiver');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      MStar
         */

        else if (preg_match('/Mstar;OWB/', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('MStar');
            $this->device->setModel('PVR');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');

            $this->browser->name = 'Origyn Web Browser';
        }

        /****************************************************
         *      TechniSat
         */

        else if (preg_match('/\TechniSat ([^;]+);/', $ua, $match)) {
            $this->os->name = '';
            $this->device->setManufacturer('TechniSat');
            $this->device->setModel($match[1]);
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Technicolor
         */

        else if (preg_match('/\Technicolor_([^;]+);/', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Technicolor');
            $this->device->setModel($match[1]);
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Winbox Evo2
         */

        else if (preg_match('/Winbox Evo2/', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Winbox');
            $this->device->setModel('Evo2');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      DuneHD
         */

        else if (preg_match('/DuneHD\//', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Dune HD');
            $this->device->setModel('');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }

        /****************************************************
         *      Roku
         */

        else if (preg_match('/^Roku\/DVP-([0-9]+)/', $ua, $match)) {
            $this->os->name = '';
            $this->device->setManufacturer('Roku');
            $this->device->setType(Device::TYPE_TELEVISION);

            switch ($match[1]) {
                case '2000':    $this->device->setModel('HD'); break;
                case '2050':    $this->device->setModel('XD'); break;
                case '2100':    $this->device->setModel('XDS'); break;
                case '2400':    $this->device->setModel('LT'); break;
                case '3000':    $this->device->setModel('2 HD'); break;
                case '3050':    $this->device->setModel('2 XD'); break;
                case '3100':    $this->device->setModel('2 XS'); break;
            }

            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }


        /****************************************************
         *      MediStream
         */

        else if (preg_match('/MediStream/', $ua)) {
            $this->os->name = '';
            $this->device->setManufacturer('Bewatec');
            $this->device->setModel('MediStream');
            $this->device->setType(Device::TYPE_TELEVISION);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }


        /****************************************************
         *      BrightSign
         */

        else if (preg_match('/BrightSign\/[0-9\.]+ \(([^\)]+)/', $ua, $match)) {
            $this->os->name = '';
            $this->device->setManufacturer('BrightSign');
            $this->device->setModel($match[1]);
            $this->device->setType(Device::TYPE_SIGNAGE);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }


        /****************************************************
         *      Iadea
         */

        else if (preg_match('/ADAPI/', $ua) && preg_match('/\(MODEL:([^\)]+)\)/', $ua, $match)) {
            $this->os->name = '';
            $this->device->setManufacturer('Iadea');
            $this->device->setModel($match[1]);
            $this->device->setType(Device::TYPE_SIGNAGE);
            $this->device->setIdentified(Device::ID_MATCH_UA, '|');
        }


        /****************************************************
         *      Generic
         */

        else if (preg_match('/HbbTV\/[0-9\.]+ \([^;]*;\s*([^;]*)\s*;\s*([^;]*)\s*;/', $ua, $match)) {
            $vendorName = trim($match[1]);
            $modelName = trim($match[2]);
            $this->device->setType(Device::TYPE_TELEVISION);

            if ($this->device->getManufacturer() == '' && $vendorName != '' && $vendorName != 'vendorName') {
                switch($vendorName) {
                    case 'LG Electronics':  $this->device->setManufacturer('LG'); break;
                    case 'LGE':             $this->device->setManufacturer('LG'); break;
                    case 'TOSHIBA':         $this->device->setManufacturer('Toshiba'); break;
                    case 'smart':           $this->device->setManufacturer('Smart'); break;
                    case 'tv2n':            $this->device->setManufacturer('TV2N'); break;
                    default:                $this->device->setManufacturer($vendorName);
                }

                if ($this->device->getModel() == '' && $modelName != '' && $modelName != 'modelName') {
                    $this->device->setIdentified(Device::ID_PATTERN, '|');

                    switch($modelName) {
                        case 'GLOBAL_PLAT3':    $this->device->setModel('NetCast 3.0'); $this->device->setIdentified(Device::ID_MATCH_UA, '|'); break;
                        case 'GLOBAL_PLAT4':    $this->device->setModel('NetCast 4.0'); $this->device->setIdentified(Device::ID_MATCH_UA, '|'); break;
                        case 'NetCast 4.0':     $this->device->setModel('NetCast 4.0'); $this->device->setIdentified(Device::ID_MATCH_UA, '|'); break;
                        case 'SmartTV2012':     $this->device->setModel('Smart TV 2012'); $this->device->setIdentified(Device::ID_MATCH_UA, '|'); break;
                        case 'videoweb':        $this->device->setModel('Videoweb'); $this->device->setIdentified(Device::ID_MATCH_UA, '|'); break;
                        case 'VIERA 2013':      $this->device->setModel('Smart Viera'); $this->device->setIdentified(Device::ID_MATCH_UA, '|'); break;
                        case 'VIERA 2014':      $this->device->setModel('Smart Viera'); $this->device->setIdentified(Device::ID_MATCH_UA, '|'); break;
                        case 'hms1000sph2':     $this->device->setManufacturer('Humax'); $this->device->setModel('HMS-1000S'); $this->device->setIdentified(Device::ID_MATCH_UA, '|'); break;
                        default:                $this->device->setModel($modelName);
                    }

                    if ($vendorName == 'Humax') {
                        $this->device->setModel(strtoupper($this->device->getModel()));
                    }

                    $this->os->name = '';
                }
            }
        }

        /****************************************************
         *      Detect type based on common identifiers
         */

        else if(preg_match('/InettvBrowser/', $ua)) {
            $this->device->setType(Device::TYPE_TELEVISION);
        }

        else if(preg_match('/MIDP/', $ua)) {
            $this->device->setType(Device::TYPE_MOBILE);
        }

        /****************************************************
         *      Try to detect any devices based on common
         *      locations of model ids
         */

        else if ($this->device->getModel() == '' && $this->device->getManufacturer() == '') {
            $candidates = array();

            if (!preg_match('/^(Mozilla|Opera)/', $ua)) if (preg_match('/^(?:MQQBrowser\/[0-9\.]+\/)?([^\s]+)/', $ua, $match)) {
                $match[1] = preg_replace('/_TD$/', '', $match[1]);
                $match[1] = preg_replace('/_CMCC$/', '', $match[1]);
                $match[1] = preg_replace('/[_ ]Mozilla$/', '', $match[1]);
                $match[1] = preg_replace('/ Linux$/', '', $match[1]);
                $match[1] = preg_replace('/ Opera$/', '', $match[1]);
                $match[1] = preg_replace('/\/[0-9].*$/', '', $match[1]);

                array_push($candidates, $match[1]);
            }

            if (preg_match('/^((?:SAMSUNG|TCL|ZTE) [^\s]+)/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/(Samsung (?:GT|SCH|SGH|SHV|SHW|SPH)-[A-Z-0-9]+)/i', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/[0-9]+x[0-9]+; ([^;]+)/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/\s*([^;]*[^\s])\s*; [0-9]+\*[0-9]+\)/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/[0-9]+X[0-9]+ ([^;\/\(\)]+)/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/Windows NT 5.1; ([^;]+); Windows Phone/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/\) PPC; (?:[0-9]+x[0-9]+; )?([^;\/\(\)]+)/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/Windows Mobile; ([^;]+); PPC;/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/\(([^;]+); U; Windows Mobile/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/Series60\/[0-9\.]+ ([^\s]+) Profile/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/Vodafone\/1.0\/([^\/]+)/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/^(DoCoMo[^(]+)/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/\ ([^\s]+)$/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/; ([^;\)]+)\)/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/^(.*)\/UCWEB/', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/^([a-z0-9\.\_\+\/ ]+) Linux/i', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (preg_match('/\(([a-z0-9\.\_\+\/ ]+) Browser/i', $ua, $match)) {
                array_push($candidates, $match[1]);
            }

            if (isset($this->os->name)) {
                for ($i = 0; $i < count($candidates); $i++) {
                    $result = false;

                    if ($this->device->getModel() == '' && $this->device->getManufacturer() == '') {
                        if (isset($this->os->name) && ($this->os->name == 'Android' || $this->os->name == 'Linux')) {
                            $device = OptimizedDeviceModels::identify('android', $candidates[$i]);
                            if ($device->identified) {
                                $result = true;

                                $this->device->setIdentified($this->device->getIdentified(), '|');
                                $this->device = $device;

                                if ($this->os->name != 'Android') {
                                    $this->os->name = 'Android';
                                    $this->os->version = null;
                                }
                            }
                        }

                        if (!isset($this->os->name) || $this->os->name == 'Windows' || $this->os->name == 'Windows Mobile' || $this->os->name == 'Windows CE') {
                            $device = OptimizedDeviceModels::identify('wm', $candidates[$i]);
                            if ($device->identified) {
                                $result = true;

                                $this->device->setIdentified($this->device->getIdentified(), '|');
                                $this->device = $device;

                                if (isset($this->os->name) && $this->os->name != 'Windows Mobile') {
                                    $this->os->name = 'Windows Mobile';
                                    $this->os->version = null;
                                }
                            }
                        }
                    }
                }
            }

            if ($this->device->getModel() == '' && $this->device->getManufacturer() == '') {
                $identified = false;

                for ($i = 0; $i < count($candidates); $i++) {
                    if (!$this->device->getIdentified()) {
                        if (preg_match('/^acer_([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Acer');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^ALCATEL[_-]([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Alcatel');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);

                            if (preg_match('/^OT\s*([^\s]*)/i', $this->device->getModel(), $match)) {
                                $this->device->setModel('One Touch ' . $match[1]);
                            }

                            $identified = true;
                        }

                        else if (preg_match('/^BenQ-([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('BenQ');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^Bird_([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Bird');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^(?:YL-)?COOLPAD([^\s]+)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Coolpad');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^DoCoMo\/[0-9\.]+ ([^\s]+)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('DoCoMo');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^dopod[-_]?([^\s]+)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Dopod');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^GIONEE[-_]([^\s]+)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Gionee');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^HTC[_-]?([^\/_]+)(?:\/|_|$)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('HTC');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^HUAWEI[_-]?([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Huawei');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^KONKA[-_]?([^\s]+)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Konka');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^K-Touch_?([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('K-Touch');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^Lenovo-([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Lenovo');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^Lephone_([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Lephone');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/(?:^|\()LGE?(?:\/|-|_|\s)([^\s]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('LG');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^MOT-([^\/_]+)(?:\/|_|$)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Motorola');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^Motorola_([^\/_]+)(?:\/|_|$)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Motorola');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^Nokia-?([^\/]+)(?:\/|$)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Nokia');

                            if ($match[1] != 'Browser') {
                                $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                                $this->device->setType(Device::TYPE_MOBILE);
                                $this->device->setIdentified(false);
                                $identified = true;

                                if (!$this->device->getIdentified()) {
                                    $device = OptimizedDeviceModels::identify('s60', $this->device->getModel());
                                    if ($device->identified) {
                                        $this->device->setIdentified($this->device->getIdentified(), '|');
                                        $this->device = $device;

                                        if (!isset($this->os->name) || $this->os->name != 'Series60') {
                                            $this->os->name = 'Series60';
                                            $this->os->version = null;
                                        }
                                    }
                                }

                                if (!$this->device->getIdentified()) {
                                    $device = OptimizedDeviceModels::identify('s40', $this->device->getModel());
                                    if ($device->identified) {
                                        $this->device->setIdentified($this->device->getIdentified(), '|');
                                        $this->device = $device;

                                        if (!isset($this->os->name) || $this->os->name != 'Series40') {
                                            $this->os->name = 'Series40';
                                            $this->os->version = null;
                                        }
                                    }
                                }

                                if (!$this->device->getIdentified()) {
                                    $device = OptimizedDeviceModels::identify('asha', $this->device->getModel());
                                    if ($device->identified) {
                                        $this->device->setIdentified($this->device->getIdentified(), '|');
                                        $this->device = $device;

                                        if (!isset($this->os->name) || $this->os->name != 'Nokia Asha Platform') {
                                            $this->os->name = 'Nokia Asha Platform';
                                            $this->os->version = null;
                                        }
                                    }
                                }
                            }
                        }

                        else if (preg_match('/^OPPO_([^\/_]+)(?:\/|_|$)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Oppo');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^Pantech([^\/_]+)(?:\/|_|$)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Pantech');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^SonyEricsson([^\/_]+)(?:\/|_|$)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Sony Ericsson');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $this->device->setIdentified(false);
                            $identified = true;

                            if (preg_match('/^[a-z][0-9]+/', $this->device->getModel())) {
                                $model = $this->device->getModel();
                                $model[0] = strtoupper($model[0]);
                                $this->device->setModel($model);
                            }

                            if (isset($this->os->name) && $this->os->name == 'Series60') {
                                $device = OptimizedDeviceModels::identify('s60', $this->device->getModel());
                                if ($device->identified) {
                                    $this->device->setIdentified($this->device->getIdentified(), '|');
                                    $this->device = $device;
                                }
                            }
                        }

                        else if (preg_match('/^T-smart_([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('T-smart');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^TCL[-_ ]([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('TCL');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^SHARP[-_\/]([^\/]*)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Sharp');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if (preg_match('/^SAMSUNG[-\/ ]?([^\/_]+)(?:\/|_|$)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Samsung');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $this->device->setIdentified(false);
                            $identified = true;

                            if (isset($this->os->name) && $this->os->name == 'Bada') {
                                $device = OptimizedDeviceModels::identify('bada', $this->device->getModel());
                                if ($device->identified) {
                                    $this->device->setIdentified($this->device->getIdentified(), '|');
                                    $this->device = $device;
                                }
                            }

                            else if (isset($this->os->name) && $this->os->name == 'Series60') {
                                $device = OptimizedDeviceModels::identify('s60', $this->device->getModel());
                                if ($device->identified) {
                                    $this->device->setIdentified($this->device->getIdentified(), '|');
                                    $this->device = $device;
                                }
                            }

                            else if (preg_match('/Jasmine\/([0-9.]*)/', $ua, $match)) {
                                $version = $match[1];

                                $device = OptimizedDeviceModels::identify('touchwiz', $this->device->getModel());
                                if ($device->identified) {
                                    $this->device->setIdentified($this->device->getIdentified(), '|');
                                    $this->device = $device;
                                    $this->os->name = 'Touchwiz';

                                    switch($version) {
                                        case '0.8':     $this->os->version = new OptimizedVersion(array('value' => '1.0')); break;
                                        case '1.0':     $this->os->version = new OptimizedVersion(array('value' => '2.0', 'alias' => '2.0 or earlier')); break;
                                        case '2.0':     $this->os->version = new OptimizedVersion(array('value' => '3.0')); break;
                                    }
                                }
                            }

                            else if (preg_match('/(?:Dolfin\/([0-9.]*)|Browser\/Dolfin([0-9.]*))/', $ua, $match)) {
                                $version = $match[1] || $match[2];

                                $device = OptimizedDeviceModels::identify('bada', $this->device->getModel());
                                if ($device->identified) {
                                    $this->device->setIdentified($this->device->getIdentified(), '|');
                                    $this->device = $device;
                                    $this->os->name = 'Bada';

                                    switch($version) {
                                        case '2.0':     $this->os->version = new OptimizedVersion(array('value' => '1.0')); break;
                                        case '2.2':     $this->os->version = new OptimizedVersion(array('value' => '1.2')); break;
                                        case '3.0':     $this->os->version = new OptimizedVersion(array('value' => '2.0')); break;
                                    }
                                }

                                else {
                                    $device = OptimizedDeviceModels::identify('touchwiz', $this->device->getModel());
                                    if ($device->identified) {
                                    $this->device->setIdentified($this->device->getIdentified(), '|');
                                        $this->device = $device;
                                        $this->os->name = 'Touchwiz';

                                        switch($version) {
                                            case '1.5':     $this->os->version = new OptimizedVersion(array('value' => '2.0')); break;
                                            case '2.0':     $this->os->version = new OptimizedVersion(array('value' => '3.0')); break;
                                        }
                                    }
                                }
                            }
                        }

                        else if(preg_match('/^Xiaomi[_]?([^\s]+)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('Xiaomi');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }

                        else if(preg_match('/^ZTE[-_]?([^\s]+)/i', $candidates[$i], $match)) {
                            $this->device->setManufacturer('ZTE');
                            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
                            $this->device->setType(Device::TYPE_MOBILE);
                            $identified = true;
                        }
                    }
                }

                if ($identified && !$this->device->getIdentified()) {
                    $device = OptimizedDeviceModels::identify('bada', $this->device->getModel());
                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->device = $device;
                        $this->os->name = 'Bada';
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('touchwiz', $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                            $this->os->name = 'Touchwiz';
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('wp', $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                            $this->os->name = 'Windows Phone';
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('wm', $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                            $this->os->name = 'Windows Mobile';
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('android', $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                            $this->os->name = 'Android';
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('brew', $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                            $this->os->name = 'Brew';
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('feature', $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('bada', $this->device->getManufacturer() . ' ' . $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                            $this->os->name = 'Bada';
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('touchwiz', $this->device->getManufacturer() . ' ' . $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                            $this->os->name = 'Touchwiz';
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('wp', $this->device->getManufacturer() . ' ' . $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                            $this->os->name = 'Windows Phone';
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('wm', $this->device->getManufacturer() . ' ' . $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                            $this->os->name = 'Windows Mobile';
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('android', $this->device->getManufacturer() . ' ' . $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                            $this->os->name = 'Android';
                        }
                    }

                    if (!$this->device->getIdentified()) {
                        $device = OptimizedDeviceModels::identify('feature', $this->device->getManufacturer() . ' ' . $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->device = $device;
                        }
                    }
                }

                if ($identified) {
                    $this->device->setIdentified(Device::ID_PATTERN, '|');
                }
            }
        }


        else if (preg_match('/Sprint ([^\s]+)/', $ua, $match)) {
            $this->device->setManufacturer('Sprint');
            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
            $this->device->setType(Device::TYPE_MOBILE);
            $this->device->setIdentified(Device::ID_PATTERN, '|');
        }

        else if (preg_match('/SoftBank\/[^\/]+\/([^\/]+)\//', $ua, $match)) {
            $this->device->setManufacturer('Softbank');
            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
            $this->device->setType(Device::TYPE_MOBILE);
            $this->device->setIdentified(Device::ID_PATTERN, '|');
        }

        else if (preg_match('/\((?:LG[-|\/])(.*) (?:Browser\/)?AppleWebkit/', $ua, $match)) {
            $this->device->setManufacturer('LG');
            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
            $this->device->setType(Device::TYPE_MOBILE);
            $this->device->setIdentified(Device::ID_PATTERN, '|');
        }

        else if (preg_match('/^Mozilla\/5.0 \((?:Nokia|NOKIA)(?:\s?)([^\)]+)\)UC AppleWebkit\(like Gecko\) Safari\/530$/', $ua, $match)) {
            $this->device->setManufacturer('Nokia');
            $this->device->setModel(OptimizedDeviceModels::cleanup($match[1]));
            $this->device->setType(Device::TYPE_MOBILE);
            $this->device->setIdentified(Device::ID_PATTERN, '|');

            if (! ($this->device->getIdentified() & Device::ID_MATCH_UA)) {
                $device = OptimizedDeviceModels::identify('s60', $this->device->getModel());
                if ($device->identified) {
                    $this->device->setIdentified($this->device->getIdentified(), '|');
                    $this->device = $device;

                    if (!isset($this->os->name) || $this->os->name != 'Series60') {
                        $this->os->name = 'Series60';
                        $this->os->version = null;
                    }
                }
            }

            if (! ($this->device->getIdentified() & Device::ID_MATCH_UA)) {
                $device = OptimizedDeviceModels::identify('s40', $this->device->getModel());
                if ($device->identified) {
                    $this->device->setIdentified($this->device->getIdentified(), '|');
                    $this->device = $device;

                    if (!isset($this->os->name) || $this->os->name != 'Series40') {
                        $this->os->name = 'Series40';
                        $this->os->version = null;
                    }
                }
            }
        }

        $this->makeCorrections($ua);
    }

    protected function detectEngine($ua)
    {
        $this->engineAnalyzed = true;

        /****************************************************
         *      WebKit
         */

        if (preg_match('/WebKit\/([0-9.]*)/i', $ua, $match)) {
            $this->engine->name = 'Webkit';
            $this->engine->version = new OptimizedVersion(array('value' => $match[1]));

            if (preg_match('/(?:Chrome|Chromium)\/([0-9]*)/', $ua, $match)) {
                if (intval($match[1]) >= 27) {
                    $this->engine->name = 'Blink';
                }
            }
        }

        else if (preg_match('/Browser\/AppleWebKit([0-9.]*)/i', $ua, $match)) {
            $this->engine->name = 'Webkit';
            $this->engine->version = new OptimizedVersion(array('value' => $match[1]));
        }

        else if (preg_match('/AppleWebkit\(like Gecko\)/i', $ua, $match)) {
            $this->engine->name = 'Webkit';
        }


        /****************************************************
         *      KHTML
         */

        else if (preg_match('/KHTML\/([0-9.]*)/', $ua, $match)) {
            $this->engine->name = 'KHTML';
            $this->engine->version = new OptimizedVersion(array('value' => $match[1]));
        }

        /****************************************************
         *      Gecko
         */

        else if (preg_match('/Gecko/', $ua) && !preg_match('/like Gecko/', $ua)) {
            $this->engine->name = 'Gecko';

            if (preg_match('/; rv:([^\)]+)\)/', $ua, $match)) {
                $this->engine->version = new OptimizedVersion(array('value' => $match[1]));
            }
        }

        /****************************************************
         *      Presto
         */

        else if (preg_match('/Presto\/([0-9.]*)/', $ua, $match)) {
            $this->engine->name = 'Presto';
            $this->engine->version = new OptimizedVersion(array('value' => $match[1]));
        }

        /****************************************************
         *      Trident
         */

        else if (preg_match('/Trident\/([0-9.]*)/', $ua, $match)) {
            $this->engine->name = 'Trident';
            $this->engine->version = new OptimizedVersion(array('value' => $match[1]));


            if ($this->browser->name == 'Internet Explorer') {
                if ($this->engine->version->toNumber() == 7 && $this->browser->version->toFloat() < 11) {
                    $this->browser->version = new OptimizedVersion(array('value' => '11.0'));
                    $this->browser->mode = 'compat';
                }

                else if ($this->engine->version->toNumber() == 6 && $this->browser->version->toFloat() < 10) {
                    $this->browser->version = new OptimizedVersion(array('value' => '10.0'));
                    $this->browser->mode = 'compat';
                }

                else if ($this->engine->version->toNumber() == 5 && $this->browser->version->toFloat() < 9) {
                    $this->browser->version = new OptimizedVersion(array('value' => '9.0'));
                    $this->browser->mode = 'compat';
                }

                else if ($this->engine->version->toNumber() == 4 && $this->browser->version->toFloat() < 8) {
                    $this->browser->version = new OptimizedVersion(array('value' => '8.0'));
                    $this->browser->mode = 'compat';
                }
            }

            if ($this->os->name == 'Windows Phone') {
                if ($this->engine->version->toNumber() == 6 && $this->browser->version->toFloat() < 8) {
                    $this->os->version = new OptimizedVersion(array('value' => '8.0'));
                }

                else if ($this->engine->version->toNumber() == 5 && $this->browser->version->toFloat() < 7.5) {
                    $this->os->version = new OptimizedVersion(array('value' => '7.5'));
                }
            }
        }

        $this->makeCorrections($ua);
    }

    protected function detectBrowser($ua)
    {
        $this->browserAnalyzed = true;

        /****************************************************
         *      Safari
         */

        if (preg_match('/Safari/', $ua)) {
            if (isset($this->os->name)) {
                if ($this->os->name == 'iOS') {
                    $this->browser->stock = true;
                    $this->browser->hidden = true;
                    $this->browser->name = 'Safari';
                    $this->browser->version = null;
                }

                else if (($this->os->name == 'Mac OS X' || $this->os->name == 'Windows')) {
                    $this->browser->name = 'Safari';
                    $this->browser->stock = $this->os->name == 'Mac OS X';

                    if (preg_match('/AppleWebKit\/[0-9\.]+\+/', $ua)) {
                        $this->browser->name = 'WebKit Nightly Build';
                        $this->browser->version = null;
                    }
                    else if (preg_match('/Version\/([0-9\.]+)/', $ua, $match)) {
                        $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
                    }
                }
            }
        }

        /****************************************************
         *      Internet Explorer
         */

        else if (preg_match('/MSIE/', $ua)) {
            $this->browser->name = 'Internet Explorer';

            if (preg_match('/IEMobile/', $ua) || preg_match('/Windows CE/', $ua) || preg_match('/Windows Phone/', $ua) || preg_match('/WP7/', $ua) || preg_match('/WPDesktop/', $ua)) {
                $this->browser->name = 'Mobile Internet Explorer';
            }

            if (preg_match('/MSIE ([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if (preg_match('/Mac_/', $ua)) {
                $this->os->name = 'Mac OS';
                $this->engine->name = 'Tasman';
                $this->device->setType(Device::TYPE_DESKTOP);

                if (($this->browser->version->toFloat() >= 5.11 && $this->browser->version->toFloat() <= 5.13) || $this->browser->version->toFloat() >= 5.2) {
                    $this->os->name = 'Mac OS X';
                }
            }
        }

        else if (preg_match('/\(IE ([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'Internet Explorer';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
        }

        else if (preg_match('/Browser\/IE([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'Internet Explorer';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
        }

        else if (preg_match('/Trident\/[789][^\)]+; rv:([0-9.]*)\)/', $ua, $match)) {
            $this->browser->name = 'Internet Explorer';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
        }

        /****************************************************
         *      Firefox
         */

        else if (preg_match('/Firefox/', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'Firefox';

            if (preg_match('/Firefox\/([0-9ab.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));

                if (preg_match('/a/', $match[1])) {
                    $this->browser->channel = 'Aurora';
                }

                else if (preg_match('/b/', $match[1])) {
                    $this->browser->channel = 'Beta';
                }
            }

            if (preg_match('/Fennec/', $ua)) {
                $this->device->setType(Device::TYPE_MOBILE);
            }

            else if (preg_match('/Mobile;(?: ([^;]+);)? rv/', $ua, $match)) {
                $this->device->setType(Device::TYPE_MOBILE);

                $device = OptimizedDeviceModels::identify('firefoxos', $match[1]);
                if ($device->identified) {
                    $this->device->setIdentified($this->device->getIdentified(), '|');
                    $this->os->name = 'Firefox OS';
                    $this->device = $device;
                }
            }

            else if (preg_match('/Tablet;(?: ([^;]+);)? rv/', $ua, $match)) {
                $this->device->setType(Device::TYPE_TABLET);

                $device = OptimizedDeviceModels::identify('firefoxos', $match[1]);
                if ($device->identified) {
                    $this->device->setIdentified($this->device->getIdentified(), '|');
                    $this->os->name = 'Firefox OS';
                    $this->device = $device;
                }
            }

            if ($this->device->type == '') {
                $this->device->setType(Device::TYPE_DESKTOP);
            }
            else if ($this->device->type == Device::TYPE_MOBILE || $this->device->type == Device::TYPE_TABLET) {
                $this->browser->name = 'Firefox Mobile';
            }
        }

        else if (preg_match('/Namoroka/', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'Firefox';

            if (preg_match('/Namoroka\/([0-9ab.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }

            $this->browser->channel = 'Namoroka';
        }

        else if (preg_match('/Shiretoko/', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'Firefox';

            if (preg_match('/Shiretoko\/([0-9ab.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }

            $this->browser->channel = 'Shiretoko';
        }

        else if (preg_match('/Minefield/', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'Firefox';

            if (preg_match('/Minefield\/([0-9ab.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }

            $this->browser->channel = 'Minefield';
        }

        else if (preg_match('/Firebird/', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'Firebird';

            if (preg_match('/Firebird\/([0-9ab.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }
        }

        /****************************************************
         *      SeaMonkey
         */

        else if (preg_match('/SeaMonkey/', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'SeaMonkey';

            if (preg_match('/SeaMonkey\/([0-9ab.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if ($this->device->type == '') {
                $this->device->setType(Device::TYPE_DESKTOP);
            }
        }

        else if (preg_match('/PmWFx\/([0-9ab.]*)/', $ua, $match)) {
            $this->browser->stock = false;
            $this->browser->name = 'SeaMonkey';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
        }



        /****************************************************
         *      Netscape
         */

        else if (preg_match('/Netscape/', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'Netscape';

            if (preg_match('/Netscape[0-9]?\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }
        }

        /****************************************************
         *      Konqueror
         */

        else if (preg_match('/[k|K]onqueror\//', $ua)) {
            $this->browser->name = 'Konqueror';

            if (preg_match('/[k|K]onqueror\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if ($this->device->type == '') {
                $this->device->setType(Device::TYPE_DESKTOP);
            }
        }

        /****************************************************
         *      Chrome
         */

        else if (preg_match('/(?:Chrome|CrMo|CriOS)\/([0-9.]*)/', $ua, $match)) {
            $this->browser->stock = false;
            $this->browser->name = 'Chrome';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));

            if (isset($this->os->name) && $this->os->name == 'Android') {
                switch (implode('.', array_splice((explode('.', $match[1])), 0, 3))) {
                    case '16.0.912':
                        $this->browser->channel = 'Beta';
                        break;
                    case '18.0.1025':
                    case '25.0.1364':
                    case '27.0.1453':
                    case '29.0.1547':
                    case '30.0.1599':
                    case '31.0.1650':
                    case '32.0.1700':
                    case '33.0.1750':
                    case '34.0.1847':
                        $this->browser->version->details = 1;
                        break;
                    default:
                        $this->browser->channel = 'Dev';
                        break;
                }

                /* Webview for Android 4.4 and higher */
                if (implode('.', array_splice((explode('.', $match[1])), 1, 2)) == '0.0' && preg_match('/Version\//', $ua)) {
                    $this->browser->stock = true;
                    $this->browser->name = null;
                    $this->browser->version = null;
                    $this->browser->channel = null;
                }

                /* Samsung Chromium based browsers */
                else if (isset($device->manufacturer) && $device->manufacturer == 'Samsung') {

                    /* Version 1.0 */
                    if ($match[1] == '18.0.1025.308' && preg_match('/Version\/1.0/', $ua)) {
                        $this->browser->stock = true;
                        $this->browser->name = null;
                        $this->browser->version = null;
                        $this->browser->channel = null;
                    }

                    /* Version 1.5 */
                    else if ($match[1] == '28.0.1500.94' && preg_match('/Version\/1.5/', $ua)) {
                        $this->browser->stock = true;
                        $this->browser->name = null;
                        $this->browser->version = null;
                        $this->browser->channel = null;
                    }
                }
            }

            else {
                switch (implode('.', array_splice((explode('.', $match[1])), 0, 3))) {
                    case '0.2.149':
                    case '0.3.154':
                    case '0.4.154':
                    case '4.1.249':
                        $this->browser->version->details = 2;
                        break;

                    case '1.0.154':
                    case '2.0.172':
                    case '3.0.195':
                    case '4.0.249':
                    case '5.0.375':
                    case '6.0.472':
                    case '7.0.517':
                    case '8.0.552':
                    case '9.0.597':
                    case '10.0.648':
                    case '11.0.696':
                    case '12.0.742':
                    case '13.0.782':
                    case '14.0.835':
                    case '15.0.874':
                    case '16.0.912':
                    case '17.0.963':
                    case '18.0.1025':
                    case '19.0.1084':
                    case '20.0.1132':
                    case '21.0.1180':
                    case '22.0.1229':
                    case '23.0.1271':
                    case '24.0.1312':
                    case '25.0.1364':
                    case '26.0.1410':
                    case '27.0.1453':
                    case '28.0.1500':
                    case '29.0.1547':
                    case '30.0.1599':
                    case '31.0.1650':
                    case '32.0.1700':
                    case '33.0.1750':
                    case '34.0.1847':
                        $this->browser->version->details = 1;
                        break;
                    default:
                        $this->browser->channel = 'Dev';
                        break;
                }
            }

            if ($this->device->type == '') {
                $this->device->setType(Device::TYPE_DESKTOP);
            }
        }

        /****************************************************
         *      Chromium
         */

        else if (preg_match('/Chromium/', $ua)) {
            $this->browser->stock = false;
            $this->browser->channel = '';
            $this->browser->name = 'Chromium';

            if (preg_match('/Chromium\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if ($this->device->type == '') {
                $this->device->setType(Device::TYPE_DESKTOP);
            }
        }


        /****************************************************
         *      Opera
         */

        else if (preg_match('/OPR\/([0-9.]*)/', $ua, $match)) {
            $this->browser->stock = false;
            $this->browser->channel = '';
            $this->browser->name = 'Opera';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));

            if (preg_match('/Edition Developer/', $ua)) {
                $this->browser->channel = 'Developer';
            }

            else if (preg_match('/Edition Next/', $ua)) {
                $this->browser->channel = 'Next';
            }

            if ($this->device->type == Device::TYPE_MOBILE) {
                $this->browser->name = 'Opera Mobile';
            }
        }

        else if (preg_match('/Opera/i', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'Opera';

            if (preg_match('/Version\/([0-9.]*)/', $ua, $match)) {
                if (floatval($match[1]) >= 10)
                    $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
                else
                    $this->browser->version = null;
            }
            else if (preg_match('/Opera[\/| ]([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if (!is_null($this->browser->version)) {
                if (preg_match('/Edition Labs/', $ua)) {
                    $this->browser->channel = 'Labs';
                }
                else if (preg_match('/Edition Next/', $ua)) {
                    $this->browser->channel = 'Next';
                }
            }

            if (preg_match('/Opera Tablet/', $ua)) {
                $this->browser->name = 'Opera Mobile';
                $this->device->setType(Device::TYPE_TABLET);
            }

            else if (preg_match('/Opera Mobi/', $ua)) {
                $this->browser->name = 'Opera Mobile';
                $this->device->setType(Device::TYPE_MOBILE);
            }

            else if (preg_match('/Opera Mini;/', $ua)) {
                $this->browser->name = 'Opera Mini';
                $this->browser->version = null;
                $this->browser->mode = 'proxy';
                $this->device->setType(Device::TYPE_MOBILE);
            }

            else if (preg_match('/Opera Mini\/(?:att\/)?([0-9.]*)/', $ua, $match)) {
                $this->browser->name = 'Opera Mini';
                $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => (intval(substr(strrchr($match[1], '.'), 1)) > 99 ? -1 : null)));
                $this->browser->mode = 'proxy';
                $this->device->setType(Device::TYPE_MOBILE);
            }

            else if ($this->browser->name == 'Opera' && $this->device->type == Device::TYPE_MOBILE) {
                $this->browser->name = 'Opera Mobile';

                if (preg_match('/BER/', $ua)) {
                    $this->browser->name = 'Opera Mini';
                    $this->browser->version = null;
                }
            }

            else if (preg_match('/InettvBrowser/', $ua)) {
                $this->device->setType(Device::TYPE_TELEVISION);
            }

            else if (preg_match('/Opera[ -]TV/', $ua)) {
                $this->browser->name = 'Opera';
                $this->device->setType(Device::TYPE_TELEVISION);
            }

            else if (preg_match('/Linux zbov/', $ua)) {
                $this->browser->name = 'Opera Mobile';
                $this->browser->mode = 'desktop';

                $this->device->setType(Device::TYPE_MOBILE);

                $this->os->name = null;
                $this->os->version = null;
            }

            else if (preg_match('/Linux zvav/', $ua)) {
                $this->browser->name = 'Opera Mini';
                $this->browser->version = null;
                $this->browser->mode = 'desktop';

                $this->device->setType(Device::TYPE_MOBILE);

                $this->os->name = null;
                $this->os->version = null;
            }

            if ($this->device->type == '') {
                $this->device->setType(Device::TYPE_DESKTOP);
            }
        }

        else if (preg_match('/Coast\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'Coast by Opera';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3 ));
        }

        /****************************************************
         *      wOSBrowser
         */

        else if (preg_match('/wOSBrowser/', $ua)) {
            $this->browser->name = 'webOS Browser';

            if ($this->os->name != 'webOS') {
                $this->os->name = 'webOS';
            }
        }

        /****************************************************
         *      Sailfish Browser
         */

        else if (preg_match('/Sailfish ?Browser/', $ua)) {
            $this->browser->name = 'Sailfish Browser';
            $this->browser->stock = true;

            if (preg_match('/Sailfish ?Browser\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
            }
        }

        /****************************************************
         *      BrowserNG
         */

        else if (preg_match('/BrowserNG/', $ua)) {
            $this->browser->name = 'Nokia Browser';

            if (preg_match('/BrowserNG\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3, 'builds' => false));
            }
        }

        /****************************************************
         *      Nokia Browser
         */

        else if (preg_match('/NokiaBrowser/', $ua)) {
            $this->browser->name = 'Nokia Browser';
            $this->browser->channel = null;

            if (preg_match('/NokiaBrowser\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            }
        }

        /****************************************************
         *      Nokia Xpress
         *
         *      Mozilla/5.0 (X11; Linux x86_64; rv:5.0.1) Gecko/20120822 OSRE/1.0.7f
         */

        else if (preg_match('/OSRE/', $ua)) {
            $this->browser->name = 'Nokia Xpress';
            $this->browser->mode = 'proxy';
            $this->device->setType(Device::TYPE_MOBILE);

            $this->os->name = null;
            $this->os->version = null;
        }

        else if (preg_match('/S40OviBrowser/', $ua)) {
            $this->browser->name = 'Nokia Xpress';
            $this->browser->mode = 'proxy';

            if (preg_match('/S40OviBrowser\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            }

            if (preg_match('/Nokia([^\/]+)\//', $ua, $match)) {
                $this->device->setManufacturer('Nokia');
                $this->device->setModel($match[1]);
                $this->device->setIdentified(Device::ID_PATTERN, '|');

                if ($this->device->getModel() != '') {
                    $device = OptimizedDeviceModels::identify('s40', $this->device->getModel());
                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->device = $device;
                    }
                    else {
                        $device = OptimizedDeviceModels::identify('asha', $this->device->getModel());
                        if ($device->identified) {
                            $this->device->setIdentified($this->device->getIdentified(), '|');
                            $this->os->name = 'Nokia Asha Platform';
                            $this->device = $device;
                        }
                    }
                }
            }

            else if (preg_match('/NOKIALumia([0-9]+)/', $ua, $match)) {
                $this->device->setManufacturer('Nokia');
                $this->device->setModel($match[1]);
                $this->device->setIdentified(Device::ID_PATTERN, '|');

                $device = OptimizedDeviceModels::identify('wp', $this->device->getModel());
                if ($device->identified) {
                    $this->device->setIdentified($this->device->getIdentified(), '|');
                    $this->device = $device;
                    $this->os->name = 'Windows Phone';
                }
            }
        }


        /****************************************************
         *      MicroB
         */

        else if (preg_match('/Maemo[ |_]Browser/', $ua)) {
            $this->browser->name = 'MicroB';

            if (preg_match('/Maemo[ |_]Browser[ |_]([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            }
        }


        /****************************************************
         *      Silk
         */

        else if (preg_match('/Silk/', $ua)) {
            if (preg_match('/Silk-Accelerated/', $ua)) {
                $this->browser->name = 'Silk';

                if (preg_match('/Silk\/([0-9.]*)/', $ua, $match)) {
                    $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
                }

                if (preg_match('/; ([^;]*[^;\s])\s+Build/', $ua, $match)) {
                    $this->device = OptimizedDeviceModels::identify('android', $match[1]);
                }

                if (!$this->device->getIdentified()) {
                    $this->device->setManufacturer('Amazon');
                    $this->device->setModel('Kindle Fire');
                    $this->device->setType(Device::TYPE_TABLET);
                    $this->device->setIdentified(Device::ID_INFER, '|');
                }

                if ($this->os->name != 'Android') {
                    $this->os->name = 'Android';
                    $this->os->version = null;
                }
            }
        }

        /****************************************************
         *      Dolfin
         */

        else if (preg_match('/Dolfin/', $ua) || preg_match('/Jasmine/', $ua)) {
            $this->browser->name = 'Dolfin';

            if (preg_match('/Jasmine\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }
            else if (preg_match('/Browser\/Dolfin([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }
            else if (preg_match('/Dolfin\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }
        }

        /****************************************************
         *      Iris
         */

        else if (preg_match('/Iris/', $ua)) {
            $this->browser->name = 'Iris';

            $this->device->setType(Device::TYPE_MOBILE);
            $this->device->setManufacturer(null);
            $this->device->setModel(null);

            $this->os->name = 'Windows Mobile';
            $this->os->version = null;

            if (preg_match('/ WM([0-9]) /', $ua, $match)) {
                $this->os->version = new OptimizedVersion(array('value' => $match[1] . '.0'));
            }
            else if (preg_match('/Iris\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }
            else {
                $this->browser->mode = 'desktop';
            }
        }

        /****************************************************
         *      Boxee
         */

        else if (preg_match('/Boxee/', $ua)) {
            $this->browser->name = 'Boxee';
            $this->device->setType(Device::TYPE_TELEVISION);

            if (preg_match('/Boxee\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }
        }

        /****************************************************
         *      LG Browser
         */

        else if (preg_match('/LG Browser\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'LG Browser';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
            $this->device->setType(Device::TYPE_TELEVISION);
        }

        /****************************************************
         *      Espial
         */

        else if (preg_match('/Espial/', $ua)) {
            $this->browser->name = 'Espial';

            $this->os->name = '';
            $this->os->version = null;

            if ($this->device->type != Device::TYPE_TELEVISION) {
                $this->device->setType(Device::TYPE_TELEVISION);
                $this->device->setManufacturer(null);
                $this->device->setModel(null);
            }

            if (preg_match('/Espial\/([0-9.]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if (preg_match('/;L7200/', $ua)) {
                $this->device->setManufacturer('Toshiba');
                $this->device->setModel('L7200 Smart TV');
                $this->device->setIdentified(ID_UA_MATCH, '|');
            }
        }

        /****************************************************
         *      ANT Galio
         */

        else if (preg_match('/ANTGalio\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'ANT Galio';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            $this->device->setType(Device::TYPE_TELEVISION);
        }

        /****************************************************
         *      NetFront
         */

        else if (preg_match('/Net[fF]ront/', $ua)) {
            $this->browser->name = 'NetFront';
            $this->device->setType(Device::TYPE_MOBILE);

            if (preg_match('/NetFront\/?([0-9.]*)/i', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }

            if (preg_match('/InettvBrowser/', $ua)) {
                $this->device->setType(Device::TYPE_TELEVISION);
            }
        }

        else if (preg_match('/Browser\/NF([0-9.]*)/i', $ua, $match)) {
            $this->browser->name = 'NetFront';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            $this->device->setType(Device::TYPE_MOBILE);
        }

        /****************************************************
         *      NetFront NX
         */

        else if (preg_match('/NX\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'NetFront NX';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));

            if (!isset($this->device->type) || !$this->device->type) {
                if (preg_match('/DTV/i', $ua)) {
                    $this->device->setType(Device::TYPE_TELEVISION);
                } else if (preg_match('/mobile/i', $ua)) {
                    $this->device->setType(Device::TYPE_MOBILE);
                } else {
                    $this->device->setType(Device::TYPE_DESKTOP);
                }
            }

            $this->os->name = '';
            $this->os->version = null;
        }

        /****************************************************
         *      Obigo
         */

        else if (preg_match('/(?:Obigo|Teleca)/i', $ua)) {
            $this->browser->name = 'Obigo';

            if (preg_match('/Browser\/(?:Obigo|Teleca)[_-](?:Browser\/)?([A-Z])([0-9.]*)/i', $ua, $match)) {
                $this->browser->name = 'Obigo ' . $match[1];
                $this->browser->version = new OptimizedVersion(array('value' => $match[2]));
            }
            else if (preg_match('/(?:Obigo|Teleca)[- ]([A-Z])([0-9.]*)[\/;]/i', $ua, $match)) {
                $this->browser->name = 'Obigo ' . $match[1];
                $this->browser->version = new OptimizedVersion(array('value' => $match[2]));
            }
            else if (preg_match('/Obigo(?:InternetBrowser)?\/([A-Z])([0-9.]*)/i', $ua, $match)) {
                $this->browser->name = 'Obigo ' . $match[1];
                $this->browser->version = new OptimizedVersion(array('value' => $match[2]));
            }
            else if (preg_match('/Obigo\/([0-9.]*)/i', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1]));
            }
        }

        /****************************************************
         *      UC Web
         */

        else if (preg_match('/UCWEB/', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'UC Browser';

            unset($this->browser->channel);

            if (preg_match('/UCWEB\/?([0-9]*[.][0-9]*)/', $ua, $match)) {
                $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            }

            if (!$this->device->type) {
                $this->device->setType(Device::TYPE_MOBILE);
            }

            if (isset($this->os->name) && $this->os->name == 'Linux') {
                $this->os->name = '';
            }

            if (preg_match('/\(Windows;/', $ua)) {
                $this->os->name = 'Windows Phone';
                $this->os->version = null;

                if (preg_match('/wds ([0-9]\.[0-9])/', $ua, $match)) {
                    switch($match[1]) {
                        case '7.0':     $this->os->version = new OptimizedVersion(array('value' => '7.0')); break;
                        case '7.1':     $this->os->version = new OptimizedVersion(array('value' => '7.5')); break;
                        case '8.0':     $this->os->version = new OptimizedVersion(array('value' => '8.0')); break;
                    }
                }

                if (preg_match('/; ([^;]+); ([^;]+)\)/', $ua, $match)) {
                    $this->device->setManufacturer($match[1]);
                    $this->device->setModel($match[2]);
                    $this->device->setIdentified(Device::ID_PATTERN, '|');

                    $device = OptimizedDeviceModels::identify('wp', $match[2]);

                    if ($device->identified) {
                        $this->device->setIdentified($this->device->getIdentified(), '|');
                        $this->device = $device;
                    }
                }
            }
            else if (preg_match('/\(iOS;/', $ua)) {
                $this->os->name = 'iOS';
                $this->os->version = new OptimizedVersion(array('value' => '1.0'));

                if (preg_match('/OS ([0-9_]*);/', $ua, $match)) {
                    $this->os->version = new OptimizedVersion(array('value' => str_replace('_', '.', $match[1])));
                }
            }
            else if (preg_match('/; Adr ([0-9\.]+); [^;]+; ([^;]*[^\s])\)/', $ua, $match)) {
                $this->os->name = 'Android';
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));

                $this->device = OptimizedDeviceModels::identify('android', $match[2]);
            }
            else if (preg_match('/^JUC ?\(Linux; ?U; ?([0-9\.]+)[^;]*; ?[^;]+; ?([^;]*[^\s])\s*; ?[0-9]+\*[0-9]+\)/', $ua, $match)) {
                $this->os->name = 'Android';
                $this->os->version = new OptimizedVersion(array('value' => $match[1]));

                $this->device = OptimizedDeviceModels::identify('android', $match[2]);
            }
            else if (preg_match('/^IUC ?\(U; ?iOS ([0-9\._]+);/', $ua, $match)) {
                $this->os->name = 'iOS';
                $this->os->version = new OptimizedVersion(array('value' => str_replace('_', '.', $match[1])));
            }
        }

        else if (preg_match('/ucweb-squid/', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'UC Browser';

            unset($this->browser->channel);
        }

        else if (preg_match('/\) UC /', $ua)) {
            $this->browser->stock = false;
            $this->browser->name = 'UC Browser';

            unset($this->browser->version);
            unset($this->browser->channel);
            unset($this->browser->mode);

            if (!$this->device->type) {
                $this->device->setType(Device::TYPE_MOBILE);
            }

            if ($this->device->type == Device::TYPE_DESKTOP) {
                $this->device->setType(Device::TYPE_MOBILE);
                $this->browser->mode = 'desktop';
            }
        }

        else if (preg_match('/UC ?Browser\/?([0-9.]*)/', $ua, $match)) {
            $this->browser->stock = false;
            $this->browser->name = 'UC Browser';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));

            unset($this->browser->channel);

            if (!$this->device->type) {
                $this->device->setType(Device::TYPE_MOBILE);
            }
        }

        /* U2 is the Proxy service used by UC Browser on low-end phones */
        else if (preg_match('/U2\//', $ua)) {
            $this->engine->name = 'Gecko';
            $this->browser->mode = 'proxy';

            /* UC Browser running on Windows 8 is identifing itself as U2, but instead its a Trident Webview */
            if (isset($this->os->name) && isset($this->os->version)) {
                if ($this->os->name == 'Windows Phone' && $this->os->version->toFloat() >= 8) {
                    $this->engine->name = 'Trident';
                    $this->browser->mode = '';
                }
            }
        }

        /* U3 is the Webkit based Webview used on Android phones */
        else if (preg_match('/U3\//', $ua)) {
            $this->engine->name = 'Webkit';
        }


        /****************************************************
         *      NineSky
         */

        else if (preg_match('/Ninesky(?:-android-mobile(?:-cn)?)?\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'NineSky';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));

            if ($this->os->name != 'Android') {
                $this->os->name = 'Android';
                $this->os->version = null;

                $this->device->setManufacturer(null);
                $this->device->setModel(null);
            }
        }

        /****************************************************
         *      Skyfire
         */

        else if (preg_match('/Skyfire\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'Skyfire';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));

            $this->device->setType(Device::TYPE_MOBILE);

            $this->os->name = 'Android';
            $this->os->version = null;
        }

        /****************************************************
         *      Dolphin HD
         */

        else if (preg_match('/DolphinHDCN\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'Dolphin';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));

            $this->device->setType(Device::TYPE_MOBILE);

            if ($this->os->name != 'Android') {
                $this->os->name = 'Android';
                $this->os->version = null;
            }
        }

        else if (preg_match('/Dolphin\/(?:INT|CN)/', $ua, $match)) {
            $this->browser->name = 'Dolphin';
            $this->device->setType(Device::TYPE_MOBILE);
        }

        /****************************************************
         *      QQ Browser
         */

        else if (preg_match('/(M?QQBrowser)\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'QQ Browser';

            $version = $match[2];
            if (preg_match('/^[0-9][0-9]$/', $version)) $version = $version[0] . '.' . $version[1];

            $this->browser->version = new OptimizedVersion(array('value' => $version, 'details' => 2));
            $this->browser->channel = '';

            if (!$this->os->name && $match[1] == 'QQBrowser') {
                $this->os->name = 'Windows';
            }
        }

        /****************************************************
         *      iBrowser
         */

        else if (preg_match('/(iBrowser)\/([0-9.]*)/', $ua, $match) && !preg_match('/OviBrowser/', $ua)) {
            $this->browser->name = 'iBrowser';

            $version = $match[2];
            if (preg_match('/^[0-9][0-9]$/', $version)) $version = $version[0] . '.' . $version[1];

            $this->browser->version = new OptimizedVersion(array('value' => $version, 'details' => 2));
            $this->browser->channel = '';
        }

        /****************************************************
         *      Puffin
         */

        else if (preg_match('/Puffin\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'Puffin';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 2));
            $this->browser->mode = 'proxy';
            $this->browser->channel = '';

            $this->device->setType(Device::TYPE_MOBILE);

            if ($this->os->name == 'Linux') {
                $this->os->name = null;
                $this->os->version = null;
            }
        }

        /****************************************************
         *      Midori
         */

        else if (preg_match('/Midori\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'Midori';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));

            $this->device->setManufacturer(null);
            $this->device->setModel(null);
            $this->device->setType(Device::TYPE_DESKTOP);

            if ($this->os->name == 'Mac OS X' || $this->os->name == 'OS X') {
                $this->os->name = null;
                $this->os->version = null;
            }
        }

        else if (preg_match('/midori$/', $ua)) {
            $this->browser->name = 'Midori';
        }


        /****************************************************
         *      MiniBrowser Mobile
         */

        else if (preg_match('/MiniBr?owserM(?:obile)?\/([0-9.]*)/', $ua, $match)) {
            $this->browser->name = 'MiniBrowser';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1]));

            $this->os->name = 'Series60';
            $this->os->version = null;
        }

        /****************************************************
         *      Maxthon
         */

        else if (preg_match('/Maxthon[\/\' ]\(?([0-9.]*)\)?/', $ua, $match)) {
            $this->browser->name = 'Maxthon';
            $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => 3));
            $this->browser->channel = '';

            if ($this->os->name == 'Windows' && $this->browser->version->toFloat() < 4) {
                $this->browser->version->details = 1;
            }
        }

        /****************************************************
         *      Others
         */

        for ($b = 0; $b < count(static::$OTHER_BROWSER); $b++) {
            if (preg_match(static::$OTHER_BROWSER[$b]['regexp'], $ua, $match)) {
                $this->browser->name = static::$OTHER_BROWSER[$b]['name'];
                $this->browser->channel = '';
                $this->browser->hidden = false;
                $this->browser->stock = false;

                if (isset($match[1]) && $match[1]) {
                    $this->browser->version = new OptimizedVersion(array('value' => $match[1], 'details' => isset(static::$OTHER_BROWSER[$b]['details']) ? static::$OTHER_BROWSER[$b]['details'] : null));
                } else {
                    $this->browser->version = null;
                }

                if (isset(static::$OTHER_BROWSER[$b]['type'])) {
                    $this->device->setType(static::$OTHER_BROWSER[$b]['type']);
                }

                break;
            }
        }

        $this->makeCorrections($ua);
    }

    protected function makeCorrections($ua)
    {
        if (isset($this->os->name)) {
            if ($this->os->name == 'Android' && $this->browser->stock) {
                $this->browser->hidden = true;
            }

            if ($this->os->name == 'Aliyun OS' && $this->browser->stock) {
                $this->browser->hidden = true;
            }
        }

        if (isset($this->os->name) && isset($this->browser->name)) {
            if ($this->os->name == 'iOS' && $this->browser->name == 'Opera Mini') {
                $this->os->version = null;
            }

            if ($this->os->name == 'Series80' && $this->browser->name == 'Internet Explorer') {
                $this->browser->name = null;
                $this->browser->version = null;
            }
        }

        if (isset($this->browser->name) && isset($this->engine->name)) {
            if ($this->browser->name == 'Midori' && $this->engine->name != 'Webkit') {
                $this->engine->name = 'Webkit';
                $this->engine->version = null;
            }
        }


        if (isset($this->browser->name) && $this->browser->name == 'Firefox Mobile' && !isset($this->os->name)) {
            $this->os->name = 'Firefox OS';
        }


        if (isset($this->browser->name) && $this->browser->name == 'Opera' && $this->device->type == Device::TYPE_TELEVISION) {
            $this->browser->name = 'Opera Devices';

            if (preg_match('/Presto\/([0-9]+\.[0-9]+)/', $ua, $match)) {
                switch($match[1]) {
                    case '2.12':        $this->browser->version = new OptimizedVersion(array('value' => '3.4')); break;
                    case '2.11':        $this->browser->version = new OptimizedVersion(array('value' => '3.3')); break;
                    case '2.10':        $this->browser->version = new OptimizedVersion(array('value' => '3.2')); break;
                    case '2.9':         $this->browser->version = new OptimizedVersion(array('value' => '3.1')); break;
                    case '2.8':         $this->browser->version = new OptimizedVersion(array('value' => '3.0')); break;
                    case '2.7':         $this->browser->version = new OptimizedVersion(array('value' => '2.9')); break;
                    case '2.6':         $this->browser->version = new OptimizedVersion(array('value' => '2.8')); break;
                    case '2.4':         $this->browser->version = new OptimizedVersion(array('value' => '10.3')); break;
                    case '2.3':         $this->browser->version = new OptimizedVersion(array('value' => '10')); break;
                    case '2.2':         $this->browser->version = new OptimizedVersion(array('value' => '9.7')); break;
                    case '2.1':         $this->browser->version = new OptimizedVersion(array('value' => '9.6')); break;
                    default:            unset($this->browser->version);
                }
            }

            unset($this->os->name);
            unset($this->os->version);
        }

        if (isset($this->browser->name)) {
            if ($this->browser->name == 'UC Browser') {
                if ($this->device->type == 'desktop' || (isset($this->os->name) && ($this->os->name == 'Windows' || $this->os->name == 'Mac OS X'))) {
                    $this->device->setType(Device::TYPE_MOBILE);

                    $this->browser->mode = 'desktop';

                    unset($this->engine->name);
                    unset($this->engine->version);
                    unset($this->os->name);
                    unset($this->os->version);
                }

                else if (!isset($this->os->name) || ($this->os->name != 'iOS' && $this->os->name != 'Windows Phone' && $this->os->name != 'Android' && $this->os->name != 'Aliyun OS')) {
                    $this->engine->name = 'Gecko';
                    unset($this->engine->version);
                    $this->browser->mode = 'proxy';
                }

                if (isset($this->engine->name) && $this->engine->name == 'Presto') {
                    $this->engine->name = 'Webkit';
                    unset($this->engine->version);
                }
            }
        }

        if ($this->device->getFlag() == FLAG_GOOGLETV) {
            $this->os->name = 'Google TV';

            unset($this->os->version);
            $this->device->setFlag(null);
        }

        if ($this->device->getFlag() == FLAG_GOOGLEGLASS) {
            unset($this->os->name);
            unset($this->os->version);
            $this->device->setFlag(null);
        }


        if ($this->device->getType() == Device::TYPE_BOT) {
            $this->device->setIdentified(false);
            unset($this->os->name);
            unset($this->os->version);
            $this->device->setManufacturer(null);
            $this->device->setModel(null);
        }

        if (!$this->device->getIdentified() && $this->device->getModel() != '') {
            if (preg_match('/^[a-z][a-z]-[a-z][a-z]$/', $this->device->getModel())) {
                $this->device->setModel(null);
            }
        }


        if (isset($this->os->name) && $this->os->name == 'Android') {
            if (preg_match('/Build\/([^\);]+)/', $ua, $match)) {
                $version = OptimizedBuildIds::identify('android', $match[1]);

                if ($version) {
                    if (!isset($this->os->version) || $this->os->version == null || $this->os->version->value == null || $version->toFloat() < $this->os->version->toFloat()) {
                        $this->os->version = $version;
                    }
                }

                $this->os->build = $match[1];
            }
        }
    }

    function analyseUserAgent($ua) {
        $this->detectOSAndDevice($ua);
        $this->detectBrowser($ua);
        $this->detectEngine($ua);
    }

    // function analyseWapProfile($url) {
    // }
    // function analyseBrowserId($id) {
    // }

}
