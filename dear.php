<?php
/*

Plugin Name: IP Address
Plugin URI: http://www.devilhunter.net/
Description: Go to Appearance > Widgets, and drag 'IP Address' in sidebar or footer or in any widgetized area. This PlugIn will automatically match your theme's color. No need to use any short-code or to edit settings.
Version: 1.0
Author: Tawhidur Rahman Dear
Author URI: http://www.facebook.com/tawhidurrahmandear/ 
License: GPLv2 or later 

	Tawhidur Rahman Dear
    Mailing Address: 
	House - 304, Road - 10 Rupnagar Tinshed,
    Pallabi, Mirpur,
    Dhaka - 1216
    BANGLADESH
    tawhidurrahmandear@gmail.com
    +8801716816283, (also in Viber, DUO, WhatsApp, IMO)
    Skype & Google Hangout: tawhidurrahmandear
    Facebook: http://www.facebook.com/tawhidurrahmandear/ 
    Google Plus: http://plus.google.com/+tawhidurrahmandear/about
	Personal Blog: http://tawhidurrahmandear.blogspot.com 
 
 */


namespace dearthirtyseven\dear\wordpress;

{require_once(__DIR__ . "/pluginfiles/widget.php");}

  class S extends Widget {
    static $widgetTitle = "dearthirtyseven_ipaddress";

    public function __construct() {
      parent::__construct(null, "IP Address");
    }


    public function widgetContent($args, $instance)
    {
      ?>
<p align="center">Your IP Address is:</p>
<div style='text-align:center'><? echo $_SERVER["REMOTE_ADDR"]; ?></div>
<p align="center"></p>
<?php
    
    }
  }

  S::register("dearthirtyseven_ipaddress");


