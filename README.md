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
   git clone gh repo clone MelomiLight/clients_tz_app
   cd clients_tz_app
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

**Response**
```json
{
    "message": "Client found!",
    "data": {
        "phone_number": "270-448-3851",
        "full_name": "Oleta Reilly",
        "accumulated_points": 22
    }
}
```
- `GET api/clients`: Get all clients

  **Response**
```json
{
    "message": "Clients found!",
    "data": [
        {
            "phone_number": "270-448-3851",
            "full_name": "Oleta Reilly",
            "accumulated_points": 22
        },
        {
            "phone_number": "650-639-9177",
            "full_name": "Helga Stamm",
            "accumulated_points": 37
        },
        {
            "phone_number": "801-358-1344",
            "full_name": "Mr. Troy Fay",
            "accumulated_points": 54
        },
        {
            "phone_number": "+1-757-619-1498",
            "full_name": "Katrine Upton Sr.",
            "accumulated_points": 86
        },
        {
            "phone_number": "716.271.6301",
            "full_name": "Odessa Bayer",
            "accumulated_points": 59
        },
        {
            "phone_number": "+1 (505) 762-3594",
            "full_name": "Bernhard Schoen",
            "accumulated_points": 79
        },
        {
            "phone_number": "332.934.9720",
            "full_name": "Howard Zieme",
            "accumulated_points": 25
        },
        {
            "phone_number": "520-954-9401",
            "full_name": "Dr. Eve Hand I",
            "accumulated_points": 13
        },
        {
            "phone_number": "+1-817-998-4488",
            "full_name": "Maud Kirlin",
            "accumulated_points": 69
        },
        {
            "phone_number": "+1-254-535-0691",
            "full_name": "Felipa Wilkinson IV",
            "accumulated_points": 69
        }
    ]
}
```

