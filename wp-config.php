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
define( 'DB_NAME', 'wordpress-db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'itapi123' );

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
define( 'AUTH_KEY',         '8q#|hSBfKs9Pgj`9g7j:A<fTw;B{{om~Si_#8Ml]2e*]c@UhM?U)97O=23T$frDv' );
define( 'SECURE_AUTH_KEY',  'P&Mc^G!9:3Y N7]DU]E7HGp[8gM=osT^pWydafb}_}*x*V:I/{Bk=;Aw!wzqAhij' );
define( 'LOGGED_IN_KEY',    '`jG#P_}M#JS7TjCH{%UHcHxqs:+}mB08S8?1bquoGg*g<d}AIh$H+(MAiww+TgX1' );
define( 'NONCE_KEY',        'JL>5mo,{7!HiUkI<kwVI}6)J/kz$j+T+3Md,@&36D1D]ya.^J_mnr,@3BaY.76s5' );
define( 'AUTH_SALT',        'N@mNg-.m8m})P,Z9v Xff4rcS8:=@E|F3R>E1yH7_=7EmS&2#,.9a.Ws1]@m. YW' );
define( 'SECURE_AUTH_SALT', 'wAj-t>,bRrI;[b<zi|~wlGL&rP2-@F,0y35<Z^Tr.Dkm_Yb>;1E*6+S)a.{.]4@.' );
define( 'LOGGED_IN_SALT',   '.lU~yK6S}fh_<)0qL-i*KPRgS2<Dh=<4,jw`gp$/Aq.YyE]rxO$tP~q`}@ag`^G<' );
define( 'NONCE_SALT',       'z 5qJ[TL);f[!`|ZmE61R#v.i6]r1s-=u_Fr.*E8pXd-1gLC;=d2Yq#,sx9#k] |' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
