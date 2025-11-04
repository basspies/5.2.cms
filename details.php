<?php 
include 'includes/header.php';
include 'includes/connect.php'; 

    $stmt = $conn->prepare("SELECT * FROM producten");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $stmt->fetch()) {
    ?>
    
    
        <?php
            echo $row['id'];
            echo "€" . $row['prijs']  . "<br>";
            echo $row['informatie']  . "<br>";
            echo $row['meer_info']  . "<br>";
        }
        ?>




<?php include 'includes/footer.php'; ?>