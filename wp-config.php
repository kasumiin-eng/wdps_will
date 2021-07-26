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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'carithy216_taksub' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'carithy216_tak2' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'taktaktaktak' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql12018.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FkaCxy^xZiiFu<N.bV9-aUh^%lr1If||(vzf0$#VWF=FZA?rEMxk,d(F`OSo(`u)' );
define( 'SECURE_AUTH_KEY',  '_T<!dZlQ*yK^gYZOzw]1#]t)sH2L2w8%i(2JOG/+%}s`{p%zj|#NNJ{9dPgIbz}U' );
define( 'LOGGED_IN_KEY',    's##AG@83qx)$cKu>WZu+c}=B9+PFaA2i/,8 $5fT=)$q6up:<lJ4k[5+bo,MOXwd' );
define( 'NONCE_KEY',        'Vl?m100Yv!_]mYE%(VS_w=#:O,)Y;TE*|*5 %hk6j{*RFlNj;y$ =sP%z2N2g6w!' );
define( 'AUTH_SALT',        '_}&%=vzF14}vpe.a:lYlJeor@~sV9?KPs5B^6eKEZ8{))G5|<Sy9)@Za8({?Z7F+' );
define( 'SECURE_AUTH_SALT', 'gQGzk*pfpD?6RQq^/G}yYScHCW*x<Cj Y !$KN?V7nP8L`6=%7w=xN/b #O53yZ-' );
define( 'LOGGED_IN_SALT',   '[^r?IG*rVPr}rRr}li6nqu# ?A uy]:^%c6f`cIFw$9H(z1R5J]gPbje=&%;l8;<' );
define( 'NONCE_SALT',       '(}(y/e#@vV:aQ{mHEeN$bHq`r:h!sP-2sQfkg)S HuZ!QeaX( ZDNB3T7EJ{VQaO' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wdps_snmon_prac_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
