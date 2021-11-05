<nav class="navbar">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('/') ?>">LQ45QU</a>
    <div class="row">
      <?php if (loggedIn()) : ?>
        <ul class="navbar-list">
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('/') ?>">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/financial') ?>">Financial Ratio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/bobot') ?>">Bobot Kriteria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/result') ?>">Result</a>
          </li>
          <?php if (inGroup('admin')) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/admin') ?>">Admin</a>
            </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/logout') ?>">Log Out</a>
          </li>
        </ul>
      <?php else : ?>
        <ul class="navbar-list">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('/register') ?>">register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/login') ?>">login</a>
          </li>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>