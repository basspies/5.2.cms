<?php 
include 'includes/header.php';
include 'includes/connect.php'; 

    $stmt = $conn->prepare("SELECT * FROM producten WHERE id = :id");
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $stmt->fetch()) {
    ?>
    
        <div class="details_container">
            <div class="details">
                <?php 
                echo "prijs: €" . $row['prijs']  . "<br>";
                echo $row['informatie']  . "<br>";
                ?>
                </div>
            <div class="details"><?php echo $row['meer_info']  . "<br>";?></div>
        </div>
        <?php
        }
        ?>




<?php include 'includes/footer.php'; ?>