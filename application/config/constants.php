<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
define('EXIT_SUCCESS', 0); // no errors
define('EXIT_ERROR', 1); // generic error
define('EXIT_CONFIG', 3); // configuration error
define('EXIT_UNKNOWN_FILE', 4); // file not found
define('EXIT_UNKNOWN_CLASS', 5); // unknown class
define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
define('EXIT_USER_INPUT', 7); // invalid user input
define('EXIT_DATABASE', 8); // database error
define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

define('LANGUAGE_THAI' , 'thai');
define('LANGUAGE_ENGLISH' , 'english');

define('SYSTEM_ADMIN_USERNAME' , 'systemadmin');
define('SYSTEM_ADMIN_PASSWORD' , '1234');
define('WEBSITE_FOLDER' , 'spc');
define("ROLE_SYSTEM_ADMIN" , 0);
define("ROLE_SUPER_ADMIN" , 1 );
define("ROLE_ADMIN" , 2 );
define("ROLE_USER" , 3 );

define('UPLOAD_PATH_PROFILE_PICTURE', realpath(APPPATH . '../assets/uploads/profile_picture/') );
define('ACTION_CREATE' , 'create');
define('ACTION_UPDATE' , 'update');
define('ACTION_DELETE' , 'delete');
define('ACTION_UPLOAD' , 'upload');
define('ACTION_SHOW' , 'show');


define('DASHBOARD' , 'dashboard');
define('USER' , 'user');
define('GALLERIES' , 'gallery');
define('GALLERY_IMAGE' , 'galleryImage');
define('SETTING' , 'setting');
define('CONTENT' , 'content');
define('MEMBER' , 'member');
define('ARTICLE' , 'article');
define('PAGE' , 'page');
define('WEBBOARD' , 'webboard');
define('SLIDE_SHOW' , 'slideshow');
define('CLIP' , 'clip');
define('CLIP_CATEGORY' , 'clipCategory');
define('MEDIA' , 'media');
define('NEWS' , 'news');
define('CONTACT' , 'contact');
define('STUDENT' , 'student');
define('BOOK' , 'book');
define('BOOK_CATEGORY' , 'bookCategory');

define('ADMIN_DASHBOARD' , 'admin/dashboard');
define('ADMIN_USER' , 'admin/user');
define('ADMIN_GALLERY' , 'admin/gallery');
define('ADMIN_GALLERY_UPLOAD' , 'admin/galleryImage');
define('ADMIN_UPLOAD_IMAGE' , 'admin/galleryImage/upload');
define('ADMIN_SLIDE_SHOW' , 'admin/slideshow');
define('ADMIN_SETTING' , 'admin/setting');
define('ADMIN_CONTENT' , 'admin/content');
define('ADMIN_MEMBER' , 'admin/member');
define('ADMIN_STUDENT' , 'admin/student');
define('ADMIN_ARTICLE' , 'admin/article');
define('ADMIN_PAGE' , 'admin/page');
define('ADMIN_PAGE_ORDER' , 'admin/page/order');
define('ADMIN_WEBBOARD' , 'admin/webboard');
define('ADMIN_WEBBOARD_CATEGORIES' , 'admin/webboard/categories');
define('ADMIN_CLIP' , 'admin/Clip');
define('ADMIN_CLIP_CATEGORY' , 'admin/clipCategory');
define('ADMIN_NEWS' , 'admin/news');
define('ADMIN_CONTACT' , 'admin/contact');
define('ADMIN_BOOK' , 'admin/book');
define('ADMIN_BOOK_CATEGORY' , 'admin/bookCategory');

define('PATH_UPLOADS' , realpath(APPPATH . '../uploads/' ));
define('IMAGE_GALLERY_WIDTH' , 1280);
define('IMAGE_GALLERY_HEIGHT' , 720);
define('IMAGE_SLIDE_SHOW_WIDTH' , 1903);
define('IMAGE_SLIDE_SHOW_HEIGHT' , 686);