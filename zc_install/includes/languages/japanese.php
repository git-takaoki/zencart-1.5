<?php
/**
 * Main Japanese language file for installer
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: japanese.php 19537 2011-09-20 17:14:44Z drbyte $
 * @author obitastar
 */
/**
 * defining language components for the page
 */
  define('NAVI_WELCOME', '�悤����');
  define('NAVI_LICENSE', '���C�Z���X�K��');
  define('NAVI_PREREQUISITES', '�V�X�e������');
  define('NAVI_SYSTEM_SETUP', '�V�X�e���ݒ�');
  define('NAVI_CONFIG_CHECK', 'config�m�F');
  define('NAVI_DATABASE_SETUP', '�f�[�^�x�[�X�ݒ�');
  define('NAVI_DATABASE_UPGRADE', '�f�[�^�x�[�X�A�b�v�O���[�h');
  define('NAVI_STORE_SETUP', '�V���b�v�ݒ�');
  define('NAVI_ADMIN_SETUP', '�Ǘ��Ґݒ�');
  define('NAVI_FINISHED', '����');

  define('YES', '�͂�');
  define('NO', '������');
  define('REFRESH_BUTTON', '�ă`�F�b�N');
  define('OKAY', 'Okay');

  // Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="ja"');

  // charset for web pages and emails
  define('CHARSET', 'utf-8');

  // META TAG TITLE
  define('META_TAG_TITLE', (defined('TEXT_PAGE_HEADING') ? TEXT_PAGE_HEADING : 'Zen Cart&reg;�C���X�g�[��'));

  define('INSTALLATION_IN_PROGRESS','�C���X�g�[���i�s��...');

  if (isset($_GET['main_page']) && ($_GET['main_page']== 'index' || $_GET['main_page']== 'license')) {
    define('TEXT_ERROR_WARNING', '����: �p������O�ɒ��ӂ��Ăق�������������܂��B');
  } else {
    define('TEXT_ERROR_WARNING', '<span class="errors"><strong>�x��: ��肪������܂���</strong></span>');
  }

  define('DB_ERROR_NOT_CONNECTED', '�C���X�g�[���G���[: �f�[�^�x�[�X�ւ̐ڑ��Ɏ��s���܂���');
	define('SHOULD_UPGRADE','�A�b�v�O���[�h���邱�Ƃ������߂��܂�! ');
  define('MUST_UPGRADE','You need to upgrade this before installing Zen Cart&reg;');

  define('UPLOAD_SETTINGS','�A�b�v���[�h�ł���T�C�Y�̏���͈ȉ��̃f�[�^�̒��ōŏ��̒l�ɐݒ肳��܂�:.<br />
php.ini ��<em>upload_max_filesize</em>: %s <br />
php.ini ��<em>post_max_size</em>: %s <br />' . 
//'<em>Zen Cart&reg;</em>�̃A�b�v���[�h�ݒ�: %s <br />' .
'Apache�̐ݒ�ɂ���Ă̓t�@�C���̃A�b�v���[�h���ł��Ȃ�������t�@�C���T�C�Y�̏�����������ꂽ�肷�邱�Ƃ�����܂��B
���ڂ���������Apache�̐������Q�Ƃ��Ă��������B');

  define('TEXT_HELP_LINK', ' �ڍ׏��...');
  define('TEXT_CLOSE_WINDOW', '[�E�B���h�E�����]');
  define('STORE_ADDRESS_DEFAULT_VALUE', '�V���b�v��
  �Z��
  �d�b�ԍ�');

  define('ERROR_TEXT_ADMIN_CONFIGURE', '/admin/includes/configure.php �����݂��܂���');
  define('ERROR_CODE_ADMIN_CONFIGURE', '2');

  define('ERROR_TEXT_STORE_CONFIGURE', '/includes/configure.php �����݂��܂���');
  define('ERROR_CODE_STORE_CONFIGURE', '3');

  define('ERROR_TEXT_PHYSICAL_PATH_ISEMPTY', '�����p�X�����͂���Ă��܂���');
  define('ERROR_CODE_PHYSICAL_PATH_ISEMPTY', '9');

  define('ERROR_TEXT_PHYSICAL_PATH_INCORRECT', '�����p�X���s�K�؂ł�');
  define('ERROR_CODE_PHYSICAL_PATH_INCORRECT', '10');

  define('ERROR_TEXT_VIRTUAL_HTTP_ISEMPTY', '���zHTTP�����͂���Ă��܂���');
  define('ERROR_CODE_VIRTUAL_HTTP_ISEMPTY', '11');

  define('ERROR_TEXT_VIRTUAL_HTTPS_ISEMPTY', '���zHTTPS�����͂���Ă��܂���');
  define('ERROR_CODE_VIRTUAL_HTTPS_ISEMPTY', '12');

  define('ERROR_TEXT_VIRTUAL_HTTPS_SERVER_ISEMPTY', '���zHTTPS �T�[�o�����͂���Ă��܂���');
  define('ERROR_CODE_VIRTUAL_HTTPS_SERVER_ISEMPTY', '13');

  define('ERROR_TEXT_DB_USERNAME_ISEMPTY', 'DB���[�U�������͂���Ă��܂���');
  define('ERROR_CODE_DB_USERNAME_ISEMPTY', '16'); // ��{�I�ɓ������b�Z�[�W�Ȃ̂ŕʂ̂��̂��ė��p

  define('ERROR_TEXT_DB_HOST_ISEMPTY', 'DB�z�X�g�����͂���Ă��܂���');
  define('ERROR_CODE_DB_HOST_ISEMPTY', '24');

  define('ERROR_TEXT_DB_NAME_ISEMPTY', 'DB�������͂���Ă��܂���'); 
  define('ERROR_CODE_DB_NAME_ISEMPTY', '25');

  define('ERROR_TEXT_DB_SQL_NOTEXIST', 'SQL�C���X�g�[���t�@�C�������݂��܂���');
  define('ERROR_CODE_DB_SQL_NOTEXIST', '26');

  define('ERROR_TEXT_DB_NOTSUPPORTED', '�f�[�^�x�[�X���T�|�[�g����Ă��܂���');
  define('ERROR_CODE_DB_NOTSUPPORTED', '27');

  define('ERROR_TEXT_DB_CONNECTION_FAILED', '�f�[�^�x�[�X�ւ̐ڑ��Ɏ��s���܂���');
  define('ERROR_CODE_DB_CONNECTION_FAILED', '28');

  define('ERROR_TEXT_STORE_ZONE_NEEDS_SELECTION', 'Store Zone must be specified.');
  define('ERROR_CODE_STORE_ZONE_NEEDS_SELECTION', '29');

  define('ERROR_TEXT_DB_NOTEXIST', '�f�[�^�x�[�X�����݂��܂���');
  define('ERROR_CODE_DB_NOTEXIST', '30');

  define('ERROR_TEXT_STORE_NAME_ISEMPTY', '�V���b�v�������͂���Ă��܂���');
  define('ERROR_CODE_STORE_NAME_ISEMPTY', '31');

  define('ERROR_TEXT_STORE_OWNER_ISEMPTY', '�V���b�v�̃I�[�i�[�������͂���Ă��܂���');
  define('ERROR_CODE_STORE_OWNER_ISEMPTY', '32');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_ISEMPTY', '�V���b�v�I�[�i�[�̃��[���A�h���X�����͂���Ă��܂���');
  define('ERROR_CODE_STORE_OWNER_EMAIL_ISEMPTY', '33');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_NOTEMAIL', '�V���b�v�I�[�i�[�̃��[���A�h���X�������ł�');
  define('ERROR_CODE_STORE_OWNER_EMAIL_NOTEMAIL', '34');

define('ERROR_TEXT_STORE_ADDRESS_ISEMPTY', '�V���b�v�̏Z�������͂���Ă��܂���');
define('ERROR_CODE_STORE_ADDRESS_ISEMPTY', '35');

define('ERROR_TEXT_DEMO_SQL_NOTEXIST', '�f�����i��SQL�t�@�C�������݂��܂���');
define('ERROR_CODE_DEMO_SQL_NOTEXIST', '36');

define('ERROR_TEXT_ADMIN_USERNAME_ISEMPTY', '�Ǘ���ID�����͂���Ă��܂���');
define('ERROR_CODE_ADMIN_USERNAME_ISEMPTY', '46');

define('ERROR_TEXT_ADMIN_EMAIL_ISEMPTY', '�Ǘ��҂̃��[���A�h���X�����͂���Ă��܂���');
define('ERROR_CODE_ADMIN_EMAIL_ISEMPTY', '47');

define('ERROR_TEXT_ADMIN_EMAIL_NOTEMAIL', '�Ǘ��҂̃��[���A�h���X�͗L���Ȃ��̂ł͂���܂���');
define('ERROR_CODE_ADMIN_EMAIL_NOTEMAIL', '48');

define('ERROR_TEXT_ADMIN_PASS_ISEMPTY', '�Ǘ��҂̃p�X���[�h�����͂���Ă��܂���');
define('ERROR_CODE_ADMIN_PASS_ISEMPTY', '49');

define('ERROR_TEXT_ADMIN_PASS_NOTEQUAL', '�p�X���[�h����v���܂���');
define('ERROR_CODE_ADMIN_PASS_NOTEQUAL', '50');

define('ERROR_TEXT_4_1_2', 'PHP�̃o�[�W������4.1.2�ł�');
define('ERROR_CODE_4_1_2', '1');
define('ERROR_TEXT_PHP_OLD_VERSION', 'PHP�̃o�[�W�������T�|�[�g�O�ł�');
define('ERROR_CODE_PHP_OLD_VERSION', '55');
define('ERROR_TEXT_PHP_VERSION', '�T�|�[�g�O��PHP�o�[�W�����ł�');
define('ERROR_CODE_PHP_VERSION', '91');

define('ERROR_TEXT_ADMIN_CONFIGURE_WRITE', 'admin configure.php ���������݉\�ł͂���܂���');
define('ERROR_CODE_ADMIN_CONFIGURE_WRITE', '56');

define('ERROR_TEXT_STORE_CONFIGURE_WRITE', 'store configure.php ���������݉\�ł͂���܂���');
define('ERROR_CODE_STORE_CONFIGURE_WRITE', '57');

define('ERROR_TEXT_CACHE_DIR_ISEMPTY', 'Session/SQL Cache Directory entry �����͂���Ă��܂���');
define('ERROR_CODE_CACHE_DIR_ISEMPTY', '61');

define('ERROR_TEXT_CACHE_DIR_ISDIR', 'Session/SQL Cache Directory entry �����݂��܂���');
define('ERROR_CODE_CACHE_DIR_ISDIR', '62');

define('ERROR_TEXT_CACHE_DIR_ISWRITEABLE', 'Session/SQL Cache Directory entry ���������݉\�ł͂���܂���');
define('ERROR_CODE_CACHE_DIR_ISWRITEABLE', '63');

define('ERROR_TEXT_ADMIN_PASS_INSECURE', 'Password not secure enough. Requires letters and numbers, and at least 7 characters.');
define('ERROR_CODE_ADMIN_PASS_INSECURE', '64');

define('ERROR_TEXT_REGISTER_GLOBALS_ON', 'Register Globals��ON�ɂȂ��Ă��܂�');
define('ERROR_CODE_REGISTER_GLOBALS_ON', '69');

define('ERROR_TEXT_SAFE_MODE_ON', 'Safe Mode��ON�ɂȂ��Ă��܂�');
define('ERROR_CODE_SAFE_MODE_ON', '70');

define('ERROR_TEXT_CACHE_CUSTOM_NEEDED','�L���b�V���t�H���_�̓t�@�C���L���b�V���O�T�|�[�g���g�p���邽�߂ɕK�v�ł�');
define('ERROR_CODE_CACHE_CUSTOM_NEEDED', '71');

define('ERROR_TEXT_TABLE_RENAME_CONFIGUREPHP_FAILED','�V�����v���t�B�N�X��configure.php �t�@�C�����X�V�ł��܂���ł���');
define('ERROR_CODE_TABLE_RENAME_CONFIGUREPHP_FAILED', '72');

define('ERROR_TEXT_TABLE_RENAME_INCOMPLETE','���ׂẴe�[�u���̃��l�[�����ł��܂���ł���');
define('ERROR_CODE_TABLE_RENAME_INCOMPLETE', '73');

define('ERROR_TEXT_SESSION_SAVE_PATH','PHP "session.save_path" ���������ݕs�ɂȂ��Ă��܂�');
define('ERROR_CODE_SESSION_SAVE_PATH','74');

define('ERROR_TEXT_MAGIC_QUOTES_RUNTIME','PHP "magic_quotes_runtime" ��ON�ɂȂ��Ă��܂�');
define('ERROR_CODE_MAGIC_QUOTES_RUNTIME','75');

define('ERROR_TEXT_DB_VER_UNKNOWN','�f�[�^�x�[�X�G���W���̃o�[�W������񂪕s���ł�');
define('ERROR_CODE_DB_VER_UNKNOWN','76');

define('ERROR_TEXT_UPLOADS_DISABLED','�t�@�C���A�b�v���[�h��OFF�ɂȂ��Ă��܂�');
define('ERROR_CODE_UPLOADS_DISABLED','77');

define('ERROR_TEXT_ADMIN_PWD_REQUIRED','�A�b�v�O���[�h����ɂ͊Ǘ��l�p�̃p�X���[�h���K�v�ł�');
define('ERROR_CODE_ADMIN_PWD_REQUIRED','78');

define('ERROR_TEXT_PHP_SESSION_SUPPORT','PHP Session Support���K�v�ł�');
define('ERROR_CODE_PHP_SESSION_SUPPORT','80');

define('ERROR_TEXT_PHP_AS_CGI','Windows�ȊO�ł�PHP��cgi�Ƃ��Ďg�p���邱�Ƃ͂����߂��܂���');
define('ERROR_CODE_PHP_AS_CGI','81');

define('ERROR_TEXT_DISABLE_FUNCTIONS','�K�v��PHP�̋@�\��OFF�ɂȂ��Ă��܂�');
define('ERROR_CODE_DISABLE_FUNCTIONS','82');

define('ERROR_TEXT_OPENSSL_WARN','OpenSSL��SSL (https://)��񋟂��邽�߂Ɏg������@�̂ЂƂł��B<br /><br />�ȉ��̃P�[�X�ł͎g�p�s�ƕ\������܂��BOpenSSL���g�p�������ꍇ�͎Q�l�ɂ��Ă��������B <br />(a) �E�F�u�z�X�g��SSL���T�|�[�g���Ă��Ȃ�<br />(b) �E�F�u�T�[�o�[��OpenSSL���C���X�g�[������Ă��Ȃ�(����SSL�T�[�r�X���C���X�g�[������Ă���\��������)<br />(c) �E�F�u�z�X�g��SSL�F�؂ɂ��ďڍׂ�m��Ȃ����߁A�K�؂Ȑݒ�����邱�Ƃ��ł��Ȃ�<br />(d) PHP��OpenSSL���T�|�[�g����悤�ɐݒ肳��Ă��Ȃ��B');
define('ERROR_CODE_OPENSSL_WARN','79');

define('ERROR_TEXT_DB_PREFIX_NODOTS','�e�[�u���v���t�B�N�X�ł́u / �v�u \\ �v�u . �v���g�p���邱�Ƃ��ł��܂���B ');
define('ERROR_CODE_DB_PREFIX_NODOTS','83');

define('ERROR_TEXT_PHP_SESSION_AUTOSTART','PHP Session.autostart ��OFF�ɂ��Ă��������B');
define('ERROR_CODE_PHP_SESSION_AUTOSTART','84');
define('ERROR_TEXT_PHP_SESSION_TRANS_SID','PHP Session.use_trans_sid ��OFF�ɂ��Ă��������B');
define('ERROR_CODE_PHP_SESSION_TRANS_SID','86');
define('ERROR_TEXT_DB_PRIVS','�f�[�^�x�[�X���[�U�Ɏg�p�������K�v�ł�');
define('ERROR_CODE_DB_PRIVS','87');
define('ERROR_TEXT_COULD_NOT_WRITE_CONFIGURE_FILES','/includes/configure.php �ɏ������݂��s���ۃG���[���������܂���');
define('ERROR_CODE_COULD_NOT_WRITE_CONFIGURE_FILES','88');
define('ERROR_TEXT_GD_SUPPORT','GD�T�|�[�g�Ɋւ���ڍ�');
define('ERROR_CODE_GD_SUPPORT','89');

define('ERROR_TEXT_DB_MYSQL5','MySQL5.7�ȏ�̃o�[�W�����ł̃e�X�g�͕s���S�ł�');
define('ERROR_CODE_DB_MYSQL5','90');

define('ERROR_TEXT_OPEN_BASEDIR','Could have problems uploading files or doing backups');
define('ERROR_CODE_OPEN_BASEDIR','92');
define('ERROR_TEXT_CURL_SUPPORT','CURL support not detected or found disabled');
define('ERROR_CODE_CURL_SUPPORT','93');
define('ERROR_TEXT_CURL_NOT_COMPILED', 'CURL not compiled into PHP - notify server administrator');
define('ERROR_TEXT_CURL_PROBLEM_GENERAL', 'CURL problems detected: ');
define('ERROR_TEXT_CURL_SSL_PROBLEM', 'CURL requires SSL support. Please notify webmaster or hosting company.');
define('ERROR_CODE_CURL_SSL_PROBLEM','95');

define('ERROR_TEXT_MAGIC_QUOTES_SYBASE','PHP "magic_quotes_sybase" is active');
define('ERROR_CODE_MAGIC_QUOTES_SYBASE','94');

  $error_code ='';
if (isset($_GET['error_code'])) {
  $error_code = $_GET['error_code'];
  }

switch ($error_code) {
  case ('1'):
    define('POPUP_ERROR_HEADING', 'PHP�o�[�W����4.1.2���m�F����܂���');
    define('POPUP_ERROR_TEXT', 'PHP�o�[�W����4.1.2�̂������̃����[�X�ŏ�ʃO���[�o���z��Ɋւ���o�O���񍐂���Ă��܂��B���̃o�O�ɂ����Zen Cart�̊Ǘ���ʂ��\������Ȃ��\��������܂��̂ŁA�\�ł����PHP���A�b�v�O���[�h���Ă��������B<br /><br />PHP 4.3.2�ȍ~��Zen Cart�����s���邽�߂̍Œ჉�C���ł��B<br />PHP 4.4.9�ȍ~���g�p���邱�Ƃ����������߂��܂��B');
    
  break;
  case ('2'):
    define('POPUP_ERROR_HEADING', '/admin/includes/configure.php �����݂��܂���');
    define('POPUP_ERROR_TEXT', '�t�@�C�� /admin/includes/configure.php �����݂��܂���B��̃t�@�C�����쐬���邩�A/admin/includes/dist-configure.php �� configure.php �փ��l�[�����邱�Ƃł��̃t�@�C�����쐬�ł��܂��B�쐬��Aread-write ���}�[�N���邩�ACHMOD 666 �܂��� CHMOD 777 �Ƃ���K�v������܂��B');
    
  break;
  case ('3'):
    define('POPUP_ERROR_HEADING', '/includes/configure.php �����݂��܂���');
    define('POPUP_ERROR_TEXT', '�t�@�C�� /includes/configure.php �����݂��܂���B ��̃t�@�C�����쐬���邩�A/includes/dist-configure.php �� configure.php �փ��l�[�����邱�Ƃł��̃t�@�C�����쐬�ł��܂��B�쐬��Aread-write ���}�[�N���邩�ACHMOD 666 �܂��� CHMOD 777 �Ƃ���K�v������܂��B');

  break;
  case ('4'):
    define('POPUP_ERROR_HEADING', '�����p�X');
    define('POPUP_ERROR_TEXT', '�����p�X��Zen Cart�̃t�@�C���Q��u���Ă���f�B���N�g���̃p�X�ł��Blinux�n�̃V�X�e���ł́A���Ƃ���html�t�@�C���� /var/www/html �֊i�[����܂��B����Zen Cart�t�@�C���Q�� \'store\' �Ƃ����f�B���N�g���֒u�����Ȃ�A�����p�X�� /var/www/html/store �ƂȂ�ł��傤�B�����Ă��̓C���X�g�[�������̃f�B���N�g���𐳊m�ɐ������Ă���ƐM�����Ă悢�ł��傤�B');
    
  break;
  case ('5'):
    define('POPUP_ERROR_HEADING', '���zHTTP�p�X');
    define('POPUP_ERROR_TEXT', '�T�C�g(�V���b�v)��URL�ł��B�����T�C�g���h���C����root�ɂ���Ȃ�A http://www.example.com �܂��� http://example.com �ƂȂ�܂��B�����ustore�v�Ƃ����T�u�f�B���N�g���ɐݒu�����ꍇ�́Ahttp://www.example.com/store �ƂȂ�܂��B');
    
  break;
  case ('6'):
    define('POPUP_ERROR_HEADING', '���zHTTPS�T�[�o');
    define('POPUP_ERROR_TEXT', 'secure/SSL�T�[�o�ւ̃E�F�u�T�[�o�A�h���X�ł��B���̃A�h���X��SSL/Secure���[�h���T�[�o��łǂ̂悤�Ɏ��s����Ă��邩�ɂ���ĕς��܂��B');
    
  break;
  case ('7'):
    define('POPUP_ERROR_HEADING', '���zHTTPS�p�X');
    define('POPUP_ERROR_TEXT', 'Zen Cart�E�F�u�T�C�g��secure/SSL���[�h�ŉ{�����邽�߂ɃE�F�u�u���E�U�ɓ��͂���A�h���X�̂��Ƃł��B');
    
  break;
  case ('8'):
    define('POPUP_ERROR_HEADING', 'Enable SSL');
    define('POPUP_ERROR_TEXT', '�T�C�g��SSL/Secure(HTTPS)���g�p���邩�ǂ��������߂܂��B<br /><br />�l��񂪓��͂���邠����y�[�W�A�Ⴆ�΃��O�C���A�`�F�b�N�A�E�g�A�A�J�E���g�ڍׂȂǂ�SSL/Secure���[�h�ɂ��ی삷�邱�Ƃ��ł��܂��B����ɁA����͊Ǘ��҃G���A�ɓK�p���邱�Ƃ��ł��܂��B<br /><br />SSL�T�[�o(HTTP�̑����HTTPS�̎g�p�ɂ��\�����ꂽ)�ɃA�N�Z�X���Ȃ���΂Ȃ�܂���B<br /><br />SSL�T�[�o�����邩�ǂ���������Ȃ���΁A���͂��̐ݒ�� \'No\' �̂܂܂ɂ��Ă����Ă��������A�����Ď����̃z�X�e�B���O�v���o�C�_�֊m�F���Ă��������B��:���ׂĂ̐ݒ�́Aconfigure.php�t�@�C����ҏW���邱�ƂŌォ��ύX���邱�Ƃ��ł��܂��B');
    
  break;
  case ('9'):
    define('POPUP_ERROR_HEADING', '�����p�X�����͂���܂���ł���');
    define('POPUP_ERROR_TEXT', '�����p�X�����͂���܂���ł����B�L���Ȓl����͂���K�v������܂��B');

  break;
  case ('10'):
    define('POPUP_ERROR_HEADING', '�����p�X�͐���������܂���');
    define('POPUP_ERROR_TEXT', '���͂��ꂽ�����p�X�͗L���ł͂���܂���B�C�����čēx�����Ă��������B');
    
  break;
  case ('11'):
    define('POPUP_ERROR_HEADING', '���zHTTP�����͂���܂���ł���');
    define('POPUP_ERROR_TEXT', '���zHTTP�p�X�����͂���܂���ł����B�L���Ȓl����͂���K�v������܂��B');
    
  break;
  case ('12'):
    define('POPUP_ERROR_HEADING', '���zHTTPS�����͂���܂���ł���');
    define('POPUP_ERROR_TEXT', 'SSL���[�h�L����I��������ŉ��zHTTPS�p�X�����͂���܂���ł����B�L���Ȓl����͂��邩�ASSL���[�h�𖳌��ɂ���K�v������܂��B');
    
  break;
  case ('13'):
    define('POPUP_ERROR_HEADING', '���zHTTPS�T�[�o�����͂���܂���ł���');
    define('POPUP_ERROR_TEXT', 'SSL���[�h�L����I��������ŉ��zHTTPS�T�[�o�����͂���܂���ł����B�L���Ȓl����͂��邩�ASSL���[�h�𖳌��ɂ���K�v������܂��B');
    
  break;
  case ('14'):
    define('POPUP_ERROR_HEADING', 'Database Character Set / Collation');
    define('POPUP_ERROR_TEXT', 'By default, Zen Cart&reg; uses the Latin1 character set / collation for the database and files. If you have a specific need to use UTF-8 instead of Latin1, you may choose UTF-8 here. <br /><strong>HOWEVER, TAKE NOTE</strong> that you will need to manually change ALL your language files to UTF8-without-BOM encoding if you are using any multibyte characters in your language files.');
    
  break;
  case ('15'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X�z�X�g');
    define('POPUP_ERROR_TEXT', '�f�[�^�x�[�X�v���O���������s����E�F�u�T�[�o�̖��O�ł��B�قƂ�ǂ̏ꍇ�A \'localhost\' �̂܂܂ő��v�ł��B����ȊO�̏ꍇ�́A�����̃f�[�^�x�[�X�T�[�o�̃T�[�o�����z�X�e�B���O�v���o�C�_�֐q�˂�K�v������ł��傤�B');
    
  break;
  case ('16'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X���[�U��');
    define('POPUP_ERROR_TEXT', '���ׂẴf�[�^�x�[�X�̓A�N�Z�X���邽�߂Ƀ��[�U������уp�X���[�h��K�v�Ƃ��܂��B�f�[�^�x�[�X���[�U���̓z�X�e�B���O�v���o�C�_�ɂ���Ċ��蓖�Ă��Ă���ł��傤�B���̏ڍׂɂ��Ă̓z�X�e�B���O�v���o�C�_�Ɋm�F���Ă��������B');
    
  break;
  case ('17'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X�p�X���[�h');
    define('POPUP_ERROR_TEXT', '���ׂẴf�[�^�x�[�X�̓A�N�Z�X���邽�߂Ƀ��[�U������уp�X���[�h��K�v�Ƃ��܂��B�f�[�^�x�[�X�p�X���[�h�́A�z�X�e�B���O�v���o�C�_�ɂ�芄�蓖�Ă��Ă���ł��傤�B���̏ڍׂɂ��Ă̓z�X�e�B���O�v���o�C�_�Ɋm�F���Ă��������B');
    
  break;
  case ('18'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X��');
    define('POPUP_ERROR_TEXT', '�����Zen Cart�Ɏg�p����f�[�^�x�[�X���ł��B����������͂��邩������Ȃ��ꍇ�ɂ́A�z�X�e�B���O�v���o�C�_�ɏڍׂ��m�F���Ă��������B');
    
  break;
  case ('19'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X�v���t�B�N�X');
    define('POPUP_ERROR_TEXT', 'Zen Cart�́A�g�p�����e�[�u���̖��O�Ƀv���t�B�N�X�������邱�Ƃ��ł��܂��B�z�X�g����1�����f�[�^�x�[�X���񋟂���Ă��āA�f�[�^�x�[�X���g�p���鑼�̃X�N���v�g���C���X�g�[���������ꍇ�ɁA����͓��ɗL�p�ł��B�ʏ�̓f�t�H���g�̐ݒ�̂܂܂ɂ��Ă������ق��������ł��傤�B');
    
  break;
  case ('20'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X�쐬');
    define('POPUP_ERROR_TEXT', '���̐ݒ�́AZen Cart�p�̃f�[�^�x�[�X���쐬���邱�Ƃ��C���X�g�[�������݂邩�ǂ��������߂܂��B��:\'create\'�̏����́AZen Cart�ɕK�v�ȃe�[�u����ǉ����邱�ƂƑS���֌W����܂���B�����͎����I�ɍs����ł��傤�B�����̃z�X�g�ł� \'create\' ������^���Ă��Ȃ��ł��傤���A��̃f�[�^�x�[�X���쐬����ʂ̕��@(�Ⴆ��cPanel�AphpMyAdmin)��񋟂��Ă���ł��傤�B');
    
  break;
//  case ('21'):
//    define('POPUP_ERROR_HEADING', 'Database Connection');
//    define('POPUP_ERROR_TEXT', 'Persistent connections are a method of reducing the load on the database. You should consult your server host before setting this option.  Enabling "persistent connections" could cause your host to experience database problems if they haven\'t configured to handle it.<br /><br />Again, be sure to talk to your host before considering use of persistent connections.');
//
//  break;
//  case ('22'):
//    define('POPUP_ERROR_HEADING', 'Database Sessions');
//    define('POPUP_ERROR_TEXT', 'This detemines whether session information is stored in a file or in the database. While file-based sessions are slightly faster, <strong>database sessions are recommended</strong> for all online stores using SSL connections, for the sake of security.');
//
//  break;
  case ('23'):
    define('POPUP_ERROR_HEADING', 'Enable SSL');
    define('POPUP_ERROR_TEXT', 'Setting this to "true" simply turns on the switch that causes Zen Cart&reg; to ATTEMPT to operate certain pages in SSL mode.  Successful operation depends on you entering the correct HTTPS servername and path information. Your hosting provider should supply this information to you.<br />If you do not already have SSL support, you may have to purchase it. This includes a monthly charge for a dedicated IP address as well as an annual fee for the SSL certificate.');
    
  break;
  case ('24'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X�z�X�g�������͂���Ă��܂���');
    define('POPUP_ERROR_TEXT', '�f�[�^�x�[�X�z�X�g�������͂���Ă��܂���B�L���ȃf�[�^�x�[�X�T�[�o�z�X�g������͂��Ă��������B<br />����̓f�[�^�x�[�X�v���O���������s����E�F�u�T�[�o�̖��O�ł��B�قƂ�ǂ̏ꍇ�A\'localhost\'�̂܂܂ő��v�ł��B����ȊO�̏ꍇ�́A�f�[�^�x�[�X�T�[�o�̃T�[�o�����z�X�e�B���O�v���o�C�_�Ɏ��₵�Ă��������B');
  break;
  
  case ('25'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X�������͂���Ă��܂���');
    define('POPUP_ERROR_TEXT', 'T�f�[�^�x�[�X�������͂���Ă��܂���BZen Cart�Ɏg�p����f�[�^�x�[�X������͂��Ă��������B<br />�����Zen Cart�Ɏg�p����f�[�^�x�[�X�̖��O�ł��B����������͂��邩�킩��Ȃ��Ȃ�A�z�X�e�B���O�v���o�C�_�ɏڍׂ��m�F���Ă��������B');
    
  break;
  case ('26'):
    define('POPUP_ERROR_HEADING', 'SQL�C���X�g�[���t�@�C�������݂��܂���');
    define('POPUP_ERROR_TEXT', 'SQL�C���X�g�[���t�@�C���������邱�Ƃ��ł��܂���ł����B\'zc_install\' �f�B���N�g���� \'mysql_zencart.sql\' �Ƃ����悤�Ȗ��O�̃t�@�C�������邱�Ƃ��m�F���Ă��������B');
    
  break;
  case ('27'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X���T�|�[�g����Ă��܂���');
    define('POPUP_ERROR_TEXT', '�I�������f�[�^�x�[�X�^�C�v�̓C���X�g�[������Ă���o�[�W������PHP�ɃT�|�[�g����Ă��Ȃ��悤�ł��B�I�������f�[�^�x�[�X�^�C�v���T�|�[�g����Ă��邩�z�X�e�B���O�v���o�C�_�֊m�F����K�v������܂��B�����������g�̃T�[�o�ł���΁A���̃f�[�^�x�[�X�^�C�v��PHP�ɃR���p�C�����đg�ݍ��񂾂����m�F���Ă��������B�܂����W���[��/dll�t�@�C���̓��[�h����Ă���K�v������܂��B');
    
  break;
  case ('28'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X�ւ̐ڑ��Ɏ��s���܂���');
    define('POPUP_ERROR_TEXT', '�f�[�^�x�[�X�֐ڑ��ł��܂���ł����B����͂������̗��R�ɂ��N���肦�܂��B<br /><br />DB�z�X�g�����������Ȃ����A���[�U���܂���<em>�p�X���[�h</em>���������Ȃ���������܂���B<br /><br />�܂��f�[�^�x�[�X�����������Ȃ��̂�������܂���(<strong>�f�[�^�x�[�X�����݂��Ă��܂���? </strong> <strong>�����ō쐬���܂�����? </strong> -- ����: Zen Cart�̃C���X�g�[���̓f�[�^�x�[�X���쐬���܂���B)�B<br /><br />���ׂĂ̓��͍��ڂ����������m�F���Ă��������B');
    
  break;
  case ('29'):
    define('POPUP_ERROR_HEADING', 'Store Zone must be seleected');
    define('POPUP_ERROR_TEXT', 'Please select a zone from the Store Zones list. This information is used for tax and shipping calculations. You can always change it at a later date via Admin->Configuration->My Store.');
    
  break;
  case ('30'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X�����݂��܂���');
    define('POPUP_ERROR_TEXT', '�w�肳�ꂽ�f�[�^�x�[�X����������܂���ł����B<br />(<strong>���̃f�[�^�x�[�X���쐬���܂�����? </strong> -- ����: Zen Cart�̓f�[�^�x�[�X���쐬���܂���B)<br /><br />�f�[�^�x�[�X�̏ڍׂ��m�F������A�w�肵���f�[�^�x�[�X�Ɋւ���f�[�^���C�����Ă��������B<br /><br />�E�F�u�z�X�e�B���O�̋@�\���g���ăf�[�^�x�[�X���쐬����K�v�����邩������܂���B�f�[�^�x�[�X���쐬����ꍇ�́A���[�U���ƃp�X���[�h�����ăf�[�^�x�[�X�����������Ă����ƁA�C���X�g�[������ۂɕ֗��ł��B');
    
  break;
  case ('31'):
    define('POPUP_ERROR_HEADING', '�V���b�v�������͂���܂���ł���');
    define('POPUP_ERROR_TEXT', '�V���b�v�����w�肵�Ă��������B');
    
  break;
  case ('32'):
    define('POPUP_ERROR_HEADING', '�V���b�v�I�[�i�[�̖��O�����͂���܂���ł���');
    define('POPUP_ERROR_TEXT', '�V���b�v�I�[�i�[�̖��O����͂��Ă��������B���̏��� \'Contact Us\' �y�[�W�A\'Welcome\' ���[���A����ѓX�̐F�X�ȉӏ��ɕ\������܂��B');
    
  break;
  case ('33'):
    define('POPUP_ERROR_HEADING', '�V���b�v�̃��[���A�h���X�����͂���܂���ł���');
    define('POPUP_ERROR_TEXT', '�V���b�v�̃��[���A�h���X����͂��Ă��������B����͓X���甭������郁�[�����ŘA����Ƃ��Ďg�p�����A�h���X�ł��B�\������悤�Ɏ蓮�ŃJ�X�^�}�C�Y���Ȃ�����A���̏��͂ǂ̃y�[�W�ɂ��\������邱�Ƃ͂���܂���B');
    
  break;
  case ('34'):
    define('POPUP_ERROR_HEADING', '�V���b�v�̃��[���A�h���X���L���ł͂���܂���');
    define('POPUP_ERROR_TEXT', '�L���ȃ��[���A�h���X����͂��Ă��������B');
    
  break;
  case ('35'):
    define('POPUP_ERROR_HEADING', '�V���b�v�̏Z�������͂���܂���ł���');
    define('POPUP_ERROR_TEXT', '�V���b�v�̏Z������͂��Ă��������B����͂��₢���킹�y�[�W��(�K�v�ɉ����Ĕ�\���ɂ��邱�Ƃ��ł��܂�)�A�[�i��/���e���ו[�ɕ\������܂��B�܂��A�`�F�b�N�A�E�g�Ōڋq���`�F�b�N��}�l�[�I�[�_�[�ł̍w����I�������ۂɂ����̏�񂪕\�������ł��傤�B');
    
  break;
  case ('36'):
    define('POPUP_ERROR_HEADING', '�f�����iSQL�t�@�C�������݂��܂���');
    define('POPUP_ERROR_TEXT', 'Zen Cart�f�����i�f�[�^���C���X�g�[�����邽�߂�SQL�t�@�C����������܂���B/zc_install/demo/xxxxxxx_demo.sql �t�@�C�������݂��邩�`�F�b�N���Ă��������B(xxxxxxx = �f�[�^�x�[�X�^�C�v)');
    
  break;
  case ('37'):
    define('POPUP_ERROR_HEADING', '�V���b�v��');
    define('POPUP_ERROR_TEXT', '�V���b�v�̖��̂ł��B����͂��̃V�X�e���ɂ���đ����郁�[���܂��̓u���E�U�̃^�C�g���̒��Ŏg�p����܂��B');
    
  break;
  case ('38'):
    define('POPUP_ERROR_HEADING', '�V���b�v�I�[�i�[�̖��O');
    define('POPUP_ERROR_TEXT', '�V���b�v�I�[�i�[�̖��O�͂��̃V�X�e���ɂ���đ����郁�[���̒��Ŏg�p����܂��B');
    
  break;
  case ('39'):
    define('POPUP_ERROR_HEADING', '�V���b�v�I�[�i�[�̃��[���A�h���X');
    define('POPUP_ERROR_TEXT', '�V���b�v���A�����󂯂邱�Ƃ��ł����v�ȃ��[���A�h���X�ł��B�V�X�e���ɂ���đ���ꂽ�قƂ�ǂ̃��[����A���₢���킹�y�[�W�Ɏg�p����܂��B');
    
  break;
  case ('40'):
    define('POPUP_ERROR_HEADING', '��');
    define('POPUP_ERROR_TEXT', '�V���b�v�����_��u�����ł��B�ł���є����̃I�v�V�������������������߂ɁA����𐳊m�ɐݒ肷�邱�Ƃ��d�v�ł��B����ɂ���͔[�i���ɂ����鈶���̃��C�A�E�g�Ȃǂ����肵�܂��B');
    
  break;
  case ('41'):
    define('POPUP_ERROR_HEADING', '�]�[��');
    define('POPUP_ERROR_TEXT', '�V���b�v�����_��u�����̒n���I�ȋ敪�ł��B�Ⴆ�΃A�����J���O���̏B�A���{�̓s���{���ł��B');
    
  break;
  case ('42'):
    define('POPUP_ERROR_HEADING', '�V���b�v�̏Z��');
    define('POPUP_ERROR_TEXT', '�V���b�v�̏Z���ł��B�[�i���⒍���m�F�Ɏg�p����܂��B');
    
  break;
  case ('43'):
    define('POPUP_ERROR_HEADING', '�f�t�H���g�̌���');
    define('POPUP_ERROR_TEXT', '�V���b�v�Ŏg���f�t�H���g�̌���ł��B�������m�Ȍ���p�b�N�����[�h�����΁AZen Cart�͂��̂܂ܑ�������T�|�[�g���܂��BZen Cart�͉p��p�b�N���f�t�H���g�ɂȂ��Ă��܂��B���̑��̌���Ɋւ��ẮAZen Cart�R�~���j�e�B�ɂ���Ė|�󂳂ꂽ����p�b�N�� www.zen-cart.com �̃_�E�����[�h�R�[�i�[�ɗp�ӂ���Ă��܂��B');
    
  break;
  case ('44'):
    define('POPUP_ERROR_HEADING', '�f�t�H���g�̒ʉ�');
    define('POPUP_ERROR_TEXT', '�V���b�v�ň����f�t�H���g�̒ʉ݂�I�����Ă��������B������]������̂����X�g�ɂȂ���΁A�C���X�g�[��������ɊǗ��҃G���A�ŊȒP�ɕύX�ł��܂��B');
    
  break;
  case ('45'):
    define('POPUP_ERROR_HEADING', '�f�����i�C���X�g�[��');
    define('POPUP_ERROR_TEXT', 'Zen Cart�̗l�X�ȓ����������Ă݂邽�߂ɁA�f�����i���f�[�^�x�[�X�ɃC���X�g�[�����邩�ǂ����I�����Ă��������B');
    
  break;
  case ('46'):
    define('POPUP_ERROR_HEADING', '�Ǘ���ID�����͂���܂���ł���');
    define('POPUP_ERROR_TEXT', '�C���X�g�[��������ɊǗ��҃G���A�փ��O�C�����邽�߂̊Ǘ���ID���w�肷��K�v������܂��B');
    
  break;
  case ('47'):
    define('POPUP_ERROR_HEADING', '�Ǘ��҂̃��[���A�h���X�����͂���܂���ł���');
    define('POPUP_ERROR_TEXT', '�Ǘ��҂̃��[���A�h���X�́A�p�X���[�h��Y��p�X���[�h�Ĕ��s���s�Ȃ��ۂɎg�p����܂��B');
    
  break;
  case ('48'):
    define('POPUP_ERROR_HEADING', '�Ǘ��҂̃��[���A�h���X�͗L���Ȃ��̂ł͂���܂���');
    define('POPUP_ERROR_TEXT', '�L���ȃ��[���A�h���X����͂��Ă�������');
    
  break;
  case ('49'):
    define('POPUP_ERROR_HEADING', '�Ǘ��҃p�X���[�h�����͂���܂���ł���');
    define('POPUP_ERROR_TEXT', '�Z�L�����e�B�̂��߂ɁA�p�X���[�h�͋󔒂ɂ͂ł��܂���B');
    
  break;
  case ('50'):
    define('POPUP_ERROR_HEADING', '�p�X���[�h����v���܂���');
    define('POPUP_ERROR_TEXT', '�Ǘ��҃p�X���[�h����ъm�F���ē��͂��Ă��������B');
    
  break;
  case ('51'):
    define('POPUP_ERROR_HEADING', '�Ǘ���ID');
    define('POPUP_ERROR_TEXT', '�C���X�g�[��������ɊǗ��҃G���A�փ��O�C�����邽�߂̊Ǘ���ID�������Ŏw�肷��K�v������܂��B');
    
  break;
  case ('52'):
    define('POPUP_ERROR_HEADING', '�Ǘ��҂̃��[���A�h���X');
    define('POPUP_ERROR_TEXT', '�Ǘ��҂̃��[���A�h���X�́A�p�X���[�h��Y��p�X���[�h�Đݒ���s�Ȃ��ۂɎg�p����܂��B');
    
  break;
  case ('53'):
    define('POPUP_ERROR_HEADING', '�Ǘ��҃p�X���[�h');
    define('POPUP_ERROR_TEXT', '�Ǘ��҃p�X���[�h�͊Ǘ��҃G���A�ւ̃A�N�Z�X��^������S�ȃp�X���[�h�ł��B');
    
  break;
  case ('54'):
    define('POPUP_ERROR_HEADING', '�Ǘ��҃p�X���[�h(�m�F)');
    define('POPUP_ERROR_TEXT', '���R�A��v����p�X���[�h����͂���K�v������܂��B');
    
  break;
  case ('55'):
    define('POPUP_ERROR_HEADING', 'PHP�̃o�[�W�������T�|�[�g�O');
    define('POPUP_ERROR_TEXT', '�T�[�o��œ����Ă���o�[�W������PHP��Zen Cart�̃T�|�[�g�O�ł��B<br /><br />PHP 5.3.14��������̍Œ�����ł��B<br />�ł����PHP 5.3.3�ȏ�ɃA�b�v�O���[�h���邱�Ƃ������߂��܂��B<br /><br />If you are trying to use older PHP versions, note that using older releases of PHP may result in the admin section of Zen Cart&reg; not being accessible, might leave your site vulnerable to hacking, and may not support some of the PHP Session code that handles keeping individual customer logins unique and separate from other customers. You are advised to upgrade your PHP version.');
    
  break;
  case ('56'):
    define('POPUP_ERROR_HEADING', 'admin configure.php ���������ݕs��');
    define('POPUP_ERROR_TEXT', '�t�@�C�� admin/includes/configure.php ���������݉\�ɂȂ��Ă��܂���BUnix��Linux�V�X�e�����g�p����Ă���̂ł���΁AZen Cart�̃C���X�g�[������������܂�CHMOD�Ńt�@�C���̌�����777�܂���666�ɕύX���Ă��������B�����Ă���FTP�v���O�����ł��̕ύX���s�����Ƃ��ł��܂�(�E�N���b�N��t�@�C���̑�����ҏW����Ȃ�)�B<br /><br />Windows�f�X�N�g�b�v�V�X�e���Ȃ�΁A�P��read/write�ɐݒ肵�Ă��������B<br /><br />Windows�T�[�o�[�A����IIS��ł́A���̃t�@�C�����E�N���b�N���āA�Z�L�����e�B�[��I�����A�u�C���^�[�l�b�g�Q�X�g�A�J�E���g�v���邢��IUSR_xxxxxxx���[�U���ǂݏ����ł���悤�ɐݒ肵�Ă��������B<br /><br />�C���X�g�[��������������A���̃t�@�C����ǂݐ�p�ɖ߂��Ă�������(CHMOD 644���邢��444�AWindows�Ȃ�uwrite�v�����������A�uread-only�v���`�F�b�N���Ă��������B)�B');
    
  break;
  case ('57'):
    define('POPUP_ERROR_HEADING', 'Store configure.php ���������ݕs��');
    define('POPUP_ERROR_TEXT', '�t�@�C�� includes/configure.php ���������݉\�ɂȂ��Ă��܂���BUnix��Linux�V�X�e�����g�p����Ă���̂ł���΁AZen Cart�̃C���X�g�[������������܂�CHMOD�Ńt�@�C���̌�����777�܂���666�ɕύX���Ă��������B�����Ă���FTP�v���O�����ł��̕ύX���s�����Ƃ��ł��܂�(�E�N���b�N��t�@�C���̑�����ҏW����Ȃ�)�B<br /><br />Windows�f�X�N�g�b�v�V�X�e���Ȃ�΁A�P��read/write�ɐݒ肵�Ă��������B<br /><br />Windows�T�[�o�[�A����IIS��ł́A���̃t�@�C�����E�N���b�N���āA�Z�L�����e�B�[��I�����A�u�C���^�[�l�b�g�Q�X�g�A�J�E���g�v���邢��IUSR_xxxxxxx���[�U���ǂݏ����ł���悤�ɐݒ肵�Ă��������B<br /><br />�C���X�g�[��������������A���̃t�@�C����ǂݐ�p�ɖ߂��Ă�������(CHMOD 644���邢��444�AWindows�Ȃ�uwrite�v�����������A�uread-only�v���`�F�b�N���Ă��������B)�B');
    
  break;
  case ('58'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X�e�[�u���v���t�B�N�X');
    define('POPUP_ERROR_TEXT', 'Zen Cart�́A�g�p�����e�[�u���̖��O�Ƀv���t�B�N�X�������邱�Ƃ��ł��܂��B�f�[�^�x�[�X��������g���Ȃ��ꍇ�ɁA�f�[�^�x�[�X���g�p����ق��̃v���O�������C���X�g�[���������Ȃ�A�v���t�B�N�X�Ńe�[�u������ʂ��邱�Ƃ��ł��܂��B�ʏ�̓f�t�H���g�̐ݒ�̂܂܂Ō��\�ł��B');
    
  break;
  case ('59'):
    define('POPUP_ERROR_HEADING', 'SQL�L���b�V���f�B���N�g��');
    define('POPUP_ERROR_TEXT', 'SQL�N�G���́A�f�[�^�x�[�X�̒��ɁA���邢�̓T�[�o�̃n�[�h�f�B�X�N��̃t�@�C���ɃL���b�V�����邱�Ƃ��ł��܂��B �T�[�o�̃n�[�h�f�B�X�N��̃t�@�C���ւ�SQL�L���b�V����I�������Ȃ�΁A�L���b�V���f�[�^��ۑ����邽�߂̃f�B���N�g�����w�肵�Ă��������B<br /><br />�W���I��Zen Cart�̃C���X�g�[���ɂ� \'cache\' �t�H���_���܂܂�Ă��܂��B�E�F�u�T�[�o�i�Ⴆ��apache�j�����̃f�B���N�g���ɃA�N�Z�X�ł���悤�ɁA���̃t�H���_��ǂݏ����\�ɂ���K�v������܂��B<br /><br />�w�肳�ꂽ�f�B���N�g�������邱�Ƃ��m�F���A�E�F�u�T�[�o�ɂ���ď������݉\�ł��邩(CHMOD 777�܂��͏��Ȃ��Ƃ�666�𐄏�)���m���߂Ă��������B');
    
  break;
  case ('60'):
    define('POPUP_ERROR_HEADING', 'SQL�L���b�V�����@');
    define('POPUP_ERROR_TEXT', 'SQL�N�G���ɂ���Ă̓L���b�V�����邱�Ƃ��ł��܂��B�L���b�V�����ꂽ�ꍇ�ɂ́A��葬����������܂��B�����ł�SQL�N�G�����L���b�V�����邽�߂ɁA�ǂ̕��@���g�p���邩�w�肱�Ƃ��ł��܂��B<br /><br /><strong>�Ȃ�</strong>. SQL�N�G���͑S���L���b�V������܂���B�������i��J�e�S�����ƂĂ����Ȃ��Ȃ�A���ꂪ�œK�ł��B<br /><br /><strong>�f�[�^�x�[�X</strong>. SQL�N�G�����f�[�^�x�[�X�e�[�u���ɃL���b�V������܂��B����́A���K�͂̏��i/�J�e�S�����̃T�C�g�ő��x�A�b�v�������炷�ł��傤�B<br /><br /><strong>�t�@�C��</strong>. SQL�N�G�����T�[�o�̃n�[�h�f�B�X�N�ɃL���b�V������܂��B������@�\�����邽�߂ɂ́A�E�F�u�T�[�o���������݉\�ȃN�G�����L���b�V������f�B���N�g�����m�F����K�v������܂��B���̕��@�͑�K�͂ȏ��i/�J�e�S�����̃T�C�g�ɓK���Ă���ł��傤�B');
    
  break;
  case ('61'):
    define('POPUP_ERROR_HEADING', '�Z�b�V����/SQL �L���b�V���f�B���N�g�������w��');
    define('POPUP_ERROR_TEXT', '�Z�b�V����/SQL�N�G���̃L���b�V���O�Ƀt�@�C�����g�p����ꍇ�A�E�F�u�T�[�o��̗L���ȃf�B���N�g�����w�肷��K�v������܂��B�܂��E�F�u�T�[�o�����̃f�B���N�g���ւ̏������݌����������Ă��邱�Ƃ��m�F���Ă��������B');
    
  break;
  case ('62'):
    define('POPUP_ERROR_HEADING', '�Z�b�V����/SQL �L���b�V���f�B���N�g����������Ȃ�');
    define('POPUP_ERROR_TEXT', '�Z�b�V����/SQL�N�G���̃L���b�V���O�Ƀt�@�C�����g�p����ꍇ�A�E�F�u�T�[�o��̗L���ȃf�B���N�g�������݂���K�v������܂��B�܂��E�F�u�T�[�o�����̃f�B���N�g���ւ̏������݌����������Ă��邱�Ƃ��m�F���Ă��������B');
    
  break;
  case ('63'):
    define('POPUP_ERROR_HEADING', '�Z�b�V����/SQL �L���b�V���f�B���N�g�����������ݕs��');
    define('POPUP_ERROR_TEXT', '�Z�b�V����/SQL�N�G���̃L���b�V���O�Ƀt�@�C�����g�p����ꍇ�A�E�F�u�T�[�o��̗L���ȃf�B���N�g�����w�肷��K�v������܂��B�܂��E�F�u�T�[�o�����̃f�B���N�g���ւ̏������݌����������Ă��邱�Ƃ��m�F���Ă��������BLinux/Unix�ɂ����Ă�CHMOD 666�܂���777�AWindows�T�[�o�ɂ����Ă�Read/Write��K�p���Ă�������(IIS��ł́A�C���^�[�l�b�g�Q�X�g�A�J�E���g�ɓK�p����K�v������܂�)�B');
  break;

  case ('64'):
    define('POPUP_ERROR_HEADING', '�����T�[�o��ɃC���X�g�[�����Ă���phpBB�t�H�[�����ƃ����N�����܂���? ');
    define('POPUP_ERROR_TEXT', 'Zen Cart�X�g�A���A���ɐݒu���Ă���phpBB�t�H�[�����ƃ����N����ɂ́A�͂���I�����Ă��������B');
    
  break;
//  case ('65'):
//    define('POPUP_ERROR_HEADING', 'phpBB�f�[�^�x�[�X�v���t�B�N�X');
//    define('POPUP_ERROR_TEXT', 'phpBB�e�[�u���p�̃v���t�B�N�X���w�肵�Ă��������B�ʏ�� \'phpBB_\' �ł��B');
//    
//  break;
//  case ('66'):
//    define('POPUP_ERROR_HEADING', 'phpBB�f�[�^�x�[�X�� ');
//    define('POPUP_ERROR_TEXT', 'phpBB�e�[�u��������f�[�^�x�[�X�����w�肵�Ă��������B');
//  break;
//  case ('67'):
//    define('POPUP_ERROR_HEADING', 'phpBB�f�B���N�g��');
//    define('POPUP_ERROR_TEXT', 'phpBB�X�N���v�g�t�@�C�����C���X�g�[������Ă���f�B���N�g���ւ̊��S�ȃp�X���w�肵�Ă��������B�������邱�ƂŁAZen Cart�V���b�v��phpBB�����N���N���b�N�����ۂɁA�������y�[�W���\�������悤�ɂȂ�܂��B<br /><br />�����ɓ��͂���p�X�́A�T�[�o��"root"����̑��΃p�X�ł��B����phpBB��<strong>/home/users/username/public_html/phpbb </strong>�ɐݒu���Ă���Ȃ�A<strong>/home/users/username/public_html/phpbb/ </strong>�Ɠ��͂��Ă��������B�����T�u�t�H���_�ɂ���Ȃ�A���̃p�X���w�肵�Ă��������B<br /><br />���̃t�H���_�ɂ���u<em>config.php</em>�v���w�肳��܂��B');
//  break;
//  case ('68'):
//    define('POPUP_ERROR_HEADING', 'phpBB�f�B���N�g��');
//    define('POPUP_ERROR_TEXT', '�w�肵���f�B���N�g����phpBB configure�t�@�C��������܂���ł����B���̎����ݒ���g�p����ɂ́AphpBB�����ɃC���X�g�[������Ă���K�v������܂��B�C���X�g�[������Ă��Ȃ��Ȃ�AphpBB�̎����ݒ���w�肹���AZen Cart��phpBB�̃C���X�g�[����Ɏ蓮�Őݒ肷��K�v������܂��B<br /><br />�����ɓ��͂��ꂽ�p�X�́A�T�[�o��"root"����̑��΃p�X�ł��BphpBB�� <strong>/home/users/username/public_html/phpbb </strong>�ɐݒu���Ă���Ȃ�A<strong>/home/users/username/public_html/phpbb/ </strong>����͂���K�v������܂��B�����T�u�t�H���_�ɂ���Ȃ�A���̃p�X���w�肵�Ă��������B<br /><br />���̃t�H���_�ɂ���u<em>config.php</em>�v���w�肳��܂��B');
//  break;
  case ('69'):
    define('POPUP_ERROR_HEADING', 'Register Globals');
    define('POPUP_ERROR_TEXT', 'register_globals�̓Z�L�����e�B��d��Ȗ��������N�����\�������邽�߁AZen Cart�́Aregister_globals�̐ݒ��Off�ɂ��Ȃ���Γ��삵�܂���(v1.3.0.2-l10n-jp-3���)�B<br/>Zen Cart�̃C���X�g�[���f�B���N�g����.htaccess�t�@�C�����������A�b�v���[�h����Ă���̂ɂ��̃��b�Z�[�W���\������Ă���ꍇ�A���g�p���̃T�[�o�[�ł�.htaccess��register_globals�̐ݒ��ύX�ł��Ȃ����Ƃ��Ӗ����Ă��܂��B<br/>���̖����������邽�߂ɂ́A���̂���2�̂ǂ��炩�̑Ή����K�v�ł��B<br/><br/><br/>1. �T�[�o�[�̐ݒ��ύX����<br/>2. register_globals��Off�ŉ^�p�\�ȃT�[�o�[�ɍăC���X�g�[������');
  break;
  case ('70'):
    define('POPUP_ERROR_HEADING', 'Safe Mode is On');
    define('POPUP_ERROR_TEXT', '�����Ie-Commerce�A�v���P�[�V�����ł���Zen Cart�́ASafe Mode�ŉғ����Ă���T�[�o�ł͂��܂��@�\���܂���B<br /><br />e-Commerce�V�X�e�������s���邱�Ƃ́A�����̐�i�I�ȃT�[�r�X��K�v�Ƃ��A�����ȁu���L�v�z�X�e�B���O�T�[�r�X�ł͓��삪��������邱�Ƃ��悭����܂��B�E�F�u�X�y�[�X���uSafe Mode�v�ɐݒ肵�Ă��܂��ƁA�I�����C���V���b�v�𖜑S�ȏ�Ԃŉ^�c���邱�Ƃ��ł��Ȃ��Ȃ�܂��Bphp.ini�t�@�C����ŁuSAFE_MODE=OFF�v�ɐݒ肵�Ă��������B���̕ύX�ɂ̓z�X�e�B���O��Ђ̎菕�����K�v�ɂȂ�ꍇ������܂��B');
  break;
  case ('71'):
    define('POPUP_ERROR_HEADING', '�t�@�C���x�[�X�L���b�V���O�T�|�[�g�̂��߂ɃL���b�V���t�H���_���K�v�ł�');
    define('POPUP_ERROR_TEXT', 'Zen Cart�̃t�@�C���x�[�XSQL�L���b�V���T�|�[�g���g�p����Ȃ�A�E�F�u�X�y�[�X�̃L���b�V���t�H���_�̌�����K�؂ɐݒ肷��K�v������܂��B<br /><br />�L���b�V���t�H���_���g�p�������Ȃ���΁A�u�f�[�^�x�[�X�L���b�V���O�v�܂��́u�L���b�V���s�g�p�v��I�����邱�Ƃ��ł��܂��B���̏ꍇ�A�Z�b�V�����g���b�J�[�����l�Ƀt�@�C���L���b�V�����g�p����̂Łu�Z�b�V������ۑ�����v���g�p���Ȃ�����������������܂���B<br /><br />�L���b�V���t�H���_��K�؂ɃZ�b�g�A�b�v���邽�߂ɁAFTP�v���O�����܂��̓V�F���E�A�N�Z�X���g�p���A�t�H���_�̃p�[�~�b�V������CHMOD 666�܂���777�ɂ��Ă��������B<br /><br />���m�ɁA�E�F�u�T�[�o�̃��[�UID�i�Ⴆ�΁F\'apache\' �� \'www-user\' �܂���Windows�ł� \'IUSR_xxxxxxxxx\'�j�́A�L���b�V���t�H���_�ɑ΂��� \'read-write-delete\' �̂��ׂĂ̌����������Ă��Ȃ���΂Ȃ�܂���B');
  break;
  case ('72'):
    define('POPUP_ERROR_HEADING', 'ERROR: ���ׂĂ�configure.php�t�@�C����V�����v���t�B�N�X�ōX�V�ł��܂���ł���');
    define('POPUP_ERROR_TEXT', '�e�[�u������ύX������Aconfigure.php�t�@�C���̍X�V���ɃG���[���������܂����B/includes/configure.php �� /admin/includes/configure.php �t�@�C�����蓮�ŕҏW���A�uDB_PREFIX�v��Zen Cart�e�[�u���𐳂����w�肷��悤�ɏ��������Ă��������B');
  break;
  case ('73'):
    define('POPUP_ERROR_HEADING', 'ERROR: ���ׂẴe�[�u���ɐV�����e�[�u���v���t�B�N�X��K�p�ł��܂���ł���');
    define('POPUP_ERROR_TEXT', '�f�[�^�x�[�X�e�[�u����V�����e�[�u���v���t�B�N�X��t�����ĉ��������݂Ă���ԂɁA�G���[���������܂����B�f�[�^�x�[�X�e�[�u���������ƂŒ�������K�v������ł��傤�B�ň��̏ꍇ�A�o�b�N�A�b�v���畜������K�v�����邩������܂���B');
  break;
  case ('74'):
    define('POPUP_ERROR_HEADING', '����: PHP�́usession.save_path�v�������݋֎~');
    define('POPUP_ERROR_TEXT', '<strong>����͒P�Ȃ钍�ӏ����ł��B</strong>PHP��session.save_path�ݒ�Ŏw�肳�ꂽ�p�X�ւ̏������݌���������܂���B<br /><br />����͂܂肱�̃p�X�ݒ���b��I�ȃt�@�C���̕ۑ��ꏊ�Ƃ��Ďg�����Ƃ��ł��Ȃ����Ƃ��Ӗ����܂��B����ɁA���ɕ\�����ꂽ�u��������L���b�V���̃p�X�v���g���Ă��������B<br /><br /><br />���邢�́A�������̃p�X���m�F�s�ƂȂ����ꍇ�ɂ́A�T�[�o��php.ini�t�@�C���ł̐ݒ�ŋ�����ĂȂ��\��������܂��B�������_�o���ɂȂ�K�v�͂���܂���B����͒P�Ȃ钍�ӏ������ƍl���Ă��������B�ǂ����Ă��C�ɂȂ�Ȃ�A�E�F�u�z�X�g���ɑ��k���Ă��������B');
  break;
  case ('75'):
    define('POPUP_ERROR_HEADING', '����: PHP�́umagic_quotes_runtime�v��ON�ɂȂ��Ă���');
    define('POPUP_ERROR_TEXT', '�umagic_quotes_runtime�v��OFF�ɂȂ��Ă��邱�Ƃ��D�܂����ł��BON�ɂȂ��Ă���ƁA�\�����Ȃ�1064 SQL�G���[������������A�R�[�h�̎��s�Ɏx������������Ƃ�����܂��B<br /><br />�����T�[�o�S�̂Łumagic_quotes_runtime�v��OFF�ɂł��Ȃ��Ȃ�A.htaccess�t�@�C����php.ini��OFF�ɂ��Ă��������B�ݒ�̎d�����킩��Ȃ��ꍇ�ɂ́A�E�F�u�z�X�g���ɑ��k���Ă��������B');
  break;
  case ('76'):
    define('POPUP_ERROR_HEADING', '�f�[�^�x�[�X�G���W���̃o�[�W�������s��');
    define('POPUP_ERROR_TEXT', '�w�肳�ꂽ�f�[�^�x�[�X�G���W���̃o�[�W�������s���ł��B<br /><br />����͕K�������d��Ȗ��u�ł͂���܂���v�B���ۂ̂Ƃ���A���i�K�ł̓o�[�W�������m�F�ł��Ȃ����Ƃ����΂��΂݂��܂��B<br /><br />���̃f�[�^���s���ƂȂ��Ă����Ƃ��Ă��A�C���X�g�[�����p�����Ēʏ�͖�肠��܂���B');
  break;
  case ('77'):
    define('POPUP_ERROR_HEADING', '�t�@�C���A�b�v���[�h��OFF');
    define('POPUP_ERROR_TEXT', '�t�@�C���A�b�v���[�h��������Ă��܂���B�A�b�v���[�h��������ɂ́Aphp.ini�t�@�C����<em><strong>file_uploads = on</strong></em>�Ǝw�肵�Ă��������B');
  break;
  case ('78'):
    define('POPUP_ERROR_HEADING', '�A�b�v�O���[�h�����s����ɂ͊Ǘ��l�̃p�X���[�h���K�v');
    define('POPUP_ERROR_TEXT', '�f�[�^�x�[�X�ɕύX��������ɂ͊Ǘ��l�̃��[�U���ƃp�X���[�h���K�v�ł��B<br /><br />Zen Cart�̊Ǘ��l���[�U���ƃp�X���[�h�𐳂������͂��Ă��������B');
  break;
  case ('79'):
    define('POPUP_ERROR_TEXT','OpenSSL�̓T�C�g��SSL (https://)��񋟂��邽�߂Ɏg������@�̈�ł��B<br /><br />�g�p�s�ƕ\�����ꂽ�ꍇ�A�l�����闝�R�Ƃ��Ĉȉ��̂��̂��l�����܂�: <br />(a) �E�F�u�z�X�g��SSL���T�|�[�g���Ă��Ȃ�<br />(b) �E�F�u�T�[�o�[��OpenSSL���C���X�g�[������Ă��Ȃ�(����SSL�T�[�r�X���C���X�g�[������Ă���\��������)<br />(c) �E�F�u�z�X�g��SSL�F�؂ɂ��ďڍׂ�m��Ȃ����߁A�K�؂Ȑݒ�����邱�Ƃ��ł��Ȃ�<br />(d) PHP��OpenSSL���T�|�[�g����悤�ɐݒ肳��Ă��Ȃ��B<br /><br />������̌����ɂ���A�E�F�u�y�[�W�̈Í���(SSL)���K�v�Ȃ�A�E�F�u�z�X�e�B���O�̃v���o�C�_�ɑ��k���Ă��������B');
    define('POPUP_ERROR_HEADING','OpenSSL���');
  break;
  case ('80'):
    define('POPUP_ERROR_HEADING', 'PHP�Z�b�V�����T�|�[�g���K�v');
    define('POPUP_ERROR_TEXT', 'PHP�Z�b�V�����T�|�[�g��ON�ɂ��Ă��������B�ȉ��̃��W���[�����C���X�g�[�����邱�Ƃŉ�������ꍇ������܂�: php4-session ');
  break;
  case ('81'):
    define('POPUP_ERROR_HEADING', 'Windows�ȊO�ł�PHP��cgi�Ƃ��Ďg�p���邱�Ƃ������');
    define('POPUP_ERROR_TEXT', 'Linux/Unix�T�[�o���PHP��cgi�Ƃ��Ď��s������ƁA�l�X�Ȗ�肪�N����\��������܂��B<br /><br />Windows�T�[�o�Ȃ�APHP�͏��cgi���W���[���Ƃ��Ď��s�����̂ŁAWindows�T�[�o���g���Ă���Ȃ�A���̌x���𖳎����Ă��������B');
  break;
  case ('82'):
    define('POPUP_ERROR_HEADING', ERROR_TEXT_DISABLE_FUNCTIONS);
    define('POPUP_ERROR_TEXT', 'php.ini�t�@�C���ňȉ��̋@�\�̂����ꂩ��OFF�ɂȂ��Ă��܂�: <br /><ul><li>set_time_limit</li><li>exec</li></ul>�g���t�B�b�N���c��ȃT�[�o�[�ł͈��S���̂��߁A���̋@�\��OFF�ɂ��Ă�����̂�����܂����Ae-Commerce�V�X�e���𓮍삳����ɂ͗��z�I�ł͂Ȃ��A�p�t�H�[�}���X�ɉe�����o��\��������܂��B<br /><br />�z�X�e�B���O�v���o�C�_�[�ɁA�����̋@�\���J�������T�[�o��񋟂��Ă��炤�悤�Ɍ����邱�Ƃ������߂��܂��B');
  break;
  case ('83'):
    define('POPUP_ERROR_HEADING','�f�[�^�x�[�X�̃e�[�u���v���t�B�N�X�ɖ����̕������܂܂�Ă���');
    define('POPUP_ERROR_TEXT','�f�[�^�x�[�X�̃e�[�u���v���t�B�N�X�ɂ͈ȉ��̕������܂ނ��Ƃ��ł��܂���: <br />
&nbsp;&nbsp; / �܂��� \\ �܂��� . <br /><br />�v���t�B�N�X�̎w�����蒼���Ă��������B�Ⴆ�ΊȒP�Ɂuzen_�v�̂悤�Ȃ��̂������߂��܂��B');
  break;
  case ('84'):
    define('POPUP_ERROR_HEADING','PHP��Session.autostart��ON�ɂȂ��Ă���B');
    define('POPUP_ERROR_TEXT','php.ini�t�@�C���ɂ���session.auto_start�ݒ肪ON�ɂȂ��Ă��܂��B<br /><br />Zen Cart�ł̓Z�b�V�����̐ݒ肪�����������_�ŃZ�b�V�������J�n����f�U�C���ɂȂ��Ă��邽�߁A���̐ݒ�ł̓Z�b�V�����̏����ɕs�s�����N����\��������܂��B�Z�b�V�����������I�ɊJ�n������ݒ肾�ƁA�T�[�o�ɂ���Ă͖��ɂȂ�܂��B<br /><br />���������OFF�ɂ������Ȃ�AZen Cart�̃��[�g�f�B���N�g��(index.php�Ɠ����t�H���_)�ɂ���.htaccess�t�@�C���Ɏ��̃R�}���h����������ł�������: <br /><br /><code>php_value session.auto_start 0</code>');
  break;
  case ('85'):
    define('POPUP_ERROR_HEADING','�f�[�^�x�[�X�A�b�v�O���[�h�p��SQL�̋L�q���s���S');
    define('POPUP_ERROR_TEXT','�f�[�^�x�[�X���A�b�v�O���[�h����ۂɁASQL�̋L�q�̂����̂����������s����܂���ł����B����̓f�[�^�x�[�X�ɏd�������G���g�������邩�A����ׂ��͂��̃R�������Ȃ��Ȃǂ̏���������Ȃ��������Ƃɂ����̂ł��B<br /><br />�ł��悭�����錴���Ƃ��āAZen Cart�̃f�[�^�x�[�X�ɕύX��������悤�ȃR���g���r���[�V����/ �A�h�I���Ȃǂ��C���X�g�[���������Ƃ��������܂��B<br /><br />���ɃA�b�v�O���[�h�̍ۂɃG���[���������Ă��A�V���b�v�̉^�c�ɂ͑S���e����^���Ȃ����Ƃ�����܂����A�O�̂��߂ɃG���[�̓��e���m�F���邱�Ƃ������߂��܂��B<br /><br />�m�F����ɂ́A�uupgrade_exceptions�v�e�[�u���̓��e���`�F�b�N���邱�Ƃ���n�߂Ă��������B');
  break;
  case ('86'):
    define('POPUP_ERROR_HEADING','PHP��Session.use_trans_sid��ON�ɂȂ��Ă���');
    define('POPUP_ERROR_TEXT','php.ini�t�@�C����session.use_trans_sid��ON�ɐݒ肳��Ă��܂��B<br /><br />���̂܂܂��ƃZ�b�V�����̏����ɖ�肪�o��΂��肩�A���S���ɂ��x����������\��������܂��B<br /><br /><a href="http://www.olate.com/articles/252">http://www.olate.com/articles/252</a>���Q�l�ɂ���.htaccess�̃p�����[�^��ύX���邩�Aphp.ini�t�@�C����OFF�ɂ��Ă��������B<br /><br />���S���Ɋւ��Ă̏��́A���̏ꏊ���Q�Ƃ��Ă�������: <a href="http://shh.thathost.com/secadv/2003-05-11-php.txt">http://shh.thathost.com/secadv/2003-05-11-php.txt</a>�B');
  break;
  case ('87'):
    define('POPUP_ERROR_HEADING','�f�[�^�x�[�X���[�U�̌������K�v');
    define('POPUP_ERROR_TEXT','Zen Cart���^�c����ɂ͈ȉ��̂悤�ȃf�[�^�x�[�X���x���ł̌������K�v�ł�: <ul><li>ALL PRIVILEGES<br /><em>or</em></li><li>SELECT</li><li>INSERT</li><li>UPDATE</li><li>DELETE</li><li>CREATE</li><li>ALTER</li><li>INDEX</li><li>DROP</li></ul>����̑���ɂ́uCREATE�v�ƁuDROP�v�̌����͕K�v����܂��񂪁A�C���X�g�[����A�b�v�O���[�h������SQL�p�b�`�Ȃǂ̍ۂɕK�v�ɂȂ�܂��B');
  break;
  case ('88'):
    define('POPUP_ERROR_HEADING','/includes/configure.php�ւ̏������݂Ɏ��s');
    define('POPUP_ERROR_TEXT','�w�肵���ݒ��configure.php�t�@�C���ɕۑ�����ہAZen Cart�C���X�g�[�����������݂Ɏ��s���܂����B�ȉ���configure.php�t�@�C���ɑ΂��ăE�F�u�T�[�o���������݂̌����������Ă��邩�m�F���Ă��������B<br /><br />- /includes/configure.php<br />- /admin/includes/configure.php<br /><br />�����Ă����̃t�@�C�������������邽�߂̃f�B�X�N�e�ʂ��s�����Ă��Ȃ������`�F�b�N����K�v�����邩������܂���B<br /><br />�G���[���N�����Ƃ��ɁA�����̃t�@�C���T�C�Y��0-bytes�������Ƃ�����A�f�B�X�N�e�ʂ̖��ł���\���������Ȃ�܂��B<br /><br />�C���X�g�[������������܂ŁAUnix/Linux�z�X�e�B���O�ł�CHMOD 777�ɂ��Ă������Ƃ����z�I�ł��B�����ăC���X�g�[���������������_�ŁA644��444�ɐݒ肵�Ă��������B<br /><br />Windows�̏ꍇ�ɂ́A�C���X�g�[�����n�߂�O�ɁA�����̃t�@�C�����E�N���b�N���āA�u�v���p�e�B�v��I�����A�u�Z�L�����e�B�v�^�u���N���b�N���܂��B�u�V�K�v���N���b�N���āu�S���v��I�����āA�ǂݏ����̌�����^���܂��B�����ăC���X�g�[��������������A�ǂݐ�p�ɐݒ肵�Ȃ����܂��B');
  break;
  case ('89'):
    define('POPUP_ERROR_HEADING','GD�T�|�[�g�Ɋւ���ڍ�');
    define('POPUP_ERROR_TEXT','�摜�����̂��߂ɁAZen Cart��PHP��GD�T�|�[�g���g�p���܂�(GD���g�p�\�ȏꍇ)�B�o�[�W����2.0�ȏ�̂��̂������߂��܂��B<br /><br />����GD�T�|�[�g��PHP�ɓ����Ă��Ȃ��Ȃ�A�z�X�e�B���O��Ђɗ���ł݂܂��傤�B');
  break;
  case ('90'):
    define('POPUP_ERROR_HEADING','MySQL 5.7 (and higher) not fully supported in v1.5.x');
    define('POPUP_ERROR_TEXT','NOTE: Zen Cart&reg; v2.0 and newer support MySQL 5 and PHP 5 properly.<br />But, you are presently installing v1.5.x.<br /><br />While many efforts have been spent on ensuring that database queries in Zen Cart&reg; v1.5.x are compatible with MySQL 5 releases, the newer v2.x versions are more thoroughly tested.<br /><br />You are welcome to proceed with installation; however, please note that for full compatibility you should use the newer version of Zen Cart.');
  break;
  case ('91'):
    define('POPUP_ERROR_HEADING','PHP�o�[�W�����̌x��');
    define('POPUP_ERROR_TEXT','Zen Cart��PHP�o�[�W����5.3.14�ȏ�Ŏ��s�����悤�Ƀf�U�C������Ă��܂��B<br /><br />Zen Cart�Ŏg���Ă���PHP�t�@���N�V����(��ɔF�؂ƃZ�b�V���������֘A)�͕�����PHP�ɂ͑S�����݂��Ȃ����A���邢�̓o�O������܂��B<br /><br />���̃T�[�o��Zen Cart���^�c����Ȃ�APHP�̃o�[�W�������A�b�v�O���[�h���邱�Ƃ����������߂��܂��B');
  break;
  case ('92'):
    define('POPUP_ERROR_HEADING','open_basedir restriction may cause problems');
    define('POPUP_ERROR_TEXT','Your PHP is configured in such a way that prevents you from running scripts outside a specified "basedir" folder. Yet, your website files appear to be kept in a folder outside of the allowed "basedir" area.<br /><br />Among other things, you could have problems uploading files or doing backups.<br /><br />You should talk to your web host to change or remove this restriction.');
  break;
  case ('93'):
    define('POPUP_ERROR_HEADING','cURL support not detected');
    define('POPUP_ERROR_TEXT','Some payment and shipping modules require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />If you intend to use the PayPal Express Checkout or Website Payments Pro modules, or Authorize.net AIM, you *need* CURL support.<br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.<br /><br />More information on CURL can be found at the <a href="http://curl.haxx.se" target="_blank">CURL website</a>');
  break;
  case ('94'):
    define('POPUP_ERROR_HEADING', 'NOTE: PHP "magic_quotes_sybase" is active');
    define('POPUP_ERROR_TEXT', 'It is best to have "magic_quotes_sybase" disabled. When enabled, it can cause unexpected 1064 SQL errors, and other code-execution problems.<br /><br />If you cannot disable it for the whole server, it may be possible to disable via .htaccess or your own php.ini file in your private webspace.  Talk to your hosting company for assistance.');
  break;
  case ('95'):
    define('POPUP_ERROR_HEADING','CURL requires SSL support. Please notify webmaster or hosting company.');
    define('POPUP_ERROR_TEXT','Zen Cart&reg; uses CURL and SSL to communicate with some payment and shipping service providers.<br />The installer has just tested your CURL SSL support and found that it failed.<br /><br />You will not be able to use PayPal or Authorize.net or FirstData/Linkpoint payment modules, and possibly other third-party contributed payment/shipping modules until you enable SSL support in CURL and PHP.<br /><br />More information on CURL can be found at the <a href="http://curl.haxx.se" target="_blank">CURL website</a>');
  break;

}

