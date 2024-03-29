<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'wordpress' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '1' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '56eta*[]]>/uI||,WI@67}ZlBB68M@2#:mHmiFab@K.maN&&xZr5H]`Zf=)Bn -b' );
define( 'SECURE_AUTH_KEY',  'Lgm:u^a_Zu~ vnNbDR(^I8/|Nq1_$wLu]7!~BV,{jWMvjA:4)AX,-}na#0fIi`!{' );
define( 'LOGGED_IN_KEY',    'gI=eKSY{!D[i$a~wC+U&xeO>XzC(.[DINh0IN([V]Q`DC22P<Y?;XS2oDn~zfnx3' );
define( 'NONCE_KEY',        'on+$z6tVc=3wCIF^},m]aznFHEm*^7fi.+qN7l)6n/Y@-UU;PB&<XLj`aKl-7_ir' );
define( 'AUTH_SALT',        'n:WR2j6XnkGW6w-:.d_OFi)O_coN+h0>>vHBKXfc;eM)Dzid[^3Er^+PAA t0}$?' );
define( 'SECURE_AUTH_SALT', 'HX__t.hA#xiN.X|HkB3uaTuz%Ll6Fd*S9&?`]T5uL$3Q&c>_wA8.tsivg6ZA.]lZ' );
define( 'LOGGED_IN_SALT',   '`0S+tBQMTe4]Dq@P6+S-`D6gM`N3#CTIisQ|rF.Sj,XnK<X{A)giK#O}6ehA?[jz' );
define( 'NONCE_SALT',       'kTV /o<_t}15r^6jn]g]u)hP)To*CP7j#5:LyWjNV!zm*MZV{H8JAwzC9+ @UyR.' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
