<?php 
include 'includes/header.php'; 
include 'includes/connect.php';
?>

<div class="container">
    <h1>tarieven</h1>
</div>

<div class="tarieven_container">
    <!-- SELECT * FROM `producten` -->
    <?php
    $stmt = $conn->prepare("SELECT * FROM producten");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $stmt->fetch()) {
    ?>

    <div class="tarieven_soorten">
        <?php
            // echo $row['id'];
            echo "record found: " . $row['informatie']  . "<br>";
            echo "record found: " . $row['prijs']  . "<br>";

            ?>
            <a href='details.php?id=<?php echo $row['id'] ?>'><button>meer informatie</button>
    </div>
        <?php
        }
        ?>


    <!-- <div class="tarieven_soorten">
        <p>Kennismakingsgesprek:  gratis (30 minuten)</p>
        <p>meer informatie</p>
    </div>
    
    <div class="tarieven_soorten">
        <p>Individuele begeleiding/behandeling: € 70,00 per sessie. (60 minuten)</p>
            <?php
    foreach ($tarieven as $categorie => $tarief) {
        echo "<a href='details.php?categorie=$categorie'><button>Meer informatie</button></a>";
    }
    ?>
    </div>
    
    <div class="tarieven_soorten">
        <p>Wandel coaching: € 70,00 per sessie. (60 minuten)</p>
        <p>meer informatie</p>
    </div> -->
    </div>

<?php include 'includes/footer.php'; ?>