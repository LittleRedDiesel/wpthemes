<div class="contact-card">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p><b>Designation:</b> <?php the_field('designation'); ?></p>
  <p><b>First Name:</b> <?php the_field('contact_first_name'); ?></p>
  <p><b>Surname:</b> <?php the_field('contact_surname'); ?></p>
  <p><b>Email address:</b> <a href="mailto:<?php the_field('contact_email_address'); ?>"><?php the_field('contact_email_address'); ?></a></p>
  <p><b>Telephone:</b> <?php the_field('contact_telephone'); ?></p>
  <?php the_content(); ?>
</div>
