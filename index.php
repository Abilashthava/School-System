<?php
session_start();
echo $_SESSION['username'];
//if(!isset($_SESSION['username'])){
//	header('location:login/login.php');
//	exit();
//}

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School System</title>
    <link rel="stylesheet" href="style.css">
	<style>
	body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9fafb;
    margin: 0;
    padding: 0;
    color: #333;
}


header {
    background-color: #e3f2fd;
    color: #0d47a1;
    text-align: center;
    padding: 20px 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}


.container {
    display: flex;
    min-height: 80vh;
}
 
.sidebar {
    width: 220px;
    background-color: #F5EFD5;
    border-right: 1px solid #ddd;
    padding-top: 20px;
    box-shadow: 2px 0 5px rgba(0,0,0,0.05);
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.sidebar li {
    margin: 10px 0;
}

.sidebar a {
    display: block;
    padding: 12px 20px;
    text-decoration: none;
    color: #0d47a1;
    font-weight: 500;
    border-radius: 8px;
    transition: background-color 0.3s, color 0.3s;
}

.sidebar a:hover {
    background-color: #bbdefb;
    color: #0d47a1;
}


.content {
    flex-grow: 1;
    padding: 20px;
    background-color: #f5f5f5;
}


iframe {
    border: none;
    background-color: #EDF7F7;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
}


footer {
    background-color: #e3f2fd;
    color: #0d47a1;
    text-align: center;
    padding: 15px 0;
    font-size: 14px;
    box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
}
</style>
</head>
<body>

<header>
    <h1> School System</h1>
</header>




<div class="container">
    
    <aside class="sidebar">
        <ul>
            <li><a href="student/index.php" target="iframe_a">Student</a></li>
            <li><a href="subject/index.php" target="iframe_a">Subject</a></li>
            <li><a href="grade/index.php" target="iframe_a">Grade</a></li>
        </ul>
    </aside>

    
    <main class="content">
        <iframe name="iframe_a" height="500px" width="100%" title="Iframe Example"></iframe>
    </main>
</div>
<div> 
<a href="login/logout.php">Logout</a>


<footer>
    <p> <?php echo date('Y'); ?> School Student Management System | Designed by Abilash</p>
</footer>
</body>
</html>



