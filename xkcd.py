import requests

response = requests.get('https://xkcd.com/info.0.json')

if response.status_code == 200:
    print(response.json())