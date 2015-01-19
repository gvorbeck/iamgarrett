<section class="resume">
<?php
// Skills
if ( have_rows( 'skills' ) ) {
  echo '<div class="resume--section resume--skills">';
    echo '<div class="resume--section_image"><h2>skills</h2>' . iamgarrett_svg_skills() . '</div>';
    echo '<div class="resume--section_content">';
      echo '<ul>';
        while ( have_rows( 'skills' ) ) {
          the_row();
          echo '<li>' . get_sub_field('skill') . '</li>';
        }
      echo '</ul>';
    echo '</div>';
  echo '</div>';
}

// Work history
if ( have_rows( 'work_history' ) ) {
  echo '<div class="resume--section resume--work-history">';
    echo '<div class="resume--section_image"><h2>work history</h2>' . iamgarrett_svg_work() . '</div>';
    echo '<div class="resume--section_content">';
      echo '<dl>';
        while ( have_rows( 'work_history' ) ) {
          the_row();
          echo '<dt>' . get_sub_field('company_name') . '</dt>';
          echo '<dd><ul>';
            echo '<li>' . get_sub_field('title') . '</li>';
            echo '<li>' . get_sub_field('start_date') . ' - ' . (get_sub_field('end_date') ? get_sub_field('end_date') : 'current') . '</li>';
            echo '<li>' . get_sub_field('location') . '</li>';
            echo '<li class="description">' . apply_filters( 'the_content', get_sub_field('description') ) . '</li>';
          echo '</ul></dd>';
        }
      echo '</dl>';
    echo '</div>';
  echo '</div>';
}

// Education
if ( have_rows( 'education' ) ) {
  echo '<div class="resume--section resume--education">';
    echo '<div class="resume--section_image"><h2>learning</h2>' . iamgarrett_svg_education() . '</div>';
    echo '<div class="resume--section_content">';
      echo '<dl>';
        while ( have_rows( 'education' ) ) {
          the_row();
          echo '<dt>' . get_sub_field('institution') . '</dt>';
          echo '<dd><ul>';
          echo '<li>' . get_sub_field('receipt') . '</li>';
          echo '<li>' . get_sub_field('start_date') . ' - ' . get_sub_field('end_date') . '</li>';
          echo '</ul></dd>';
        }
      echo '</dl>';
    echo '</div>';
  echo '</div>';
}

// Awards
if ( have_rows( 'awards' ) ) {
  echo '<div class="resume--section resume--awards">';
    echo '<div class="resume--section_image"><h2>awards</h2>' . iamgarrett_svg_award() . '</div>';
    echo '<div class="resume--section_content">';
      echo '<ul>';
        while ( have_rows( 'awards' ) ) {
          the_row();
          echo '<li>' . get_sub_field('award_name_description') . ' - ' . get_sub_field('year') . '</li>';
        }
      echo '</ul>';
    echo '</div>';
  echo '</div>';
}
?>
</section>
