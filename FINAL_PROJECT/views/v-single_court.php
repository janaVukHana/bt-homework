
 <!-- main content -->

 <div class="container px-4 py-5">
        <div class="row align-items-center g-5 py-5">
          <div class="col-7">
            <h1><?php echo htmlspecialchars($court['name']); ?></h1>
            <img src="<?php echo htmlspecialchars($court['file_path']); ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            <div class="row">
              <div class="col-12"><?php echo htmlspecialchars($court['description']); ?></div>
              <p class="col-6">by<?php echo htmlspecialchars($court['creator']); ?></p>
              <p class="col-6"><?php echo htmlspecialchars($court['created_at']); ?></p>
              <p class="col-6">Location: <?php echo htmlspecialchars($court['location']); ?></p>
              <p class="col-6">Rating: <span class="avgStars"></span></p>
            </div>
          </div>
          <div class="col-5">
          <form action="single_court_controler.php?id=<?php echo htmlspecialchars($court_id); ?>" method="POST">
              <div class="mt-3 mb-3">
                  <i class="fa-solid fa-basketball fa-2xl"></i>          
              </div>
                <!-- <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
              <h1 class="h3 mb-3 fw-normal">Add comment. Express yourself</h1>

              <!-- COMMENT TEXTBOX-->
              <?php if($systemErrors['comment_err']) { ?>
                <small class="text-danger"><?php echo $systemErrors['comment_err']; ?></small>
              <?php } ?>
              <div class="mb-3">
                <label for="comment" class="form-label">Add comment</label>
                <textarea class="form-control" id="comment" rows="3" name="comment"><?php echo htmlspecialchars($comment); ?></textarea>
              </div>
              <?php if($systemErrors['rating_err']) { ?>
                <small class="text-danger"><?php echo $systemErrors['rating_err']; ?></small>
              <?php } ?>
              
              <!-- RATING INPUT -->
              <div class="mb-3">
                <label for="rating" class="form-label">Rate court</label>
                <input type="number" class="form-control" id="rating" aria-describedby="emailHelp" name="rating" min="1" max="5" step="1" value="<?php echo htmlspecialchars($rating); ?>">
              </div>
          
              <button class="w-100 btn btn-lg btn-success" type="submit" name="add_comment">Add comment</button>
            </form>
          </div>
        </div>

        <?php foreach($user_comments as $comment) { ?>
            <div class="bg-dark text-white p-1 mb-1">
                <p><?php echo htmlspecialchars($comment['comment']); ?></p>
                <p>Rating: <span class="stars"><?php echo htmlspecialchars($comment['rating']); ?></span></p>
                <p>by <?php echo htmlspecialchars($comment['creator']); ?></p>
            </div>
        <?php } ?>

      </div>