<?php 
include 'includes/header.php';
include 'includes/connect.php';
?>

<div class="cms-intro">
    <h2>Content Management Systeem</h2>
    <p>Welkom bij het CMS. Hier kunt u de inhoud van uw website beheren.</p>
</div>
<div class="cms-container">

    <ul class="cms-links">
        <li><a href="cms.php">homepage</a></li>
        <li><a href="cms.php">over mij</a></li>
        <li><a href="cms.php">contact_gegevens</a></li>
        <li><a href="index.php">Uitloggen</a></li>
    </ul>

    <div class="cms-inhoud">
        <h3>Inhoud bewerken</h3>
        <p>Kies een sectie om te bewerken vanuit het menu hierboven.</p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>