import scrapy

class BrickSetSpider(scrapy.Spider):
    name = "spider"
    start_urls = ['https://www.zookarina.pl/pl/kategoria/148/higiena']

    def parse(self, response):
        SET_SELECTOR = '.js_item'
        for brickset in response.css(SET_SELECTOR):
            NAME_SELECTOR = '.itemName ::text '
            IMG_SELCTOR = 'img ::attr(src)'
            yield {
                'name': brickset.css(NAME_SELECTOR).extract_first(),
                'image': brickset.css(IMG_SELCTOR).extract_first(),
            }