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
define( 'DB_NAME', 'EquipeTerra' );

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
define( 'AUTH_KEY',         'p3R~B0T<Rz.>k)REnr==aH3ELp,T#/.0=lbDvI;G)k<+N|:xF]).N?u&sXmQMa|.' );
define( 'SECURE_AUTH_KEY',  'QsNHDU&?HMu^ql:Np6zBO>wRko6.o-u,AzMnk(Y_[0s5igz7n9VYQV|a)reiIcU;' );
define( 'LOGGED_IN_KEY',    'Qa.1iUTfWRI3g0[]qNZDk5raJ9?JYAx;F}FD]#OijDpcC@tvF69O`IT!AFGbVBpa' );
define( 'NONCE_KEY',        'cy0dkPUWna9G ~^Q=@7i._U+7aj~M81U+(s5MU<6Xxr0YgJ5QvN`Q]-a.rnP}.w{' );
define( 'AUTH_SALT',        '1R2tF;hr$7Uer5X^A?`(<`VHbR.y`_(}m}&sIl$/W_$zW1s1T7GU(^xSy]udgLFo' );
define( 'SECURE_AUTH_SALT', 'N9Ll{W^UMF `vrAO&-,.l+ ){EFx9J&k/i/x9KQD.jCKi=f1<`t*89[E_6xaO,kD' );
define( 'LOGGED_IN_SALT',   'es%|,.(c!z lBA,4#gO/qHj@CYv.*X+jx9.%_U_fUDQ`=oe/dL(Z1}BANo0PdS$_' );
define( 'NONCE_SALT',       'Ecc7ycyUW+j-#L|H_!y@pN*cl;;xmB?=E7:^(gT0/P|7*y,UKNCW.imKJRp6y-61' );

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
