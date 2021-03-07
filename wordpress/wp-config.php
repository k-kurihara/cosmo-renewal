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
define('DB_NAME', 'LAA0943721-dib4zv');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0943721');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'kP5FKX2R');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql148.phy.lolipop.lan');

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
define('AUTH_KEY', 'g<5i;.`2;!##*08/Cu|b0+R/0r`O(p`2gOZeSZm3,8YL36VZ:(zFTLa@uPQQ9nXo');
define('SECURE_AUTH_KEY', '#ocJ"DQ.Pk~Q+Y34-GYPz>~_><gn<*c1z2Sov.l+3.tECGtDf$Ob~G2qi=_y2+}%');
define('LOGGED_IN_KEY', '#>pl%onmungpmK+kB7<*@c`5CQb4Pv>#<eqA,ZT@wd{!5_*_)J;Yr2M:gAdMeQ8d');
define('NONCE_KEY', 'dYNS4$V7EmK{1*,KQ+lqr9DX~~WgQ"*.!Gt1%k=T`??n_%>jsJXH*EGmC4uN1SU!');
define('AUTH_SALT', '&@$*VSOZD/(XTo3Tf&d,[|V(/PV.b@<?,HG%p8R.^[s3}>98sA-s$`y:/y8/JRte');
define('SECURE_AUTH_SALT', ':AZ:;nYdx?g#kYMK56qw`#rFdUn]K=L^f:93w..7JCSvubLAY?JE/RyD>$l0R(}R');
define('LOGGED_IN_SALT', 'ePxLm8JvE(~y)0>LB41QRGRc]v|74c|MOLeC"v1QPj)Zix{k@hj7_K6:frEyq]2U');
define('NONCE_SALT', 'iYTSz3,+[uze.l4oM,hg9VNKq#gKG4=ia0!MsCmXfEPf-1LML`L>e+zS237`".4}');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20210112015355_';

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
