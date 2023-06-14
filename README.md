# KuToko Dashboard

KuToko Dashboard is a web-based application used to manage content and settings for the KuToko platform. This dashboard is developed using the Laravel framework.

## Features

- User Management: Manage user accounts including creating, editing, and deleting user accounts.
- Product Management: Manage the list of products, including product information, images, pricing, and inventory.
- Order Management: View and manage the list of orders from customers, including order status and shipping details.
- Category Management: Organize product categories for easier search and navigation.
- Settings Management: Configure general application settings such as store information, logo, and other preferences.

## Prerequisites

- PHP >= 8.1
- Composer
- Laravel >= 10.0

## Installation

1. Clone this repository to your local machine:

```
git clone https://github.com/KuToko/dashboard.git
```

2. Navigate to the project directory:

```
cd dashboard
```

3. Install dependencies using Composer:

```
composer install
```

4. Copy the `.env.example` file to `.env`:

```
cp .env.example .env
```

5. Generate an application key:

```
php artisan key:generate
```

6. Configure your database connection in the `.env` file.

7. Run database migrations and seeders:

```
php artisan migrate --seed
```

8. Start the development server:

```
php artisan serve
```

9. Access the Dashboard in your browser at `http://localhost:8000/app`.

## License

This project is licensed under the [MIT License](LICENSE).
