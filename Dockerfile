FROM webdevops/php-nginx

WORKDIR /app

COPY . /app

CMD ["dockercompose up"]