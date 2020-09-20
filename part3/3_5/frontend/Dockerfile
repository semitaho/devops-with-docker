FROM node:alpine
COPY frontend-example-docker /app
WORKDIR /app
RUN npm install && npm run build && \
    adduser -D app && \
    chown -R app /app 
USER app    
ENV API_URL=http://localhost:8000
CMD ["npm", "start"]
