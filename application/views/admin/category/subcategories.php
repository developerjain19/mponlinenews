<?php $this->load->view('admin/template/header_link'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php $this->load->view('admin/template/header'); ?>

        <?php $this->load->view('admin/template/sidebar'); ?>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">


                        <?php if ($type == 'parent') { ?>
                            <div class="col-sm-6">
                                <h1 class="m-0">Categories</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <a href="<?= base_url('add-category'); ?>" class="btn btn-success btn-add-new"><i class="fa fa-plus"></i>Add Category</a>
                                </ol>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col-sm-6">
                                <h1 class="m-0">Sub-Categories</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <a href="<?= base_url('add-subcategory'); ?>" class="btn btn-success btn-add-new"><i class="fa fa-plus"></i>Add Sub-Category</a>
                                </ol>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <?php if ($msg = $this->session->flashdata('msg')) :
                        $msg_class = $this->session->flashdata('msg_class') ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert  <?= $msg_class; ?>"><?= $msg; ?></div>
                            </div>
                        </div>
                    <?php
                        $this->session->unset_userdata('msg');
                    endif; ?>
                    <div class="card">

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="20">id</th>
                                        <th>name</th>

                                        <th><?= trans('parent_category'); ?></th>
                                        <th>Order 1</th>

                                        <th class="max-width-120"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;

                                    if (!empty($categories)) :
                                        foreach ($categories as $item) :
                                            $i = $i + 1; ?>
                                            <tr>
                                                <td><?= $i  ?></td>
                                                <td><?= $item['name'] ?></td>

                                                <td>

                                                    <?php
                                                    $category = getRowById('categories', 'id', $item['parent_id']);
                                                    if (!empty($category)) {
                                                        echo $category[0]['name'];
                                                    } ?>

                                                </td>
                                                <td><?= $item['category_order'] ?></td>
                                                <td class="project-actions ">

                                                    <a class="btn btn-info btn-sm" href="<?= base_url('edit-subcategory/' . encryptId($item['id'])); ?>">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Are You sure?')" href="<?php echo base_url() . 'admin_Dashboard/subcategories?BdID=' . encryptId($item['id'])  ?>">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </a>
                                                </td>


                                            </tr>
                                    <?php endforeach;
                                    endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </section>
            <!-- /.content -->
        </div>
    </div>

    </div>
    </div>
    <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>