 <?php $this->load->view('admin/template/header_link'); ?>

 <body class="hold-transition login-page">
     <div class="login-box">
         <div class="login-logo">
             <h1> <a href="<?= base_url() ?>"><b>Mp Online <br>News</b> Panel</a></h1>
         </div>
         <div class="card">
             <div class="card-body login-card-body">
                 <p class="login-box-msg">Sign in to start your session</p>
                 <?php if ($this->session->userdata('login_error') != '') {
                    ?>
                     <div class="alert alert-danger">
                         <span><?= $this->session->userdata('login_error'); ?></span>
                     </div>
                 <?php

                    }
                    $this->session->unset_userdata('login_error');
                    ?>

                 <form action="<?= base_url('admin/adminlogin') ?>" method="post">
                     <div class="input-group mb-3">
                         <input type="email" name="email" class="form-control" placeholder="Email">
                         <div class="input-group-append">
                             <div class="input-group-text">
                                 <span class="fas fa-envelope"></span>
                             </div>
                         </div>
                     </div>
                     <div class="input-group mb-3">
                         <input type="password" name="password" class="form-control" placeholder="Password">
                         <div class="input-group-append">
                             <div class="input-group-text">
                                 <span class="fas fa-lock"></span>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-8">

                         </div>
                         <!-- /.col -->
                         <div class="col-4">
                             <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                         </div>

                     </div>
                 </form>
             </div>
             <!-- /.login-card-body -->
         </div>
         <h5 class="text-center"> <a href="<= base_url() ?>">BACK TO HOME PAGE</a>
             </h3>
     </div>
     <?php $this->load->view('admin/template/footer_link'); ?>