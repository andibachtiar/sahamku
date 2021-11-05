<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<!-- Heading -->
<?= $this->include('layout/heading') ?>
<section class="container" id="bobot-rasio">
  <div class="row">
    <div class="col-md-6 form-container">
      <?= $this->include('dashboard/form bobot/perbankan') ?>
    </div>
    <div class="col-md-6 form-container">
      <?= $this->include('dashboard/form bobot/nonPerbankan') ?>
    </div>
  </div>
</section>
<?php $this->endSection() ?>