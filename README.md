#####Introduction

Stock management system is web based application designed in php. which works on XAMP/LAMP/WAMP environment

-Open source stock management system with php and mysql

-Invoice generation and easy to download invoice in PDF format

-Lightweight and easy to use

-Order management and product management can be done with ease

-Report management

-User wise sell report.

###Software Requirement

This software needs php 7 or above version, apache and mysql/mariadb to run.

####Steps for installation.

You can install LAMP (Ubuntu 18.04 LTS, 20.04 LTS) by executing following commands.

```sudo apt update && sudo apt -y upgrade```

```sudo apt install apache2 apache2-utils software-properties-common mariadb-server mariadb-client php```

```sudo apt install libapache2-mod-php php-cli php-fpm php-json php-pdo php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath```

####How to download Package Files?

You can download the package from following link. And Copy them into Home directory.

Download Link : https://github.com/maheshpalamuttath/sms.git

Please rename the folder after extraction to inout. Now we have to copy the sms directory into ```‘var/www/html’``` directory. Open the terminal into Home directory and apply the following commands.

```sudo su```

```sudo mv /home/sms /var/www/html```

```cd /var/www/html```

```chmod 777 -R sms```

####Steps for quick database setup.

Open the terminal and apply the following commands.

```sudo su```

```mysql -uroot -p```

[Enter MySQL Root password]

```create database sms;```

```CREATE USER 'sms'@'localhost' IDENTIFIED BY 'sms123';```

```GRANT ALL PRIVILEGES ON *.* TO 'sms'@'localhost' WITH GRANT OPTION;```

```FLUSH PRIVILEGES;```

In above code ‘sms’ is the username and ‘sms123’ is the password. Make sure you replace it with your credentials. 

Now restore the sample database which is present in the ‘sms/database’ directory by applying following command in terminal. Open Terminal in ‘sms’ directory.

```sudo su ```

```mysql -uroot -p sms < sms.sql ```

[Enter MySQL Root password]

Replace your password in the file ‘db_connect.php’ located in ‘sms/php_action’ directory, at the line number 3.
Replace the database name to ‘sms’ at line number 5.

The system is ready now.
You can access it at URL given below:
http://localhost/sms

