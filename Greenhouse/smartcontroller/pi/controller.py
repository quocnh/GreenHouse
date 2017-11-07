#!/usr/bin/env python
import config

def turnOnHeater():
	#TODO
	print "turn ON heater"

def turnOffHeater():
	#TODO
	print "turn OFF heater"

def turnOnCooler():
	#TODO
	print "turn on cooler"

def turnOffCooler():
	#TODO
	print "turn off cooler"

def turnOnLight():
	#TODO
	print "turn on light"

def turnOffLight():
	#TODO
	print "turn off light"

def turnOnFan():
	#TODO
	print "turn on fan"

def turnOffFan():
	#TODO
	print "turn off fan"

def turnOnWater():
	#TODO
	print "turn on water"

def turnOffWater():
	#TODO
	print "turn off water"

def controlTemperature(temp, env_temp, diff_temp):
	if(temp < (env_temp - diff_temp)):
		turnOffCooler()
		turnOnHeater()
	elif (temp > (env_temp + diff_temp)):
		turnOnCooler()
		turnOffHeater()

def controlHumidity(humi, env_humi, diff_humi):
	if(humi < (env_humi - diff_humi)):
		turnOnWater()
		turnOffFan()
	elif (humi > (env_humi + diff_humi)):
		turnOnFan()
		turnOffWater()

def controlLight(light, env_light, diff_light):
	if(light < (env_light - diff_light)):	
		turnOffLight()
	elif (light > (env_light + diff_light)):
		turnOnLight()




