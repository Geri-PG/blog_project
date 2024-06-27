# Cortex Academy Laravel Project - Elimination Test

## Overview
Welcome to the **Cortex Academy Laravel Project**. This project is designed as an elimination test and serves as a blog platform with CRUD (Create, Read, Update, Delete) operations. It features comprehensive admin and user authorization functionalities.

## Key Features
- **Blog Project**: A fully functional blog system.
- **CRUD Operations**: Create, Read, Update, and Delete blog posts.
- **Admin and User Authorization**: Role-based access control for administrators and users.
- **Responsive Design**: Optimized for both desktop and mobile devices.
- **User Management**: Admin can manage user roles and permissions.
- **Comment System**: Users can comment on blog posts.

## Installation

### Prerequisites
- PHP >= 7.4
- Composer
- MySQL
- Node.js & npm

### Steps
1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-repository.git
    cd your-repository
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Environment setup:**
    Copy `.env.example` to `.env` and update your environment variables accordingly:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Database migration:**
    ```bash
    php artisan migrate
    php artisan db:seed
    ```

5. **Serve the application:**
    ```bash
    php artisan serve
    ```

## Usage

### Admin Features
- **Dashboard**: Overview of blog statistics.
- **Manage Users**: Add, edit, or delete users and assign roles.
- **Manage Posts**: Create, edit, delete, and publish blog posts.
- **Comments Management**: Moderate user comments.

### User Features
- **View Blog Posts**: Browse and read blog posts.
- **Post Comments**: Comment on blog posts.
- **User Profile**: Manage personal information and view user activity.

## Contributing
We welcome contributions to enhance this project. To contribute, please follow these steps:
1. Fork the repository.
2. Create a new branch for your feature or bug fix:
    ```bash
    git checkout -b feature-name
    ```
3. Commit your changes:
    ```bash
    git commit -m 'Add a meaningful commit message'
    ```
4. Push to the branch:
    ```bash
    git push origin feature-name
    ```
5. Open a pull request detailing your changes.

## License
This project is licensed under the MIT License.

## Contact
For any inquiries or issues, please contact the project maintainer at [edin.mujadzevic1@gmail.com].

---

Enjoy building and enhancing your skills with the Cortex Academy Laravel Project! Happy coding! 🎉
