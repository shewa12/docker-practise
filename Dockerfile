# Use an existing image

FROM alpine

# Download & image dependency

RUN apk add --update redis

# Tell the image what to do when it starts

CMD ["redis-server"]