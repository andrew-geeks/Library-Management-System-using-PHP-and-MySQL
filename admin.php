<?php
    require "./adminvalid.php";
    require "./header.php";
    
?>
<html>
    <head>
        <title>LMS - ADMIN PANEL</title>
    </head>
    <body>
        <h1>Library Management System</h1>
        <p>Admin Panel</p>
        <p>User: <?php echo "". $_SESSION['user'];  ?></p>
    </body>
</html>