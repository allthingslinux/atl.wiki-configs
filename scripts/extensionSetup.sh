#!/bin/bash

cd /var/www/atlwiki/mediawiki/extensions/OATHAuth && composer update --no-dev
cd /var/www/atlwiki/extensions/WebAuthn && composer update --no-dev  
cd /var/www/atlwiki/extensions/OAuth && composer update --no-dev
cd /var/www/atlwiki/extensions/AntiSpoof && composer update --no-dev

/var/www/atlwiki/scripts/permissionSetup.sh
