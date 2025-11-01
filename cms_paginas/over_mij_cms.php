<?php 
include 'header_cms.php';
include '../includes/connect.php';

if (isset($_GET['prijs']) && isset($_GET['informatie']) && isset($_GET['meer_info']) && !empty($_GET['prijs']) && !empty($_GET['informatie']) && !empty($_GET['meer_info'])) {
    $prijs = htmlspecialchars($_GET['prijs']);
    $informatie = htmlspecialchars($_GET['informatie']);
    $meer_info = htmlspecialchars($_GET['meer_info']);

    $stmt = $conn->prepare("INSERT INTO producten (prijs, informatie, meer_info)
  VALUES (:prijs, :informatie, :meer_info)");
  $stmt->bindParam(':prijs', $prijs);
  $stmt->bindParam(':informatie', $informatie);
  $stmt->bindParam(':meer_info', $meer_info);

  // insert a row
  $stmt->execute();
}
?>

<div class="cms-intro">
    <h2>Content Management Systeem</h2>
    <p>Welkom bij het CMS. Hier kunt u de inhoud van uw website beheren.</p>
</div>
<div class="cms-container">

    <?php include '../includes/cms_links_paginas.php'; ?>

    <div class="cms-inhoud">
    <form action="over_mij_cms.php" method="GET">
        <label for="prijs" class="gegevens">prijs:</label>
        <input type="text" id="prijs" name="prijs" placeholder="Enter your prijs" required class="gegevens_invoer"><br>
        
        <label for="informatie" class="gegevens">informatie:</label>
        <input type="text" id="informatie" name="informatie" placeholder="Enter your informatie" required class="gegevens_invoer"><br>

        <label for="meer_info" class="gegevens">meer_info:</label>
        <input type="text" id="meer_info" name="meer_info" placeholder="Enter your meer_info" required class="gegevens_invoer"><br>

        <button type="submit" class="aanmelden_button">toevoegen</button>
    </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>