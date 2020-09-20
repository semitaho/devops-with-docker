FROM node:alpine
WORKDIR /app
COPY backend-example-docker /app
RUN adduser -D backuser && \
    chown -R backuser /app 			
USER backuser
RUN npm install
ENV FRONT_URL=http://localhost:5000
CMD ["npm", "start"]
