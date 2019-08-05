<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?><?= $this->session->userdata('class') ?>/dashboard">Aplikasi Sistem Pakar Pemilihan Spesifikasi Drone</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('name'); ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a id="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <?php if($this->session->userdata('class') == 'user'){ ?>
                        <li>
                            <a href="<?= base_url() ?>user/dashboard"><i class="fa fa-list fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>user/build"><i class="fa fa-list fa-fw"></i> Daftar Rakitan Tersimpan</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>user/build/create"><i class="fa fa-list fa-fw"></i> Buat Rakitan</a>
                        </li>
                        <?php } ?>
                        <?php if($this->session->userdata('class') == 'admin'){ ?>
                        <li>
                            <a href="<?= base_url() ?>admin/dashboard"><i class="fa fa-list fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Battery Size</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/batterysize">List Battery Size</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/batterysize/create">Create Battery Size</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> FPV Camera Size</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/camsize">List FPV Camera Size</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/camsize/create">Create FPV Camera Size</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> FPV Camera</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/fpvcam">List FPV Camera</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/fpvcam/create">Create FPV Camera</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> ESC Software</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/escsoftware">List ESC Software</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/escsoftware/create">Create ESC Software</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> ESC</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/esc">List ESC</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/esc/create">Create ESC</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> FC Software</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/fcsoftware">List FC Software</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/fcsoftware/create">Create FC Software</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> FC Mount Option</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/fcmountoption">List FC Mount Option</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/fcmountoption/create">Create FC Mount Option</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> FC</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/fc">List FC</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/fc/create">Create FC</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Prop Size</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/propsize">List Prop Size</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/propsize/create">Create Prop Size</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Prop Pitch</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/proppitch">List Prop Pitch</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/proppitch/create">Create Prop Pitch</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Prop</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/prop">List Prop</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/prop/create">Create Prop</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Motor KV</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/motorkv">List Motor KV</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/motorkv/create">Create Motor KV</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Motor Size</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/motorsize">List Motor Size</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/motorsize/create">Create Motor Size</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Motor</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/motor">List Motor</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/motor/create">Create Motor</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Frame Type</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/frametype">List Frame Type</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/frametype/create">Create Frame Type</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Frame</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/frame">List Frame</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/frame/create">Create Frame</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> VTX</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url() ?>admin/vtx">List VTX</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/vtx/create">Create VTX</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <script>
            $("#logout").unbind();
            $("#logout").click(function(){
                $.displayConfirm("Yakin Ingin Logout ?",function(){
                    window.location.href = "<?= site_url($this->session->userdata('class').'/login/logout') ?>";
                })
            })
        </script>