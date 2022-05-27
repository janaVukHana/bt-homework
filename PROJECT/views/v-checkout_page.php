<main class="bg-light py-5 border-bottom border-dark border-5 shadow">
        <div class="container">
            <h1>Checkout Page</h1>

            <div class="row">
              <div class="card shadow col-md-6 p-3 bg-dark text-light">
                  <form action="order_message_controler.php" method="get">
                      <div class="mb-3">
                          <label for="f-name" class="form-label">Name: </label>
                          <input name="f_name" type="text" class="form-control" id="f-name" placeholder="Tell me your first name." required />
                      </div>
                      <div class="mb-3">
                          <label for="l-name" class="form-label">Last Name: </label>
                          <input name="l_name" type="text" class="form-control" id="l-name" placeholder="and your last name." required />
                      </div>
                      <div class="mb-3">
                          <label for="email" class="form-label">Email: </label>
                          <input name="email" type="email" class="form-control" id="email" placeholder="also your email" required />
                      </div>
                      <div class="row">
                          <div class="col-6">
                              <div class="mb-3">
                                  <label for="city" class="form-label">City: </label>
                                  <input name="city" type="text" class="form-control" id="city" placeholder="Where are you from?" required />
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="mb-3">
                                  <label for="phone" class="form-label">Phone: </label>
                                  <input name="phone" type="number" class="form-control" id="phone" placeholder="Your phone number?" required />
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-6">
                              <div class="mb-3">
                                  <label for="street" class="form-label">Street: </label>
                                  <input name="street_and_num" type="text" class="form-control" id="street" placeholder="Street and number goes here." required />
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="mb-3">
                                  <label for="zip" class="form-label">zip: </label>
                                  <input name="zip" type="number" class="form-control" id="zip" placeholder="Your zip number?" required />
                              </div>
                          </div>
                      </div>
                      <div class="mb-3">
                          <label for="comment" class="form-label">Comment: </label>
                          <textarea name="comment" class="form-control" id="comment" rows="3" required></textarea>
                      </div>
                      <div class="form-check">
                          <input name="terms" class="form-check-input" type="checkbox" value="check" id="terms" checked />
                          <label class="form-check-label" for="terms">
                            Agree with our Terms and Privacy
                          </label>
                      </div>
                      <input type="hidden" name="title" value=<?php echo htmlspecialchars($title_as_input_value); ?>>
                      <button class="btn btn-outline-light w-100 mt-3" type="submit">ORDER</button>
                  </form>
              </div><!--end of col-->
              <div class="col-md-6 p-3">
                <div class="card mx-auto mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-6">
                      <img src=<?php echo htmlspecialchars($img); ?> class="img-fluid rounded-start" alt=<?php echo htmlspecialchars($alt); ?> />
                    </div>
                    <div class="col-md-6 bg-dark text-light">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($title); ?></h5>
                        <p class="card-text">Price: <?php echo htmlspecialchars($price); ?></p>
                        <p class="card-text">Quantity: <?php echo htmlspecialchars($quantity); ?></p>
                        <p class="card-text">Total: <?php echo htmlspecialchars($total_price); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!--end of col-->
            </div> <!--end of row-->
                

        </div> <!--end of container-->
         
      </main>