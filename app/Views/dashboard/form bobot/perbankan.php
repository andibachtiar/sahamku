<div class="col form-perbankan" id="sahamPerbankan">
  <div class="card">
    <div class="card-header">
      <h2>Bobot Rasio Perbankan</h2>
      <h4>Total Bobot : <span class="total"></span></h3>
    </div>
    <div class="card-body">
      <form action="bobotPerbankan/<?= session()->get('loggedIn') ?>" method="post" class="formBobot">
        <?= csrf_field() ?>
        <div class="form-floating">
          <input type="number" class="form-control <?php validInput('email') ?>" id="car" placeholder="Enter email" name="car" value="<?= $perbankan->car ?>">
          <label for="email">CAR</label>
          <?php feedback('email'); ?>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control <?php validInput('email') ?>" id="nim" placeholder="Enter nim" name="nim" value="<?= $perbankan->nim ?>">
          <label for="pass">NIM</label>
          <?php feedback('password'); ?>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control <?php validInput('email') ?>" id="npm" placeholder="Enter npm" name="npm" value="<?= $perbankan->npm ?>">
          <label for="pass">NPM</label>
          <?php feedback('password'); ?>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control <?php validInput('email') ?>" id="ldr" placeholder="Enter ldr" name="ldr" value="<?= $perbankan->ldr ?>">
          <label for="pass">LDR</label>
          <?php feedback('password'); ?>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control <?php validInput('email') ?>" id="eps" placeholder="Enter eps" name="eps" value="<?= $perbankan->eps ?>">
          <label for="pass">EPS</label>
          <?php feedback('password'); ?>
        </div>
        <div>
          <button type="submit" name="submit" class="btn btn-primary">login</button>
        </div>
      </form>
    </div>
  </div>
</div>