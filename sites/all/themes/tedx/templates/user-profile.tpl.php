<h1><?php print $user_profile['field_first_name'] . ' ' . $user_profile['field_last_name']; ?></h1>
<?php print $user_profile['user_picture']['#markup']; ?>
<h3>About Me</h3>
<p><?php print $user_profile['field_about_me']; ?></p>

<h3>Talk to Me About</h3>
<p><?php print $user_profile['field_about_me']; ?></p>
<hr>
<?php print_r($user_profile); ?>
