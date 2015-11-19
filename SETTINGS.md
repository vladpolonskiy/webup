##Как настроить новый хост для WAMP

Добавляем хост yourhost.com из папки path/to/site/dir

###1. Правим файл hosts.

Расположение файла 

    c:\Windows\System32\drivers\etc\hosts

Добавляем строку (править нужно из под администратора)

    127.0.0.1           yourhost.com


###2. Правим файл  httpd-vhosts.conf

Расположение файла 

    path_to_wamp\bin\apache\Apache2.4.4\conf\extra\httpd-vhosts.conf

Добавляем строки

    <VirtualHost *:80>
        ServerAdmin webmaster@yourhost.com
        DocumentRoot "path/to/site/dir"
        ServerName yourhost.com
        ErrorLog "logs/yourhost.com-error.log"
        CustomLog "logs/yourhost.com-access.log" common
    </VirtualHost>

###3. Проверяем файл httpd.conf

Расположение файла 

    path_to_wamp\bin\apache\Apache2.4.4\conf\httpd.conf
    
Строка подключения виртуальных хостов должна быть раскоментирована

    # Virtual hosts
    Include conf/extra/httpd-vhosts.conf
    
Найти:

```
# First, we configure the "default" to be a very restrictive set of features.  
<Directory />
    AllowOverride none
    Require all denied
</Directory>
```
Заменить на:
```
<Directory />
    #AllowOverride none
    #Require all denied

    Options FollowSymLinks
    AllowOverride None
    Order deny,allow
    Allow from all
</Directory>
```

Найти:
```
<Directory "c:/wamp/bin/apache/apache2.4.9/cgi-bin">
    AllowOverride None
    Options None
    Require all granted
</Directory>
```
Заменить на:
```
<Directory "c:/wamp/bin/apache/apache2.4.9/cgi-bin">
    #AllowOverride None
    #Options None
    #Require all granted
    AllowOverride None
    Options None
    Order allow,deny
    Allow from all
</Directory>
```
    
###4. Перезегружаем WAMP

