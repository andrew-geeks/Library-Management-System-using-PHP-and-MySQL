<?php
    require "./header.php";
    require "./adminvalid.php";
    
?>
<html>
    <head>
        <title>LMS - ADMIN PANEL</title>
        <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <h1 style="text-align: center;">Library Management System</h1>
        <h3 style="text-align: center;">Admin Panel</h3>
        <!-- user function buttons -->
        <h4>User Management</h4>
        <div>
        <button onclick="document.location='/lms/books/add.php'">Add User</button>
        </div>
        <br/>
        <?php
            $sql = "SELECT * FROM `books`";
            $result = mysqli_query($conn,$sql);
            echo "<h4>No. Of Books(".mysqli_num_rows($result).")</h4>";
        ?>
        <table>
            <tr>
                <th>Book Id</th>
                <th>Book Name</th>
                <th>Book Author</th>
                <th>Category</th>
                <th>Copies</th>
            </tr>
            <?php
                $sql = 'SELECT * FROM `books`';
                $result = mysqli_query($conn,$sql);
                while($rows=$result->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $rows['bid']; ?></td>
                    <td><?php echo $rows['bname']; ?></td>
                    <td><?php echo $rows['author']; ?></td>
                    <td><?php echo $rows['category']; ?></td>
                    <td><?php echo $rows['copies']; ?></td>
                </tr>
            <?php
                }
            ?>
        </table>

    </body>
</html>