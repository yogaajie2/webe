<head>

    <?php
      // Initialize the session
      session_start();
       
      // If session variable is not set it will redirect to login page
      if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
        header("location: /webe/admin/index.php");
        exit;
      }
    ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Flags CSS -->
    <link rel="stylesheet" type="text/css" href="../flags/css/flag-icon.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link href="../fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:600|Raleway:300" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="../style.css">

    <title>Sistem Admin Konten Website Webe Piles</title>
</head>