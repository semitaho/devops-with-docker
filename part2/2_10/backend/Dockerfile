FROM ubuntu:16.04
RUN apt-get update && apt-get install -y curl
RUN curl -sL https://deb.nodesource.com/setup_10.x | bash &&  apt install -y nodejs
COPY backend-example-docker .
RUN npm install
# ei ollut tarvetta muuttaa, mutta ei haittaakaan, nyt menevät fronttikutsut ainakin proxystä
ENV FRONT_URL=http://localhost
CMD ["npm", "start"]
