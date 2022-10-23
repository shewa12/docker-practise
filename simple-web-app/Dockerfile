# install base image
FROM node:14-alpine

# setup work dir where all dependencies will be installed
WORKDIR /usr/app

# install dependencies

# since npm install command require package.json file and npm command also require index.js file, we need to specify from where docker can get those files.

# copy command with from & to directory. From where we can get files, in this case package.json & index.js files are inside root directory which is (./) & it will copy file inside dockerfile which is inside current dir (./)

# multiple copy is basically making a segment. Here first copy is ./package.json and second is ./ So if we make changes on the application files it will not run npm install since we have separated segment for package.json file and we didn't changes anything there. It will make the build process faster. Again if we make any changes to the package.json file then it will use application files from the cache.

COPY ./package.json ./

RUN npm install

COPY ./ ./



# default command
CMD ["npm", "start"]