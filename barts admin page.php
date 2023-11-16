<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Link to your CSS file for styling -->
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<style>
        /* Global styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Header styles */
        header {
            background-color:  ;
            color: #333;
            padding: 20px;
            text-align: left;
        }

        /* Sidebar styles */
        aside {
            background-color: #333;
            color: #fff;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            overflow-y: auto;
        }

        aside ul {
            list-style: none;
            padding: 0;
        }

        aside li {
            padding: 10px;
        }

        aside a {
            color: #fff;
            text-decoration: none;
        }

        /* Main content styles */
        main {
            margin-left: 250px;
            padding: 20px;
            background-color: #f2f2f2; /* Background color for the content area */
            text-align: auto;
        }

        /* Footer styles */
        footer {
            background-color: ;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>

<style>
        /* Global styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('background.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image file */
            background-size: cover; /* This property ensures the background image covers the whole body */
            background-repeat: no-repeat; /* Prevents the image from repeating */
            height: 100vh;
        }

        /* Header styles */
        header {
            background-color: #808080;
            color: white;
            padding: 50px;
            text-align: center;
            
        }

        /* Sidebar styles */
        aside {
            background-color: #333;
            color: #fff;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            overflow-y: auto;
        }

        aside ul {
            list-style: none;
            padding: 0;
        }

        aside li {
            padding: 20px;
        }

        aside a {
            color: #fff;
            text-decoration: none;
        }

        /* Main content styles */
        main {
            margin-left: 250px;
            padding: 20px;
            background-color: #f2f2f2; /* Background color for the content area */
        }

    </style>
    <!-- Header -->
    <header>
        <h1>Barts's Tavern</h1> 
        <!-- Navigation menu or user profile information can go here -->
    </header>

    <!-- Sidebar -->
    <aside>
        <ul>
            <li><a href="barts admin page.php">Home</a></li>
            <li><a href="barts employee registration.php">Employee Registration</a></li>
            <li><a href="employee_listview.php">Employee Report</li>
            <li><a href="barts payroll.php">Payroll</a></li>
            <li><a href="payroll_listview.php">Payroll Report</a></li>
            <li><a href="barts glasses.php">POS</a></li>
            <li><a href="pos_listview.php">POS Sales Report</a></li>
            <li><a href="barts user info.php">User Account</a></li>
            <li><a href="barts login form.php">Logout</a></li>

            <!-- Add more menu items as needed -->
        </ul>
    </aside>

    <!-- Main Content Area -->
    <main>
        <!-- Content for the selected menu item goes here -->
        <section id="Home">
            <h2>Hey! Hey! Hey! Welcome to Barts Tavern!</h2>
            <!-- Add dashboard content here -->
        </section>

    </main>

</body>
</html>