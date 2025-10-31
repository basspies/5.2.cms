<?php 
include 'includes/header.php';
include 'includes/connect.php'; 

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    echo "id gevonden" . $id;
}
else{
    echo "geen id";
}
?>




<?php include 'includes/footer.php'; ?>