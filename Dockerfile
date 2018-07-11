FROM debian:buster-slim
RUN apt-get update && apt-get install -y tzdata php7.2-fpm curl procps libfcgi0ldbl
RUN cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime
RUN curl https://raw.githubusercontent.com/Jmeyering/php-fpm-cli/master/php-fpm-cli > /bin/php-fpm-cli && chmod +x /bin/php-fpm-cli
RUN mkdir -p /run/php
COPY init.sh /bin/init.sh
RUN chmod +x /bin/init.sh
COPY test.php /test.php
CMD ["/bin/init.sh"]