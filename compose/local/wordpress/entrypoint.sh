#!/usr/bin/env bash

set -o errexit
set -o pipefail
set -o nounset

#cp /var/www/html/.env.production-local /var/www/html/.env
cd /var/www/html && composer update -vv
echo "Setting permissions in /var/www/html/app and /var/www/html/wp"
chown -R 1000:1000 /var/www/html/web/app
chown -R 1000:1000 /var/www/html/web/wp
#cd /var/www/html/web && wp --allow-root s3-uploads enable

cmd="$@"
exec $cmd
