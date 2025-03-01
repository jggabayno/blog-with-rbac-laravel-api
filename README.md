# Blog Management System with RBAC (Laravel 8)

## Overview

A **Laravel 8-based blog management system** with **Role-Based Access Control (RBAC)**. This application allows users to create and manage blog posts, enforce access permissions based on user roles, and interact through comments, likes, and post interactions.

## Key Features

- **Role-Based Access Control (RBAC)**: Restrict access to resources based on user roles (Admin, User).
- **User Management**: Admins can create, update, and delete users.
- **Authentication & Security**: Secure user authentication using Laravel Passport.
- **Blog System**:
  - **Access Control**: Manage who can read, write, comment, and like blog posts.
  - **User Authentication**: Secure login and registration for blog users.
  - **Blog Posts**: Create, update, delete, and view blog posts.
  - **Comments**: Users can comment on blog posts.
  - **Likes**: Users can like blog posts.
  - **Notifications**: Users receive notifications for post interactions (likes, comments, new posts).
  - **Email Notifications**: Email notifications for post interactions, password resets, and user activities.
  - **Password Reset**: Secure password reset functionality.
  - **User Post Feature**: Users can create and manage their own posts.
  - **Post Interactions**: Users can interact with blog posts through various engagement features.
  
## Core Modules

- **Access Management**: Define and manage permissions.
- **User Access**: Assign roles and permissions to users.
- **Role Access**: Define role-based permissions.
- **User Management**: Manage users, including registration, login, and password resets.
- **Blog Management**: Create and manage blog posts, comments, likes, and notifications.
- **Email Notifications**: Notify users of important actions like new comments, likes, and password resets.
- **Authentication & Security**: Secure authentication using Laravel Passport.
- **Post Interactions**: Engage with blog posts through comments, likes, and notifications.

## Requirements

- PHP 7.3+ or 8.0+
- Composer
- MySQL
- Node.js (for front-end assets)

## Installation

1. **Clone the Repository:**

   ```bash
   git clone using ssh or https
   cd blog-with-rbac-laravel-v8
   ```

2. **Install Dependencies:**

   ```bash
   composer install
   npm install
   ```

3. **Set Up Environment:**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure Database:**
   Edit the `.env` file to match your database credentials:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run Migrations and Seed Data:**

   ```bash
   php artisan migrate --seed
   ```

6. **Install Laravel Passport:**

   ```bash
   php artisan passport:install
   ```

7. **Start the Server:**

   ```bash
   php artisan serve
   ```

   The app will be accessible at `http://127.0.0.1:8000`.

## Usage

- **Admin Role**:
  - Manage users, roles, and permissions.
  - Manage blog posts, comments, and notifications.
- **User Role**:
  - Register and log in.
  - Create, like, and comment on blog posts.
  - Receive notifications for blog interactions.
  - Interact with blog posts through engagement features.
  - Reset password via email.

## Testing

Run all tests:

```bash
php artisan test
```

Run a specific test:

```bash
php artisan test --filter TestClassName
```

## Conclusion

This blog management system provides a **secure, role-based** solution for creating and managing blog content efficiently. Built with **Laravel 8**, it ensures **scalability, flexibility, and ease of use**. Whether you are an **admin managing users** or a **user interacting with blog content**, this system offers a streamlined and intuitive experience with enhanced post interaction features.