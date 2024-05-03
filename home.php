<?php
    include './headers/header.php';
    include './headers/uservalid.php';
?>
<html>
    <body>
        <h1>HOME PAGE</h1>
        <h2>Hello, <?php echo "".$_SESSION["name"]?>👋</h2>
        <p>SRN: <?php echo "".$_SESSION["srn"] ?></p>
        <br>
        <?php 
        
        ?>
        <h4>Your Books()</h4>
    </body>
</html>

