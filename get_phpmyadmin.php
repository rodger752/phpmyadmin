directory_path="/opt/xxxx"
container_name="xxxx"
cd $directory_path

if [ -d "$directory_path/phpmyadmin" ] 
then
    echo "Directory Path exists! skipping download of phpmyadmin"
else
    echo "Downloading phpmyadmin"
    git clone https://github.com/rodger752/phpmyadmin.git
fi

echo "executing script and adding user admin with password admin to mysql database"
docker exec $container_name bash -c 'cd /var/www/html/website1/phpmyadmin/ && chmod 777 add_admin_user.sh && ./add_admin_user.sh'
