<?php require view('static/header')?>

    <div class="sign_in card card-1">
      <div class="container-2">
        <form action="" method="post">
        <div class="form-group">
          <label>Name:</label>
          <input type="text" value="<?=post('user_name')?>" class="form-control" name="user_name" placeholder="name" id="name">
        </div>
        <div class="form-group">
          <label>Surname:</label>
          <input type="text" value="<?=post('surname')?>" class="form-control" name="surname" placeholder="Surname" id="Surname">
        </div>
        <div class="form-group">
          <label>Nickname:</label>
          <input type="text" value="<?=post('nickname')?>" class="form-control" name="nickname" placeholder="Nickname" id="ni">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" value="<?=post('email')?>" class="form-control" name="email" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
        </div>
        <div class="form-group">
          <label for="pwd">Password again:</label>
          <input type="password" class="form-control" name="password_again" placeholder="password again" id="pwd">
        </div>
        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Remember me
          </label>
        </div>
        <input type="hidden" name="submit" value="1">
        <button type="submit" class=button><img src="https://img.icons8.com/cotton/30/000000/cat-footprint--v1.png"/></button>
        <?php if ($err = error()): ?>
            <div class="alert alert-danger" role="alert">
                <?=$err?>
            </div>
        <?php endif; ?>
        <?php if ($success = success()): ?>
            <div class="alert alert-success" role="alert">
                <?=$success?>
            </div>
        <?php endif; ?>
        </form>
      </div>
    </div>
<?php require view('static/footer')?>

