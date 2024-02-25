<?php

    # START SESSION
    if (isset($_POST['name'])) {
        session_start();
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html>

<?php include('header.php'); ?>

<!-- content -->

    <!-- form -->
    <div class="container-fluid d-flex justify-content-center mt-5 mb-5">
        <div class="card bg-white brand-border col-lg-6 col-md-8 col-11" >
            <div class="container-fluid card-header text-center text-white brand">
                <h5 class="mt-3 mb-3">Login</h5>
            </div>
            <div class="card-body brand-text">
                <form method="POST" action="">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control mb-2" placeholder="Input name..." required>
                    
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Input email..." required>
                    
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" id="password" class="form-control mb-3" placeholder="set password..." required>
                        
                    <button type="submit" class="btn brand text-white-center" style="width:100%;">Login</button>
                </form>
            </div>
        </div>
    </div>
<!-- /.content -->

<?php include('footer.php'); ?>
    
</html>