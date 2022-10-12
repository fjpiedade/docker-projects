FROM node:slim
WORKDIR /home/node/app
COPY api/package*.json ./
RUN npm install
COPY . .
EXPOSE 9988
CMD ["npm", "start"]

#CMD npm run start 
#FROM alpine:3.16
#ENV NODE_VERSION 16.17.1