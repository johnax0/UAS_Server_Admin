FROM php:7.4.26-apache
#untuk tipe php yang akan digunakan adalah php 7.4.26 karena seperti sebelumnya di uts.
COPY index.php /var/www/html
#index.php akan dipindahkan ke folder /var/www/html untuk menampilkan index.php pada saat ada 
#request untuk web server.
#index.php juga biasanya yang menjadi home page atau page pertama dicari pada web server sebagai default page.

RUN docker-php-ext-install mysqli
#seperti namanya command untuk install mysqli

RUN chmod -R 774 /var/www
RUN chown -R www-data /var/www
RUN chgrp -R www-data /var/www
#untuk memastikan akses control list kepemilikan u dan g di set ke www-data dan hilangkan w dan x untuk others.

 
