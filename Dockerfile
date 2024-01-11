FROM fedora
RUN dnf -y update && dnf -y install httpd git  && dnf clean all
RUN sed -i 's/Listen 80/Listen 8080/g' /etc/httpd/conf/httpd.conf
RUN echo "Hello From Dockerfile" > /var/www/html/index.html
EXPOSE 8080
ENTRYPOINT ["/usr/sbin/httpd", "-DFOREGROUND"]
