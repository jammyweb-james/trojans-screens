#!/bin/sh

sleep 30
~/.local/bin/gdown "https://drive.google.com/uc?id=1Qrs7winLz37CKA9CzhTnhMIlV_1URSVv"

SERVICE='omxplayer'
while true; do
if ps ax | grep -v grep | grep $SERVICE > /dev/null
then
echo "running" # >> /dev/null
else
omxplayer --loop 2022-trojans-barvid.mp4 &


fi
done
