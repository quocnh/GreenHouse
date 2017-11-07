#!/usr/bin/env python

#############################################################
### Import 
#############################################################
import RPi.GPIO as GPIO
from requests.auth import HTTPBasicAuth
#This is used to sleep the code a the end.
import time
#Requests is the ONE that is need to be installed with "sudo apt-get install python-requests" this lets us to grab and interpret PHP
import requests
import os
import uuid
import sys, getopt
### Temperature/Humidity ###
#Read AM2320 digital temperature/humidity sensor using I2C mode
#Tested at I2C bus speed of 10kHz
#make sure pigpio daemon is started already using "sudo pigpiod"
import pigpio

import config
import temperature
import humidity
import light
import controller
#############################################################
### Define function 
#############################################################
def cls():
        os.system(['clear','cls'][os.name == 'nt'])

def get_mac():
        mac_num = hex(uuid.getnode()).replace('0x', '').upper()
        mac = '-'.join(mac_num[i : i + 2] for i in range(0, 11, 2))
        return mac
        
def getUrl(argv):
   try:
      opts, args = getopt.getopt(argv,"u:",["url"])
   except getopt.GetoptError:
      print 'Please input URL with'
      sys.exit(2)
   for opt, arg in opts:
      if opt == '-u':
         return arg
      else:
      	print 'Please input URL with -u URL'
      	sys.exit(2)

#############################################################
### Global variable 
#############################################################

### Light Sensor
GPIO.setmode(GPIO.BCM)

### Mac address
MAC = get_mac()

#############################################################
### Main
#############################################################
URL = getUrl(sys.argv[1:])
print(URL) 
response = requests.get(URL)
env_temp = config.ENV_TEMP
diff_temp = config.DIFF_TEMP
env_humi = config.ENV_HUMI
diff_humi = config.DIFF_HUMI
env_light = config.ENV_LIGHT
diff_light = config.DIFF_LIGHT

while response.text != 'exit':
	response = requests.get(URL)
	
	temp = temperature.getTemperatureC(config.I2CBUS, config.I2CADDR)
	print "Temperature (C) : ", temp
	
	humi = humidity.getHumidity(config.I2CBUS, config.I2CADDR)
	print "Humidity (%) : ", humi
	
	light_val = light.getLight(config.LIGHT_PIN)
	print "Light (lux) : ", light_val

	#Control device to manage temperature & humidity & light
	controller.controlTemperature(temp, env_temp, diff_temp)
	controller.controlHumidity(humi, env_humi, diff_humi)
	controller.controlLight(light_val, env_light, diff_light)

	query = {'mac': MAC, 'light': light_val, 'temp': temp, 'humidity':humi}
	res = requests.post(URL, data=query)
	#print(res.text)
	
	#This can be removed but this time is to stop the web server from being overloaded with requests.
	time.sleep(1)
	print "======="
        
#############################################################
### End
#############################################################
