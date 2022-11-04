ARG NGINX_VERSION=1.17

#TODO: add GD extension
# nginx
FROM nginx:${NGINX_VERSION}-alpine AS symfony_nginx
COPY docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf
