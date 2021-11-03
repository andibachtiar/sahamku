<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<div class="container">
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
          <form action="">
            <div class="form-floating">
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
              <label for="email">Email</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
              <label for="pass">password</label>
            </div>
            <div>
              <button type="submit" name="submit" class="btn btn-primary">login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection() ?>