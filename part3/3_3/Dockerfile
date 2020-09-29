FROM docker:latest
COPY config.json /root/.docker/config.json
WORKDIR /app
RUN apk add git && apk add --no-cache php7 
COPY script.php /app
ENTRYPOINT [ "php",  "script.php" ]
