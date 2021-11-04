<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<!-- Heading -->
<?= $this->include('layout/heading') ?>

<section>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Kode Saham</th>
        <th scope="col">Nama Perusahaan</th>
        <th scope="col">Kategori</th>
        <th scope="col">Sektor Perusahaan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
</section>
<?php $this->endSection() ?>