<!-- main content -->
<div class="album py-5 bg-light">
        <div class="container">
    
        <!-- filters -->
        <div class="bg-dark text-white pt-3 px-2 rounded shadow">
          <form action="./courts_page_controler.php" method="GET">
            <div class="row d-flex justify-content-between mb-3">
                <div class="col-md-4 col-sm-12 mb-1">
                    <select class="form-select court-location" aria-label="Default select example" name="court_location" onchange="this.form.submit()">
                        <option <?php if($court_location == 'Newest') echo htmlspecialchars('selected'); ?> value="Newest">Newest</option>
                        <option <?php if($court_location == 'Oldest') echo htmlspecialchars('selected'); ?> value="Oldest">Oldest</option>
                        <option <?php if($court_location == 'Detelinara') echo htmlspecialchars('selected'); ?> value="Detelinara">Detelinara</option>
                        <option <?php if($court_location == 'Liman') echo htmlspecialchars('selected'); ?> value="Liman">Liman</option>
                        <option <?php if($court_location == 'Centar') echo htmlspecialchars('selected'); ?> value="Centar">Centar</option>
                        <option <?php if($court_location == 'Grbavica') echo htmlspecialchars('selected'); ?> value="Grbavica">Grbavica</option>
                        <option <?php if($court_location == 'Novo_naselje') echo htmlspecialchars('selected'); ?> value="Novo_naselje">Novo naselje</option>
                        <option <?php if($court_location == 'Kej') echo htmlspecialchars('selected'); ?> value="Kej">Kej</option>
                      </select>
                </div>
                <!-- <div class="col-md-4 col-sm-12 mb-1">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search term" aria-label="Search term" aria-describedby="button-addon2" name="search_term" value=<?php echo $term; ?>>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
                    </div>
                </div> -->
            </div>
          </form>
        </div>
        <!-- end of filters -->
          

          <div class="courts-container row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($all_courts as $court) { ?>
              <div class="single-court col-lg-4 d-flex align-items-stretch">
                <div class="card shadow-sm">
                  <!-- NISAM SIGURAN DA JE OBJECT FIT VALIDNO RESENJE -->
                  <img style="width: 100%; height: 60vh; object-fit:cover;" src="<?php echo htmlspecialchars($court['file_path']); ?>" alt="<?php echo htmlspecialchars($court['name']); ?> basketball court">

                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="card-text">
                        by <?php echo htmlspecialchars($court['creator']); ?>
                      </p>
                      <p><small>
                      <?php echo htmlspecialchars($court['created_at']); ?>
                      </small></p>
                    </div>
      
                        <p style="margin-top: -13px;">Name: <?php echo htmlspecialchars($court['name']); ?></p>
                        <p style="margin-top: -13px;">Location: <span class="location-name"><?php echo htmlspecialchars($court['location']); ?><span></p>
                        <p style="margin-top: -13px;">Rating: <span class="avg-rating"><?php echo htmlspecialchars($court['avg_rating']); ?><span></p> 
                        <p style="margin-top: -13px;">Comments number: <span class="comment-num"><?php echo htmlspecialchars($court['comments_num']); ?><span></p>
                    
                    <div>
                        <a class="btn btn-outline-success" href="single_court_controler.php?id=<?php echo htmlspecialchars($court['id']); ?>">Show</a>
                      </div>
                  </div>
                </div>
              </div>
            <?php } ?>
            
          </div>
        </div>
      </div>