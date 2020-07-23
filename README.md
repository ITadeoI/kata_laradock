<p align="center"><img src="https://barcelonatechcity.com/wp-content/uploads/2019/05/logo_elma-01.png" width="400"></p>

## Fake Blogging System

This project implements a possible solution to Elma's kata:

## Installing and starting the application

##Prerequisites
- **[GitHub](https://github.com/)**
- **[Docker Compose](https://docs.docker.com/develop/)**
- **[Laradock](https://laradock.io/)**

##How to install
- 1.Clone the repository  
```bash
git clone https://github.com/ITadeoI/kata_laradock.git
```
- 2.Inside Laradock directory: this command downloads the images needed for the environment.
```bash
docker-compose build
```
- 3.Inside Laradock directory: this command stands up the containers, which contains the image previously download.
```bash
docker-compose up -d
```
- 4.Inside Laradock directory: this command shows you the containers status.
```bash
docker ps
```
You should see something like this:
<p align="center"><img src="https://i.ibb.co/7g2M0gH/image.png" width="4000"></p>
We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- 5.Now, you can access to your browser an type http://localhost/ in order to see the Laravel welcome.

- 6.Fist of all to use the application, you will need to seeder the database, go to Laradock directory:

```bash
docker-compose exec workspace bash
root@0031095f86de:/var/www# php artisan migrate
root@0031095f86de:/var/www# php artisan db:seed
```
The migrate command creates the tables founded in blog/database/migrations and db:seed fill the tables with data founded in blog/database/seeds

## API Documentation 
<p align="center"><img src="https://i.ibb.co/9yF9dZN/image.png" width="800"></p>

**[Postman](https://www.postman.com/)** 
 - Example using postman: [Blog.postman.json](/home/tadeo/Documents/kata/Blog.postman_collection.json)

## Built With


* [Laravel](https://laravel.com/) - Web Application Framework
* [Laradock](https://laradock.io/) - PHP development environment for Docker.
* [Composer](https://getcomposer.org/doc/) - Dependency management
* [Docker](https://docs.docker.com/) - OS-level virtualization (PaaS)
* [Postman](https://www.getpostman.com/) - API Client for testing

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
