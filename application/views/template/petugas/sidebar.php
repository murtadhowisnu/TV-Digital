<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <!-- QUERY MENU  -->
                    <?php
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN  `user_access_menu`
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = $role_id
                            ORDER BY `user_access_menu`.`menu_id` ASC
                            ";
                    $menu = $this->db->query($queryMenu)->result_array();
                    ?>
                    <!-- looping menu -->
                    <?php foreach ($menu as $m) : ?>
                        <div class="sb-sidenav-menu-heading">
                            <?= $m['menu']; ?>
                        </div>
                        <!-- siapkan sub-menu sesuai menu -->
                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT *
                                                FROM `user_sub_menu` JOIN `user_menu`
                                                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                               WHERE `user_sub_menu`.`menu_id` = $menuId
                                                 AND `user_sub_menu`.`is_active` = 1
                                                ";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                        <?php foreach ($subMenu as $sm) : ?>
                            <?php if ($title == $sm['title']) { ?>
                                <?php
                                if ($sm['title'] == 'Data Stasiun Radio') { ?>
                                    <a class="nav-link active" href="<?= base_url($sm['url']); ?>" style="display: none;">
                                        <div class="sb-nav-link-icon">
                                            <i class="<?= ($sm['icon']); ?>"></i>&nbsp;&nbsp;<?= ($sm['title']); ?>
                                        </div>
                                    </a>
                                <?php } else { ?>
                                    <a class="nav-link active" href="<?= base_url($sm['url']); ?>">
                                        <div class="sb-nav-link-icon">
                                            <i class="<?= ($sm['icon']); ?>"></i>&nbsp;&nbsp;<?= ($sm['title']); ?>
                                        </div>
                                    </a>
                                <?php }
                                ?>
                            <?php } else if ($sm['url'] == 'admin/data_stasiun') { ?>
                                <a class="nav-link" href="<?= base_url($sm['url']); ?>" style="display: none;">
                                    <div class="sb-nav-link-icon">
                                        <i class="<?= ($sm['icon']); ?>"></i>&nbsp;&nbsp;<?= ($sm['title']); ?>
                                    </div>
                                </a>
                            <?php } else {  ?>
                                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                    <div class="sb-nav-link-icon">
                                        <i class="<?= ($sm['icon']); ?>"></i>&nbsp;&nbsp;<?= ($sm['title']); ?>
                                    </div>
                                </a>
                            <?php } ?>
                        <?php endforeach;  ?>
                    <?php endforeach; ?>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-broadcast-tower"></i>&nbsp;&nbsp;Data Stasiun Radio</div>
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav" style="font-size: 14px;">
                            <a class="nav-link <?php if ($title == 'Data Stasiun Radio') { ?> active <?php } ?>" href="<?= base_url('setting/data_stasiun') ?>">Data Stasiun Radio</a>
                            <a class="nav-link <?php if ($title == 'Data Pemancar') { ?> active <?php } ?>" href="<?= base_url('setting/data_pemancar') ?>">Data Pemancar</a>
                            <a class="nav-link <?php if ($title == 'Data Spesifikasi Pemancar') { ?> active <?php } ?>" href="<?= base_url('setting/data_spek_pemancar') ?>">Data Spek Pemancar</a>
                            <a class="nav-link <?php if ($title == 'Data Spesifikasi Antenna') { ?> active <?php } ?>" href="<?= base_url('setting/data_spek_antenna') ?>">Data Spek Antenna</a>
                            <a class="nav-link <?php if ($title == 'Data Kanal') { ?> active <?php } ?>" href="<?= base_url('setting/data_kanal') ?>">Data Kanal</a>
                        </nav>
                    </div>
                </div>
                <br>
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        Logout
                    </div>
                </a>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?php
                if ($user['role_id'] == 2) {
                ?> <b style="color:white">User</b> <?php
                                                } else if ($user['role_id'] == 3) {
                                                    ?> <b style="color:#1253a3">Petugas</b> <?php
                                                                                        }
                                                                                            ?>
            </div>
        </nav>
    </div>