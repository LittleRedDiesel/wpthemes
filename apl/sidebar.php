
<nav class="sidenav">
  <div class="sidebar-container">
    <ul class="navbar-nav mt-2 mt-lg-0 list-unstyled components">
    <?php wp_nav_menu(
        array(
          'container'=> false,
          'menu_class'=> '',
          'menu_id'=> 'sideNav',
          'items_wrap'=> '%3$s',
          'exclude' => '26'
        )
      );
      ?>
    </ul>
  </div>

</nav>
