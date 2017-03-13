import requests
import sys
import re
from bs4 import BeautifulSoup


target = sys.argv[1]
req = requests.get(target)
target_text = req.text

form_html = """<form action="endpointParser.php" method=get><div class="col-sm-8"><input class="col-sm-12" name=target type=text id=website value="{0}"></input></div><div class="col-sm-4"><input type=submit value="Go!"></input></div></form><br>"""

def showJs(text):
    #do the parsing and show me all of the js file
    js_url = []
    result = ""
    #urls = re.findall('http[s]?://(?:[a-zA-Z]|[0-9]|[$-_@.&+]|[!*\(\),]|(?:%[0-9a-fA-F][0-9a-fA-F]))+', text)
    #for i in urls:
    #    if ".js" in i:
    #        i = i.strip("'></script>")
    #        i = i.strip('"></script>')
    #        i += "<br>"
    #        result += i
    html = text
    parsed_html = BeautifulSoup(html,"lxml")
    parsed_script_html = parsed_html.findAll('script',{"src":True})
    for i in parsed_script_html:
        if "http" not in i['src']:
            result += form_html.format(target + i['src'])
            continue
        result += form_html.format(i['src'])
    return result

print showJs(target_text)
