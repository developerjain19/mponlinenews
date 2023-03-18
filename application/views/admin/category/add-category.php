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
                                <h1 class="m-0">Add Categories</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <a href="<?= base_url('categories'); ?>" class="btn btn-success btn-add-new"><i class="fa fa-bars"></i>Categories</a>
                                </ol>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col-sm-6">
                                <h1 class="m-0">Add Sub-Categories</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <a href="<?= base_url('subcategories'); ?>" class="btn btn-success btn-add-new"><i class="fa fa-bars"></i>Sub-Categories</a>
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
                    <div class="card">
                        <div class="card-body">

                            <form action="" method="post">
                                <div class="box-body">


                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="category name" value="" maxlength="200" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">slug
                                            <small>(slug exp)</small>
                                        </label>
                                        <input type="text" class="form-control" name="name_slug" placeholder="slug" value="">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">description (Meta Tag)</label>
                                        <input type="text" class="form-control" name="description" placeholder="description(meta tag)" value="">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">keywords (Meta Tag)</label>
                                        <input type="text" class="form-control" name="keywords" placeholder="keywords (meta_tag)" value="">
                                    </div>
                                    <?php if ($type == 'parent') : ?>
                                        <div class="form-group">
                                            <label>color</label>
                                            <div class="input-group">
                                                <input type="color" class="form-control" name="color" maxlength="200" placeholder="color" required>
                                                <div class="input-group-addon"><i></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>order</label>
                                            <input type="number" class="form-control" name="category_order" placeholder="order" value="1" min="1" required>
                                        </div>
                                    <?php endif;
                                    if ($type == 'sub') : ?>
                                        <div class="form-group">
                                            <label>Parent category</label>
                                            <select id="categories" class="form-control" name="parent_id" required>
                                                <option value="">select</option>
                                                <?php if (!empty($parentCategories)) :
                                                    foreach ($parentCategories as $item) : ?>
                                                        <option value="<?= $item['id'] ?>"><?= $item['name']; ?></option>
                                                <?php endforeach;
                                                endif; ?>
                                            </select>
                                        </div>
                                    <?php else : ?>
                                        <input type="hidden" name="parent_id" value="0">
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-5 col-xs-12">
                                                <label>Show on menu</label>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-12 col-option">
                                                <input type="radio" id="rb_show_on_menu_1" name="show_on_menu" value="1" class="square-purple" checked>
                                                <label for="rb_show_on_menu_1" class="cursor-pointer">yes</label>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-12 col-option">
                                                <input type="radio" id="rb_show_on_menu_2" name="show_on_menu" value="0" class="square-purple">
                                                <label for="rb_show_on_menu_2" class="cursor-pointer">no</label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($type == 'parent') { ?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-5 col-xs-12">
                                                    <label>show at homepage</label>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-12 col-option">
                                                    <input type="radio" id="rb_show_at_homepage_1" name="show_at_homepage" value="1" class="square-purple" checked>
                                                    <label for="rb_show_at_homepage_1" class="cursor-pointer">yes</label>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-12 col-option">
                                                    <input type="radio" id="rb_show_at_homepage_2" name="show_at_homepage" value="0" class="square-purple">
                                                    <label for="rb_show_at_homepage_2" class="cursor-pointer">no</label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="box-footer">
                                    <?php if ($type == 'parent') : ?>
                                        <button type="submit" class="btn btn-primary pull-right">Add category</button>
                                    <?php else : ?>
                                        <button type="submit" class="btn btn-primary pull-right">Add subcategory</button>
                                    <?php endif; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    </div>
    </div>
    <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>