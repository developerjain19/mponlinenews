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
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header bg-white">
                                    <h3 class="card-title">Post Details</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputtitle">Title</label>
                                            <input type="text" class="form-control" id="exampleInputtitle" placeholder="Title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Slug <span>(if you leave it blank, it will be generated automatically.)</span></label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Slug" name="slug">
                                        </div>
                                        <div class="form-group">
                                            <label>Summary & Description (Meta Tag)</label>
                                            <textarea class="form-control" rows="3" name="sumarry" placeholder="Summary & Description (Meta Tag)" spellcheck="false"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Keywords<span> (Meta Tag)</span></label>
                                            <input type="text" class="form-control" name="keywords" id="exampleInputEmail1" placeholder="Keywords (Meta Tag)">
                                        </div>
                                        <div class="form-check checkflex">
                                            <label class="form-check-label" for="exampleCheck1">Show Only to Registered Users</label>
                                            <input type="checkbox" class="form-check-input st_check" id="exampleCheck1" name="registerd_users">
                                        </div>
                                        <div class="form-group">
                                            <label>Tags</label>
                                            <textarea class="form-control" rows="3" placeholder="Tags" spellcheck="false" name="tags"></textarea>
                                            <span class="input_note">(Type tag and hit enter)</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Optional URL</label>
                                            <input type="text" class="form-control" name="keywords" id="exampleInputEmail1" placeholder="optional_url" name="optional_url">
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="">
                                        <div class="card-header bg-white">
                                            <h3 class="card-title ">Content</h3><br>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <!-- <label for="customFile">Custom File</label> -->

                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </form>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <!-- Form Element sizes -->
                            <div class="card card-success">
                                <div class="card-header bg-white">
                                    <h3 class="card-title ">Image</h3><br>
                                    <span class="input_note">Main Post Image</span>
                                </div>
                                <div class="card-body">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputtitle2">or Add Image Url</label>
                                        <input type="text" class="form-control" id="exampleInputtitle2" placeholder="or Add Image Url" name="Add Image Url">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputtitle3">Image Description</label>
                                        <input type="text" class="form-control" id="exampleInputtitle3" placeholder="Image Description" name="Add Image Url">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <div class="card card-danger">
                                <div class="card-header bg-white">
                                    <h3 class="card-title ">Additional Images</h3><br>
                                    <span class="input_note">More main images (slider will be active)</span>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <!-- <label for="customFile">Custom File</label> -->

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <div class="card card-danger">
                                <div class="card-header bg-white">
                                    <h3 class="card-title ">Files</h3><br>
                                    <span class="input_note">Downloadable additional files (.pdf, .docx, .zip etc..)</span>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <!-- <label for="customFile">Custom File</label> -->

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="card card-danger">
                                <div class="card-header bg-white">
                                    <h3 class="card-title ">Category</h3><br>
                                    <span class="input_note">Downloadable additional files (.pdf, .docx, .zip etc..)</span>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Language</label>
                                        <select class="form-control">
                                            <option>English</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control">
                                            <option value="">Select a category</option>
                                            <option value="5">खेल</option>
                                            <option value="10">टेक्नोलॉजी</option>
                                            <option value="1">देश</option>
                                            <option value="8">बिजनेस</option>
                                            <option value="3">मध्य प्रदेश</option>
                                            <option value="6">मनोरंजन</option>
                                            <option value="7">राजनीति</option>
                                            <option value="4">राज्य</option>
                                            <option value="2">विदेश</option>
                                            <option value="9">शिक्षा</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Subcategory</label>
                                        <select class="form-control">
                                            <option value="">Select a category</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="card card-danger">
                                <div class="card-header bg-white">
                                    <h3 class="card-title ">Publish</h3><br>
                                </div>
                                <div class="card-body">
                                    <div class="form-check checkflex">
                                        <label class="form-check-label" for="exampleCheck1">Show Only to Registered Users</label>
                                        <input type="checkbox" class="form-check-input st_check" id="exampleCheck1" name="registerd_users">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning text-white">Save as Draft</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>


                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>


        <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>