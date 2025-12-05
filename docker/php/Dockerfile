FROM php:8-fpm

# Устанавливаем часто используемые расширения для разработки
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Настраиваем PHP для разработки
RUN echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/error.ini \
    && echo "display_errors = On" >> /usr/local/etc/php/conf.d/error.ini \
    && echo "log_errors = On" >> /usr/local/etc/php/conf.d/error.ini

# Вместо копирования файла конфигурации, добавляем настройки напрямую
RUN echo "listen = 0.0.0.0:9000" >> /usr/local/etc/php-fpm.d/zz-docker.conf \
    && echo "pm.max_children = 5" >> /usr/local/etc/php-fpm.d/zz-docker.conf \
    && echo "pm.start_servers = 2" >> /usr/local/etc/php-fpm.d/zz-docker.conf \
    && echo "pm.min_spare_servers = 1" >> /usr/local/etc/php-fpm.d/zz-docker.conf \
    && echo "pm.max_spare_servers = 3" >> /usr/local/etc/php-fpm.d/zz-docker.conf \
    && echo "catch_workers_output = yes" >> /usr/local/etc/php-fpm.d/zz-docker.conf

# Проверяем конфигурацию
RUN php-fpm -t