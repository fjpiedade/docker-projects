#Create MySQL Image for Node Application
FROM mysql

ENV MYSQL_ROOT_PASSWORD password
COPY api/db/script.sql /docker-entrypoint-initdb.d

#EXPOSE 3306
#docker run -d -p 3307:3306 -e MYSQL_ROOT_PASSWORD=password -e MYSQL_DATABASE=dbdocker -e MYSQL_ROOT_PASSWORD=password --name mysql-docker-container mysql-docker

#additional way
#docker run -d -p 3307:3306 -e MYSQL_ROOT_PASSWORD=password -e MYSQL_DATABASE=dbdocker --name mysql-docker-container mysql-docker
#docker run -d -p 3307:3306 -e MYSQL_ROOT_PASSWORD=password -e MYSQL_DATABASE=dbdocker --name mysql-docker-container mysql-docker

# 2022-10-11 23:49:15+00:00 [ERROR] [Entrypoint]: MYSQL_USER="root", MYSQL_USER and MYSQL_PASSWORD are for configuring a regular user and cannot be used for the root user
# Remove MYSQL_USER="root" and use one of the following to control the root user password:
# - MYSQL_ROOT_PASSWORD
# - MYSQL_ALLOW_EMPTY_PASSWORD
# - MYSQL_RANDOM_ROOT_PASSWORD
