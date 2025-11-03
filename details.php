<?php 
include 'includes/header.php';
include 'includes/connect.php'; 

    $stmt = $conn->prepare("SELECT * FROM tarieven");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $stmt->fetch()) {
    ?>

    
        <?php
            // echo $row['id'];
            echo "record found: " . $row['prijs']  . "<br>";
            echo "record found: " . $row['informatie']  . "<br>";


            ?>
            <a href='details.php?id=<?php echo $row['id'] ?>'><button>meer informatie</button>
        <?php
        }
        ?>




<?php include 'includes/footer.php'; ?>