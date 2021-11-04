<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<!-- Heading -->
<?= $this->include('layout/heading') ?>

<section class="container">
  <div class="row">
    <?= $this->include('dashboard/form bobot/perbankan') ?>
    <?= $this->include('dashboard/form bobot/nonPerbankan') ?>
  </div>
</section>
<?php $this->endSection() ?>