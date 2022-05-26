<!-- MAIN CONTENT -->
<main class="bg-light py-5 border-bottom border-dark border-5 shadow">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- MAIN PRODUCT -->
                    
                    <h2 class="mt-3 mb-5">Best of DemoSHOP</h2>
                    <div class="card">
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
                                    <form action="checkout_page_controler.php" method="get">
                                        <div class="mb-3">
                                            <label for="quantity" class="form-label">Quantity: </label>
                                            <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Enter quantity you want." step="1" value="1" min="1" max="5" required />
                                        </div>
                                        <input type="hidden" name="id" value=<?php echo htmlspecialchars($id); ?> />
                                        <button type="submit" class="btn btn-outline-dark">BUY</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 bg-dark text-light">
                                <p class="card-text p-3">Description: <?php echo $current_product['description']; ?></p>
                            </div>
                        </div> <!-- end of row -->
                    </div>
                <!-- END OF MAIN PRODUCT -->
            </div><!-- end of col-8 -->
            <div class="col-lg-4">
                <!-- RELATED PRODUCT SECTION -->
                    <h2 class="mt-3 mb-5">Related Products</h2>
                    <div class="row">
                        <?php  for($i = 0; $i < $num_rand_items; $i++) { ?>
                        <div class="col-lg-12 col-md-4" style="max-width: 300px;">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-12 col-lg-5">
                                        <img src=<?php echo htmlspecialchars($related_products[$random_items[$i]]['img']); ?> class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-12 col-lg-7 bg-dark text-light">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo htmlspecialchars($related_products[$random_items[$i]]['title']); ?></h5>
                                            <p class="card-text">Price: <?php echo htmlspecialchars($related_products[$random_items[$i]]['price']); ?>$</p>
                                            <a href="./single_product_page_controler.php?id=<?php echo htmlspecialchars($related_products[$random_items[$i]]['id']); ?>" class="btn btn-outline-success position-absolute bottom-0 end-0 mb-1 me-2">SHOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of col -->
                        <?php } ?>

                    </div> <!-- end of row -->
            </div><!-- end of col-4 -->
        </div><!-- end of main row -->
    </div><!-- end of main container -->

</main>