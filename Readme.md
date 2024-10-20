## Dockerize Laravel Project


## Instruction for running this application



### Prerequisites

Before using these scripts, ensure you have the following installed:

- **Git**: Install Git on your workspace to clone this repository.

- **Docker**: Install docker on your workspace to for run this project.


### Installation

1. Clone this repository to your local machine:

    ```bash
    git clone https://github.com/rpsohag/dockerize-laravel.git dockerize-laravel
    ```
2. go to dockerize-laravel directory:

    ```bash
    cd dockerize-laravel
    ```
3. build docker container using this respository:

    ```bash
    docker-compose build .
    ```
4. generate .env file:

    ```bash
    cp dockerize-laravel/.env.example dockerize-laravel/.env
    ```
5. generate application key:

    ```bash
    docker-compose run --rm artisan key:generate
    ```
6. database connection:

    > ```
    >DB_CONNECTION=mysql
    >DB_HOST=mysql
    >DB_PORT=3306
    >DB_DATABASE=your database name
    >DB_USERNAME=your database username
    >DB_PASSWORD=your database password
    > ```
7. insert dummy data to the database:

     ```bash
    docker-compose run --rm artisan migrate --seed
    ```
8. run this application:

     ```bash
    docker-compose up
    ```

## Tech Stack

**Server Side:** PHP, Laravel, Nginx

## Support

For support, [contact me](https://www.linkedin.com/in/rpsohagwdd/) or open an issue.