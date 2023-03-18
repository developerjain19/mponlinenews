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
                            <h1>Add Article</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Article</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <form action="<?= base_url('PostController/addPostPost'); ?>" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card card-primary">
                                    <div class="card-header bg-white">
                                        <h3 class="card-title">Post Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputtitle">Title</label>
                                            <input type="text" class="form-control" id="exampleInputtitle" placeholder="Title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Slug <span>(if you leave it blank, it will be generated automatically.)</span></label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Slug" name="title_slug">
                                        </div>
                                        <div class="form-group">
                                            <label>Summary & Description (Meta Tag)</label>
                                            <textarea class="form-control" rows="3" name="summary" placeholder="Summary & Description (Meta Tag)" spellcheck="false"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Keywords<span> (Meta Tag)</span></label>
                                            <input type="text" class="form-control" name="keywords" id="exampleInputEmail1" placeholder="Keywords (Meta Tag)">
                                        </div>
                                        <!-- <div class="form-check checkflex">
                                            <label class="form-check-label" for="exampleCheck1">Show Only to Registered Users</label>
                                            <input type="checkbox" class="form-check-input st_check" id="exampleCheck1" name="registerd_users">
                                        </div> -->
                                        <div class="form-group">
                                            <label>Tags</label>
                                            <input type="text" name="tags[]" data-role="tagsinput">
                                            <span class="input_note">(Type tag and hit enter)</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Optional URL</label>
                                            <input type="text" class="form-control" name="keywords" id="exampleInputEmail1" placeholder="optional_url" name="optional_url">
                                        </div>

                                    </div>


                                </div>

                                <div class="card card-primary">
                                    <div class="card-header bg-white">
                                        <h3 class="card-title">Content</h3>
                                    </div>
                                    <div class="card-body">
                                        <textarea id="summernote" class="form-control" name="content"></textarea>
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-4">

                                <div class="card card-success">
                                    <div class="card-header bg-white">
                                        <h3 class="card-title ">Image</h3><br>
                                        <span class="input_note">Main Post Image</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input myfile-input" id="readUrl">
                                            <label class="custom-file-label" for="readUrl">Choose file</label>
                                            <img class="image" src="http://via.placeholder.com/700x500" height="50">
                                        </div>

                                        <!-- <div class="form-group">
                                        <br>
                                        <label for="exampleInputtitle2">or Add Image Url</label>
                                        <input type="text" class="form-control" id="exampleInputtitle2" placeholder="or Add Image Url" name="Add Image Url">
                                    </div> -->
                                        <div class="form-group">
                                            <br>
                                            <label for="exampleInputtitle3">Image Description</label>
                                            <input type="text" class="form-control" name="image_description" id="exampleInputtitle3" placeholder="Image Description" name="Add Image Url">
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-danger">
                                    <div class="card-header bg-white">
                                        <h3 class="card-title ">Additional Images</h3><br>
                                        <span class="input_note">More main images (slider will be active)</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="upload__box">
                                                <div class="upload__btn-box">
                                                    <label class="upload__btn">
                                                        <p>Upload images</p>
                                                        <input type="file" name="moreimage[]" multiple="" data-max_length="20" class="upload__inputfile">
                                                    </label>
                                                </div>
                                                <div class="upload__img-wrap2"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card card-danger">
                                    <div class="card-header bg-white">
                                        <h3 class="card-title ">Files</h3><br>
                                        <span class="input_note">Downloadable additional files (.pdf, .docx, .zip etc..)</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <!-- <label for="customFile">Custom File</label> -->

                                            <div class="custom-file">
                                                <input type="file" name="file_id" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-danger">
                                    <div class="card-header bg-white">
                                        <h3 class="card-title ">Category</h3><br>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Language</label>
                                            <select class="form-control" name="lang_id">
                                                <option value="1">English</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category_id" id="category_id">
                                                <option value="">Select a category</option>
                                                <?php
                                                $i = 0;
                                                if (!empty($categories)) {
                                                    foreach ($categories as $row) {
                                                ?>
                                                        <option value=" <?= $row['id']; ?>"> <?= $row['name']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Subcategory</label>
                                            <select class="form-control" name="subcategory_id" id="sub_category_id">
                                                <option value="">Select a category</option>
                                            </select>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="card card-danger">
                                    <div class="card-header bg-white">
                                        <h3 class="card-title ">Publish</h3><br>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check checkflex">
                                            <label class="form-check-label float-left" for="exampleCheck1">Scheduled Post</label>
                                            <input type="checkbox" class="form-check-input st_check float-right" id="cb_scheduled" name="scheduled_post" value="1">
                                        </div>
                                        <div id="date_published_content" class="form-group" style="display:none">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label>Date Published</label>
                                                    <div class='input-group date' id='datetimepicker'>
                                                        <input type='date' class="form-control" name="date_published" id="input_date_published" placeholder="Date Published" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" name="status" value="0" class="btn btn-warning text-white">Save as Draft</button>
                                            <button type="submit" name="status" value="1" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>