<?php
/**
 * Configuration overrides for WP_ENV === 'test'
 */
use Roots\WPConfig\Config;

/**
 * DB settings
*/
define('DB_HOST', getenv('DB_HOST'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_USER', getenv('DB_USER'));

/**
 * S3 settings
*/
Config::define('S3_UPLOADS_BUCKET', env('S3_UPLOADS_BUCKET'));
Config::define('S3_UPLOADS_REGION', env('S3_UPLOADS_REGION'));
Config::define('S3_UPLOADS_AUTOENABLE', env('S3_UPLOADS_AUTOENABLE') ?: false);
Config::define('S3_UPLOADS_DISABLE_REPLACE_UPLOAD_URL', env('S3_UPLOADS_DISABLE_REPLACE_UPLOAD_URL') ?: true);
Config::define('S3_UPLOADS_OBJECT_ACL', env('S3_UPLOADS_OBJECT_ACL') ?: 'private');
Config::define('S3_UPLOADS_USE_INSTANCE_PROFILE', env('S3_UPLOADS_USE_INSTANCE_PROFILE') ?: true);

/**
 * Redis settings
*/
Config::define('WP_REDIS_HOST', getenv('REDIS_HOST'));
Config::define('WP_CACHE_KEY_SALT', getenv('REDIS_CACHE_KEY_SALT'));
Config::define('WP_REDIS_SELECTIVE_FLUSH', getenv('REDIS_SELECTIVE_FLUSH'));

/**
 * You should try to keep staging as close to production as possible. However,
 * should you need to, you can always override production configuration values
 * with `Config::define`.
 *
 * Example: `Config::define('WP_DEBUG', true);`
 * Example: `Config::define('DISALLOW_FILE_MODS', false);`
 */