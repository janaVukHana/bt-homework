<!-- MAIN CONTENT -->
<main class="container-fluid bg-warning py-5">
          <h1>Demo SHOP</h1>

          <!-- filters -->
          <form action="products_page_controler.php" method="get">
            <div class="row d-flex justify-content-between mb-3">
                <div class="col col-4">
                    <select class="form-select" aria-label="Default select example" name="products" onchange="this.form.submit()">
                        <option <?php echo $selectedRandom ?> value="">Show Random</option>
                        <option <?php echo $selectedLow ?> value="price-asc">Price From Low</option>
                        <option <?php echo $selectedHigh ?> value="price-desc">Price From High</option>
                      </select>
                </div>

                <div class="col col-4">
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
              <div class="col col-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src=<?php echo $product['img']; ?> class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $product['title']; ?></h5>
                          <p class="card-text">Price: <?php echo $product['price']; ?>$</p>
                          <a href="./single_product_page_controler.php?id=<?php echo $product['id']; ?>" class="btn btn-primary position-absolute bottom-0 end-0 mb-1 mr-1">SHOW</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            <?php } ?>
              
              <!-- <div class="col col-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./public/theme/img/dresovi/dres_5.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Dres blabla</h5>
                          <a href="#" class="btn btn-primary position-absolute bottom-0 end-0 mb-1 mr-1">SHOW</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col col-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./public/theme/img/dresovi/dres_5.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Dres blabla</h5>
                          <a href="#" class="btn btn-primary position-absolute bottom-0 end-0 mb-1 mr-1">SHOW</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col col-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./public/theme/img/dresovi/dres_5.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Dres blabla</h5>
                          <a href="#" class="btn btn-primary position-absolute bottom-0 end-0 mb-1 mr-1">SHOW</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col col-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./public/theme/img/dresovi/dres_5.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Dres blabla</h5>
                          <a href="#" class="btn btn-primary position-absolute bottom-0 end-0 mb-1 mr-1">SHOW</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col col-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./public/theme/img/dresovi/dres_5.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Dres blabla</h5>
                          <a href="#" class="btn btn-primary position-absolute bottom-0 end-0 mb-1 mr-1">SHOW</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div> -->
              
              
          </div>

          
      </main>