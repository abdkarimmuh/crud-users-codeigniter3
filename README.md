# CRUD Users Feature

## Objective
This project is a simple **User Management Interface** built using **CodeIgniter 3**. It allows users to perform CRUD operations while integrating with public APIs. The interface is dynamic, leveraging **DataTables** for efficient data display with server-side pagination and AJAX-based interactions.

## Features
- ✅ **View Users**: Display a dynamic user list using [DataTables](https://datatables.net) with server-side pagination.
- ✅ **Add Users**: Create new users via an AJAX-based form submission.
- ✅ **Edit Users**: Update existing user details dynamically.
- ✅ **Delete Users**: Remove users with confirmation prompts.
- ✅ **API Integration**: Fetch initial user data from [FakeStoreAPI](https://fakestoreapi.com/users) when the database is empty.
- ✅ **Error Handling & Feedback**: Inform users of success/failure during actions.
- ✅ **Form Validation**: Ensures required fields are properly validated before submission.
- ✅ **Bootstrap Styling**: Uses [Bootstrap](https://getbootstrap.com) for responsive design.

## Tech Stack
- **Frontend**: jQuery, AJAX, DataTables, Bootstrap
- **Backend**: PHP (CodeIgniter 3)
- **Database**: MySQL (or compatible database)
- **API**: FakeStoreAPI for initial user population

## Installation Guide
### 1. Clone the Repository
```sh
git clone https://github.com/abdkarimmuh/crud-users-codeigniter3.git
cd crud-users-codeigniter3
```

### 2. Set Up Database
Create a MySQL database and import the following structure:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    city VARCHAR(100) NOT NULL,
    street VARCHAR(100) NOT NULL,
    number VARCHAR(10) NOT NULL,
    postcode VARCHAR(20) NOT NULL,
    phone VARCHAR(20) NOT NULL
);
```

### 3. Configure Database Connection
Edit `application/config/database.php` and set your database credentials:
```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'crud_ci3',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'failover' => array()
);
```

### 4. Run the Application
Ensure your PHP server is running and access the application:
```sh
php -S localhost:8000
```
Then, open [http://localhost:8000](http://localhost:8000) in your browser.

## API Integration (FakeStoreAPI)
If the user list is empty, the application will automatically fetch user data from **FakeStoreAPI**:
```sh
https://fakestoreapi.com/users
```
This ensures a populated user list on first load.

## AJAX Implementation
- **Add, Edit, Delete** actions are handled via AJAX.
- **Success/Error messages** are displayed dynamically without refreshing the page.

## Screenshots
*(Add relevant screenshots here)*

## License
This project is open-source and free to use under the MIT License.

## Contributors
- **Your Name** - [GitHub Profile](https://github.com/your-profile)

---
**Happy Coding! 🚀**

