<?php

# SESSION CONTINUE

    session_start();
    $sessionName = $_SESSION['name'];
    $sessionEmail = $_SESSION['email'];

?>


<head>
    <title>First PHP Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8" />
    <link href="style.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <style type="text/css">
        .box {
            box-shadow: 0px 7px 10px #ffa7347e !important;
        }
        .brand {
            color: #ffffff !important;
            background: #ffa734 !important;
            border: none !important;
        }
        .brand-logo {
            color: #ffa734 !important;
            text-shadow: 1px 1px 1px #000000 !important;
        }
        .brand-text {
            color: #ffa734 !important;
        }
        .brand-border {
            border: 1px solid #ffa734 !important;
        }

    </style>
</head>

<body class="bg-light">
  <!-- Header -->

    <nav class="navbar bg-white box sticky-top">
        <div class="container  py-2">
            <a href="index.php" class="navbar-brand brand-logo"><h2>Food Products</h2></a>
            <a href="add.php" class="btn btn-primary brand">Add a Product</a>
        </div>
    </nav>

    <!-- <div class="container-fluid bg-primary d-flex justify-content-center py-4">
      <h2 class="text-white">HEADER</h2>
    </div> -->