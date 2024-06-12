# Mobile Running Tracker Application

This is a application for working with a customer database that allows you to generate a customer 
base and receive information about customers by phone number.

## Features

- **Get clients information**

## Requirements

- PHP 8.2
- Laravel 11
- MySQL

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/yourrepository.git
   cd yourrepository
    ```
2. **Install dependencies:**
    ```bash
   composer install
    ```
3. **Copy the .env file and configure your environment:**
    ```bash
   cp .env.example .env
    ```
4. **Generate an application key:**
    ```bash
   php artisan key:generate
    ```
5. **Configure your database in the .env file:**
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```
6. **Run database migrations and seeder:**
    ```bash
   php artisan migrate --seed
    ```
## Running the Application

1. **Start the development server:**
   ```bash
    php artisan serve
   ```
2. **Access the application in your browser:**
    ```bash
   http://localhost:8000
    ```
## API Endpoints

### Public Routes

- `GET api/clients/show`: Get one client by phone number
**Body**
```json
    {
        "phone_number":"270-448-3851"
    }
```    
- `GET api/clients`: Get all clients


