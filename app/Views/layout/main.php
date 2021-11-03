<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css') ?>">
  <title>Document</title>
</head>

<body>
  <?= $this->include('layout/navbar') ?>
  <section id="main-section">
    <?= $this->renderSection('content') ?>
  </section>
  <?= $this->include('layout/footer') ?>

  <script src="<?= base_url('/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>