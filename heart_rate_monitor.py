#!/usr/bin/env python
 
import RPi.GPIO as GPIO
import time
import datetime
 
SLEEP_TIME = 0.001
 
GPIO.setmode(GPIO.BCM)
HRM_PIN = 23
GPIO.setup(HRM_PIN, GPIO.IN, pull_up_down=GPIO.PUD_DOWN)
value = 0
 
while True:
    newValue = GPIO.input(HRM_PIN)
    if newValue and not value:
        print datetime.datetime.now().time().isoformat(), "\tBeat"
    value = newValue
    time.sleep(SLEEP_TIME)
