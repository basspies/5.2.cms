<?php include 'includes/header.php'; ?>

<div class="contactpagina_container">
    <div class="contact_gegevens">
    <h2>contact</h2>
    <p>praktijk mirre</p>
    <p>meidoornstraat 17</p>
    <p>8951 PF Heerenveen</p>
    <p>06 23402304</p>
    <p>123@voorbeeld.com</p>
    </div>

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