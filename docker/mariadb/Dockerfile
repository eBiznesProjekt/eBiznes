FROM mariadb

CMD ["--character-set-server=utf8", "--collation-server=utf8_general_ci"]

ADD prestashop.sql /docker-entrypoint-initdb.d
