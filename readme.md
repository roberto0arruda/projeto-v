# Projeto V - Car Rental

## About project
Back-end of the project car rental application

## Requirements to run with container Docker
### Installation Docker on Ubuntu
```console
$ sudo apt-key adv --keyserver hkp://p80.pool.sks-keyservers.net:80 --recv-keys 58118E89F3A912897C070ADBF76221572C52609D
$ sudo apt-add-repository 'deb https://apt.dockerproject.org/repo ubuntu-xenial main'
$ sudo apt-get update && sudo apt-get install -y docker-engine
```

### Installation Compose
```console
$ sudo curl -L https://github.com/docker/compose/releases/download/1.21.2/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose
```

> `Note:` The above command is an example, and it may become out-of-date. To ensure you have the latest version, check the [Compose repository release page on GitHub](https://github.com/docker/compose/releases).

```console
$ sudo chmod +x /usr/local/bin/docker-compose
```

#### Run Docker without sudo (Optional)
```console
$ sudo usermod -aG docker $(whoami)
```
> **Restart your computer** to make changes

## How to use application
```console
$ git clone https://github.com/roberto0arruda/projeto-v.git
$ cd projeto-v
$ cp .env.example .env
```
- Configure the `.env` file with your settings: 
    - DB_CONNECTION = mysql, sqlite, pgsql or sqlsrv
    - DB_HOST       = Database server ip
    - DB_PORT       = 3306
    - DB_DATABASE   = Database name
    - DB_USERNAME   = User
    - DB_PASSWORD   = Password

```console
$ docker-compose up -d
$ docker-compose exec php composer install
$ docker-compose exec php init
```
## Basics commands docker
### For execute commands on container
```console
$ docker-compose exec php your-command-here
```

### For start container
```console
$ docker-compose up -d
```

### For stop container
```console
$ docker-compose down
```

### Run rebuild Container
If there is any change in the container, run the command with container stopped
```console
$ docker-compose up -d --build
```

> `Note:` Application run in `http://localhost:8000/`
