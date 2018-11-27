###########################################
# eBiznes
eBiznes repository is used for hosting and sharing all project data about web-service store.

###########################################
#crawler
wymagania:
python3
scrapy ( pip install scrapy)

czasami nie ma jakiegoś win32.api ( pip install pypiwin32)

uruchamianie
cd ./crawler/zoo/
scrapy crawl zookarina --nolog    // --nolog nie pokazuje debugu


###########################################
# DOCKER

We recommend to avoid the PS_INSTALL_AUTO feature. Instead, copy your own custom installation in src/.

For running an existing running website, export your database to a SQL file and paste it in docker/mariadb/import.sql. It will be imported to MariaDB when creating the container.

The prestashop image is customized to include Xdebug, higher limits, etc. You can customize the Dockerfile, run docker-compose build prestashop and docker-compose up.

src/config/settings.inc.php