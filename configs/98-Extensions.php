<?php
// For extensions configs

#################################################################### Core Extensions

// https://www.mediawiki.org/wiki/Extension:AbuseFilter
#wfLoadExtension('AbuseFilter');
// https://www.mediawiki.org/wiki/Extension:CategoryTree
wfLoadExtension('CategoryTree');
// https://www.mediawiki.org/wiki/Extension:Cite
wfLoadExtension('Cite');
// https://www.mediawiki.org/wiki/Extension:CiteThisPage
wfLoadExtension('CiteThisPage');
// https://www.mediawiki.org/wiki/Extension:CodeEditor
wfLoadExtension('CodeEditor');
// https://www.mediawiki.org/wiki/Extension:DiscussionTools
wfLoadExtension('DiscussionTools');
// https://www.mediawiki.org/wiki/Extension:Echo
wfLoadExtension('Echo');
// https://www.mediawiki.org/wiki/Extension:Gadgets
wfLoadExtension('Gadgets');
// https://www.mediawiki.org/wiki/Extension:ImageMap
wfLoadExtension('ImageMap');
// https://www.mediawiki.org/wiki/Extension:InputBox
wfLoadExtension('InputBox');
// https://www.mediawiki.org/wiki/Extension:Linter
wfLoadExtension('Linter');
// https://www.mediawiki.org/wiki/Extension:LoginNotify
wfLoadExtension('LoginNotify');
// https://www.mediawiki.org/wiki/Extension:Math
wfLoadExtension('Math');
// https://www.mediawiki.org/wiki/Extension:MultimediaViewer
wfLoadExtension('MultimediaViewer');
// https://www.mediawiki.org/wiki/Extension:Nuke
wfLoadExtension('Nuke');
// https://www.mediawiki.org/wiki/Extension:OATHAuth
wfLoadExtension('OATHAuth');
// https://www.mediawiki.org/wiki/Extension:PageImages
wfLoadExtension('PageImages');
// https://www.mediawiki.org/wiki/Extension:ParserFunctions
wfLoadExtension('ParserFunctions');
// https://www.mediawiki.org/wiki/Extension:PdfHandler
wfLoadExtension('PdfHandler');
// https://www.mediawiki.org/wiki/Extension:Poem
wfLoadExtension('Poem');
// https://www.mediawiki.org/wiki/Extension:ReplaceText
wfLoadExtension('ReplaceText');
// https://www.mediawiki.org/wiki/Extension:Scribunto
wfLoadExtension('Scribunto');
// https://www.mediawiki.org/wiki/Extension:SecureLinkFixer
wfLoadExtension('SecureLinkFixer');
// https://www.mediawiki.org/wiki/Extension:SpamBlacklist
wfLoadExtension('SpamBlacklist');
// https://www.mediawiki.org/wiki/Extension:SyntaxHighlight_GeSHi
wfLoadExtension('SyntaxHighlight_GeSHi');
// https://www.mediawiki.org/wiki/Extension:TemplateData
wfLoadExtension('TemplateData');
// https://www.mediawiki.org/wiki/Extension:TextExtracts
wfLoadExtension('TextExtracts');
// https://www.mediawiki.org/wiki/Extension:Thanks
wfLoadExtension('Thanks');
// https://www.mediawiki.org/wiki/Extension:WikiEditor
wfLoadExtension('WikiEditor');

#################################################################### VisualEditor
// https://www.mediawiki.org/wiki/Extension:VisualEditor

wfLoadExtension( 'VisualEditor' );
$wgVisualEditorAvailableNamespaces = [
    'Guides' => true,
    'Project' => true
];

#################################################################### Interwiki
// https://www.mediawiki.org/wiki/Extension:Interwiki

wfLoadExtension( 'Interwiki' );
// https://www.mediawiki.org/wiki/Manual:$wgUserrightsInterwikiDelimiter
$wgUserrightsInterwikiDelimiter = '#'; 

#################################################################### Turnstile Anti-Bots
// https://www.mediawiki.org/wiki/Extension:ConfirmEdit

wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/Turnstile' ]);

#################################################################### Other Submodule Extensions

// https://www.mediawiki.org/wiki/Manual:$wgExtensionDirectory
$wgExtensionDirectory = '/etc/mediawiki/extensions';

// https://www.mediawiki.org/wiki/Extension:WebAuthn  
wfLoadExtension( 'WebAuthn' );  
// https://www.mediawiki.org/wiki/Extension:Favorites 
wfLoadExtension( 'Favorites' );  
// https://www.mediawiki.org/wiki/Extension:BulkBlock 
wfLoadExtension( 'BulkBlock' );  
// https://www.mediawiki.org/wiki/Extension:AntiSpoof  
wfLoadExtension( 'AntiSpoof' );  
// https://www.mediawiki.org/wiki/Extension:Capiunto 
wfLoadExtension( 'Capiunto' );  
// https://www.mediawiki.org/wiki/Extension:Editcount  
wfLoadExtension( 'Editcount' );  
// https://www.mediawiki.org/wiki/Extension:FilterSpecialPages
wfLoadExtension( 'FilterSpecialPages' );  
// https://www.mediawiki.org/wiki/Extension:LastModified  
wfLoadExtension( 'LastModified' );  
// https://www.mediawiki.org/wiki/Extension:SiteMetrics
wfLoadExtension( 'SiteMetrics' );  
// https://www.mediawiki.org/wiki/Extension:TemplateSandbox  
wfLoadExtension( 'TemplateSandbox' );  
// https://www.mediawiki.org/wiki/Extension:UserMerge
wfLoadExtension( 'UserMerge' );
// https://www.mediawiki.org/wiki/Extension:TopLink
wfLoadExtension( 'TopLink' ); 
// https://www.mediawiki.org/wiki/Extension:ConsoleOutput
wfLoadExtension( 'ConsoleOutput' );
// https://www.mediawiki.org/wiki/Extension:DynamicPageList3
wfLoadExtension( 'DynamicPageList3' );

###################################################################
// https://www.mediawiki.org/wiki/Extension:Approved_Revs

wfLoadExtension('ApprovedRevs');
$egApprovedRevsAutomaticApprovals = true;
$egApprovedRevsShowNotApprovedMessage = true;
$egApprovedRevsEnabledNamespaces[NS_GUIDES] = true; 
$egApprovedRevsEnabledNamespaces[NS_MAIN] = false; 
$egApprovedRevsEnabledNamespaces[NS_USER] = false; 
$egApprovedRevsEnabledNamespaces[NS_FILE] = false; 
$egApprovedRevsEnabledNamespaces[NS_TEMPLATE] = false; 
$egApprovedRevsEnabledNamespaces[NS_HELP] = false; 
$egApprovedRevsEnabledNamespaces[NS_PROJECT] = false;

#################################################################### Discord Webhook
// https://www.mediawiki.org/wiki/Extension:Discord

wfLoadExtension( 'Discord' );
$wgDiscordUseEmojis = true;
$wgDiscordDisabledHooks = [
    'ApprovedRevsRevisionApproved', 'ApprovedRevsRevisionUnapproved', 'ApprovedRevsFileRevisionApproved', 'ApprovedRevsFileRevisionUnapproved',
];
$wgDiscordWebhookURL = [ "https://discord.com/api/webhooks/1247597825848508538/f3fWL0pIsyvF2XdNcACdDIKsKQZgHpdbFwO5AgyR6D15Glw98TTZYKniRAcBoDLSe2zQ" ];

#################################################################### IP Checkuser
// https://www.mediawiki.org/wiki/Extension:CheckUser

wfLoadExtension( 'CheckUser' );
$wgCheckUserLogSuccessfulBotLogins = false;
$wgCheckUserLogLogins = true;

#################################################################### SSO
// https://www.mediawiki.org/wiki/Extension:OpenID_Connect
// https://www.mediawiki.org/wiki/Extension:PluggableAuth

wfLoadExtension( 'OpenIDConnect' );
wfLoadExtension( 'PluggableAuth' );

$wgPluggableAuth_EnableLocalLogin = true;
$wgOpenIDConnect_MigrateUsersByEmail = true;
$wgOpenIDConnect_UseRealNameAsUserName = true;
$wgPluggableAuth_EnableLocalProperties = true;

####################################################################
// https://www.mediawiki.org/wiki/Extension:Description2

wfLoadExtension( 'Description2' );
$wgEnableMetaDescriptionFunctions = true;

####################################################################
// https://www.mediawiki.org/wiki/Extension:CodeMirror

wfLoadExtension( 'CodeMirror' );
$wgDefaultUserOptions['usecodemirror'] = true;

####################################################################
// https://www.mediawiki.org/wiki/Extension:Drafts

wfLoadExtension( 'Drafts' );
$egDraftsAutoSaveInputBased = true;
$egDraftsAutoSaveWait = 15;

#################################################################### DISABLED
// https://www.mediawiki.org/wiki/Extension:Contribution_Scores

#wfLoadExtension( 'ContributionScores' );
#$wgContribScoreIgnoreBots = true; 
#$wgContribScoreIgnoreBlockedUsers = true;
#$wgContribScoreIgnoreUsernames = [];
#$wgContribScoresUseRealName = true;
#$wgContribScoreDisableCache = false;
#$wgContribScoreUseRoughEditCount = false;   
#$wgContribScoreReports = [
#    [ 7, 50 ],
#    [ 30, 50 ],
#    [ 0, 50 ]
#];

####################################################################
// https://www.mediawiki.org/wiki/Extension:OAuth

wfLoadExtension( 'OAuth' );

#################################################################### Tarballed Extensions

$wgExtensionDirectory = '/etc/mediawiki/tarballExtensions';

// https://www.mediawiki.org/wiki/Extension:TemplateStylesExtender
wfLoadExtension( 'TemplateStylesExtender' );
// https://www.mediawiki.org/wiki/Extension:TemplateStyles
wfLoadExtension( 'TemplateStyles' );

// Switched back to core directory as it breaks echo otherwise
$wgExtensionDirectory = '/var/www/mediawiki/extensions';
