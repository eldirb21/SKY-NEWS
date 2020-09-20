<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<!-- ========================================================================== -->

<body id="page-top">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <!-- =========================================================================================================== -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/beritas') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <!-- =============================================================================================== -->
                        <form action="<?php echo site_url('admin/beritas/add/') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Title*</label>
                                <input class="form-control <?php echo form_error('title') ? 'is-invalid' : '' ?>" type="text" name="title" placeholder="Berita Title" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('title') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Image</label>
                                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea rows="20" class="form-control rounded-0" id="editor" <?php echo form_error('contents') ? 'is-invalid' : '' ?>" name="contents" placeholder="Contents..."></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('contents') ?>
                                </div>
                            </div>
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>
                    </div>
                    <div class="card-footer small text-muted">
                        * required fields
                    </div>
                </div>
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#editor',
            menubar: false
        });
    </script>
</body>

</html>