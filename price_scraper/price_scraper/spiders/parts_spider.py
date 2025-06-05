import scrapy
from urllib.parse import quote_plus

class PartsSpider(scrapy.Spider):
    name = 'parts'
    allowed_domains = ['primeabgb.com', 'mdcomputers.in']

    def __init__(self, query=None, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.query = query or "graphics card"
        self.start_urls = [
            f"https://www.primeabgb.com/?post_type=product&s={quote_plus(self.query)}",
            f"https://mdcomputers.in/index.php?search={quote_plus(self.query)}"
        ]

    def parse(self, response):
        if "primeabgb.com" in response.url:
            products = response.css(".product-grid-item")
            for product in products:
                name = product.css(".woocommerce-loop-product__title::text").get()
                price = product.css(".price ins .amount::text").get() or product.css(".price .amount::text").get()
                url = product.css("a::attr(href)").get()
                if name and price and url:
                    yield {
                        'site': 'PrimeABGB',
                        'name': name.strip(),
                        'price': price.strip().replace('\u20b9', 'Rs.'),
                        'url': url
                    }

        elif "mdcomputers.in" in response.url:
            products = response.css(".product-layout")
            for product in products:
                name = product.css(".name a::text").get()
                price = product.css(".price-new::text").get() or product.css(".price::text").get()
                url = product.css(".name a::attr(href)").get()
                if name and price and url:
                    yield {
                        'site': 'MDComputers',
                        'name': name.strip(),
                        'price': price.strip().replace('\u20b9', 'Rs.'),
                        'url': response.urljoin(url)
                    }
