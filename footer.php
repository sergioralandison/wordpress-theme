    </div>
    <footer>
      <?php
        wp_nav_menu([
          'theme_location' => 'footer',
          'container' => false,
          'menu_class' => 'navba-nav mr-auto'
        ])
      ?>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>
