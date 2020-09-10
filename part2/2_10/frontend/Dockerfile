FROM ubuntu:16.04
RUN apt-get update && apt-get install -y curl
COPY frontend-example-docker .
RUN curl -sL https://deb.nodesource.com/setup_10.x | bash
RUN apt install -y nodejs && npm install && npm run build
# tämän muutin, jotta proxy osaa ohjata backendiin oikein, eli /api => localhost:8000
ENV API_URL=http://localhost/api
CMD ["npm", "start"]
