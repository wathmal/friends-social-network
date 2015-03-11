
# friends social network
database mini project: a basic social networking site with symfony php framework

**steps to configure:**

**clone the repo in to your localhost web directory**
```
git commit https://github.com/wathmal/friends-social-network.git
```
**change chmod of the directory to 777**
```
# sudo chmod -R 777 friends-social-network/
```
**or**
```
# sudo chmod -R 755 friends-social-network/
```
**configure config.yml file to connect with your mysql database.**
```
app/confif/config.yml
```

**create database**
```
$ php app/console doctrine:database:create
```

**generate entities**
```
$ php app/console doctrine:generate:entity
```

**run the symfony server**
```
$ php app/console server:run
```

**view on your browser**
```
http://127.0.0.1:8000
```
