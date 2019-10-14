#!/bin/sh

# Error out if anything fails.
set -e

# Make sure script is run as root.
if [ "$(id -u)" != "0" ]; then
  echo "Must be run as root with sudo! Try: sudo ./install.sh"
  exit 1
fi


echo "Copy .ini file to /boot"
cp video_looper.ini /boot

echo "Update startup file"
cp rc.local /etc
