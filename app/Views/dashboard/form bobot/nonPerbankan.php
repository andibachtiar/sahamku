<div class="col form-non-perbankan">
  <div class="card">
    <div class="card-header">
      <h2>Bobot Rasio Non Perbankan</h2>
      <h4>Total Bobot : <span class="total"></span></h3>
    </div>
    <div class="card-body">
      <form action="bobotPerbankan/<?= session()->get('loggedIn') ?>" method="post" class="formBobot">
        <?= csrf_field() ?>
        <div class="form-floating">
          <input type="number" class="form-control <?php validInput('email') ?>" id="roa" placeholder="Enter email" name="roa" value="<?= $nonPerbankan->roa ?>">
          <label for="email">ROA</label>
          <?php feedback('email'); ?>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control <?php validInput('email') ?>" id="roe" placeholder="Enter roe" name="roe" value="<?= $nonPerbankan->roe ?>">
          <label for="pass">ROE</label>
          <?php feedback('password'); ?>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control <?php validInput('email') ?>" id="eps" placeholder="Enter npm" name="eps" value="<?= $nonPerbankan->eps ?>">
          <label for="pass">EPS</label>
          <?php feedback('password'); ?>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control <?php validInput('email') ?>" id="eva" placeholder="Enter ldr" name="eva" value="<?= $nonPerbankan->eva ?>">
          <label for="pass">EVA</label>
          <?php feedback('password'); ?>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control <?php validInput('email') ?>" id="tato" placeholder="Enter eps" name="tato" value="<?= $nonPerbankan->tato ?>">
          <label for="pass">TATO</label>
          <?php feedback('password'); ?>
        </div>
        <div>
          <button type="submit" name="submit" class="btn btn-primary">login</button>
        </div>
      </form>
    </div>
  </div>
</div>