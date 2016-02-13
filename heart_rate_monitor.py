#!/usr/bin/env python
 
import RPi.GPIO as GPIO
import time
import datetime
import MySQLdb
 
SLEEP_TIME = 0.001
 
GPIO.setmode(GPIO.BCM)
HRM_PIN = 23
GPIO.setup(HRM_PIN, GPIO.IN, pull_up_down=GPIO.PUD_DOWN)
value = 0

db = MySQLdb.connect("localhost", "hrm", "heartbeat", "HeartRate")
curs = db.cursor()

 
while True:
    newValue = GPIO.input(HRM_PIN)
    if newValue and not value:
        print datetime.datetime.now().time().isoformat(), "\tBeat"
        curs.execute("INSERT INTO Beats VALUES (NOW())")
        db.commit()
    value = newValue
    time.sleep(SLEEP_TIME)
