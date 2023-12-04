## About MyLib
website-based library information system using the Laravel framework. This system was created for officers to make their work easier in inputting member and book data, as well as carrying out book borrowing and return transactions. This application system can also be utilized by students. Where they will easily and efficiently borrow and return books at the library. Feel free to make contribute to improve this project.

this is the manualbook for using MyLib : 

https://docs.google.com/document/d/1s422uzYdEl59wTqyhHbBf1ACtG6DvJ1BdSE3L6H9k6s/edit?usp=sharing


## Requirements

PHP >= 8.1

Composer

Xampp or other server app

### Installation

1. Open your terminal and navigate to any folder to put the project
2. clone the repository
   
   git clone [https://github.com/levina13/Jobs.git]

4. navigate to the project directory
   
   cd jobs

6. copy '.env.example file to .env and configure the database and other settings:
7. Install PHP dependencies with Composer
   
   composer install
   
9. Generate the application key:
    
    php artisan key:generate
   
11. Run Mysql server in Xampp

12. Create Database in your MySQL server with the same name as in your .env file
    
13. Migrate the database with dummy data (optional):
    
    php artisan migrate --seed
    
15. Run the Laravel development server:
    
    php artisan serve
    
17. Access the project through the browser at http://localhost:8000. 

