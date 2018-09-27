#!/usr/bin/env bash
# This deploy script is run regularly in cron on the production server

# reset to consistent state
git reset --hard
git checkout master

# Pull the latest things from Github
git pull

# Composer install
php composer.phar install --no-dev --optimize-autoloader --no-interaction