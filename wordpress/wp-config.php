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
define( 'DB_NAME', 'wp-1' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'monchi12' );

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
define( 'AUTH_KEY',         '~kpn=~WGvh17j(,:t lP;J|OFu(bLU*~aRB*g|e6]*hic:dJ9/jq6hIT3.=(!asJ' );
define( 'SECURE_AUTH_KEY',  'JfM,7ig+&D5UmlLD. .[%*xt9Q&r|.cyoqN/7O5/nqNMRYZB(R-RYletK?BbjP)u' );
define( 'LOGGED_IN_KEY',    '*Ld31qa}!LH=liPlt QI%A5}AWt<rl/n:+):i1FCq`FA:>L@L@/@((m]W:o];Aji' );
define( 'NONCE_KEY',        ';z^&&/!OUgB`3*Xd,<>k_WOC.Gs!ib$;d-*q,M.<_bsWWxe9Lf*hL[4gx+mlucqs' );
define( 'AUTH_SALT',        'f@x*L8|o;-4;Y}IB)b|II4|m7ex=B`-Y3t,_L0n^|7E#uG;3~vw6b;,O/*SmJ=0=' );
define( 'SECURE_AUTH_SALT', '2*ZKqq2:)(Z/uh)(5LZnb(QO4A!G# 5e14smdyq}j$mzBySr.f#-Fl-IxI9?][ue' );
define( 'LOGGED_IN_SALT',   '1MyIEYH}@8^wae/:@_2[gCTl6L_HzpM.=]OC #Ks>Bv%1pR~f5_qH4q)=w- ysus' );
define( 'NONCE_SALT',       'Zmc.h4${^^>vWU@XA|*civ<[6/D*MXQ.;YoaT~>3#tj[xK3m~2e&b]:W1.rK>[md' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
