# Configuration

## 1. remove "index.php" from url by add an ".htaccess" file
> Create ".htaccess" file in the main directory and write following codes
> '<IfModule mod_rewrite.c>

RewriteEngine On

RewriteCond &1 !^(index\.php|data|template|js|css)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]

</IfModule>
'

## 2. Add helper "url" in file "autoload.php"
> Open it by this directory : application/config/autoload.php)
> Edit this line '$autoload['helper'] = array('url');'

## 3. Edit "base_url" in file "config.php"
> Open it by this directory : application/config/config.php)
> Edit this line '$autoload['helper'] = array('url');'
