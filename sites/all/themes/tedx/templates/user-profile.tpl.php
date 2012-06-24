<h1><?php print $user_profile['field_first_name'][0]['safe_value'] . ' ' . $user_profile['field_last_name'][0]['safe_value']; ?></h1>
<?php print $user_profile['user_picture']['#markup']; ?>
<h3>About Me</h3>
<p><?php print $user_profile['field_about_me']['safe_value']; ?></p>

<h3>Talk to Me About</h3>
<p><?php print $user_profile['field_about_me']['safe_value']; ?></p>
<hr>
<?php print_r($user_profile); ?>

<?php if (isset($user_profile['field_facebook'][0]['safe_value'])): ?>
    <?php print $user_profile['field_facebook'][0]['safe_value']; ?>
<?php endif; ?>