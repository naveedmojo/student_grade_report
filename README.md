

<h1>Student Grade Report System</h1>

<section>
    <h2>Project Description</h2>
    <p>The <strong>Student Grade Report System</strong> is a web application built using <strong>PHP Laravel</strong> and <strong>MySQL</strong>. This application allows teachers to register students, update their marks, and view the registered student details. Students can also view their grade reports through the system.</p>
</section>

<section>
    <h2>Features</h2>
    <ul>
        <li>Teacher Registration</li>
        <li>Student Registration</li>
        <li>Update Student Marks</li>
        <li>View Student Details</li>
        <li>View Updated Marks</li>
    </ul>
</section>

<section>
    <h2>Technologies Used</h2>
    <ul>
        <li>Backend: PHP (Laravel Framework)</li>
        <li>Database: MySQL</li>
    </ul>
</section>

<section>
    <h2>Installation</h2>
    <h3>Clone the Project</h3>
    <pre><code>git clone https://github.com/yourusername/student-grade-report.git
cd student-grade-report</code></pre>

```
Install Dependencies
composer install
```

npm install</code></pre>

```
Environment Setup
Copy the <code>.env.example file to create your <code>.env file:
cp .env.example .env

Generate an Application Key
php artisan key:generate

Database Configuration
Update your .env file with your database credentials
DB_CONNECTION=mysql
```

DB\_HOST=127.0.0.1
DB\_PORT=3306
DB\_DATABASE=student\_grade\_db
DB\_USERNAME=root
DB\_PASSWORD=yourpassword</code></pre>

```
Run Migrations
php artisan migrate:fresh --seed

Start the Development Server
php artisan serve

Visit the application at:
http://localhost:8000/login
```

</section>

<section>
    <h2>Usage</h2>
    <ul>
        <li>Teachers can register students and update their grades.</li>
        <li>Students can view their details and updated marks after login.</li>
    </ul>
</section>

<section>
    <h2>Contributing</h2>
    <p>Contributions are welcome! Feel free to submit a pull request or open an issue for any improvements or bug fixes.</p>
</section>

<section>
    <h2>License</h2>
    <p>This project is licensed under the MIT License.</p>
</section>

</body>
</html>
