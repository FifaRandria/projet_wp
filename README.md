# projet_wp
1) nouvelles users / autorisation admin
2) wp-options : changer home et siteurl en local
3) ajout d'un fichier htaccess qui  ete supprimez par git
pour pouvoir naviguer normalement sans "404 not found"

exemple de htaccess:
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /cash_wp/wordpress/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /cash_wp/wordpress/index.php [L]
</IfModule>
# END WordPress
