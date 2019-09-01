## 编译参数

```
    ./configure --prefix=/usr/local/php7.2.8 \
	--with-config-file-path=/usr/local/php7.2.8/etc \
	--with-config-file-scan-dir=/usr/local/php7.2.8/etc/conf.d \
    --enable-sockets \
    --enable-mbstring \
    --enable-zip \
    --enable-bcmath \
    --enable-pcntl \
    --enable-fpm  \
    --enable-intl \
    --with-curl \
    --with-iconv \
    --with-zlib \
    --with-gd \
    --with-freetype-dir \
    --with-jpeg-dir \
    --with-png-dir \
    --with-openssl=/usr/local/opt/openssl@1.1 \
    --enable-mysqlnd \
    --with-mysqli=mysqlnd \
    --with-pdo-mysql=mysqlnd \
    --enable-debug \
    --enable-dtrace \
    --enable-phpdbg \
    --enable-phpdbg-webhelper \
    --enable-phpdbg-debug

    make && make install
```
