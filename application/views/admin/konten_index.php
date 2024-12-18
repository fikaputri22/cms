<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once('css.php') ?>
</head>

<body class=" ">
    <div class="wrapper ">
        <div class="sidebar">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="sidebar-wrapper">

                <?php require_once('woi.php') ?>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <?php require_once('nav.php')?>

                <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="tim-icons icon-simple-remove"></i>
                                </button>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Navbar -->
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-xxl flex-grow-1 container-p-y">
                                <?= $this->session->flashdata('alert') ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-4">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter" fdprocessedid="iw7x2p">
                                            Tambah Konten
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document" style="background:#222A42;">
                                                <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">

                                                    <div class="modal-content" style="background:#222A42;">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle">Tambah Konten</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="ax0u6d"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col mb-6">
                                                                    <label for="nameWithTitle" class="form-label">Judul</label>
                                                                    <input type="text" id="nameWithTitle" class="form-control" placeholder="Masukkan Nama" name="judul" required>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-6">
                                                                    <label for="nameWithTitle" class="form-label">Kategori</label>
                                                                    <select name="id_kategori" class="form-control">
                                                                        <?php foreach ($kategori as $aa) { ?>
                                                                            <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-6">
                                                                    <label for="nameWithTitle" class="form-label">Keterangan</label>
                                                                    <textarea name="keterangan" class="form-control"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col mb-6">
                                                                    <label for="nameWithTitle" class="form-label">Foto</label>
                                                                    <input type="file" id="nameWithTitle" class="form-control" placeholder="Masukkan Nama" name="foto" required
                                                                        accept="image/png, image/gif, image/jpeg">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" fdprocessedid="3t093q">Close</button>
                                                            <button type="submit" class="btn btn-primary" fdprocessedid="7zqvqu">Simoan</button>
                                                        </div>
                                                </form>
                                            </div>
                                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <h5 class="card-header">Kategori Konten</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kategori Konten</th>
                                                <th>Tanggal</th>
                                                <th>Kreator</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php $no = 1;
                                            foreach ($konten as $aa) { ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $aa['judul'] ?></td>
                                                    <td><?= $aa['nama_kategori'] ?></td>
                                                    <td><?= $aa['tanggal'] ?></td>
                                                    <td><?= $aa['nama'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url('upload/konten/' . $aa['foto'] ) ?>" target="_blank">
                                                            <span class="tf-icons bx bx-search"></span>Lihat foto
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm btn-danger"
                                                            onClick="return confirm('Apakah anda yakin untuk menghapus ini?')"
                                                            href="<?= base_url('admin/konten/hapus/' . $aa['foto']) ?>">
                                                            <span class="tf-icons bx bx-trash"></span>
                                                        </a>

                                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#konten<?= $no; ?>" fdprocessedid="iw7x2p">
                                                            <span class="tf-icons bx bx-edit"></span>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <form action="<?= base_url('admin/konten/update') ?>" method="post"
                                                                    enctype="multipart/form-data">
                                                                    <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">

                                                                    <div class="modal-content" style="background:#222A42;">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="ax0u6d"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col mb-6">
                                                                                    <label for="nameWithTitle" class="form-label">Judul</label>
                                                                                    <input type="text" id="nameWithTitle" class="form-control" placeholder="Masukkan Nama" name="judul" value="<?= $aa['judul'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col mb-6">
                                                                                    <label for="nameWithTitle" class="form-label">Kategori</label>
                                                                                    <select name="id_kategori" class="form-control">
                                                                                        <?php foreach ($kategori as $uu) { ?>
                                                                                            <option
                                                                                                <?php if ($uu['id_kategori'] == $aa['id_kategori']) {
                                                                                                    echo "selected";
                                                                                                } ?>
                                                                                                value="<?= $uu['id_kategori'] ?>">
                                                                                                <?= $uu['nama_kategori'] ?></option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col mb-6">
                                                                                    <label for="nameWithTitle" class="form-label">Keterangan</label>
                                                                                    <textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col mb-6">
                                                                                    <label for="nameWithTitle" class="form-label">Foto</label>
                                                                                    <input type="file" id="nameWithTitle" class="form-control" placeholder="Masukkan Nama" name="foto" required
                                                                                        accept="image/png, image/gif, image/jpeg">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" fdprocessedid="3t093q">Close</button>
                                                                            <button type="submit" class="btn btn-primary" fdprocessedid="7zqvqu">Simoan</button>
                                                                        </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                            <?php $no++;
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> made with <i class="tim-icons icon-heart-2"></i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
            </footer>
        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-primary active" data-color="primary"></span>
                            <span class="badge filter badge-blue" data-color="blue"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line text-center color-change">
                    <span class="color-label">LIGHT MODE</span>
                    <span class="badge light-badge mr-2"></span>
                    <span class="badge dark-badge ml-2"></span>
                    <span class="color-label">DARK MODE</span>
                </li>
                <li class="button-container">
                    <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
                    <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
                        Documentation
                    </a>
                </li>
                <li class="header-title">Thank you for 95 shares!</li>
                <li class="button-container text-center">
                    <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
                    <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
                    <br>
                    <br>
                    <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </li>
            </ul>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/hay') ?>/assets/js/core/jquery.min.js"></script>
    <script src="<?= base_url('assets/hay') ?>/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url('assets/hay') ?>/assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/hay') ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="<?= base_url('assets/hay') ?>/assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?= base_url('assets/hay') ?>/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('assets/hay') ?>/assets/js/black-dashboard.min.js?v=1.0.0" type="text/javascript"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?= base_url('assets/hay') ?>/assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($navbar.length != 0) {
                        $navbar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
</body>

</html>