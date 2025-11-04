<?php 
include 'includes/header.php'; 
include 'includes/connect.php';
?>

<div class="contactpagina_container">
    <div class="contact_gegevens">
    <h2>contact</h2>
    <p>praktijk mirre</p>
    <p>meidoornstraat 17</p>
    <p>8951 PF Heerenveen</p>
    <p>06 23402304</p>
    <p>123@voorbeeld.com</p>
    </div>



    <?php
    $stmt = $conn->prepare("SELECT * FROM contact LIMIT 1");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $stmt->fetch()) {
    ?>

    
        <?php
            // echo $row['id'];
            echo "record found: " . $row['praktijknaam']  . "<br>";
            echo "record found: " . $row['adres']  . "<br>";
            echo "record found: " . $row['postcode']  . "<br>";
            echo "record found: " . $row['telefoonnummer']  . "<br>";
            echo "record found: " . $row['emailadres']  . "<br>";

            ?>
            <a href='details.php?id=<?php echo $row['id'] ?>'><button>meer informatie</button>
        <?php
        }
        ?>



    <div class="contact_formulier_lijn"></div>
    <div class="contact_formulier">
        <form action="verwerk_contact.php" method="post">
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="naam" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="bericht">Bericht:</label>
            <textarea id="bericht" name="bericht" required></textarea>

            <input type="submit" value="Verstuur">
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>