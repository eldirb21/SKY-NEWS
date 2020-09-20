<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'admin/beritas' ? 'active' : '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span>HOME</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/beritas/add') ?>">New Berita</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/beritas') ?>">List Berita</a>
        </div>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Users</span></a>
    </li> -->
</ul>