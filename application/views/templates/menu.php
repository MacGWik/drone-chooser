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
                <?php if($this->session->userdata('class') == 'admin'){ ?>
                <a class="navbar-brand" href="<?= base_url() ?>admin/dashboard">Aplikasi Sistem Pakar Pemilihan Spesifikasi Drone</a>
                <?php } ?>
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
                    window.location.href = "<?= site_url('login/logout') ?>";
                })
            })
        </script>