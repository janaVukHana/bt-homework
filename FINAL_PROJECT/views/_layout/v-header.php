<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page); ?></title>
    <!-- font awesome icons -->
    <script defer="" src="https://use.fontawesome.com/releases/v6.1.1/js/all.js"></script>
    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css for sign-in page -->
    <link rel="stylesheet" href="./public/theme/css/sing-in-custrom.css">
</head>
<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Expand at md- LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link <?php if($page == 'Home page') echo htmlspecialchars('active'); ?>" aria-current="page" href="home_page_controler.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page == 'Courts page') echo htmlspecialchars('active'); ?>" href="courts_page_controler.php">Courts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page == 'Add court page') echo htmlspecialchars('active'); ?>" href="add_court_page_controler.php">Add Court</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
            </ul>
          </div>
          <?php if($_SESSION['username']) { ?>
            <a class="btn btn-primary" href="logout_page_controler.php">Logout</a>
          <?php } ?>
        </div>
      </nav>
