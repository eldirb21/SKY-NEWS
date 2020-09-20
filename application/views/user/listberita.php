<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="navbar-collapse collapse order-1 order-md-0 dual-collapse2">
                    <a class=" navbar-nav mr-auto navbar-brand" href="<?php echo base_url('user/berita') ?>">
                        <!-- <img src="< ?php echo base_url('assets/img/' . 'newslogo.jpg'); ?>" width="40" height="20" class="d-inline-block align-top" alt=""> -->
                        Sky News
                    </a>
                </div>
                <div class="mx-auto ">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('user/berita') ?>">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Fitur
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="https://www.cnnindonesia.com/">Maps</a>
                                    <a class="dropdown-item" href="https://www.liputan6.com/">Finance</a>
                                    <a class="dropdown-item" href="https://www.tvonenews.com/">Calculator</a>
                                </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('user/berita/add') ?>"> Add berita</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="https://unsplash.com/s/photos/museum">Galery</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    New
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
                                <a class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Kontak
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="https://web.whatsapp.com/">WhatsApp</a>
                                    <a class="dropdown-item" href="https://mail.google.com/mail/">Email</a>
                                    <a class="dropdown-item" href="https://web.telegram.org/#/im">Telegram</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" style="margin-left: 250px;">
                            <!-- Search form -->
                            <div class="input-group md-form form-sm form-2 pl-0">
                                <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <span class="input-group-text red lighten-3" id="basic-text1"><i
                                            class="fas fa-search text-grey" aria-hidden="true"></i></span>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item dropdown no-arrow" style="margin-left: 150px;">
                            <!-- < ?php foreach ($users as $u) : ?> -->
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Eldir</span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('assets/img/profile/') . "eldir.jpg" ?>"
                                    style="width: 20px; height: 20px;">
                            </a>
                            <!-- < ?php endforeach; ?> -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
            </nav>
            <!-- ============================End of Topbar==================================== -->

            <!-- card container -->
            <div class="container-fluid" style="margin-top: 10px;">
                <div class="row">
                    <?php foreach ($beritas as $i) : ?>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="<?php echo base_url('upload/' . $i->image); ?>" class="card-img-top"
                                height="200px" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"> <?php echo $i->title; ?></h4>
                                <p class="card-text"><?php echo substr($i->contents, 0, 120); ?>...</p>
                                <a href="<?php echo base_url() . 'user/berita/view/' . $i->berita_id ?>"
                                    class=" btn-disabled">
                                    Read
                                    more...</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of ooter -->

    </div>
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>