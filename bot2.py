#!/usr/bin/python3

from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service

from webdriver_manager.chrome import ChromeDriverManager
import os
import time
import requests
#If the URLSAVE.txt file is empty the URL has been visited.
while True:
	if os.stat("URLSAVE.txt").st_size == 0:
		time.sleep(5)

	else:
		status_code = 0
		f = open("URLSAVE.txt", "r")
		maliciousURL = f.read()
		print(type(maliciousURL))
		f.close()
		#empty the file.
		open("URLSAVE.txt", 'w').close()
		try:
			request_response = requests.head(maliciousURL)
			status_code = request_response.status_code
		except:
			print("WRONGURL")
		if status_code == 200:
			print("URL is valid/up")
			options = Options()
			#chrome needs headless to work without display.
			options.add_argument("--headless=new")

			driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()), options=options)
			#get takes a URL as input, the driver will then visit this URL.
			#visits the webpage 1 time in order to set the cookie
			driver.get("http://70.34.197.121/CODEFROM02-24")
			driver.add_cookie({"name": "FLAG", "value": "FLAG[gnitpircs_etis_ssorc]"})

			driver.get(maliciousURL)
			driver.quit()
