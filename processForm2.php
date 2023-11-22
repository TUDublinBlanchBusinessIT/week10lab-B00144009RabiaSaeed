<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['subTenKG'], $_POST['overTenKG'])) {
    $subTenKG = $_POST['subTenKG']; 
    $overTenKG = $_POST['overTenKG'];
    
    $_SESSION['subTenKG'] = $subTenKG;
    $_SESSION['overTenKG'] = $overTenKG;
    
    if ($subTenKG > 0 && $overTenKG > 0) {
        header("Location: finalStep.php");
    }
}
?>
