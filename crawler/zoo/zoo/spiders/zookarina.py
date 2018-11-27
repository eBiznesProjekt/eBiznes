# -*- coding: utf-8 -*-
import scrapy
from scrapy.spiders import CrawlSpider, Rule
from scrapy.linkextractors import LinkExtractor
from zoo.items import ZooItem
import random


class ZookarinaSpider(CrawlSpider):
    name = 'zookarina'
    allowed_domains = ['www.zookarina.pl']
    start_urls = ['https://www.zookarina.pl/pl/kategoria/121/fretka',
                  'https://www.zookarina.pl/pl/kategoria/119/jeż',
                  'https://www.zookarina.pl/pl/kategoria/103/terrarystyka',
                  'https://www.zookarina.pl/pl/kategoria/11/wędkarstwo']
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
            items['category'] = "Inne/" + str(category)
            items['ilosc'] = random.randint(10, 100)
        yield items
