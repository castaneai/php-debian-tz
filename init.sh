#!/bin/bash
/usr/sbin/php-fpm7.2 -D
/bin/php-fpm-cli -connect /run/php/php7.2-fpm.sock -r "$(tail -n +2 /test.php)"
