import os
from dotenv import load_dotenv
from EtsyConnector import EtsyConnector

load_dotenv()

ec = EtsyConnector(os.getenv('etsy_keystring'))
ec.self_test()