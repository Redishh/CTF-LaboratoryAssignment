from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service

from pyvirtualdisplay import Display

from webdriver_manager.chrome import ChromeDriverManager

import requests


"""
#service = ChromeService(executable_path=ChromeDriverManager().install())
#options.headless = True
#opts = webdriver.ChromeOptions()
#opts.add_argument('--no-sandbox')
#opts.add_argument('--disable-dev-shm-usage')

driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()))
lastVisitedURL = 0
maliciousURL = 0
print("WORKS")

#get takes a URL as input, the driver will then visit this URL.
#visits the webpage 1 time in order to set the cookie
driver.get("http://70.34.197.121/CODEFROM02-24/DOM.php?ID=dog")
driver.add_cookie({"name": "FLAG", "value": "FLAG[123]"})
driver.quit()

"""


s = requests.session()
s.cookies.set("FLAG", "FLAG", domain="http://70.34.197.121/CODEFROM02-24/")
r = requests.("http://70.34.197.121/CODEFROM02-24/")
print(r.status_code)



#visit maliciousURL if a new URL has appeared.
"""
if maliciousURL is not lastVisitedURL:
    #visists the malicious link to give the cookie.
    lastVisitedURL = maliciousURL
else:
    #Takes the URL from the file that my php script saves it to.
    f = open("test.txt", "r")
    maliciousURL = f.read()
    f.close()
"""
