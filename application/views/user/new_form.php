<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<!-- ========================================================================== -->

<body id="page-top">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse order-1 order-md-0 dual-collapse2">
            <a class=" navbar-nav mr-auto navbar-brand" href="<?php echo base_url('user/berita') ?>">
                <!-- <img src="< ?php echo base_url('assets/img/' . 'newslogo.jpg'); ?>" width="40" height="20" class="d-inline-block align-top" alt=""> -->
                NEWSAPP
            </a>
        </div>
        <div class="mx-auto ">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('user/berita') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fiture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('user/berita/add') ?>"> Add berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://unsplash.com/s/photos/museum">Galery</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            News
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://www.cnnindonesia.com/">CNN</a>
                            <a class="dropdown-item" href="https://www.liputan6.com/">Liputan 6</a>
                            <a class="dropdown-item" href="https://www.tvonenews.com/">TVONE</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kontak
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://web.whatsapp.com/">WhatsApp</a>
                            <a class="dropdown-item" href="https://mail.google.com/mail/">Email</a>
                            <a class="dropdown-item" href="https://web.telegram.org/#/im">Telegram</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown no-arrow" style="margin-left: 650px;">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . 'eldir.jpg' ?>" style="width: 20px; height: 20px;">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- =========================================================================================================== -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('user/berita') ?>"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
        <div class="card-body">
            <!-- =============================================================================================== -->
            <form action="<?php echo site_url('user/berita/add/') ?>" method="post" enctype="multipart/form-data">
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