<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sat, 14 Jun 2014 15:29:27 GMT
 */

if ( ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$sys_info['disable_classes']=array();
$sys_info['disable_functions']=array();
$sys_info['ini_set_support']= true;
$sys_info['supports_rewrite']='rewrite_mode_apache';

define('DIR_FORUM', '');
define('NV_ALLOWED_HTML_TAGS', 'embed, object, param, a, b, blockquote, br, caption, col, colgroup, div, em, h1, h2, h3, h4, h5, h6, hr, i, img, li, p, span, strong, sub, sup, table, tbody, td, th, tr, u, ul, iframe, figure, figcaption, video, source, track');
define('NV_ANTI_AGENT', 0);
define('NV_ANTI_IFRAME', 0);
define('NV_GFX_HEIGHT', 25);
define('NV_GFX_NUM', 6);
define('NV_GFX_WIDTH', 120);
define('NV_LIVE_COOKIE_TIME', 31104000);
define('NV_LIVE_SESSION_TIME', 0);
define('NV_MAX_HEIGHT', 1500);
define('NV_MAX_WIDTH', 1500);
define('NV_UNICKMAX', 20);
define('NV_UNICKMIN', 4);
define('NV_UPASSMAX', 20);
define('NV_UPASSMIN', 5);
define('NV_EOL', "\r\n");
define('NV_UPLOAD_MAX_FILESIZE', 2097152);
define('NV_OPENID_ALLOWED', true);

$openid_servers=array('google'=>array('identity'=>'https://www.google.com/accounts/o8/id', 'required'=>array('email'=>'contact/email', 'firstname'=>'namePerson/first', 'lastname'=>'namePerson/last', 'gender'=>'person/gender')), 'yahoo'=>array('identity'=>'https://me.yahoo.com', 'required'=>array('email'=>'contact/email', 'nickname'=>'namePerson/friendly', 'fullname'=>'namePerson', 'gender'=>'person/gender')), 'myopenid'=>array('identity'=>'https://www.myopenid.com', 'required'=>array('email'=>'contact/email', 'nickname'=>'namePerson/friendly', 'fullname'=>'namePerson', 'gender'=>'person/gender')));
$global_config['admfirewall']=0;
$global_config['adminrelogin_max']=3;
$global_config['admin_check_pass_time']=1800;
$global_config['allowloginchange']=0;
$global_config['allowmailchange']=1;
$global_config['allowquestion']=0;
$global_config['allowuserlogin']=1;
$global_config['allowuserpublic']=0;
$global_config['allowuserreg']=1;
$global_config['allow_adminlangs']=array('en','vi');
$global_config['allow_sitelangs']=array('vi');
$global_config['authors_detail_main']=0;
$global_config['autocheckupdate']=1;
$global_config['autoupdatetime']=24;
$global_config['block_admin_ip']=0;
$global_config['captcha_type']=0;
$global_config['cdn_url']='';
$global_config['cookie_httponly']=1;
$global_config['cookie_prefix']='nv3c_Vxx9c';
$global_config['cookie_secure']=0;
$global_config['display_errors_list']=32767;
$global_config['dump_autobackup']=1;
$global_config['dump_backup_day']=30;
$global_config['dump_backup_ext']='gz';
$global_config['dump_interval']=1;
$global_config['error_send_email']='quangbl2012@gmail.com';
$global_config['facebook_client_id']='';
$global_config['facebook_client_secret']='';
$global_config['file_allowed_ext']=array('adobe','archives','audio','documents','flash','images','real','video');
$global_config['forbid_extensions']=array('php','php3','php4','php5','phtml','inc');
$global_config['forbid_mimes']=array();
$global_config['ftp_check_login']=0;
$global_config['ftp_path']='/';
$global_config['ftp_port']=21;
$global_config['ftp_server']='localhost';
$global_config['ftp_user_name']='';
$global_config['ftp_user_pass']='RlmBuRRlNO3oJD2oAFCD-0ZZgbkUZTTt6CQ9qABQg_s,';
$global_config['gfx_chk']=3;
$global_config['gzip_method']=1;
$global_config['is_flood_blocker']=1;
$global_config['is_user_forum']=0;
$global_config['lang_geo']=0;
$global_config['lang_multi']=1;
$global_config['max_requests_300']=150;
$global_config['max_requests_60']=40;
$global_config['mudim_active']=1;
$global_config['mudim_displaymode']=1;
$global_config['mudim_method']=4;
$global_config['mudim_showpanel']=1;
$global_config['my_domains']='localhost:8080';
$global_config['nv_auto_resize']=1;
$global_config['nv_display_errors_list']=1;
$global_config['nv_max_size']=2097152;
$global_config['nv_unick_type']=4;
$global_config['nv_upass_type']=0;
$global_config['openid_mode']=1;
$global_config['openid_servers']=array('yahoo','google','myopenid');
$global_config['optActive']=1;
$global_config['proxy_blocker']=0;
$global_config['read_type']=0;
$global_config['rewrite_endurl']='/';
$global_config['rewrite_exturl']='.html';
$global_config['rewrite_optional']=0;
$global_config['rewrite_op_mod']='';
$global_config['session_prefix']='nv3s_Fkcc8s';
$global_config['site_keywords']='NukeViet, portal, mysql, php';
$global_config['site_lang']='vi';
$global_config['site_phone']='';
$global_config['site_timezone']='byCountry';
$global_config['spadmin_add_admin']=1;
$global_config['str_referer_blocker']=0;
$global_config['timestamp']=1;
$global_config['upload_checking_mode']='mild';
$global_config['useactivate']=2;
$global_config['version']='4.0.07';
$global_config['whoviewuser']=2;
$global_config['check_rewrite_file']=1;
$global_config['allow_request_mods']=array('get','post','cookie','session','request','env','server');
$global_config['request_default_mode']='request';
$global_config['session_save_path']='sess';
$global_config['log_errors_list']=32767;
$global_config['send_errors_list']=256;
$global_config['error_log_path']='logs/error_logs';
$global_config['error_log_filename']='error_log';
$global_config['error_log_fileext']='log';
$global_config['array_theme_type']=array(0=>'d', 1=>'t');
$global_config['allowed_html_tags']=array('embed','object','param','a','b','blockquote','br','caption','col','colgroup','div','em','h1','h2','h3','h4','h5','h6','hr','i','img','li','p','span','strong','sub','sup','table','tbody','td','th','tr','u','ul','iframe','figure','figcaption','video','source','track');
$global_config['engine_allowed']=array('Google'=>array('host_pattern'=>'google.', 'query_param'=>'q'), 'Yahoo'=>array('host_pattern'=>'yahoo.', 'query_param'=>'p'), 'MSN'=>array('host_pattern'=>'search.msn', 'query_param'=>'q'), 'Localhost'=>array('host_pattern'=>'localhost', 'query_param'=>'q'));

$language_array=array('en'=>array('name'=>'English', 'language'=>'English'), 'vi'=>array('name'=>'Tiếng Việt', 'language'=>'Vietnamese'));
$nv_parse_ini_browsers=array('netcaptor'=>array('name'=>'Netcaptor', 'rule'=>'netcaptor[ /]([0-9.]{1,10})'), 'opera'=>array('name'=>'Opera', 'rule'=>'opera[ /]([0-9.]{1,10})'), 'aol'=>array('name'=>'AOL', 'rule'=>'aol[ /\\-]([0-9.]{1,10})'), 'aol2'=>array('name'=>'AOL', 'rule'=>'aol[ /\\-]?browser'), 'mosaic'=>array('name'=>'Mosaic', 'rule'=>'mosaic[ /]([0-9.]{1,10})'), 'k-meleon'=>array('name'=>'K-Meleon', 'rule'=>'K-Meleon[ /]([0-9.]{1,10})'), 'konqueror'=>array('name'=>'Konqueror', 'rule'=>'konqueror/([0-9.]{1,10})'), 'avantbrowser'=>array('name'=>'Avant Browser', 'rule'=>'Avant[ ]?Browser'), 'avantgo'=>array('name'=>'AvantGo', 'rule'=>'AvantGo[ /]([0-9.]{1,10})'), 'proxomitron'=>array('name'=>'Proxomitron', 'rule'=>'Space[ ]?Bison/[0-9.]{1,10}'), 'chrome'=>array('name'=>'Chrome', 'rule'=>'chrome/([0-9.]{1,10})'), 'safari'=>array('name'=>'Safari', 'rule'=>'safari/([0-9.]{1,10})'), 'lynx'=>array('name'=>'Lynx', 'rule'=>'lynx/([0-9a-z.]{1,10})'), 'links'=>array('name'=>'Links', 'rule'=>'Links[ /]\\(([0-9.]{1,10})'), 'galeon'=>array('name'=>'Galeon', 'rule'=>'galeon/([0-9.]{1,10})'), 'abrowse'=>array('name'=>'ABrowse', 'rule'=>'abrowse/([0-9.]{1,10})'), 'amaya'=>array('name'=>'Amaya', 'rule'=>'amaya/([0-9.]{1,10})'), 'ant'=>array('name'=>'ANTFresco', 'rule'=>'ANTFresco[ /]([0-9.]{1,10})'), 'aweb'=>array('name'=>'Aweb', 'rule'=>'Aweb[/ ]([0-9.]{1,10})'), 'beonex'=>array('name'=>'Beonex', 'rule'=>'beonex/([0-9.]{1,10})'), 'blazer'=>array('name'=>'Blazer', 'rule'=>'Blazer[/ ]([0-9.]{1,10})'), 'camino'=>array('name'=>'Camino', 'rule'=>'camino/([0-9.+]{1,10})'), 'chimera'=>array('name'=>'Chimera', 'rule'=>'chimera/([0-9.+]{1,10})'), 'columbus'=>array('name'=>'Columbus', 'rule'=>'columbus[ /]([0-9.]{1,10})'), 'crazybrowser'=>array('name'=>'Crazy Browser', 'rule'=>'Crazy Browser[ /]([0-9.]{1,10})'), 'curl'=>array('name'=>'Curl', 'rule'=>'curl[ /]([0-9.]{1,10})'), 'deepnet'=>array('name'=>'Deepnet Explorer', 'rule'=>'Deepnet Explorer[/ ]([0-9.]{1,10})'), 'dillo'=>array('name'=>'Dillo', 'rule'=>'dillo/([0-9.]{1,10})'), 'doris'=>array('name'=>'Doris', 'rule'=>'Doris/([0-9.]{1,10})'), 'elinks'=>array('name'=>'ELinks', 'rule'=>'ELinks[ /][(]*([0-9.]{1,10})'), 'epiphany'=>array('name'=>'Epiphany', 'rule'=>'Epiphany/([0-9.]{1,10})'), 'ibrowse'=>array('name'=>'IBrowse', 'rule'=>'ibrowse[ /]([0-9.]{1,10})'), 'icab'=>array('name'=>'iCab', 'rule'=>'icab[/ ]([0-9.]{1,10})'), 'ice'=>array('name'=>'ICEbrowser', 'rule'=>'ICEbrowser/v?([0-9._]{1,10})'), 'isilox'=>array('name'=>'iSiloX', 'rule'=>'iSilox/([0-9.]{1,10})'), 'lotus'=>array('name'=>'Lotus Notes', 'rule'=>'Lotus[ -]?Notes[ /]([0-9.]{1,10})'), 'lunascape'=>array('name'=>'Lunascape', 'rule'=>'Lunascape[ /]([0-9.]{1,10})'), 'maxthon'=>array('name'=>'Maxthon', 'rule'=>' Maxthon[);]'), 'mbrowser'=>array('name'=>'mBrowser', 'rule'=>'mBrowser[ /]([0-9.]{1,10})'), 'multibrowser'=>array('name'=>'Multi-Browser', 'rule'=>'Multi-Browser[ /]([0-9.]{1,10})'), 'nautilus'=>array('name'=>'Nautilus', 'rule'=>'(gnome[ -]?vfs|nautilus)/([0-9.]{1,10})'), 'netfront'=>array('name'=>'NetFront', 'rule'=>'NetFront[ /]([0-9.]{1,10})$'), 'netpositive'=>array('name'=>'NetPositive', 'rule'=>'netpositive[ /]([0-9.]{1,10})'), 'omniweb'=>array('name'=>'OmniWeb', 'rule'=>'omniweb/[ a-z]?([0-9.]{1,10})$'), 'oregano'=>array('name'=>'Oregano', 'rule'=>'Oregano[0-9]?[ /]([0-9.]{1,10})$'), 'phaseout'=>array('name'=>'PhaseOut', 'rule'=>'www.phaseout.net'), 'plink'=>array('name'=>'PLink', 'rule'=>'PLink[ /]([0-9a-z.]{1,10})'), 'phoenix'=>array('name'=>'Phoenix', 'rule'=>'Phoenix/([0-9.+]{1,10})'), 'shiira'=>array('name'=>'Shiira', 'rule'=>'Shiira/([0-9.]{1,10})'), 'sleipnir'=>array('name'=>'Sleipnir', 'rule'=>'Sleipnir( Version)?[ /]([0-9.]{1,10})'), 'slimbrowser'=>array('name'=>'SlimBrowser', 'rule'=>'Slimbrowser'), 'staroffice'=>array('name'=>'StarOffice', 'rule'=>'staroffice[ /]([0-9.]{1,10})'), 'sunrise'=>array('name'=>'Sunrise', 'rule'=>'SunriseBrowser[ /]([0-9.]{1,10})'), 'voyager'=>array('name'=>'Voyager', 'rule'=>'voyager[ /]([0-9.]{1,10})'), 'w3m'=>array('name'=>'w3m', 'rule'=>'w3m/([0-9.]{1,10})'), 'webtv'=>array('name'=>'Webtv', 'rule'=>'webtv[ /]([0-9.]{1,10})'), 'xiino'=>array('name'=>'Xiino', 'rule'=>'^Xiino[ /]([0-9a-z.]{1,10})'), 'explorer'=>array('name'=>'Internet Explorer', 'rule'=>'\\(compatible; MSIE[ /]([0-9.]{1,10})'), 'firefox'=>array('name'=>'Firefox', 'rule'=>'Firefox/([0-9.+]{1,10})'), 'netscape'=>array('name'=>'Netscape', 'rule'=>'netscape[0-9]?/([0-9.]{1,10})'), 'netscape2'=>array('name'=>'Netscape', 'rule'=>'^mozilla/([0-4]\\.[0-9.]{1,10})'), 'mozilla'=>array('name'=>'Mozilla', 'rule'=>'^mozilla/[5-9]\\.[0-9.]{1,10}.+rv:([0-9a-z.+]{1,10})'), 'mozilla2'=>array('name'=>'Mozilla', 'rule'=>'^mozilla/([5-9]\\.[0-9a-z.]{1,10})'), 'firebird'=>array('name'=>'Firebird', 'rule'=>'Firebird/([0-9.+]{1,10})'));
$nv_parse_ini_mobile=array('ipad'=>array('name'=>'Apple iPad', 'rule'=>'/ipad/i'), 'iphone'=>array('name'=>'Apple([\\s]+)iphone', 'rule'=>'/(ipod|iphone)/i'), 'android'=>array('name'=>'Android', 'rule'=>'/android/i'), 'opera'=>array('name'=>'Opera Mini', 'rule'=>'/opera([\\s]+)mini/i'), 'blackberry'=>array('name'=>'Blackberry', 'rule'=>'/blackberry/i'), 'palm'=>array('name'=>'Palm', 'rule'=>'/(iris|3g_t|windows ce|opera mobi|windows ce; smartphone;|windows ce; iemobile)/i'), 'smartphone'=>array('name'=>'Windows Smartphone', 'rule'=>'/(iris|3g_t|windows ce|opera mobi|windows ce; smartphone;|windows ce; iemobile)/i'));
$nv_parse_ini_os=array('windows8'=>array('name'=>'Windows 8', 'rule'=>'wi(n|ndows)[ \\-]?nt[ /]?6\\.2'), 'windows7'=>array('name'=>'Windows 7', 'rule'=>'wi(n|ndows)[ \\-]?nt[ /]?6\\.1'), 'windowsvista'=>array('name'=>'Windows Vista', 'rule'=>'wi(n|ndows)[ \\-]?nt[ /]?6\\.0'), 'windows2003'=>array('name'=>'Windows 2003', 'rule'=>'wi(n|ndows)[ \\-]?(2003|nt[ /]?5\\.2)'), 'windowsxp'=>array('name'=>'Windows XP', 'rule'=>'Windows XP'), 'windowsxp2'=>array('name'=>'Windows XP', 'rule'=>'wi(n|ndows)[ \\-]?nt[ /]?5\\.1'), 'windows2k'=>array('name'=>'Windows 2000', 'rule'=>'wi(n|ndows)[ \\-]?(2000|nt[ /]?5\\.0)'), 'windows95'=>array('name'=>'Windows 95', 'rule'=>'wi(n|ndows)[ \\-]?95'), 'windowsce'=>array('name'=>'Windows CE', 'rule'=>'wi(n|ndows)[ \\-]?ce'), 'windowsme'=>array('name'=>'Windows ME', 'rule'=>'win 9x 4\\.90'), 'windowsme2'=>array('name'=>'Windows ME', 'rule'=>'wi(n|ndows)[ \\-]?me'), 'windowsnt'=>array('name'=>'Windows NT', 'rule'=>'wi(n|ndows)[ \\-]?nt[ /]?([0-4][0-9.]{1,10})'), 'windowsnt2'=>array('name'=>'Windows NT', 'rule'=>'wi(n|ndows)[ \\-]?nt'), 'windows98'=>array('name'=>'Windows 98', 'rule'=>'wi(n|ndows)[ \\-]?98'), 'windows'=>array('name'=>'Windows', 'rule'=>'wi(n|n32|ndows)'), 'linux'=>array('name'=>'Linux', 'rule'=>'mdk for ([0-9.]{1,10})'), 'linux2'=>array('name'=>'Linux', 'rule'=>'linux[ /\\-]([a-z0-9.]{1,10})'), 'linux3'=>array('name'=>'Linux', 'rule'=>'linux'), 'macosx'=>array('name'=>'MacOS X', 'rule'=>'Mac[ ]?OS[ ]?X'), 'macppc'=>array('name'=>'MacOS PPC', 'rule'=>'Mac(_Power|intosh.+P)PC'), 'mac'=>array('name'=>'MacOS', 'rule'=>'mac[^hk]'), 'amiga'=>array('name'=>'Amiga', 'rule'=>'Amiga[ ]?OS[ /]([0-9.]{1,10})'), 'beos'=>array('name'=>'BeOS', 'rule'=>'beos[ a-z]*([0-9.]{1,10})'), 'freebsd'=>array('name'=>'FreeBSD', 'rule'=>'free[ \\-]?bsd[ /]([a-z0-9.]{1,10})'), 'freebsd2'=>array('name'=>'FreeBSD', 'rule'=>'free[ \\-]?bsd'), 'irix'=>array('name'=>'Irix', 'rule'=>'irix[0-9]*[ /]([0-9.]{1,10})'), 'netbsd'=>array('name'=>'NetBSD', 'rule'=>'net[ \\-]?bsd[ /]([a-z0-9.]{1,10})'), 'netbsd2'=>array('name'=>'NetBSD', 'rule'=>'net[ \\-]?bsd'), 'os2'=>array('name'=>'OS/2 Warp', 'rule'=>'warp[ /]?([0-9.]{1,10})'), 'os22'=>array('name'=>'OS/2 Warp', 'rule'=>'os[ /]?2'), 'openbsd'=>array('name'=>'OpenBSD', 'rule'=>'open[ \\-]?bsd[ /]([a-z0-9.]{1,10})'), 'openbsd2'=>array('name'=>'OpenBSD', 'rule'=>'open[ \\-]?bsd'), 'palm'=>array('name'=>'PalmOS', 'rule'=>'Palm[ \\-]?(Source|OS)[ /]?([0-9.]{1,10})'), 'palm2'=>array('name'=>'PalmOS', 'rule'=>'Palm[ \\-]?(Source|OS)'));
$nv_parse_ini_timezone=array('Pacific/Midway'=>array('winter_offset'=>'-39600', 'summer_offset'=>'-39600'), 'Pacific/Pago_Pago'=>array('winter_offset'=>'-39600', 'summer_offset'=>'-39600'), 'Pacific/Niue'=>array('winter_offset'=>'-39600', 'summer_offset'=>'-39600'), 'Pacific/Tahiti'=>array('winter_offset'=>'-36000', 'summer_offset'=>'-36000'), 'Pacific/Rarotonga'=>array('winter_offset'=>'-36000', 'summer_offset'=>'-36000'), 'Pacific/Apia'=>array('winter_offset'=>'-36000', 'summer_offset'=>'-36000'), 'Pacific/Fakaofo'=>array('winter_offset'=>'-36000', 'summer_offset'=>'-36000'), 'Pacific/Marquesas'=>array('winter_offset'=>'-34200', 'summer_offset'=>'-34200'), 'Pacific/Gambier'=>array('winter_offset'=>'-32400', 'summer_offset'=>'-32400'), 'US/Alaska'=>array('winter_offset'=>'-32400', 'summer_offset'=>'-28800'), 'Pacific/Pitcairn'=>array('winter_offset'=>'-28800', 'summer_offset'=>'-28800'), 'US/Pacific'=>array('winter_offset'=>'-28800', 'summer_offset'=>'-25200'), 'US/Arizona'=>array('winter_offset'=>'-25200', 'summer_offset'=>'-25200'), 'US/Mountain'=>array('winter_offset'=>'-25200', 'summer_offset'=>'-21600'), 'America/Belize'=>array('winter_offset'=>'-21600', 'summer_offset'=>'-21600'), 'America/Costa_Rica'=>array('winter_offset'=>'-21600', 'summer_offset'=>'-21600'), 'America/Guatemala'=>array('winter_offset'=>'-21600', 'summer_offset'=>'-21600'), 'America/El_Salvador'=>array('winter_offset'=>'-21600', 'summer_offset'=>'-21600'), 'America/Managua'=>array('winter_offset'=>'-21600', 'summer_offset'=>'-21600'), 'America/Tegucigalpa'=>array('winter_offset'=>'-21600', 'summer_offset'=>'-21600'), 'Pacific/Easter'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-21600'), 'US/Central'=>array('winter_offset'=>'-21600', 'summer_offset'=>'-18000'), 'America/Mexico_City'=>array('winter_offset'=>'-21600', 'summer_offset'=>'-18000'), 'America/Bogota'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-18000'), 'America/Cayman'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-18000'), 'America/Guayaquil'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-18000'), 'America/Jamaica'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-18000'), 'America/Lima'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-18000'), 'America/Nassau'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-18000'), 'America/Port-au-Prince'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-18000'), 'America/Panama'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-18000'), 'America/Havana'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-14400'), 'America/New_York'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-14400'), 'US/Eastern'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-14400'), 'America/Toronto'=>array('winter_offset'=>'-18000', 'summer_offset'=>'-14400'), 'America/Anguilla'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Antigua'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Aruba'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Barbados'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Caracas'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Curacao'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Dominica'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Grenada'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Guadeloupe'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Guyana'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/La_Paz'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Santo_Domingo'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/St_Kitts'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/St_Lucia'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Martinique'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Port_of_Spain'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Puerto_Rico'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/St_Thomas'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/St_Vincent'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Tortola'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-14400'), 'America/Santiago'=>array('winter_offset'=>'-10800', 'summer_offset'=>'-14400'), 'Canada/Atlantic'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-10800'), 'Atlantic/Bermuda'=>array('winter_offset'=>'-14400', 'summer_offset'=>'-10800'), 'America/Montevideo'=>array('winter_offset'=>'-10800', 'summer_offset'=>'-10800'), 'Antarctica/Rothera'=>array('winter_offset'=>'-10800', 'summer_offset'=>'-10800'), 'America/Paramaribo'=>array('winter_offset'=>'-10800', 'summer_offset'=>'-10800'), 'America/Argentina/Buenos_Aires'=>array('winter_offset'=>'-10800', 'summer_offset'=>'-10800'), 'America/Cayenne'=>array('winter_offset'=>'-10800', 'summer_offset'=>'-10800'), 'America/Sao_Paulo'=>array('winter_offset'=>'-7200', 'summer_offset'=>'-10800'), 'America/St_Johns'=>array('winter_offset'=>'-12600', 'summer_offset'=>'-9000'), 'America/Godthab'=>array('winter_offset'=>'-10800', 'summer_offset'=>'-7200'), 'America/Asuncion'=>array('winter_offset'=>'-10800', 'summer_offset'=>'-7200'), 'Atlantic/Stanley'=>array('winter_offset'=>'-10800', 'summer_offset'=>'-7200'), 'America/Noronha'=>array('winter_offset'=>'-7200', 'summer_offset'=>'-7200'), 'Atlantic/South_Georgia'=>array('winter_offset'=>'-7200', 'summer_offset'=>'-7200'), 'Atlantic/Cape_Verde'=>array('winter_offset'=>'-3600', 'summer_offset'=>'-3600'), 'Atlantic/Azores'=>array('winter_offset'=>'-3600', 'summer_offset'=>'0'), 'Africa/Abidjan'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Accra'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Bamako'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Banjul'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Bissau'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Casablanca'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Conakry'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Dakar'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Freetown'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Lome'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Monrovia'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Nouakchott'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Ouagadougou'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Atlantic/Reykjavik'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Africa/Sao_Tome'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Europe/Lisbon'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'UTC'=>array('winter_offset'=>'0', 'summer_offset'=>'0'), 'Europe/Dublin'=>array('winter_offset'=>'0', 'summer_offset'=>'3600'), 'Europe/London'=>array('winter_offset'=>'0', 'summer_offset'=>'3600'), 'Africa/Algiers'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Bangui'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Brazzaville'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Douala'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Kinshasa'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Malabo'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Lagos'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Libreville'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Luanda'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Ndjamena'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Niamey'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Porto-Novo'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Tunis'=>array('winter_offset'=>'3600', 'summer_offset'=>'3600'), 'Africa/Windhoek'=>array('winter_offset'=>'7200', 'summer_offset'=>'3600'), 'Europe/Amsterdam'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Andorra'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Belgrade'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Berlin'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Bratislava'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Brussels'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Budapest'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Bucharest'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Chisinau'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Copenhagen'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Gibraltar'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Istanbul'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Kiev'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Ljubljana'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Luxembourg'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Malta'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Monaco'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Oslo'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Madrid'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Paris'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Prague'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Rome'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/San_Marino'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Sarajevo'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Skopje'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Stockholm'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Vatican'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Tirane'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Vaduz'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Vienna'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Zagreb'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Zurich'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Europe/Warsaw'=>array('winter_offset'=>'3600', 'summer_offset'=>'7200'), 'Africa/Blantyre'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Bujumbura'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Cairo'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Gaborone'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Harare'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Johannesburg'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Kigali'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Lusaka'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Maputo'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Maseru'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Mbabane'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Africa/Tripoli'=>array('winter_offset'=>'7200', 'summer_offset'=>'7200'), 'Europe/Athens'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Europe/Riga'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Europe/Helsinki'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Europe/Tallinn'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Europe/Sofia'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Asia/Amman'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Asia/Beirut'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Asia/Damascus'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Asia/Gaza'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Asia/Jerusalem'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Asia/Nicosia'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Europe/Vilnius'=>array('winter_offset'=>'7200', 'summer_offset'=>'10800'), 'Africa/Addis_Ababa'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Indian/Antananarivo'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Africa/Asmara'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Africa/Dar_es_Salaam'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Africa/Kampala'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Africa/Khartoum'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Africa/Mogadishu'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Africa/Nairobi'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Africa/Djibouti'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Asia/Bahrain'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Asia/Kuwait'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Indian/Comoro'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Asia/Baghdad'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Asia/Aden'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Europe/Moscow'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Asia/Qatar'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Asia/Riyadh'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Indian/Mayotte'=>array('winter_offset'=>'10800', 'summer_offset'=>'10800'), 'Europe/Minsk'=>array('winter_offset'=>'10800', 'summer_offset'=>'14400'), 'Asia/Dubai'=>array('winter_offset'=>'14400', 'summer_offset'=>'14400'), 'Asia/Muscat'=>array('winter_offset'=>'14400', 'summer_offset'=>'14400'), 'Asia/Tbilisi'=>array('winter_offset'=>'14400', 'summer_offset'=>'14400'), 'Indian/Mahe'=>array('winter_offset'=>'14400', 'summer_offset'=>'14400'), 'Indian/Mauritius'=>array('winter_offset'=>'14400', 'summer_offset'=>'14400'), 'Indian/Reunion'=>array('winter_offset'=>'14400', 'summer_offset'=>'14400'), 'Asia/Yerevan'=>array('winter_offset'=>'14400', 'summer_offset'=>'18000'), 'Asia/Tehran'=>array('winter_offset'=>'12600', 'summer_offset'=>'16200'), 'Asia/Kabul'=>array('winter_offset'=>'16200', 'summer_offset'=>'16200'), 'Asia/Baku'=>array('winter_offset'=>'16200', 'summer_offset'=>'18000'), 'Asia/Ashgabat'=>array('winter_offset'=>'18000', 'summer_offset'=>'18000'), 'Asia/Dushanbe'=>array('winter_offset'=>'18000', 'summer_offset'=>'18000'), 'Asia/Karachi'=>array('winter_offset'=>'18000', 'summer_offset'=>'18000'), 'Indian/Kerguelen'=>array('winter_offset'=>'18000', 'summer_offset'=>'18000'), 'Indian/Maldives'=>array('winter_offset'=>'18000', 'summer_offset'=>'18000'), 'Asia/Samarkand'=>array('winter_offset'=>'18000', 'summer_offset'=>'18000'), 'Asia/Calcutta'=>array('winter_offset'=>'19800', 'summer_offset'=>'19800'), 'Asia/Katmandu'=>array('winter_offset'=>'20700', 'summer_offset'=>'20700'), 'Asia/Yekaterinburg'=>array('winter_offset'=>'18000', 'summer_offset'=>'21600'), 'Indian/Chagos'=>array('winter_offset'=>'21600', 'summer_offset'=>'21600'), 'Asia/Bishkek'=>array('winter_offset'=>'21600', 'summer_offset'=>'21600'), 'Asia/Colombo'=>array('winter_offset'=>'21600', 'summer_offset'=>'21600'), 'Asia/Dhaka'=>array('winter_offset'=>'21600', 'summer_offset'=>'21600'), 'Asia/Qyzylorda'=>array('winter_offset'=>'21600', 'summer_offset'=>'21600'), 'Asia/Thimphu'=>array('winter_offset'=>'21600', 'summer_offset'=>'21600'), 'Asia/Rangoon'=>array('winter_offset'=>'23400', 'summer_offset'=>'23400'), 'Asia/Almaty'=>array('winter_offset'=>'21600', 'summer_offset'=>'25200'), 'Asia/Bangkok'=>array('winter_offset'=>'25200', 'summer_offset'=>'25200'), 'Asia/Jakarta'=>array('winter_offset'=>'25200', 'summer_offset'=>'25200'), 'Asia/Phnom_Penh'=>array('winter_offset'=>'25200', 'summer_offset'=>'25200'), 'Asia/Saigon'=>array('winter_offset'=>'25200', 'summer_offset'=>'25200'), 'Asia/Vientiane'=>array('winter_offset'=>'25200', 'summer_offset'=>'25200'), 'Asia/Krasnoyarsk'=>array('winter_offset'=>'25200', 'summer_offset'=>'28800'), 'Asia/Brunei'=>array('winter_offset'=>'28800', 'summer_offset'=>'28800'), 'Asia/Kuala_Lumpur'=>array('winter_offset'=>'28800', 'summer_offset'=>'28800'), 'Asia/Macau'=>array('winter_offset'=>'28800', 'summer_offset'=>'28800'), 'Asia/Manila'=>array('winter_offset'=>'28800', 'summer_offset'=>'28800'), 'Asia/Hong_Kong'=>array('winter_offset'=>'28800', 'summer_offset'=>'28800'), 'Australia/Perth'=>array('winter_offset'=>'28800', 'summer_offset'=>'28800'), 'Asia/Shanghai'=>array('winter_offset'=>'28800', 'summer_offset'=>'28800'), 'Asia/Singapore'=>array('winter_offset'=>'28800', 'summer_offset'=>'28800'), 'Asia/Taipei'=>array('winter_offset'=>'28800', 'summer_offset'=>'28800'), 'Asia/Ulaanbaatar'=>array('winter_offset'=>'28800', 'summer_offset'=>'28800'), 'Asia/Irkutsk'=>array('winter_offset'=>'28800', 'summer_offset'=>'32400'), 'Asia/Seoul'=>array('winter_offset'=>'32400', 'summer_offset'=>'32400'), 'Asia/Tokyo'=>array('winter_offset'=>'32400', 'summer_offset'=>'32400'), 'Asia/Dili'=>array('winter_offset'=>'32400', 'summer_offset'=>'32400'), 'Pacific/Palau'=>array('winter_offset'=>'32400', 'summer_offset'=>'32400'), 'Australia/Darwin'=>array('winter_offset'=>'34200', 'summer_offset'=>'34200'), 'Australia/Adelaide'=>array('winter_offset'=>'37800', 'summer_offset'=>'34200'), 'Asia/Yakutsk'=>array('winter_offset'=>'32400', 'summer_offset'=>'36000'), 'Australia/Brisbane'=>array('winter_offset'=>'36000', 'summer_offset'=>'36000'), 'Pacific/Guam'=>array('winter_offset'=>'36000', 'summer_offset'=>'36000'), 'Pacific/Port_Moresby'=>array('winter_offset'=>'36000', 'summer_offset'=>'36000'), 'Pacific/Saipan'=>array('winter_offset'=>'36000', 'summer_offset'=>'36000'), 'Australia/Sydney'=>array('winter_offset'=>'39600', 'summer_offset'=>'36000'), 'Australia/Lord_Howe'=>array('winter_offset'=>'39600', 'summer_offset'=>'37800'), 'Asia/Vladivostok'=>array('winter_offset'=>'36000', 'summer_offset'=>'39600'), 'Pacific/Guadalcanal'=>array('winter_offset'=>'39600', 'summer_offset'=>'39600'), 'Pacific/Ponape'=>array('winter_offset'=>'39600', 'summer_offset'=>'39600'), 'Pacific/Efate'=>array('winter_offset'=>'39600', 'summer_offset'=>'39600'), 'Pacific/Noumea'=>array('winter_offset'=>'39600', 'summer_offset'=>'39600'), 'Pacific/Norfolk'=>array('winter_offset'=>'41400', 'summer_offset'=>'41400'), 'Asia/Magadan'=>array('winter_offset'=>'39600', 'summer_offset'=>'43200'), 'Pacific/Fiji'=>array('winter_offset'=>'43200', 'summer_offset'=>'43200'), 'Pacific/Tarawa'=>array('winter_offset'=>'43200', 'summer_offset'=>'43200'), 'Pacific/Funafuti'=>array('winter_offset'=>'43200', 'summer_offset'=>'43200'), 'Pacific/Majuro'=>array('winter_offset'=>'43200', 'summer_offset'=>'43200'), 'Pacific/Nauru'=>array('winter_offset'=>'43200', 'summer_offset'=>'43200'), 'Pacific/Auckland'=>array('winter_offset'=>'46800', 'summer_offset'=>'43200'), 'Pacific/Chatham'=>array('winter_offset'=>'49500', 'summer_offset'=>'45900'), 'Pacific/Enderbury'=>array('winter_offset'=>'46800', 'summer_offset'=>'46800'), 'Pacific/Tongatapu'=>array('winter_offset'=>'46800', 'summer_offset'=>'46800'), 'Pacific/Kiritimati'=>array('winter_offset'=>'50400', 'summer_offset'=>'50400'));

$nv_plugin_area=array();

$rewrite_keys=array(0=>'#("/nukeviet_develop/)index.php\\?language=([a-z-]+)\\&[amp;]*nv=seek\\&[amp;]*q\\=([^"]+)"#', 1=>'#("/nukeviet_develop/)index.php\\?language=([a-z-]+)\\&[amp;]*nv=([a-zA-Z0-9-]+)\\&[amp;]*op=search\\&[amp;]*q\\=([^"]+)"#', 2=>'#("/nukeviet_develop/)index.php\\?language=([a-z-]+)\\&[amp;]*nv=([a-zA-Z0-9-]+)\\&[amp;]*op=tag/([^"]+)"#', 3=>'#("/nukeviet_develop/)index.php\\?language=([a-z-]+)\\&[amp;]*nv=([a-zA-Z0-9-]+)\\&[amp;]*op=([a-zA-Z0-9-/]+).html"#', 4=>'#("/nukeviet_develop/)index.php\\?language=([a-z-]+)\\&[amp;]*nv=([a-zA-Z0-9-]+)\\&[amp;]*op=([a-zA-Z0-9-/]+)"#', 5=>'#("/nukeviet_develop/)index.php\\?language=([a-z-]+)\\&[amp;]*nv=([a-zA-Z0-9-/]+)"#', 6=>'#("/nukeviet_develop/)index.php\\?language=([a-z-]+)"#');
$rewrite_values=array(0=>'\\1\\2/seek/q=\\3"', 1=>'\\1\\2/\\3/search/q=\\4"', 2=>'\\1\\2/\\3/tag/\\4"', 3=>'\\1\\2/\\3/\\4.html"', 4=>'\\1\\2/\\3/\\4/"', 5=>'\\1\\2/\\3/"', 6=>'\\1\\2/"');