  <!-- Sidebar -->
  <ul class="navbar-nav sidebar sidebar-dark accordion bg-primary" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
          <div class="sidebar-brand-icon">
              <i class="fas fa-tape"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Admin <br>Pengukuran</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider">
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
          <div class="sidebar-heading">
              <?= $m['menu']; ?>
          </div>
          <!-- siapkan sub-menu sesuai menu -->
          <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                               FROM `user_sub_menu` JOIN `user_menu`
                                ON  `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                            ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>
          <?php foreach ($subMenu as $sm) : ?>
              <?php if ($title == $sm['title']) : ?>
                  <li class="nav-item active">
                  <?php else :  ?>
                  <li class="nav-item">
                  <?php endif; ?>
                  <a class=" nav-link pb-0" href="<?= base_url($sm['url']); ?>" <?php if ($sm['title'] == 'Data Stasiun Radio') { ?> data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" <?php } ?>>
                      <i class="<?= ($sm['icon']); ?>"></i>
                      <span><?= ($sm['title']); ?></span>
                  </a>
                  <?php if ($sm['title'] == 'Data Stasiun Radio') { ?>
                      <div id="collapseTwo" class="collapse mt-3" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                          <div class="bg-white py-2 collapse-inner rounded">
                              <a class="collapse-item <?php if ($title == 'Data Stasiun Radio') { ?>
                                 active
                              <?php } ?>" href="<?= base_url('setting/data_stasiun') ?>">Data Stasiun Radio</a>
                              <a class="collapse-item <?php if ($title == 'Data Pemancar') { ?>
                                 active
                              <?php } ?>" href="<?= base_url('setting/data_pemancar') ?>">Data Pemancar</a>
                              <a class="collapse-item <?php if ($title == 'Data Spesifikasi Pemancar') { ?>
                                 active
                              <?php } ?>" href="<?= base_url('setting/data_spek_pemancar') ?>">Data Spek Pemancar</a>
                              <a class="collapse-item <?php if ($title == 'Data Spesifikasi Antenna') { ?>
                                 active
                              <?php } ?>" href="<?= base_url('setting/data_spek_antenna') ?>">Data Spek Antenna</a>
                              <a class="collapse-item <?php if ($title == 'Data Kanal') { ?>
                                 active
                              <?php } ?>" href="<?= base_url('setting/data_kanal') ?>">Data Kanal</a>
                          </div>
                      </div>
                  <?php } ?>
                  </li>
              <?php endforeach;  ?>
              <!-- Divider -->
              <hr class="sidebar-divider mt-3">
          <?php endforeach; ?>
          <!-- Nav Item - Charts -->

          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-fw fa-sign-out-alt"></i>
                  <span>Logout</span>
              </a>
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
  </ul>
  <!-- End of Sidebar -->