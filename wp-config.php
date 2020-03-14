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
define( 'DB_NAME', 'db_portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'dbuser' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Atachichan7190%' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ':,Lc2{(AF7f$;&E$?dysl,JP}7;}qwkr`,{bhaO.OPf%4n%NuB=+)8fw@yp4-R*9' );
define( 'SECURE_AUTH_KEY',  'jH!pN,FLsH;6eCfrdYqzk+L|[xsl!&eqqTlK^@3i]^@hFrVpS} nV3nNC,#,Y7A2' );
define( 'LOGGED_IN_KEY',    '`zF&Ws?-CFbC]R6JDK1x#~`S*vz%RDq<P`{5r2&zomJS!6L?|qvbC~GU%~MgU/zj' );
define( 'NONCE_KEY',        '4&$l|=z,:SW7yW0bM>HimA&/|kZ%?+`D8w+fKM]*Q++htZ|<3.PdYl-3xJ6S|.vS' );
define( 'AUTH_SALT',        'R@LDceZcm>p?WjH+3Xi^;N?|p=Po^Yg[wB(&s`M[1ehJ~C-r:;p(BC5h^:ID0)A8' );
define( 'SECURE_AUTH_SALT', 'u=fH_XpihYSmOf#9~bByrPk%:hW?@ ^:zA=b~GkQ0fn8N0obHK7cy0IM<Dk4+^u*' );
define( 'LOGGED_IN_SALT',   '`.GsdMZQ.XoE,6>{`sqe~F]Ep:Jh,i(as(r[HT^a;fn|e{OD)4jN r=S/I,Rnh:`' );
define( 'NONCE_SALT',       '@2,K(8fX`3blw(pP$o{A8F^</9F.ck}WrRMkqAfDgotB3P1~M1!14h}*TZZv^|G`' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
