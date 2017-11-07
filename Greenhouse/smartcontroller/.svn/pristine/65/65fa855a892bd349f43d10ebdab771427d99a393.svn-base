#!/usr/bin/env python

#############################################################
### Import 
#############################################################
import RPi.GPIO as GPIO
import time

DARK_VAL = 500
# lightest 0 lux
# darkest 500 lux
#############################################################
### Define function 
#############################################################
def getLight (RCpin):
	reading = 0
	GPIO.setup(RCpin, GPIO.OUT)
	GPIO.output(RCpin, GPIO.LOW)
	time.sleep(0.1)
	
	GPIO.setup(RCpin, GPIO.IN)
	# This takes about 1 millisecond per loop cycle
	while ((GPIO.input(RCpin) == GPIO.LOW) & (reading < DARK_VAL)):
		reading += 1
	return reading
        
#############################################################
### End
#############################################################
