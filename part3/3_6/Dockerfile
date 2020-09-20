FROM node:alpine as build-stage
COPY frontend-example-docker /app
WORKDIR /app
RUN npm install && npm run build
FROM nginx
COPY --from=build-stage /app/dist /usr/share/nginx/html
