FROM tutum/apache-php
RUN rm -rf /var/www/*
ADD index.php /var/www/index.php

