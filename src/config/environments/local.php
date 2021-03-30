<?php
/**
 * Configuration overrides for WP_ENV === 'local'
 */
use Roots\WPConfig\Config;

/**
 * Redis settings
*/
Config::define('WP_REDIS_HOST', env('REDIS_HOST'));
Config::define('WP_CACHE_KEY_SALT', env('REDIS_CACHE_KEY_SALT'));
Config::define('WP_REDIS_SELECTIVE_FLUSH', env('REDIS_SELECTIVE_FLUSH'));

/**
 * You should try to keep staging as close to production as possible. However,
 * should you need to, you can always override production configuration values
 * with `Config::define`.
 *
 * Example: `Config::define('WP_DEBUG', true);`
 * Example: `Config::define('DISALLOW_FILE_MODS', false);`
 */
Config::define('DISALLOW_FILE_EDIT', false);

$_SERVER['HTTPS'] = 'off';
