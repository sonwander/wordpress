<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'occhialeria_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cHuv JW%UeN!{?aCJ~Yk$-O,A=NI>zS:IgXQXq:=N|pJ*~%:g>8wt4l=TMWDQ7&J' );
define( 'SECURE_AUTH_KEY',  '3%HrP!tKpX!{U)6=`u`9!^+?yvxD1gDVXaEH&1vjod{bwF-SFB$r;bBFyqq=~W_L' );
define( 'LOGGED_IN_KEY',    '$p%mFmdNF4*o3=;}^eFylMOn&jA^HOsizJge2@bL3Z/WHa5Y7BW5Olo!!JalV1`h' );
define( 'NONCE_KEY',        '3uJucDhB/Uk6.jO&e~P93emAKiWc&/Mk#Qq?<Seb<[Sd~<skKX@mwa3g`+,3~UUY' );
define( 'AUTH_SALT',        'strnLAFjjd4tP7T.]/[bKXpi4yk-,&u_9Fc05>jg.#)c}zij|w24baY/s{ Dm?0d' );
define( 'SECURE_AUTH_SALT', '@XnSW]e1z}0H?V2&!R=HtMk]zXhdZ{(J9DzOha#P XNmYYYBB27,tZU7T43RkQj4' );
define( 'LOGGED_IN_SALT',   '<>o];7aISfL`#u$@Xq#HCo>7iM>>w#I*f5N/5?cTU.SsSD|4]=umtqlzm930QBI{' );
define( 'NONCE_SALT',       'Mj;8p]fiAPQY3^IqkhhEPoqmq{$BoO&yHJF:])y0QTpo{}k:w}AZI`)c7~HYX!#?' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'occhia';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'WP_MEMORY_LIMIT', '512M' );
/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

