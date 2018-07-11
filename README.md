UTC Timezone problem on php7.2 on debian:buster
==============

## Run `test.php` on php7.2 on debian:buster

```
make run
```

### Output

```
---- php version: 7.2.4-1+b2


------ set default timezone to Asia/Tokyo
string(21) "Asia/Tokyo JST +09:00"


------ set timezone 'UTC'
string(14) "UTC JST +09:00"


------ set timezone 'utc'
string(14) "UTC UTC +00:00"
```