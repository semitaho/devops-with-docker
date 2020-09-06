FROM ubuntu:16.04
COPY script .
RUN apt-get update && apt-get install -y curl
CMD ["sh", "./script"]
