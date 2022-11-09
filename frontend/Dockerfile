FROM node:16-alpine as builder

WORKDIR '/app'

COPY package.json .

RUN npm install

COPY . .

RUN npm run build

FROM nginx

# from builder container get /app/build dir and copy to the nginx dir
COPY --from=builder /app/build /usr/share/nginx/html
