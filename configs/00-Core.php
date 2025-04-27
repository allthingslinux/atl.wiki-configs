<?php
// All other configs: https://www.mediawiki.org/wiki/Manual:Configuration_settings

#################################################################### Error Logging & Troubleshooting

error_reporting( 1 );
ini_set( 'display_errors', 1 );

// https://www.mediawiki.org/wiki/Manual:$wgShowExceptionDetails
$wgShowExceptionDetails = true;
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

// https://www.mediawiki.org/wiki/Manual:$wgDebugLogFile
// https://www.mediawiki.org/wiki/Manual:$wgDBname
$wgDebugLogFile = "/var/log/mediawiki/debug-{$wgDBname}.log";

#################################################################### URL and CDN
// https://www.mediawiki.org/wiki/Manual:Short_URL1

// https://www.mediawiki.org/wiki/Manual:$wgSitename
$wgSitename = "atl.wiki";

// https://www.mediawiki.org/wiki/Manual:$wgMetaNamespace
$wgMetaNamespace = "Atl.wiki";

// https://www.mediawiki.org/wiki/Manual:$wgServer
$wgServer = "https://atl.wiki";

// https://www.mediawiki.org/wiki/Manual:$wgMainPageIsDomainRoot
$wgMainPageIsDomainRoot = true;

// https://www.mediawiki.org/wiki/Manual:$wgUseCdn
$wgUseCdn = true;

// https://www.mediawiki.org/wiki/Manual:$wgCdnServersNoPurge
$wgCdnServersNoPurge = ["2400:cb00::/32", "2606:4700::/32", "2803:f800::/32", "2405:b500::/32", "2405:8100::/32", "2a06:98c0::/29", "2c0f:f248::/32", "173.245.48.0/20", "103.21.244.0/22", "103.22.200.0/22", "103.31.4.0/22", "141.101.64.0/18", "108.162.192.0/18", "190.93.240.0/20", "188.114.96.0/20", "197.234.240.0/22", "198.41.128.0/17", "162.158.0.0/15", "104.16.0.0/13", "104.24.0.0/14", "172.64.0.0/13", "131.0.72.0/22"];

$wgScript = "/";
$wgScriptPath = ""; # index.php is at root
$wgArticlePath = "/$1"; # Pretty URL

// https://www.mediawiki.org/wiki/Manual:$wgUsePathInfo
$wgUsePathInfo = ( strpos( PHP_SAPI, 'cgi' ) === false ) && ( strpos( PHP_SAPI, 'apache2filter' ) === false ) && ( strpos( PHP_SAPI, 'isapi' ) === false );

$actions = [
	'view',
	'edit',
	'watch',
	'unwatch',
	'delete',
	'revert',
	'rollback',
	'protect',
	'unprotect',
	'markpatrolled',
	'render',
	'submit',
	'history',
	'purge',
	'info',
];

foreach ( $actions as $action ) {
  $wgActionPaths[$action] = "/$action/$1";
}

// https://www.mediawiki.org/wiki/Manual:$wgForceHTTPS
$wgForceHTTPS = true;

#################################################################### DB Config

// https://www.mediawiki.org/wiki/Manual:$wgDBtype
$wgDBtype = "mysql";

// https://www.mediawiki.org/wiki/Manual:$wgDBprefix
$wgDBprefix = "mw_";

// https://www.mediawiki.org/wiki/Manual:$wgDBssl
$wgDBssl = false;

// https://www.mediawiki.org/wiki/Manual:$wgDBTableOptions
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

// https://www.mediawiki.org/wiki/Manual:$wgSharedTables
$wgSharedTables[] = "actor";

#################################################################### Caching

// https://www.mediawiki.org/wiki/Manual:$wgMainCacheType
$wgMainCacheType = CACHE_ACCEL;  

// https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:$wgEnableSidebarCache
$wgEnableSidebarCache = true;

// https://www.mediawiki.org/wiki/Manual:$wgCacheDirectory
$wgCacheDirectory = "/var/www/mediawiki/cache";

#################################################################### Misc

// https://www.mediawiki.org/wiki/Manual:$wgPingback
$wgPingback = true;

// https://www.mediawiki.org/wiki/Manual:$wgLanguageCode
$wgLanguageCode = "en";

// https://www.mediawiki.org/wiki/Manual:$wgLocaltimezone
$wgLocaltimezone = "UTC";

// https://www.mediawiki.org/wiki/Manual:$wgDiff3
$wgDiff3 = "/usr/bin/diff3";

// https://www.mediawiki.org/wiki/Manual:$wgUseRCPatrol
$wgUseRCPatrol = false;

// https://www.mediawiki.org/wiki/Manual:$wgUseNPPatrol
$wgUseNPPatrol = false;

// https://www.mediawiki.org/wiki/Manual:$wgUseFilePatrol
$wgUseFilePatrol = false;

