FROM ubuntu:16.04
WORKDIR /app
COPY backend-example-docker /app
RUN apt-get update && \
    apt-get install -y curl && \
    curl -sL https://deb.nodesource.com/setup_10.x | bash &&  apt install -y nodejs && \
    apt-get purge -y --auto-remove curl && \ 
    rm -rf /var/lib/apt/lists/* && \
    useradd -m backuser && \
    chown -R backuser /app 			
USER backuser
RUN npm install
ENV FRONT_URL=http://localhost:5000
CMD ["npm", "start"]
