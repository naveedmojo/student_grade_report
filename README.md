<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Report System</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        h1, h2, h3, h4 { color: #333; margin-bottom: 10px; }
        ul { margin: 0 0 20px 20px; }
        pre, code { background-color: #f4f4f4; padding: 5px; border-radius: 5px; display: block; }
        code { display: inline; padding: 2px 4px; }
        section { margin: 20px 0; }
    </style>
</head>
<body>

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
<h3>Install Dependencies</h3>
<pre><code>composer install
```

npm install</code></pre>

```
<h3>Environment Setup</h3>
<p>Copy the <code>.env.example</code> file to create your <code>.env</code> file:</p>
<pre><code>cp .env.example .env</code></pre>

<h3>Generate an Application Key</h3>
<pre><code>php artisan key:generate</code></pre>

<h3>Database Configuration</h3>
<p>Update your <code>.env</code> file with your database credentials:</p>
<pre><code>DB_CONNECTION=mysql
```

DB\_HOST=127.0.0.1
DB\_PORT=3306
DB\_DATABASE=student\_grade\_db
DB\_USERNAME=root
DB\_PASSWORD=yourpassword</code></pre>

```
<h3>Run Migrations</h3>
<pre><code>php artisan migrate:fresh --seed</code></pre>

<h3>Start the Development Server</h3>
<pre><code>php artisan serve</code></pre>

<p>Visit the application at:</p>
<pre><code>http://localhost:8000/login</code></pre>
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
