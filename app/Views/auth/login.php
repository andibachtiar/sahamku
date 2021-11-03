<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<section class="container">
  <div class="row">
    <div class="col-md-7">
      <h1>Analisa Saham LQ45 Terbaik</h1>
      <h3>berdasarkan analisa fundamental perusahaan</h3>
    </div>
    <div class="col-md-5">
      <div class="card">
        <div class="card-head">
          <h2 class="text-center">login</h2>
        </div>
        <div class="card-body">
          <form action="login" method="post">
            <?= csrf_field() ?>
            <div class="form-floating">
              <input type="text" class="form-control <?php validInput('email') ?>" id="email" placeholder="Enter email" name="email" value="<?= old('email') ?>">
              <label for="email">Email</label>
              <?php feedback('email'); ?>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control <?php validInput('email') ?>" id="password" placeholder="Enter password" name="password">
              <label for="pass">password</label>
              <?php feedback('password'); ?>
            </div>
            <div>
              <button type="submit" name="submit" class="btn btn-primary">login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $this->endSection() ?>