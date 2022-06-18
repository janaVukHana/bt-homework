
<!-- main content -->
<main class="form-signin w-100 m-auto my-5">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
          <div class="mt-3 mb-3">
              <i class="fa-solid fa-basketball fa-2xl"></i>          
          </div>
          <!-- <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
          <h1 class="h3 mb-3 fw-normal">Please Log In</h1>
          <small class="text-danger"><?php echo htmlspecialchars($systemErrors['court_name_err']); ?></small>
          <div class="form-floating">
            <input type="text" class="form-control" id="court-name" name="court_name" value="<?php echo htmlspecialchars($court_name);?>" placeholder="Court name">
            <label for="court-name">Court name</label>
          </div>
          <small class="text-danger"><?php echo htmlspecialchars($systemErrors['location_err']); ?></small>
          <div class="form-floating">
            <select class="form-select" aria-label="Default select example" name="location">
                <option <?php if($court_location == '') echo 'selected'; ?> disabled value="">Court location</option>
                <option <?php if($court_location == 'detelinara') echo 'selected'; ?> value="detelinara">Detelinara</option>
                <option <?php if($court_location == 'liman') echo 'selected'; ?> value="liman">Liman</option>
                <option <?php if($court_location == 'novo_naselje') echo 'selected'; ?> value="novo_naselje">Novo naselje</option>
                <option <?php if($court_location == 'centar') echo 'selected'; ?> value="centar">Centar</option>
                <option <?php if($court_location == 'grbavica') echo 'selected'; ?> value="grbavica">Grbavica</option>
                <option <?php if($court_location == 'kej') echo 'selected'; ?> value="kej">Kej</option>
            </select>
          </div>
          <small class="text-danger"><?php echo htmlspecialchars($systemErrors['description_err']); ?></small>
          <div class="form-floating">
              <textarea class="form-control" id="description" rows="3" name="description" ><?php echo htmlspecialchars($court_description); ?></textarea>
              <label for="description" class="form-label">Add description</label>
          </div>
          <small class="text-danger"><?php echo htmlspecialchars($systemErrors['file_err']); ?></small>
          <div class="form-floating">
            <input type="file" class="form-control" id="upload" aria-describedby="emailHelp" name="upload">
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit" name="add_new_court">Add New Court</button>
        </form>
      </main>