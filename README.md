
# Crud_Laravel
Meu primeiro CRUD em laravel.

# Consultas:
http://murilomedeiros.com.br/site/como-instalar-apache-mysql-e-php7-no-ubuntu-16-04/
https://matheuslima.com.br/instalando-o-apache-2-4-php-7-mysql-lamp/

# Comando importantes:
<table><thead><tr><td><b>Comando:</b></td><td><b>Descrição:</b></td></tr></thead>
<tbody>
<tr>    <td>php artisan migrate</td>                     <td>Para atualizar banco de dados.</td>
</tr>
<tr>    <td>composer update</td>                         <td>Para atualizar o composer e problemas no vendor.</td>
</tr>
<tr>    <td>composer dump-autoload --optimize</td>       <td>Para otimizar tudo.</td>
</tr>
</tbody>
</table>

atualizar sistema:
sudo apt-get update && sudo apt-get -y upgrade && sudo apt-get -y dist-upgrade
https://www.joeferguson.me/install-and-configure-php-7-1-on-cloud-9-workspaces/

sudo a2enmod rewrite
sudo systemctl restart apache2


# https://www.joeferguson.me/install-and-configure-php-7-1-on-cloud-9-workspaces/
sudo add-apt-repository ppa:ondrej/php -y
sudo apt-get update -y
 
sudo apt-get install php7.1-curl php7.1-cli php7.1-dev php7.1-gd php7.1-intl php7.1-mcrypt php7.1-json php7.1-mysql php7.1-opcache php7.1-bcmath php7.1-mbstring php7.1-soap php7.1-xml php7.1-zip -y
 
sudo mv /etc/apache2/envvars /etc/apache2/envvars.bak
sudo apt-get remove libapache2-mod-php5 -y
sudo apt-get install libapache2-mod-php7.1 -y
sudo cp /etc/apache2/envvars.bak /etc/apache2/envvars
 
sudo a2dismod php5
sudo a2enmod php7.1
 
sudo service apache2