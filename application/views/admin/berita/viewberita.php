<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<!-- =========================================================== -->

<body id="page-top">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <div id="content-wrapper">

            <div class="container-fluid">
                <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/beritas') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="col-md-10 col-md-offset-2" style="justify-content: center;align-self: center;">
                        <h1 style="color: blue; text-decoration: solid;"><strong><?php echo $detail->title ?></strong></h1>
                        <hr>
                        <div class="card mb-3">
                            <img src="<?php echo base_url('upload/' . $detail->image); ?>" class="card-img-top" alt="image." width="60%" style="padding: 10px;">
                            <div class="card-body">
                                <h5 class="card-title"><strong><?php echo $detail->title ?></strong></h5>
                                <p class="card-text"><?php echo $detail->contents; ?></p>
                            </div>
                            <div style="justify-content: end;align-self: flex-end;">
                                <a href="<?php echo site_url('admin/beritas/edit/' . $detail->berita_id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                <a onclick="deleteConfirm('<?php echo site_url('admin/beritas/delete/' . $detail->berita_id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i>
                                    Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
</body>

</html>