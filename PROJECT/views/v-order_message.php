
<!-- MAIN CONTENT -->
<main class="container bg-light border-bottom border-dark border-5 py-5 my-3">
    <?php if($is_errors) { ?>
        <div class="container bg-success rounded shadow">
            <div class="py-5">
                <h2 class="display-5 fw-bold text-white">You ordered successufuly.</h2>
                <p class="col-md-8 fs-4 text-white-50"><?php echo "Thank you $name $last_name. You ordered $title. Enjoy."; ?></p>
                <a href="products_page_controler.php" class="btn btn-dark btn-lg">LOOK MORE</a>
            </div>
        </div> <!--end of container-->
    <?php } else { ?>
        <div class="container bg-danger rounded">
            <div class="py-5">
                <h2 class="display-5 fw-bold text-white">You have error.</h2>
                <?php foreach($systemErrors as $error) { ?>
                <p class="col-md-8 fs-4 text-white-50">* <?php echo htmlspecialchars($error); ?> </p>
                <?php } ?>
                <a href="javascript:history.go(-1)" class="btn btn-dark btn-lg">G0 BACK</a>
            </div>
    <?php } ?>
        </div> <!--end of container-->
      </main>