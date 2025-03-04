ssh root@192.162.69.158
V0r8i0T9v0i6B7B

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
sudo apt update
sudo apt install git -y
git clone git@github.com:Fab83/reno_laravel.git /var/www/reno_laravel

cd /var/www/reno_laravel
# composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
composer install --no-dev --optimize-autoloader

cp .env.example .env

INSTALL MYSQL
sudo apt update
sudo apt upgrade -y
sudo apt install apache2 -y
sudo apt install mysql-server -y
sudo apt install php libapache2-mod-php php-mysql php-xml php-mbstring php-zip php-curl php-gd php-cli -y

sudo apt install mariadb-server -y