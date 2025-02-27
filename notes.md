ssh root@192.162.69.158
N4Q8V8W1H2a0I9I

MAJ

cd /var/www/reno_laravel
git pull origin main  # Ou la branche que tu utilises

Si tu as fait des modifications locales non commit, utilise d’abord :
# git stash  # Sauvegarde les changements locaux
# git pull origin main
# git stash pop  # Récupère les changements
composer install --no-dev --optimize-autoloader
composer update
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan optimize
php artisan migrate --force
npm install
npm run build

Vérifier et redémarrer les services / Une fois la mise à jour effectuée, redémarre PHP et Nginx :
sudo systemctl restart php8.2-fpm
sudo systemctl restart nginx

Vérifie que tout tourne correctement :
systemctl status php8.2-fpm
systemctl status nginx

***********  script de mise à jour **********

sudo nano /var/www/reno_laravel/update.sh


#!/bin/bash
cd /var/www/reno_laravel
git pull origin main
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan optimize
npm install
npm run build
sudo systemctl restart php8.2-fpm
sudo systemctl restart nginx
echo "Mise à jour terminée !"

chmod +x /var/www/reno_laravel/update.sh
sudo /var/www/reno_laravel/update.sh


********** INSTALL *************

ssh-keygen -t rsa -b 4096 -C "fvzoom83@gmail.com"

eval "$(ssh-agent -s)"
ssh-add ~/.ssh/id_rsa

# Affiche ta clé publique :
cat ~/.ssh/id_rsa.pub
# Copie tout le contenu affiché et ajoute-le sur GitHub :
# Va sur GitHub → Settings → SSH and GPG keys.
# Clique sur "New SSH Key".
# Colle la clé et enregistre.

# Vérifie si ton VPS est bien reconnu par GitHub :
ssh -T git@github.com

git clone git@github.com:Fab83/reno_laravel.git /var/www/reno_laravel

cd /var/www/reno_laravel
# composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
composer install --no-dev --optimize-autoloader

cp .env.example .env
nano .env
# DB_CONNECTION=sqlite
# DB_DATABASE=/var/www/reno_laravel/database/database.sqlite
mkdir -p database
touch database/database.sqlite
php artisan migrate --force

sudo chown -R www-data:www-data /var/www/reno_laravel
sudo chmod -R 775 /var/www/reno_laravel/storage /var/www/reno_laravel/bootstrap/cache

php artisan key:generate

sudo apt install nginx -y
sudo nano /etc/nginx/sites-available/reno_laravel

server {
    listen 80;
    server_name https://vps110478.serveur-vps.net/;

    root /var/www/reno_laravel/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}

sudo ln -s /etc/nginx/sites-available/reno_laravel /etc/nginx/sites-enabled/

sudo apt install php-cli php-fpm php-mbstring php-xml php-bcmath php-tokenizer php-curl php-zip php-sqlite3 unzip curl git -y

sudo systemctl restart php-fpm

php artisan config:cache
php artisan route:cache
php artisan view:cache

sudo apt install certbot python3-certbot-nginx -y

sudo certbot --nginx -d https://vps110478.serveur-vps.net/
sudo apt install -y nodejs
npm install
npm run build