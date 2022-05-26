mysql -u root -p'' -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
mysql -u root -p'' -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;"

