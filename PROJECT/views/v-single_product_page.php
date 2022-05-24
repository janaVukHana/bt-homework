<!-- MAIN CONTENT -->
<main class="container-fluid bg-warning py-5">  
        <div class="card mx-auto mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src=<?php echo $current_product['img']; ?> class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $current_product['title']; ?></h5>
                  <p class="card-text">Price: <?php echo $current_product['price']; ?></p>
                  <p class="card-text">Brand: <?php echo $current_product['brand']; ?></p>
                  <p class="card-text">Category: <?php echo $current_product['category']; ?></p>
                  <button class="btn btn-dark">BUY</button>
                </div>
              </div>
              <div class="col-md-12">
                <p class="card-text">Description: <?php echo $current_product['description']; ?></p>
              </div>
            </div>
          </div>  
          <div class="row">
              <div class="col col-4 bd-warning border border-danger">Related Product</div>
              <div class="col col-4 bd-warning border border-danger">Related Product</div>
              <div class="col col-4 bd-warning border border-danger">Related Product</div>
          </div>
        <!-- <div class="col col-4">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./theme/img/dresovi/dres_5.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Price: 100$</p>
                            <p class="card-text">Brand: Nike</p>
                            <p class="card-text">Category: rekviziti</p>
    
                            <button class="btn">BUY</button>
    
    
                            <a href="#" class="btn btn-primary position-absolute bottom-0 end-0 mb-1 mr-1">SHOW</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="card-text">Description: Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div> -->
    </main>