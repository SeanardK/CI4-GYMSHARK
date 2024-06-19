# GYMShark

GYMShark is a modern marketplace for gym equipment and apparel, built using CodeIgniter 4 and Tailwind CSS. This platform provides a seamless experience for users to browse, purchase, and review a wide range of gym products.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)

## Features

- **User Authentication**: Secure login and registration system.
- **Product Listings**: Browse a wide variety of gym equipment and apparel.
- **Shopping Cart**: Add items to the cart and proceed to checkout.
- **Order Management**: Track orders and view order history.
- **Product Reviews**: Leave and read reviews for products.
- **Admin Panel**: Manage products, orders, and user accounts.
- **Responsive Design**: Optimized for both desktop and mobile devices.

## Installation

### Prerequisites

- PHP 7.4 or higher
- Composer
- Node.js and npm (for Tailwind CSS)
- MySQL or another supported database

### Steps

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/GYMShark.git
   cd GYMShark
   ```

2. **Install dependencies:**

   ```bash
   composer install
   npm install
   ```

3. **Set up environment variables:**

   Copy the `.env.example` file to `.env` and configure your database and other environment settings.

   ```bash
   cp .env.example .env
   ```

4. **Run migrations and seeders:**

   ```bash
   php spark migrate
   php spark db:seed DatabaseSeeder
   ```

5. **Build Tailwind CSS:**

   ```bash
   npx tailwindcss build src/styles.css -o public/css/tailwind.css
   ```

6. **Serve the application:**

   ```bash
   php spark serve
   ```

   The application will be accessible at `http://localhost:8080`.

## Configuration

### Database

Configure your database settings in the `.env` file. Here is an example configuration:

```env
database.default.hostname = localhost
database.default.database = gymshark
database.default.username = root
database.default.password = password
database.default.DBDriver = MySQLi
```

### Email

Configure your email settings in the `.env` file for sending order confirmations and other notifications:

```env
email.fromEmail = no-reply@gymshark.com
email.fromName = GYMShark
email.SMTPHost = smtp.mailtrap.io
email.SMTPUser = your_smtp_user
email.SMTPPass = your_smtp_password
email.SMTPPort = 2525

```

## Usage

- **Browse Products**: Users can browse products by categories and search for specific items.
- **Add to Cart**: Users can add products to their shopping cart.
- **Checkout**: Users can proceed to checkout and place orders.
- **Manage Orders**: Users can view their order history and track current orders.
- **Admin Panel**: Admin users can add, edit, and delete products, manage orders, and handle user accounts.
