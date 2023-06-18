
# PHP and MySQL Login System

This is a simple login system implemented in PHP and MySQL. It provides user registration, login, and logout functionality, ensuring the security of user credentials through hashing.




## Features
1. User registration: Users can create an account by providing a unique username and a secure password.
2. Hashed password storage: User passwords are securely hashed before being stored in the MySQL database, ensuring their confidentiality.
3. User login: Registered users can log in using their username and password credentials.
4. Session management: Once logged in, users are redirected to a home page where they can access protected content. Unauthorized users are redirected to the login page.
5. Sign out: Users can log out of their account by clicking on the "Sign Out" button, which terminates the session and redirects them to the login page.
## Requirements
To run this login system, you'll need the following:
1. Web server (e.g., Apache) with PHP support
2. MySQL database
## Usage
1. Sign up:
    * Access the login page and click on the "Sign Up" link.
    * Enter a unique username and a strong password.
    * Confirm the password.
    * Click on the "Sign Up" button.
    * You will be redirected to the login page.
2. Login:
    * Enter your registered username and password.
    * Click on the "Log In" button.
    * If the credentials are valid, you will be redirected to the home page.
    * If the credentials are invalid, you will see an error message.
3. Home page:
    * On the home page, you can access protected content that is only available to logged-in users.
    * If you try to access the home page without logging in, you will be redirected to the login page.
4. Sign out:
    * To log out, click on the "Sign Out" button on the home page.
    * You will be logged out, and the session will be terminated.
    * You will be redirected to the login page.
## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

