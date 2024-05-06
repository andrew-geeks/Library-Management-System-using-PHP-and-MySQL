<!-- FOR USERS -->
<?php
    include '../header.php';
    include '../uservalid.php';
?>

<html>
    <head>
        <title>Lend Books - LMS</title>
        <link rel="stylesheet" href="../index.css?>">
    </head>
    <body>
        <h2 style="text-align: center;">Lend Books</h2>
        <br/><br/>
        <p>SRN: <?php echo $_SESSION["srn"]  ?></p>
        <h4>Select a book of your choice:</h4>
        <table>
            <tr>
                <th>Book Id</th>
                <th>Book Name</th>
                <th>Book Author</th>
                <th>Category</th>
                <th>Copies</th>
                <th>Lend</th>
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
                    <td>
                        <button onclick="document.location=''">Lend Book</button>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>