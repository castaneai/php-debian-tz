FROM debian:buster-slim
RUN apt-get update && apt-get install -y tzdata php7.2
RUN cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime
COPY test.php /test.php
CMD ["php", "/test.php"]