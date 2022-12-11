###### This repository has been created as a project for the evaluation of the DBMS lab course

# Simple MySQL injection using PHP

#### Deployment
##### * Apache

1. Download and Install Apache server

```
$ sudo apt update && sudo apt install -y apache2
```

2. Copy the folders *conf.d*, *resources* and *src* folder to `/var/www/html`

3. Edit `conf.d/php.ini` and give proper MySQL usernames and credentials

4. Reload the apache server

```
$ sudo service apache2 reload
```
