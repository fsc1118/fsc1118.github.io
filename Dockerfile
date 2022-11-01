FROM webdevops/php-nginx

WORKDIR /app

COPY . /app

RUN composer install
CMD ["dockercompose up"]