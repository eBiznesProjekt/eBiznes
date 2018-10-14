docker network create prestashop-net
docker run -ti --name terrafelis-mysql --network prestashop-net -e MYSQL_ROOT_PASSWORD=admin -p 3307:3306 -d mysql:5.7
docker run -ti --name terrafelis-prestashop --network prestashop-net -e DB_SERVER=terrafelis-mysql -e PS_DOMAIN=192.168.0.110:8080 -e PS_SHOP_URL=192.168.0.110:8080 -p 8080:80 -d prestashop/prestashop