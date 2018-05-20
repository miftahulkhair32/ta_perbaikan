<ul class="nav nav-list">
    <li class="<?php if($judul=='Home'){echo 'active';} ?>">
        <a href="<?= base_url('index.php/home') ?>">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Home </span>
        </a>

        <b class="arrow"></b>
    </li>

    <?php if($this->session->userdata('status')=='menejemen') : ?>
        <li class="<?php if($judul=='Laporan'){echo 'active';} ?>">
            <a href="<?= base_url('index.php/laporan'); ?>">
                <i class="menu-icon fa fa-book"></i>
                Laporan Utama
            </a>
            <b class="arrow"></b>
        </li>

        <li class="<?php if($subjudul=='Pelanggaran'){echo 'active';} ?>">
            <a href="<?= base_url('index.php/pelanggaran/cek') ?>">
                <i class="menu-icon fa fa-book"></i>
                Pelanggaran
            </a>

            <b class="arrow"></b>
        </li>

        <li class="<?php if($subjudul=='Partisipasi'){echo 'active';} ?>">
            <a href="<?= base_url('index.php/partisipasi/cek') ?>">
                <i class="menu-icon fa fa-book"></i>
                Partisipasi
            </a>

            <b class="arrow"></b>
        </li>

        <li class="<?php if($subjudul=='Pencapaian'){echo 'active';} ?>">
            <a href="<?= base_url('index.php/pencapaian/cek') ?>">
                <i class="menu-icon fa fa-book"></i>
                Pencapaian
            </a>

            <b class="arrow"></b>
        </li>

        <li class="<?php if($subjudul=='Artikel'){echo 'active';} ?>">
            <a href="<?= base_url('index.php/artikel/cek') ?>">
                <i class="menu-icon fa fa-book"></i>
                Artikel
            </a>

            <b class="arrow"></b>
        </li>

        <li class="<?php if($subjudul=='Tahfizh'){echo 'active';} ?>">
            <a href="<?= base_url('index.php/hapalan/cek') ?>">
                <i class="menu-icon fa fa-book"></i>
                Tahfizh
            </a>

            <b class="arrow"></b>
        </li>

        <li class="<?php if($subjudul=='Observasi'){echo 'active';} ?>">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-inbox"></i>
                Observasi
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="<?= base_url('index.php/observasi') ?>">
                        <i class="menu-icon fa fa-pencil green"></i>
                        Input Observasi
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="<?= base_url('index.php/observasi/cek') ?>">
                        <i class="menu-icon fa fa-book orange"></i>
                        Laporan Observasi
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    
    <li class="<?php if($judul=='User'){echo 'active';} ?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text"> User </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li>
                <a href="<?= base_url('index.php/user/daftar') ?>">
                    <i class="menu-icon fa fa-user"></i>
                    Tambah User
                </a>

                <b class="arrow"></b>

            </li>

            <li>
                <a href="<?= base_url('index.php/user/cek_daftar') ?>">
                    <i class="menu-icon fa fa-list-alt"></i>
                    Daftar User
                </a>

                <b class="arrow"></b>
                
            </li>
        </ul>
    </li>
    <?php else : ?>
        <li class="<?php if($subjudul=='Partisipasi'){echo 'active';} ?>">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-circle-o"></i>
                <span class="menu-text"> Partisipasi Program </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li>
                    <a href="<?= base_url('index.php/partisipasi') ?>">
                        <i class="menu-icon fa fa-pencil-square-o green"></i>
                        Input
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/partisipasi/edit_san') ?>">
                        <i class="menu-icon fa fa-pencil"></i>
                        Edit
                    </a>
                </li>
            </ul>
        </li>
        <li class="<?php if($subjudul=='Pencapaian'){echo 'active';} ?>">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-circle-o"></i>
                <span class="menu-text"> Pencapaian Target </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li>
                    <a href="<?= base_url('index.php/pencapaian') ?>">
                        <i class="menu-icon fa fa-pencil-square-o green"></i>
                        Input
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/pencapaian/edit_san') ?>">
                        <i class="menu-icon fa fa-pencil"></i>
                        Edit
                    </a>
                </li>
            </ul>
        </li>
        <li class="<?php if($subjudul=='Tahfizh'){echo 'active';} ?>">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-circle-o"></i>
                <span class="menu-text"> Tahfizh </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li>
                    <a href="<?= base_url('index.php/hapalan'); ?>">
                        <i class="menu-icon fa fa-pencil-square-o green"></i>
                        Input
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/hapalan/edit_san'); ?>">
                        <i class="menu-icon fa fa-pencil"></i>
                        Edit
                    </a>
                </li>
            </ul>
        </li>
        <li class="<?php if($subjudul=='Pelanggaran'){echo 'active';} ?>">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-circle-o"></i>
                <span class="menu-text"> Pelanggaran </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li>
                    <a href="<?= base_url('index.php/pelanggaran') ?>">
                        <i class="menu-icon fa fa-pencil-square-o green"></i>
                        Input
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/pelanggaran/edit_san') ?>">
                        <i class="menu-icon fa fa-pencil"></i>
                        Edit
                    </a>
                </li>
            </ul>
        </li>
        <li class="<?php if($subjudul=='Artikel'){echo 'active';} ?>">
            <a href="<?= base_url('index.php/artikel') ?>">
                <i class="menu-icon fa fa-circle-o"></i>
                Artikel
            </a>

            <b class="arrow"></b>
        </li>
        <li>
            <a href="<?= base_url('index.php/user/profil') ?>">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> Profil </span>
            </a>

            <b class="arrow"></b>
        </li>
    <?php endif; ?>
</ul><!-- /.nav-list -->