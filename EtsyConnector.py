import requests

class EtsyConnector:

    __keystring = ''
    api_root = 'https://api.etsy.com/v3'

    def __init__(self, api_key = '') -> None:
        self.__keystring = api_key

    def __request(self, endpoint):
        url = self.api_root + endpoint
        headers = {
            'x-api-key': self.__keystring
            }
        return( requests.get(url, headers = headers) )


    def self_test(self):
        r = self.__request('/application/openapi-ping')
        pass

if __name__ == '__main__':
    ec = EtsyConnector('')
    ec.self_test()