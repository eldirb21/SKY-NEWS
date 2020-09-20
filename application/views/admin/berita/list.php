<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <div id="content-wrapper">

            <div class="container-fluid">
                <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/beritas/add') ?>"><i class="fas fa-plus"></i> Add News</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Image</th>
                                        <th>Contents</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($beritas as $b) : ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $b->title ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/' . $b->image) ?>" width="300px"
                                                height="200px" />
                                        </td>
                                        <td class="small">
                                            <?php echo substr($b->contents, 0, 120) ?>...
                                        </td>
                                        <td width="250"></i <a
                                                href="<?php echo site_url('admin/beritas/view/' . $b->berita_id) ?>"
                                                class="btn btn-small"><i class="fas fa-search"></a>
                                                <a href="<?php echo site_url('admin/beritas/edit/' . $b->berita_id) ?>"
                                                    class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                <a onclick="deleteConfirm('<?php echo site_url('admin/beritas/delete/' . $b->berita_id) ?>')"
                                                    href="#!" class="btn btn-small text-danger"><i
                                                        class="fas fa-trash"></i>
                                                    Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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