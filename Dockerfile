FROM tutum/lamp
RUN rm -rf /var/www/*
ADD index.php /var/www

