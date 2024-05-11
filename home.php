<?php
    include './header.php';
    include './uservalid.php';

    $srn = $_SESSION["srn"];
    $sql = "select * from lend where srn = '$srn'";
    $books = mysqli_query($conn,$sql);
    $n_books = mysqli_num_rows($books);
?>

<html>
    <head>
        <title>Home Page - <?php echo $_SESSION['name']; ?></title>
        <link rel="stylesheet" href="index.css?>">
    </head>
    <body>
        <h1 style="text-align: center;">Home Page</h1>
        <h2>Hello, <?php echo "".$_SESSION["name"]?>👋</h2>
        <p>SRN: <?php echo "".$srn ?></p>
        <br>
        <button onclick="document.location='/lms/books/select.php'">Lend Books</button>
        <button onclick="document.location='/lms/auth/logout.php'">Log Out╰┈➤🚪</button>
        <?php 
           
            
        ?>
        <h4>Your Books(<?php echo $n_books ?>)</h4>
        <table>
            <tr>
                <th>Book Id</th>
                <th>Book Name</th>
                <th>Book Author</th>
                <th>Book Category</th>
                <th>Return</th>
            </tr>
            <?php
                while($rows=$books->fetch_assoc()){
                    $bid = $rows['bid'];
                    $query = "select * from books where bid='$bid'";
                    $b_data = mysqli_query($conn,$query);
                    while($data=$b_data->fetch_assoc()){
            ?>
            <tr>
                    <td><?php echo $data['bid']; ?></td>
                    <td><?php echo $data['bname']; ?></td>
                    <td><?php echo $data['author']; ?></td>
                    <td><?php echo $data['category']; ?></td>
                    <td>
                        <?php
                         echo "<button onclick="."document.location='/lms/books/return.php?bid=".$rows['bid']."'".">Return Book</button>"
                        ?>
                        
                    </td>
            </tr>
            <?php
                    }
                }
            ?>
        </table>
    </body>
</html>

