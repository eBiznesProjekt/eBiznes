# -*- coding: utf-8 -*-
import scrapy
from scrapy.spiders import CrawlSpider, Rule
from scrapy.linkextractors import LinkExtractor
from zoo.items import ZooItem



class ZookarinaSpider(CrawlSpider):
    name = 'zookarina'
    allowed_domains = ['www.zookarina.pl']
    start_urls = ['https://www.zookarina.pl/pl/kategoria/224/adres%C3%B3wki-grawerowane',
                  'https://www.zookarina.pl/pl/kategoria/13/akcesoria',
                  'https://www.zookarina.pl/pl/kategoria/48/drapaki',
                  'https://www.zookarina.pl/pl/kategoria/56/grzebienie-i-szczotki',
                  'https://www.zookarina.pl/pl/kategoria/147/higiena',
                  'https://www.zookarina.pl/pl/kategoria/63/karmy-mokre',
                  'https://www.zookarina.pl/pl/kategoria/64/karmy-suche',
                  'https://www.zookarina.pl/pl/kategoria/177/karmy-weterynaryjne',
                  'https://www.zookarina.pl/pl/kategoria/59/kuwety-i-%C5%82opatki',
                  'https://www.zookarina.pl/pl/kategoria/54/legowiska-i-budki',
                  'https://www.zookarina.pl/pl/kategoria/51/miski',
                  'https://www.zookarina.pl/pl/kategoria/127/pojemniki-na-karm%C4%99',
                  'https://www.zookarina.pl/pl/kategoria/61/pozosta%C5%82e',
                  'https://www.zookarina.pl/pl/kategoria/58/preparaty',
                  'https://www.zookarina.pl/pl/kategoria/22/przysmaki',
                  'https://www.zookarina.pl/pl/kategoria/57/szampony-i-od%C5%BCywki',
                  'https://www.zookarina.pl/pl/kategoria/55/szelki-smycze-i-obro%C5%BCe',
                  'https://www.zookarina.pl/pl/kategoria/152/%C5%9Brodki-na-paso%C5%BCyty',
                  'https://www.zookarina.pl/pl/kategoria/53/torby',
                  'https://www.zookarina.pl/pl/kategoria/98/transportery',
                  'https://www.zookarina.pl/pl/kategoria/283/ubranka',
                  'https://www.zookarina.pl/pl/kategoria/1000042/ubranka-pozabiegowe',
                  'https://www.zookarina.pl/pl/kategoria/50/witaminy-i-suplementy',
                  'https://www.zookarina.pl/pl/kategoria/52/zabawki',
                  'https://www.zookarina.pl/pl/kategoria/60/żwirki',]
    rules = (
        Rule(LinkExtractor(allow=(), restrict_css=
        ('.pagerNextPage',)),
             callback="parse_item",
             follow=True),
    )


    def parse_item(self, response):
        item_links = response.css('.js_item > a ::attr(href)').extract()
        for item in item_links:
            item = 'https://www.zookarina.pl' + item
            yield scrapy.Request(item, callback=self.parse_detail_page)

    def parse_detail_page(self, response):
        SET_SELECTOR = '.productShowContainer'
        items = ZooItem()
        for item in response.css(SET_SELECTOR):
            NAME_SELECTOR = '.productShowContainerProductNameHeader ::text '
            IMG_SELCTOR = '.js_imageLink > .js_image ::attr(src)'
            PRICE_SELECTOR = '.js_productShowPriceValue ::text'
            DESCRIPTION_SELECTOR = '.productShowContentData > .productShowDescriptionCMS ::text'
            DESC_2 = '.productShowContentData > .productShowDescriptionCMS > span ::text'
            Category = '.sharedPartialSitemap > span ::text'
            name = item.css(NAME_SELECTOR).extract_first().strip()
            image_url = item.css(IMG_SELCTOR).extract_first().strip()
            price = item.css(PRICE_SELECTOR).extract_first().strip()
            res = item.css(DESCRIPTION_SELECTOR).extract_first().strip()
            description2 = item.css(DESC_2).extract_first().strip()
            category = item.css(Category).extract()[2].strip()
            if res is not None and description2 is not None:
                description = str(res) + str(description2)
            elif res is None and description2 is not None:
                description = description2
            elif res is not None and description2 is None:
                description = res
            elif res is None and description2 is None:
                description = ""

            items['name'] = name
            items['image_url'] = image_url
            items['price'] = price
            items['description'] = description
            items['category'] = category
            items['main_category'] = "Koty"
        yield items
