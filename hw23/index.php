<?php

session_start();
if(isset($_POST['submit'])) {
    $_SESSION['cookie'] = true;
    $_SESSION['timer'] = time();
    header('Location: ./index.php');
}

// session will destroy after 30 seconds after you accept cookies
if(isset($_SESSION['timer'])) {
    $user_inactive = 30;
    $session_life = time() - $_SESSION['timer'];

    if($session_life > $user_inactive) {
        session_destroy();
    }
    
}

// cookie will expire in 60 sec
// setcookie('name','ilija', time() + 60); 

//unset cookie (set it to the past)
// setcookie('name', '', time() - 100);



?>

<!DOCTYPE HTML>
<html lang="en-AU">
<head>
    <!-- Require Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <!-- CDN - Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Title -->
        <title>Session Practice</title>
    
    <!-- Webpage Icon -->
        <link rel="shortcut icon" href="Images\Pilot640_Logo_Symbol.ico"/>
        

</head>

<body>      

<!-- Nav Bar -->

<nav class="navbar navbar-expand-sm bg-secondary navbar-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="Images\Pilot640_Logo_Symbol.ico" alt="Logo" style="width:100px;" class="rounded-pill">
        </a>
    </div>
</nav>

<!-- Header Section -->
<header> 

</header> 

<!-- Vertically Centered Cookies Modal -->
<?php if(!$_SESSION['cookie']) { ?>
<div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Add this line to your code -->
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ako ne prihvatis 🍪 smaracu te sa modalom</h5>
            </div>
            <div class="modal-body">
            “Prihvati sve kolacice?” 
            </div>
            <div class="modal-footer">
                <form action="index.php" method="POST">
                    <button type="submit" name="submit" class="btn btn-success">OK</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> <!-- And the relavant closing div tag -->
<?php } ?>



    
<!-- import jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--Modal JS Script -->
<script type="text/javascript">
    window.onload = () => {
        $('#onload').modal('show');
    }
</script>
    
</body>
</html>