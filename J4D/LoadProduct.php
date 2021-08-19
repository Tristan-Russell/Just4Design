<?php
if(isset($_POST['LoadProduct'])) {
    $id = $_POST['id'];
    $sql = "SELECT views FROM products WHERE ID=$id";
    $result= mysqli_query($conn,$sql) or die('Product could not be selected.');
    }
    ?>