<div class="card border-2">
  <div class="card-header">
    <h2>Bobot Rasio Perbankan</h2>
    <h4>Total Bobot : <span class="total"></span></h3>
  </div>

  <div class="card-body">
    <form action="user/perbankan/<?= user()->id_user ?>" method="post" class="form-data">
      <?= csrf('csrf') ?>
      <div class="form-floating">
        <input type="number" class="form-control" id="car" placeholder="Enter car" value="<?= $perbankan->car ?>">
        <label for="car">CAR</label>
        <?php feedback('car'); ?>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control" id="nim" placeholder="Enter nim" value="<?= $perbankan->nim ?>">
        <label for="nim">NIM</label>
        <?php feedback('nim'); ?>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control" id="npm" placeholder="Enter npm" value="<?= $perbankan->npm ?>">
        <label for="npm">NPM</label>
        <?php feedback('npm'); ?>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control" id="ldr" placeholder="Enter ldr" value="<?= $perbankan->ldr ?>">
        <label for="ldr">LDR</label>
        <?php feedback('ldr'); ?>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control" id="eps" placeholder="Enter eps" value="<?= $perbankan->eps ?>">
        <label for="eps">EPS</label>
        <?php feedback('eps'); ?>
      </div>
      <div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>