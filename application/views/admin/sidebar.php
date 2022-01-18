<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo base_url('admin/daftaradmin') ?>"><i class="fa fa-users"></i>Admin</a></li>
            <li><a href="<?php echo base_url('berita/daftarberita') ?>"><i class="fa fa-file"></i> <span>Berita</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Galeri</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('galeri/daftarfoto') ?>"><i class="fa fa-file"></i>Foto</a></li>
                    <li><a href="<?php echo base_url('galeri/daftarvideo') ?>"><i class="fa fa-file"></i>Video</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('layanan/daftarpengaduan') ?>"><i class="fa fa-envelope"></i> <span>Pengaduan</span></a></li>
            <li><a href="<?php echo base_url('layanan/daftarsop') ?>"><i class="fa fa-bell"></i> <span>SOP & Regulasi</span></a></li>
            <li><a href="<?php echo base_url('layanan/daftarbahanpokok') ?>"><i class="fa fa-users"></i> <span>Daftar Bahan Pokok</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Laporan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('laporan/cetakpengaduan') ?>"><i class="fa fa-file"></i>Pengaduan</a></li>
                    <li><a href="<?php echo base_url('laporan/cetakbahanpokok') ?>"><i class="fa fa-file"></i>Daftar Bahan Pokok</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>