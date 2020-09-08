FROM ubuntu:16.04
RUN apt-get update && apt-get install -y curl
COPY frontend-example-docker .
RUN curl -sL https://deb.nodesource.com/setup_10.x | bash
RUN apt install -y nodejs && npm install && npm run build
ENV API_URL=http://localhost:8000
CMD ["npm", "start"]
