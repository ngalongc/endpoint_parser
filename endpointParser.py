import requests
import sys
import re

target = sys.argv[1]
req = requests.get(target)
target_text = req.text

def showEndpoint(text):
    #do the parsing and show me all of the js file
    js_url = []
    result = ""
    #urls = re.findall('http[s]?://(?:[a-zA-Z]|[0-9]|[$-_@.&+]|[!*\(\),]|(?:%[0-9a-fA-F][0-9a-fA-F]))+', text)
    #Takeaway here, python findall would not return a group for you, it returns a tuple for you
    # if you want a gruop returned, use search! and use group to find other stuff for you
    urls = re.finditer('(\/[a-zA-Z]+){2,}', text)
    for i in urls:
        result += i.group() + "<br>"
    return result

print showEndpoint(target_text)
