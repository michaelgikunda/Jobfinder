# JobFinder
JobFinder is a web application built with PHP, HTML, CSS, and MySQL. Its purpose is to assist individuals in finding suitable job opportunities by allowing them to upload their skills and browse through available job listings.

### Features
+ User Registration: Users can create an account on JobFinder by providing their basic information.
- User Login: Registered users can log in to their accounts using their credentials.
* Profile Creation: Users can create their profiles by uploading their skills, experience, education, and other relevant information.
/ Job Listing: Employers can post job listings on JobFinder, including details such as job title, description, required skills, and company information.
* Job Search: Users can search for job listings based on keywords, location, or specific criteria.
+ Application Submission: Users can apply for job listings by submitting their profiles to employers.
/ Notifications: Users receive notifications regarding job application updates, interview requests, and other important information.
+ User Dashboard: Registered users have access to a personalized dashboard where they can manage their profiles, applications, and notifications.
### Prerequisites
To run JobFinder locally, you need to have the following software installed on your system:

- PHP (version 7.0 or above)
+ MySQL
* Web server (e.g., Apache, Nginx)
### Installation
1. Clone the repository:
```
git clone https://github.com/your-username/jobfinder.git
```

2. Import the database:

* Create a new database in MySQL.
/ Import the database.sql file located in the database directory to the newly created database.
3. Configure the database connection:

* Open the config.php file located in the includes directory.
+ Update the following variables with your database credentials:

```
define('DB_HOST', 'localhost');
define('DB_NAME', 'your_database_name');
define('DB_USER', 'your_username');
define('DB_PASSWORD', 'your_password');
```
4. Start the web server:

* Configure your web server to point to the cloned directory.
+ Make sure the necessary permissions are set for the files and directories.
5. Access the application:

+ Open a web browser and visit http://localhost/jobfinder.
### Usage
 + Register an account on JobFinder using the provided registration form.
 - Log in to your account using your credentials.
 * Create your profile by providing information about your skills, experience, education, etc.
 / Browse through available job listings using the search functionality or by navigating through the job categories.
 + Apply for job listings by submitting your profile to employers.
 * Receive notifications regarding job application updates and interview requests.
 + Manage your profile, applications, and notifications through the user dashboard.
### Contributing
 + Contributions to JobFinder are welcome! If you find any bugs or have suggestions for improvements, please feel free to open an issue or submit a pull request.

### License
 + This project is licensed under the MIT License.

### Acknowledgments
 + The JobFinder application was inspired by the need to simplify the job search process for individuals.
 - Thanks to the PHP, HTML, CSS, and MySQL communities for providing excellent tools and resources

### Preview
![webshot](https://github.com/michaelgikunda/Jobfinder/assets/125220330/1f4255e6-fe8e-4e40-abc5-dab721299c1f)
