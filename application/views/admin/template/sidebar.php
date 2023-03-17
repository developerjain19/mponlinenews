<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('admin') ?>" class="brand-link">
    <!-- <img src="<?= base_url('uploads/logo/logo.jpeg') ?>" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light">MP Online News</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/admin/') ?>dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= sessionId('email') ?></a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= base_url('dashboard') ?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('post-format') ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Add Post
            </p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>