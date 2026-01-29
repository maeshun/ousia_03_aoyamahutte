<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
//define('DB_NAME', 'LA07811729-aoyamahutte');
define('DB_NAME', 'aoyamahutte_wp');

/** MySQL データベースのユーザー名 */
//define('DB_USER', 'LA07811729');
define('DB_USER', 'user');

/** MySQL データベースのパスワード */
//define('DB_PASSWORD', 'accohutte321');
define('DB_PASSWORD', 'password');

/** MySQL のホスト名 */
//define('DB_HOST', 'mysql146.phy.lolipop.lan');
define('DB_HOST', 'db:3306');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '*#KN)WSX(BeehbxBh(?(Dc+(L!/?|AvM-<l[T=K@Bha`!hzwl:FFI&SvdD,-^+a+');
define('SECURE_AUTH_KEY', '{;W":X>ZtJT`)z1sVW3}@Bg_sOpV,j]]uHo3?kR#q:*C1i^H%EzEpH];e6i$<7eb');
define('LOGGED_IN_KEY', '-Z[9p;4?_}f&"/=q)|dF6<X,lWgKa2`6Wau4%,)u6fF.;yz]]w?S,Do{i6c$aqoh');
define('NONCE_KEY', 'gAX@p{:.J@p)%.vXG:tR:Yw@h~JueEJRP&.eIK>`]M|i2Fhf9.f8D^|sUHy>f_2(');
define('AUTH_SALT', 'PAQ7YlDJZ@=0hH4|w5X)4=,n>YKOq6`C8JY*wL>RN9_sJ(sgzi7WM"shkh9Ff(z-');
define('SECURE_AUTH_SALT', 'm7v.b~<J.+b)8zuPZZ/pspjLprjcRz$W!2m#$<Z)Yz_Ynl#}%xZq=77JZirdguug');
define('LOGGED_IN_SALT', '8dOl&A^Z9;YWnTTOXQOF!o(CBGFct=bWZ0%MC7i6jMKY}}?5?""UaG!y}aL/Q>Kb');
define('NONCE_SALT', '7-K>Hu^df-UARoL,S<TlE:XOj4[vZ.P>d<k(G4!T49o}){+D)Db`ZBVn&4xU1npB');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20201031164748_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
