# Todo App

Welcome to the Todo App repository! This application is built with Laravel 11 and serves as a platform for students to complete coding activities at home and manage their work through GitHub.

## Project Overview

This Todo App is designed to provide students with hands-on experience in web development using Laravel 11. By participating in this project, you'll learn about modern web application architecture, database management, and version control practices.

## Installation Guide

Follow these steps to set up the project on your local machine:

1. **Clone the repository:**

    ```
    git clone https://github.com/your-username/todo-app.git
    ```

2. **Navigate to the project directory:**

    ```
    cd todo-app
    ```

3. **Install dependencies:**

    ```
    composer install
    ```

4. **Create a copy of the .env file:**

    ```
    cp .env.example .env
    ```

5. **Generate an application key:**

    ```
    php artisan key:generate
    ```

6. **Configure your database in the .env file:**

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

7. **Run database migrations:**
    ```
    php artisan migrate
    ```

## Installing and Using Laravel Herd

To simplify your development process, we'll use Laravel Herd. This tool provides an easy-to-use local development environment for Laravel.

1. **Download and install Laravel Herd:**

    - Visit the [Laravel Herd website](https://herd.laravel.com/) and download the appropriate version for your operating system.
    - Follow the installation instructions provided on the website.

2. **Configure your project in Herd:**

    - Open Laravel Herd application.
    - Click on "Add Site" and browse to your project directory.
    - Set the domain name to `todo.test` (or your preferred local domain).

3. **Update your hosts file:**

    - Laravel Herd should automatically update your hosts file. If it doesn't, you may need to add the following line manually:
        ```
        127.0.0.1 todo.test
        ```

4. **Access your project:**
    - Open your web browser and visit `http://todo.test`
    - You should now see your Laravel application running.

Using Laravel Herd eliminates the need to run `php artisan serve` manually. Your project will be accessible via the configured domain (e.g., `todo.test`) whenever Herd is running.

## Using GitHub Desktop

For easier change control, we recommend using GitHub Desktop:

1. Download and install [GitHub Desktop](https://desktop.github.com/).
2. Sign in to your GitHub account in GitHub Desktop.
3. Click on "File" > "Clone Repository" and select the Todo App repository.
4. Choose a local path for the project and click "Clone".

## Submitting Your Work

When working on coding activities, please follow these steps:

### Using Command Line:

1. Create a new branch with your surname (e.g., `dela-cerna`):

    ```
    git checkout -b your-surname
    ```

2. Make your changes and commit them with a descriptive message:

    ```
    git commit -m "Activity 1 - Layout"
    ```

3. Push your changes to your branch:
    ```
    git push origin your-surname
    ```

### Using GitHub Desktop:

1. In GitHub Desktop, click on the "Current Branch" dropdown.
2. Click "New Branch" and name it with your surname (e.g., `dela-cerna`).
3. Click "Create Branch" to switch to your new branch.
4. Make your changes in your preferred code editor.
5. In GitHub Desktop, you'll see your changes listed.
6. Enter a summary for your commit (e.g., "Activity 1 - Layout") in the bottom left.
7. Click "Commit to your-surname".
8. Click "Publish branch" (or "Push origin" if the branch already exists on GitHub).

Remember to always work on your own branch and use descriptive commit messages for each activity.

## Instructor

This project is supervised by:

**Erick Dayle Loon**

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

Happy coding! If you have any questions or issues, please don't hesitate to reach out to your instructor or create an issue in this repository.
