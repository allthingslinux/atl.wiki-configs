#!/bin/bash

# /etc/mediawiki
sudo chown -R atl-wiki:www-data /etc/mediawiki
sudo chmod -R 750 /etc/mediawiki

# /var/www/mediawiki
sudo chown -R atl-wiki:www-data /var/www/mediawiki
sudo chmod -R 750 /var/www/mediawiki

# /var/www/mediawiki/images & /var/www/mediawiki/cache
sudo chmod -R 770 /var/www/mediawiki/images
sudo chmod -R 770 /var/www/mediawiki/cache

# /var/www/mediawiki/sitemap & /var/www/mediawiki/sitemap.xml
sudo chmod -R 755 /var/www/mediawiki/sitemap
sudo chmod 755 /var/www/mediawiki/sitemap.xml
