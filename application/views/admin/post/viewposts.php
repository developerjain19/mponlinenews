<?php $this->load->view('admin/template/header_link'); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('admin/template/header'); ?>

        <?php $this->load->view('admin/template/sidebar'); ?>

        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Posts</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Posts</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Post</th>
                                                <th>Language</th>
                                                <th>Post Type</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Pageviews</th>
                                                <th>Date Added</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if (!empty($posts)) {
                                                $i = 0;
                                                foreach ($posts as $post) {
                                                    $i = $i + 1;
                                                    $lang = getRowById('languages', 'id', $post['lang_id']);
                                                    $category = getRowById('categories', 'id', $post['category_id']);
                                                    $author = getRowById('users', 'id', $post['user_id']);
                                            ?>

                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td><?= $post['title'] ?></td>
                                                        <td><?= $lang[0]['name'] ?></td>
                                                        <td> <?= $post['post_type'] ?></td>
                                                        <td><?= $category[0]['name'] ?></td>
                                                        <td><?= $author[0]['username'] ?></td>
                                                        <td><?= $post['pageviews'] ?></td>
                                                        <td><?= $post['created_at'] ?></td>
                                                        <td class="project-actions text-right" style="min-width: 210px;">
                                                            <a class="btn btn-primary btn-sm" href="#">
                                                                <i class="fas fa-folder">
                                                                </i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info btn-sm" href="#">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger btn-sm" href="#">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr>

                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Post</th>
                                                <th>Language</th>
                                                <th>Post Type</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Pageviews</th>
                                                <th>Date Added</th>
                                                <th>Options</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>