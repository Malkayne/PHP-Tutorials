<?php

?>

<!DOCTYPE html>
<html>

<?php include('header.php'); ?>

    <div class="container p-4">
        <h1>Welcome <b><?= $sessionName; ?></b></h1>
        <h2>Your email is: <b><?= $sessionEmail; ?></b></h2>
        <h2>A simple header</h2>
        <p>A simple paragraph note....</p>
    </div>

<?php include('footer.php'); ?>
    
</html>