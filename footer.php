  <footer class="footer">
    <div class="container">
      <a class="footer__phone" href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a>
      <a class="footer__mail" href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>

</html>