# install base image
FROM node:14-alpine

# set working dir
WORKDIR "/app"

# copy package json file
COPY package.json .

# install packages
RUN npm install

# copy source files
COPY . .

CMD ["npm", "start"]



