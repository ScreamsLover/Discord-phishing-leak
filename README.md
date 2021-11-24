# Discord-phishing-leak
Discord Phishing Link leaked by Certex 
#**FOR EDUCATIONAL PURPOSES ONLY**

Down below you have a small tutorial 
# PREPARING VDS #
# USE ONLY DEBIAN 10 (Not 9 or 11)!!!

apt install sudo
sudo apt update
sudo apt install gnupg2
sudo apt install nginx
sudo apt install -y gnupg2 ca-certificates apt-transport-https software-properties-common
wget -qO - https://packages.sury.org/php/apt.gpg | sudo apt-key add -
echo "deb https://packages.sury.org/php/ buster main" | sudo tee /etc/apt/sources.list.d/php.list

sudo apt update
sudo apt install php8.0
sudo apt install php8.0-{fpm,mysql,imap,ldap,xml,curl,mbstring,zip}

nano /etc/php/8.0/fpm/php.ini
 CTRL+W
 short_open_tag
 CTRL+W, ENTER
 Comment short_open_tag, put ; before it.
 CTRL+O, ENTER, CTRL+X
systemctl reload php8.0-fpm.service

rm -r /etc/nginx/sites-enabled/default

systemctl stop nginx
sudo apt remove apache2*
sudo apt install certbot

nano /etc/nginx/conf.d/ip.conf
# Put and setup VPS CONFIG, CTRL+O, ENTER, CTRL+X




-----------------------------------------------------




# Adding new phish Domain #

systemctl stop nginx
certbot certonly -d DOMAIN

nano /etc/nginx/conf.d/DOMAIN.conf
# Add and setup *DOMAIN CONFIG* here
 CTRL+O, ENTER, CTRL+X

mkdir /var/www/DOMAIN

chown -R www-data:www-data /var/www/DOMAIN/*

systemctl start nginx





-----------------------------------------------------





# *VDS CONGIG*
 !!!! Dont forget change "!!!!!!!!!!!!!!!!!!!!!!DOMAIN" to ur domain name!
 !!!! Dont forget change "!!!!!!!!!!!!!!!!!!!!!!IP" to ur VPS ip!

server {
    listen 80 default;
    server_name !!!!!!!!!!!!!!!!!!!!!!IP;

    return 444;
}
server {
    listen 443 default;
    server_name !!!!!!!!!!!!!!!!!!!!!!IP;

    ssl_certificate /etc/letsencrypt/live/!!!!!!!!!!!!!!!!!!!!!!DOMAIN/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/!!!!!!!!!!!!!!!!!!!!!!DOMAIN/privkey.pem;
    ssl_session_cache shared:SSL:10m;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers "ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384";
    ssl_prefer_server_ciphers on;

    return 444;
}





-----------------------------------------------------





# *DOMAIN CONFIG*
 Dont forget change "!!!!!!!!!!!!!!!!!!!!!!DOMAIN" to ur domain name!

server {
    listen 80;
    server_name !!!!!!!!!!!!!!!!!!!!!!DOMAIN;
    return 301 https://$server_name$request_uri;
}
server {
    listen 443 ssl http2;
    server_name !!!!!!!!!!!!!!!!!!!!!!DOMAIN;

    root /var/www/!!!!!!!!!!!!!!!!!!!!!!DOMAIN;
    index index.php index.html index.htm;
    charset utf-8;

    sendfile off;

    ssl_certificate /etc/letsencrypt/live/!!!!!!!!!!!!!!!!!!!!!!DOMAIN/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/!!!!!!!!!!!!!!!!!!!!!!DOMAIN/privkey.pem;
    ssl_session_cache shared:SSL:10m;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers "ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384";
    ssl_prefer_server_ciphers on;

    add_header X-Content-Type-Options nosniff;
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Robots-Tag none;
    add_header Content-Security-Policy "frame-ancestors 'self'";
    add_header X-Frame-Options DENY;
    add_header Referrer-Policy same-origin;

    location / {
        if (!-f $request_filename){
                set $rule_0 1$rule_0;
        }
        if (!-d $request_filename){
                set $rule_0 2$rule_0;
        }
        if ($rule_0 = "21"){
                rewrite /.* /index.php last;
        }
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/run/php/php8.0-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param PHP_VALUE "upload_max_filesize = 100M \n post_max_size=100M";
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param HTTP_PROXY "";
        fastcgi_intercept_errors off;
        fastcgi_buffer_size 16k;
        fastcgi_buffers 4 16k;
        fastcgi_connect_timeout 300;
        fastcgi_send_timeout 300;
        fastcgi_read_timeout 300;
        include /etc/nginx/fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }

}
