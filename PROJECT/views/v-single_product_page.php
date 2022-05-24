<!-- MAIN CONTENT -->
<main class="bg-light py-5 border-bottom border-dark border-5 shadow">
    <!-- MAIN PRODUCT -->
    <div class="container card mb-3" style="max-width: 540px;">
        <h2 class="mt-5 mb-5">Best of DemoSHOP</h2>
        <div class="row g-0">

            <div class="col-8">
                <img src=<?php echo $current_product['img']; ?> class="img-fluid rounded-start" alt="...">
            </div>
            
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $current_product['title']; ?></h5>
                    <p class="card-text">Price: <?php echo $current_product['price']; ?></p>
                    <p class="card-text">Brand: <?php echo $current_product['brand']; ?></p>
                    <p class="card-text">Category: <?php echo $current_product['category']; ?></p>
                    <div class="d-flex justify-content-between">
                        <div class="col">
                            <a class="btn btn-outline-dark btn-sm mb-1" href="./single_product_page_controler.php?id=<?php echo $prev_product['id']; ?>">PREV</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-outline-dark btn-sm mb-1" href="./single_product_page_controler.php?id=<?php echo $next_product['id']; ?>">NEXT</a>
                        </div>
                    </div>
                    <a href="checkout_page_controler.php" class="btn btn-outline-dark">BUY</a>
                </div>
            </div>

            <div class="col-12">
                <p class="card-text p-3">Description: <?php echo $current_product['description']; ?></p>
            </div>

        </div> 
        <!-- end of row -->
    </div>
    <!-- end of container -->

    <!-- RELATED PRODUCT SECTION -->
    <div class="container card mb-3" style="max-width: 992px;">
        <h2 class="mt-3 mb-5">Related Products</h2>
        <div class="row">
            <div class="col-md-4 col-sm-7 mx-auto">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-6">
                            <img src=<?php echo $related_products[$random_item]['img']; ?> class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $related_products[$random_item]['title']; ?></h5>
                                <p class="card-text">Price: <?php echo $related_products[$random_item]['price']; ?>$</p>
                                <a href="./single_product_page_controler.php?id=<?php echo $related_products[$random_item]['id']; ?>" class="btn btn-outline-success position-absolute bottom-0 end-0">SHOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <!-- end of col -->
            <div class="col-md-4 col-sm-7 mx-auto">
                <div class="col col-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-6">
                                <img src=<?php echo $related_products[$random_item_2]['img']; ?> class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $related_products[$random_item_2]['title']; ?></h5>
                                    <p class="card-text">Price: <?php echo $related_products[$random_item_2]['price']; ?>$</p>
                                    <a href="./single_product_page_controler.php?id=<?php echo $related_products[$random_item_2]['id']; ?>" class="btn btn-outline-success position-absolute bottom-0 end-0">SHOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col -->
            <div class="col-md-4 col-sm-7 mx-auto">
                <div class="col col-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-6">
                                <img src=<?php echo $related_products[$random_item_3]['img']; ?> class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $related_products[$random_item_3]['title']; ?></h5>
                                    <p class="card-text">Price: <?php echo $related_products[2]['price']; ?>$</p>
                                    <a href="./single_product_page_controler.php?id=<?php echo $related_products[$random_item_3]['id']; ?>" class="btn btn-outline-success position-absolute bottom-0 end-0">SHOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col -->
        </div> 
          <!-- end of row -->
    </div>
    <!-- end of container -->
</main>