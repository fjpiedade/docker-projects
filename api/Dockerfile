FROM node:slim
WORKDIR /home/node/app
COPY  package*.json ./api/
RUN npm install
COPY . .
CMD ["npm", "start"]

#ENV NODE_VERSION 16.17.1