# -*- coding: utf-8 -*-
import scrapy
from scrapy.spiders import CrawlSpider, Rule
from scrapy.linkextractors import LinkExtractor
from zoo.items import ZooItem



class ZookarinaSpider(CrawlSpider):
    name = 'zookarina'
    allowed_domains = ['www.zookarina.pl']
    start_urls = ['https://www.zookarina.pl/pl/kategoria/208/akcesoria-inne',
                  'https://www.zookarina.pl/pl/kategoria/1000122/domki',
                  'https://www.zookarina.pl/pl/kategoria/211/higiena',
                  'https://www.zookarina.pl/pl/kategoria/95/klatki',
                  'https://www.zookarina.pl/pl/kategoria/1000121/miski-i-poidełka',
                  'https://www.zookarina.pl/pl/kategoria/94/piasek',
                  'https://www.zookarina.pl/pl/kategoria/182/pod%C5%82o%C5%BCe',
                  'https://www.zookarina.pl/pl/kategoria/91/pokarm',
                  'https://www.zookarina.pl/pl/kategoria/131/preparaty',
                  'https://www.zookarina.pl/pl/kategoria/1000125/przysmaki',
                  'https://www.zookarina.pl/pl/kategoria/104/siano',
                  'https://www.zookarina.pl/pl/kategoria/213/%C5%9Brodki-na-paso%C5%BCyty',
                  'https://www.zookarina.pl/pl/kategoria/212/witaminy-i-suplementy',
                  'https://www.zookarina.pl/pl/kategoria/1000123/zabawki',
                  'https://www.zookarina.pl/pl/kategoria/223/adres%C3%B3wki-grawerowane',
                  'https://www.zookarina.pl/pl/kategoria/99/akcesoria-szkoleniowe',
                  'https://www.zookarina.pl/pl/kategoria/15/akcesoria',
                  'https://www.zookarina.pl/pl/kategoria/29/budy',
                  'https://www.zookarina.pl/pl/kategoria/1000052/dieta-barf',
                  'https://www.zookarina.pl/pl/kategoria/40/grzebienie-i-szczotki',
                  'https://www.zookarina.pl/pl/kategoria/148/higiena',
                  'https://www.zookarina.pl/pl/kategoria/34/kaga%C5%84ce',
                  'https://www.zookarina.pl/pl/kategoria/18/karmy-mokre',
                  'https://www.zookarina.pl/pl/kategoria/19/karmy-suche',
                  'https://www.zookarina.pl/pl/kategoria/171/karmy-weterynaryjne',
                  'https://www.zookarina.pl/pl/kategoria/263/kolczatki',
                  'https://www.zookarina.pl/pl/kategoria/30/klatki-i-kojce',
                  'https://www.zookarina.pl/pl/kategoria/31/legowiska',
                  'https://www.zookarina.pl/pl/kategoria/41/maszynki-i-no%C5%BCyczki',
                  'https://www.zookarina.pl/pl/kategoria/27/miski',
                  'https://www.zookarina.pl/pl/kategoria/25/naturalne-gryzaki',
                  'https://www.zookarina.pl/pl/kategoria/35/obro%C5%BCe',
                  'https://www.zookarina.pl/pl/kategoria/102/pojemniki-na-karm%C4%99',
                  'https://www.zookarina.pl/pl/kategoria/47/pozosta%C5%82e',
                  'https://www.zookarina.pl/pl/kategoria/43/preparaty',
                  'https://www.zookarina.pl/pl/kategoria/24/przysmaki',
                  'https://www.zookarina.pl/pl/kategoria/36/smycze',
                  'https://www.zookarina.pl/pl/kategoria/45/spinki-i-kokardy',
                  'https://www.zookarina.pl/pl/kategoria/42/szampony-i-od%C5%BCywki',
                  'https://www.zookarina.pl/pl/kategoria/39/szelki',
                  'https://www.zookarina.pl/pl/kategoria/44/%C5%9Brodki-na-paso%C5%BCyty',
                  'https://www.zookarina.pl/pl/kategoria/32/torby',
                  'https://www.zookarina.pl/pl/kategoria/33/transportery',
                  'https://www.zookarina.pl/pl/kategoria/28/zabawki',
                  'https://www.zookarina.pl/pl/kategoria/46/ubranka',
                  'https://www.zookarina.pl/pl/kategoria/1000041/ubranka-pozabiegowe',
                  'https://www.zookarina.pl/pl/kategoria/26/witaminy-i-suplementy',
                  'https://www.zookarina.pl/pl/kategoria/112/wszystko-dla-szczeni%C4%85t',]
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
            name = item.css(NAME_SELECTOR).extract_first().strip()
            image_url = item.css(IMG_SELCTOR).extract_first().strip()
            price = item.css(PRICE_SELECTOR).extract_first().strip()
            res = item.css(DESCRIPTION_SELECTOR).extract_first().strip()
            description2 = item.css(DESC_2).extract_first().strip()
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
        yield items
