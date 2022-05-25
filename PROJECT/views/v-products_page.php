<!-- MAIN CONTENT -->
<main class="bg-light py-5 border-bottom border-dark border-5 shadow">
    <div class="container">
        <h1>Demo SHOP</h1>

        <!-- filters -->
        <form action="products_page_controler.php" method="get">
          <div class="row d-flex justify-content-between mb-3">
              <div class="col-md-4 col-sm-12 mb-1">
                  <select class="form-select" aria-label="Default select example" name="products" onchange="this.form.submit()">
                      <option <?php echo $selectedRandom ?> value="">Show Random</option>
                      <option <?php echo $selectedLow ?> value="price-asc">Price From Low</option>
                      <option <?php echo $selectedHigh ?> value="price-desc">Price From High</option>
                    </select>
              </div>

              <div class="col-md-4 col-sm-12 mb-1">
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search term" aria-label="Search term" aria-describedby="button-addon2" name="search_term" value=<?php echo $term; ?>>
                      <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
                  </div>
              </div>
          </div>
        </form>

        <!-- list of products -->
        <div class="row">
          <?php foreach($show_products as $product) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-7">
                      <img src=<?php echo htmlspecialchars($product['img']); ?> class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-5">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h5>
                        <p class="card-text">Price: <?php echo htmlspecialchars($product['price']); ?>$</p>
                        <a href="./single_product_page_controler.php?id=<?php echo htmlspecialchars($product['id']); ?>" class="btn btn-outline-success position-absolute bottom-0 end-0 mb-1 mr-1">SHOW</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          <?php } ?>
              
      </div>
    </div>
          
</main>