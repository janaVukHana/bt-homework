   <!-- main content -->
   <div class="album py-5 bg-light">
        <div class="container">

          <div class="courts-container row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <!-- ovde ide php foreach -->
            <?php foreach($products as $product) { ?>
            <div class="single-court col-lg-4 d-flex align-items-stretch">
                <div class="card shadow-sm">
                  <!-- NISAM SIGURAN DA JE OBJECT FIT VALIDNO RESENJE -->
                  <img style="width: 100%; height: 60vh; object-fit:cover;" src=<?php echo htmlspecialchars($product['image']); ?> alt=<?php echo htmlspecialchars($product['name']); ?>>

                  <div class="card-body">
      
                        <p style="margin-top: -13px;">Description: <?php echo htmlspecialchars($product['description']);  ?></p>
                        <p style="margin-top: -13px;">Name: <?php echo htmlspecialchars($product['name']); ?></p>
                        <p style="margin-top: -13px;">Price: <?php echo htmlspecialchars($product['price']); ?> $</p>
                        <p style="margin-top: -13px;">Stock: <?php echo htmlspecialchars($product['stock']); ?></p>
                        <p style="margin-top: -13px;">Barcode: <?php echo htmlspecialchars($product['barcode']); ?></p>
                    
                        <div>
                            <button id=<?php echo htmlspecialchars($product['id']); ?> type="button" class="add-to-cart-btn btn btn-outline-success">Add to cart</button>
                        </div>
                  </div>
                </div>
            </div>  
            <!-- ovde ide endof php foreach -->
            <?php } ?>

          </div>

        </div>
      </div>