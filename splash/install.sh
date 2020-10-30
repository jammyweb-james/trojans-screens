#!/bin/sh

# Error out if anything fails.
set -e

# Make sure script is run as root.
if [ "$(id -u)" != "0" ]; then
  echo "Must be run as root with sudo! Try: sudo ./install.sh"
  exit 1
fi


echo "Update html files"
cp *.php /var/www/html

echo "update images"
[ ! -d "/var/www/html/assets" ] && mkdir /var/www/html/assets
[ ! -d "/var/www/html/assets/images" ] && mkdir /var/www/html/assets/images
cp *.png /var/www/html/assets/images
cp *.jpg /var/www/html/assets/images
