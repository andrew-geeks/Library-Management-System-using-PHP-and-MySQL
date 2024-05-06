<?php
    include './header.php';
    include './uservalid.php';
?>
<html>
    <body>
        <h1 style="text-align: center;">Home Page</h1>
        <h2>Hello, <?php echo "".$_SESSION["name"]?>👋</h2>
        <p>SRN: <?php echo "".$_SESSION["srn"] ?></p>
        <br>
        <button onclick="document.location='/lms/books/select.php'">Lend Books</button>
        <button onclick="document.location=''">Return Books</button>
        <?php 
        
        ?>
        <h4>Your Books()</h4>
    </body>
</html>

