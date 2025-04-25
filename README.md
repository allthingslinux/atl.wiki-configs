# atl.wiki Mediawiki Configs

This repository contains all the configs for atl.wiki mediawiki setup. It can be called from `LocalSettings.php` using the following code. Credentials are stored in a seperate directory and are not stored in a git repository.

```php
<?php

$configFiles = glob('/etc/mediawiki/configs/*.php');
sort($configFiles); 
foreach ($configFiles as $configFile) {
    require_once $configFile;
}

require_once "/etc/mediawiki/secrets/Credentials.php";
```

# How it's Structured
Files are named `n-NAME.php`, `n` is a number such as `05` or `98` which dictates the load order of the files. User rights must be the final to load and extensions must be the penultimate to load. The name must be a capatlised name relevant to the configs it stores. All miscallaneious configs go in `00-Core.php`.

The configurations must be in `/etc/mediawiki/configs` and the `Credentials.php` file must be in `/etc/mediawiki/secrets`, both directories should have `750` permissions and cannot be owned by the webserver but the group MUST be the webserver, e.g. `atl-wiki:www-data`.