<?php

  # GET and POST METHOD
  // if(isset($_POST['email'])){
  //   echo $_POST['email'] . "<br/>";
  //   echo $_POST['name'] . "<br/>";
  //   echo $_POST['price'] . "<br/>";
  //   echo $_POST['details'] . "<br/>";
  // }

  # XSS Attacks
  // if(isset($_POST['email'])){
  //   echo htmlspecialchars($_POST['email']) . "<br/>";
  //   echo htmlspecialchars($_POST['name']) . "<br/>";
  //   echo htmlspecialchars($_POST['price']) . "<br/>";
  //   echo htmlspecialchars($_POST['details']) . "<br/>";
  // }

  # Basic Form Validation
  // if(isset($_POST['email'])){
  //   # Check Email
  //   if(empty($_POST['email'])){
  //     echo "An Email address is required <br/>";
  //   }else{
  //     echo htmlspecialchars($_POST['email']) . "<br/>";
  //   }
  //    # Check Product Name
  //    if(empty($_POST['pname'])){
  //     echo "A product name is required <br/>";
  //   }else{
  //     echo htmlspecialchars($_POST['pname']) . "<br/>";
  //   }
  //    # Check Product Price
  //    if(empty($_POST['price'])){
  //     echo "A product price is required <br/>";
  //   }else{
  //     echo htmlspecialchars($_POST['price']) . "<br/>";
  //   }
  //    # Check Details
  //    if(empty($_POST['details'])){
  //     echo "Details are required <br/>";
  //   }else{
  //     echo htmlspecialchars($_POST['details']) . "<br/>";
  //   }
  // }

  # Using Filters to validate forms
    // if(isset($_POST['email'])){
    // # Validate Email
    //   if(empty($_POST['email'])){
    //       echo "An Email address is required <br/>";
    //     }else{
    //       $email = $_POST['email'];
    //       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         echo "Input a valid Email address";
    //       }
    //   }
    // # Validate Product Name using Regular Expressions (RegEx)
    //   if(empty($_POST['pname'])){
    //     echo "A product name is required <br/>";
    //   }else{
    //     $pname = $_POST['pname'];
    //     if(!preg_match('/^[a-zA-Z\s]+$/', $pname)){
    //       echo "Product name must contain letters and spaces only <br/>";
    //     }
    //   }
    // }

      # SHOWING ERRORS

      $email = $pname = $price = $details = '';

      $errors = array('email'=>'', 'pname'=>'', 'price'=>'', 'details'=>'');

      if(isset($_POST['email'])){
        # Validate Email
          if(empty($_POST['email'])){
              $errors['email'] = "An Email address is required <br/>";
            }else{
              $email = $_POST['email'];
              if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Input a valid Email address";
              }
          }
        # Validate Product Name using Regular Expressions (RegEx)
          if(empty($_POST['pname'])){
            $errors['pname'] = "A product name is required <br/>";
          }else{
            $pname = $_POST['pname'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $pname)){
              $errors['pname'] =  "Product name must contain letters and spaces only <br/>";
            }
          }
        # Check Product price
          if(empty($_POST['price'])){
            $errors['price'] = "A product name is required <br/>";
          }else{
            $price = $_POST['price'];
          }
        # Check Product Details
          if(empty($_POST['details'])){
            $errors['details'] = "Product details are required <br/>";
          }else{
            $details = $_POST['details'];
          }

        # Redirect
          if(!array_filter($errors)){
            header('Location: index.php');
          }

      }

      


?>

<!DOCTYPE html>
<html>

<?php include('header.php'); ?>

<!-- ===== CONTENT ===== -->

  <section class="container mt-5 mb-3">
    <h3 class="text-center brand-text mb-3">Add a Product</h3>
    <div class="container d-flex justify-content-center">
        <form class="bg-white col col-md-10 col-lg-8 p-4 p-md-5 brand-border" action="" method="POST">
            <label for="email" class="form-label">Your Email:</label>
            <div class="text-danger"><?= $errors['email']; ?></div>
            <input type="email" name="email" id="email" value="<?= $email; ?>" class="form-control mb-3" placeholder="Input your email..." >
            
            <label for="pname" class="form-label">Product Name:</label>
            <div class="text-danger"><?= $errors['pname']; ?></div>
            <input type="text" name="pname" id="pname"  value="<?= $pname; ?>"  class="form-control mb-3" placeholder="Input your product name..." >
            
            <label for="price" class="form-label">Product Price:</label>
            <div class="text-danger"><?= $errors['price']; ?></div>
            <input type="number" name="price" id="price"  value="<?= $price; ?>" class="form-control mb-3" placeholder="Input product price..." >
            
            <label for="details" class="form-label">Product Details:</label>
            <div class="text-danger"><?= $errors['details']; ?></div>
            <input type="text" name="details" id="details"  value="<?= $details; ?>"  class="form-control mb-3" placeholder="Input product details..." >
            
            <div class="container d-flex justify-content-center">
            <button type="submit" class="btn brand text-center px-3">Submit</button>
            </div>
        </form>
    </div>
  </section>
<!-- ===== /.CONTENT ===== -->

<?php include('footer.php'); ?>
    
</html>