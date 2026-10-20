# Sycamore Market

A marketplace web app modeled on Facebook Marketplace. People can sign up, post items for sale with photos, browse listings by category, contact sellers and place orders.

## Features

- **Accounts:** register, log in, log out, and edit your profile. Passwords are stored as SHA-512 hashes.
- **Post items:** add a listing with a category, name, price, location and description, then upload product images.
- **Manage listings:** edit or delete your own posts.
- **Browse:** view listings by category (Books, Entertainment, Games, Phones, Furniture, Clothing, Accessories, Cars, Others).
- **Buy and contact:** place an order on an item or contact its seller. Both are saved as buyer–seller records.

## Tech Stack

| Layer    | Technology                                      |
| -------- | ----------------------------------------------- |
| Backend  | PHP (procedural) with `mysqli`                  |
| Database | MySQL                                           |
| Frontend | HTML, Bootstrap, jQuery 3.2.1, Font Awesome     |
| Plugins  | jQuery Simple Popup                             |

## Project Structure

```
SycamoreMarket/
├── index.php            # Landing page / registration
├── loginpage.php        # Login page
├── home.php             # Main marketplace feed (after login)
├── postads.php          # Create a new listing
├── editpost.php         # Edit an existing listing
├── editprofile.php      # Edit user profile
├── prodimage.php        # Product detail / image view
├── buy-order.php        # Place an order
├── header.php, footer.php, homeheader.php,
│   leftsidebar.php, rightsidebar.php, topsearch.php   # Layout partials
├── conf/                # Server-side handlers (AJAX endpoints)
│   ├── db.php           # Database connection settings
│   ├── login.php        # Authenticate a user
│   ├── actions.php      # Registration and input validation
│   ├── postad.php       # Save a new listing
│   ├── uploads.php      # Product image uploads
│   ├── finalads.php     # Load listings
│   ├── prodsale.php     # Create an order
│   ├── contactseller.php # Record a buyer contacting a seller
│   ├── profileedit.php  # Save profile changes
│   └── delete.php       # Delete a listing
├── adsuploads/          # Uploaded product images
├── css/                 # Stylesheets
├── js/                  # Front-end scripts
└── images/              # Static images and icons
```

## Getting Started

### Prerequisites

- PHP 7+ with the `mysqli` and `openssl` extensions
- MySQL or MariaDB
- A local web server stack such as [XAMPP](https://www.apachefriends.org/), [MAMP](https://www.mamp.info/) or [WAMP](https://www.wampserver.com/)

### Installation

1. Clone the repository into your web server's document root (for example `htdocs/`):

   ```bash
   git clone https://github.com/osepro/SycamoreMarket.git
   ```

2. Create a MySQL database named `sycamore_mkt` and import the schema (see [Database](#database) below).

3. Update the connection settings in `conf/db.php` to match your environment:

   ```php
   $username = "root";
   $password = "root";
   $database = "sycamore_mkt";
   $host     = "localhost";
   ```

4. Make sure the `adsuploads/` folder is writable by the web server so image uploads work.

5. Start Apache and MySQL, then open `http://localhost/SycamoreMarket/` in your browser.

## Database

The full database dump is available on request: email **osepro@gmail.com**.

The app uses three tables:

| Table       | Key columns                                                                                      |
| ----------- | ------------------------------------------------------------------------------------------------ |
| `users`     | `fname`, `lname`, `mobileno`, `email`, `password`, `levels`, `gender`                            |
| `postedads` | `prodid`, `prodcategory`, `prodname`, `prodprice`, `prodlocation`, `prodesc`, `prodimage`, `email` |
| `cus_order` | `seller_email`, `buyer_email`, `prodid`, `prodname`, `prodprice`, `prodimage`                    |

## Notes

This is a learning project and is not hardened for production. Before deploying it publicly, you should:

- Move database credentials out of source control (for example into environment variables).
- Switch to prepared statements for all queries.
- Replace SHA-512 password hashing with `password_hash()` / `password_verify()`.
- Validate uploaded file types and sizes.

## Author

[@osepro](https://github.com/osepro)
