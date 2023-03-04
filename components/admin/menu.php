<?php
function active($currect_page)
{
  $url_array =  explode('/', $_SERVER['REQUEST_URI']);
  $url = end($url_array);
  if ($currect_page == $url) {
    echo 'active'; //class name in css 
  }
}
?>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.php" class="app-brand-link">
      <img src="../img/logo.png" width="175" alt="visit to page">
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1" style="margin-top:20px">
    <!-- Dashboard -->
    <li class="menu-item <?php active('dashboardAdmin.php'); ?>">
      <a href="dashboardAdmin.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Artikel</span>
    </li>

    <li class="menu-item <?php active('postingan.php'); ?> <?php active('addArticle.php'); ?>">
      <a href="postingan.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-box"></i>
        <div data-i18n="Basic">Postingan</div>
      </a>
    </li>
    <li class="menu-item <?php active('komentar.php'); ?>">
      <a href="komentar.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-detail"></i>
        <div data-i18n="Basic">Komentar</div>
      </a>
    </li>
    <li class="menu-item <?php active('tag.php'); ?> <?php active('addTag.php'); ?>">
      <a href="tag.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-crown"></i>
        <div data-i18n="Basic">Tag</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Acara</span>
    </li>

    <li class="menu-item <?php active('program.php'); ?> <?php active('addProgram.php'); ?> ">
      <a href="program.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-table"></i>
        <div data-i18n="Tables">Program</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Autentikasi</span>
    </li>

    <li class="menu-item <?php active('akun.php'); ?> <?php active('addAkun.php'); ?> ">
      <a href="akun.php" class="menu-link">
        <i class="bx bx-cog me-2"></i>
        <div data-i18n="Basic">Setting Akun</div>
      </a>
    </li>

  </ul>
</aside>