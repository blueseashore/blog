<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'blog');

/** MySQL数据库用户名 */
define('DB_USER', 'blog');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'blog=1990926');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`0U#v^,Y44=b.QdN2$ty%yD.^>;n(.kmU+=pDCf^1tEmeER165XX~3maw7~I@jYK');
define('SECURE_AUTH_KEY',  'RW~ga~hlb1b~gx%+|UpJ=BFwX#rRfz)eX2-;L501G1)R2C,dlt?ycxW[-4|l^czJ');
define('LOGGED_IN_KEY',    'q3i8ca$JS1jt@rVT1IgAyyrSo6~R~Z%cMN&E`$N%$;}#kD>l&`vzBzEGJ/`!.dtS');
define('NONCE_KEY',        'A#s$yWf91Ih9b_!R8~=9$nQ|Eb8GXZQGzaV_J.:{-V;uagyulSWxA]7;J!Tx6sHd');
define('AUTH_SALT',        'l=-c2)GU:s%b0#g<~o6=V3r|XMa:9z$X~V,/PEyJEYII%6euBk%|dvBW)j%6Z1Jh');
define('SECURE_AUTH_SALT', 'Ugvj.Awtw#IoeUq#JQ#&H,P(S@?FQanC7WG0Yi]b`dQ?zNzEq@-/^gA~u`dQy4.=');
define('LOGGED_IN_SALT',   ' v|0W*8Z1Q,/~`|5%sT)Q9<DS,@lu|[tB#z80BxpKbE6oRX5La~d*UGSI@Zo@HeJ');
define('NONCE_SALT',       'I~<*y%yGJhvI{K{n(${od;~6/ktbC4V[H) `Sw2|}[F<<arhXpYC`b::t$:]D2)0');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

