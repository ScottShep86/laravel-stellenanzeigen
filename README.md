# CAREERHUB

# Job Board Application

This is a web application designed to facilitate job seekers in finding suitable job listings and companies in need of employees to post job openings.

## Features

-   **User Authentication**: Users can register and log in to their accounts.
-   **Role-based Access Control**: Users can have either a "job seeker" or "company" role, each with its own set of permissions.
-   **Job Listings**: Companies can post job listings with details such as job title, description, category, location, and salary.
-   **Dashboard**: Job seekers have a dashboard where they can view and apply to job listings. Companies have a dashboard to manage their job listings.
-   **Job Application**: Job seekers can apply to job listings directly from the application. <span style="color:red">(WORK IN PROGRESS)</span>
-   **Edit Job Listings**: Companies can edit job listings they have posted. <span style="color:red">(WORK IN PROGRESS)</span>

## Technologies Used

-   **Laravel**: Laravel is used as the PHP framework for building the backend of the application.
-   **Blade Templates**: Blade is the templating engine provided with Laravel, used for generating HTML.
-   **Tailwind CSS**: Tailwind CSS is used for styling the application's frontend components.
-   **MySQL**: MySQL is used as the database management system to store application data.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/ScottShep86/laravel-stellenanzeigen.git
    ```

2. Install Composer dependencies:

    ```bash
    composer install
    ```

3. Install NPM dependencies:

    ```bash
    npm install && npm run dev
    ```

4. Create a .env file by copying the .env.example file:

    ```bash
    cp .env.example .env
    ```

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

6. Configure the database settings in the .env file:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

7. Run database migrations:

    ```bash
    php artisan migrate
    ```

8. Serve the application:

    ```bash
    php artisan serve
    ```

## Usage

-   Register an account as either a job seeker or a company.
-   Log in to your account.
-   Job seekers can browse job listings, view details, and apply to jobs. <span style="color:red">(WORK IN PROGRESS)</span>
-   Companies can post job listings, edit existing listings, and view applications from job seekers. <span style="color:red">(WORK IN PROGRESS)</span>

## Contributing

Contributions are welcome! Please fork the repository and create a pull request with your changes.

## License

This project is open source and available under the MIT License.
