<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


<p align="center"> This is our first project using Laravel, the PHP ORM.
    <br> 
</p>



## 📝 Table of Contents

- [Built With](#built)
- [Relational Table](#relational_table)
- [Testing with Postman](#testing)
- [Prerequisites](#prerequisites)
- [Start Project](#start-project)
- [Authors](#authors)
- [Licence](#License)


## ⛏️ Built With <a name = "built"></a>

- [MySql](https://www.mysql.com/) - Databse
- [Laravel](https://laravel.com/) - ORM
- [Postman](https://learning.postman.com/docs/getting-started/introduction/) - Server Environment
- [Docker](https://docs.docker.com/) - Server Deployment


This is a valid backend for a frontend that wants to achieve that users register, make a login, create a game, and be able to chat with each other.


## 💡 Relational Table <a name = "relational_table"></a>

This is a basic example of relational table about our project, emulating a structure database of a LCG web. 

<!-- ![tabla](https://user-images.githubusercontent.com/77154578/115294688-321f3780-a159-11eb-9cb4-f73bba550630.png) -->



## 🎈 Testing with Postman <a name="testing"></a>

You can prove this backend running it in Postman: 

[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/240745e8fa1d32750cbd?action=collection%2Fimport)

The endpoints used in this API Rest backend for each model were: 

<strong>Users</strong>
- http://127.0.0.1:8000/register - POST
- http://127.0.0.1:8000/login - POST
- http://127.0.0.1:8000/logout - POST
- http://127.0.0.1:8000/users - GET
- http://127.0.0.1:8000/users/{id} - GET
- http://127.0.0.1:8000/update - PUT

<strong>Game</strong>
- http://127.0.0.1:8000/game - POST
- http://127.0.0.1:8000/game - GET

<strong>Group</strong>
- http://127.0.0.1:8000/groups - POST
- http://127.0.0.1:8000/groups - GET

<strong>Party</strong>
- http://127.0.0.1:8000/profile/{id}party - POST
- http://127.0.0.1:8000/parties - GET
- http://127.0.0.1:8000/parties - GET
- http://127.0.0.1:8000/profile/{id}/myparties - GET

<strong>Message</strong>
- http://127.0.0.1:8000/profile/{id}/messages - POST
- http://127.0.0.1:8000/messages/{id} - DELETE
- http://127.0.0.1:8000/messages/{id} - GET
- http://127.0.0.1:8000/profile/messages/{id} - UPDATE


ScreenShot Register:

![Register](https://user-images.githubusercontent.com/76817211/115438546-cf3ba800-a20d-11eb-97bf-6b2dedb67e0c.png)


ScreenShot Login:

![Login](https://user-images.githubusercontent.com/76817211/115438829-26417d00-a20e-11eb-8e0f-9274611edc04.png)




###  ⛏️  Start Project <a name="start-project"></a>

A step by step series of examples that tell you how to get a development env running.

The default ports for this development environment are:
- Laravel 8000
- Phpmyadmin 8080
- MySql 3306

## ✍️ Authors <a name = "authors"></a>

- [@T-zemmari](https://github.com/T-zemmari) - Idea & Initial development work
- [@DanielC1492](https://github.com/DanielC1492) - Idea & Initial development work


## 📝 License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).