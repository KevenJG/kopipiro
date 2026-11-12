# Kopipiro Coffee Shop

Plain PHP + PDO REST API coffee shop ordering application (`shop.html` & `dashboard.html`).

## Setup (XAMPP)

1. Enable `extension=curl`, `extension=gd`, and `extension=zip` in `php.ini` and restart Apache.
2. Import `schema.sql` in phpMyAdmin (`http://localhost/phpmyadmin`).
3. Install dependencies:
   ```powershell
   composer install
   ```
4. Seed demo users, categories, non-coffee/food items, and coffees from Sample APIs:
   ```powershell
   php tools\seed_base.php
   php tools\seed_from_api.php
   ```
5. *(Optional for Midtrans Sandbox)* Create `config.local.php`:
   ```php
   <?php
   const MIDTRANS_SERVER_KEY = 'YOUR-SANDBOX-SERVER-KEY';
   ```
6. Open `http://localhost/kopipiro/shop.html` (storefront) and `http://localhost/kopipiro/dashboard.html` (staff dashboard).

## Demo Accounts

| Role | Email | Password |
| :--- | :--- | :--- |
| Owner | `owner@kopipiro.test` | `owner123` |
| Cashier 1 | `cashier1@kopipiro.test` | `cashier123` |
| Cashier 2 | `cashier2@kopipiro.test` | `cashier123` |
| Customer | `customer@kopipiro.test` | `customer123` |
