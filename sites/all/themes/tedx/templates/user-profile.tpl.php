<h1><?php print $user_profile['field_first_name'][0]['#markup'] . ' ' . $user_profile['field_last_name'][0]['#markup']; ?></h1>
<div style="width:350px;display:inline">
    <?php print $user_profile['user_picture']['#markup']; ?>
</div>
<div style="margin: 2em 0 2em 0">
    <h3>About Me</h3>
    <p><?php print $user_profile['field_about_me'][0]['#markup']; ?></p>

    <h3>Talk to Me About</h3>
    <p><?php print $user_profile['field_talk_to_me_about'][0]['#markup']; ?></p>
</div>
<?php if (isset($user_profile['field_facebook'][0]['#markup'])): ?>
<div style="display:inline">
    <a target="_blank" href="http://www.facebook.com/<?php print $user_profile['field_facebook'][0]['#markup']; ?>">
        <img src="/sites/all/modules/socialmedia/icons/levelten/glossy/32x32/facebook.png"></a>
</div>
<?php endif; ?>

<?php if (isset($user_profile['field_googleplus'][0]['#markup'])): ?>
<div style="display:inline">
    <a target="_blank" href="https://plus.google.com/<?php print $user_profile['field_googleplus'][0]['#markup']; ?>">
        <img src="/sites/all/modules/socialmedia/icons/levelten/glossy/32x32/googleplus.png"></a>
</div>
<?php endif; ?>

<?php if (isset($user_profile['field_linkedin'][0]['#markup'])): ?>
<div style="display:inline">
    <a target="_blank" href="http://www.linkedin.com/in/<?php print $user_profile['field_linkedin'][0]['#markup']; ?>">
        <img src="/sites/all/modules/socialmedia/icons/levelten/glossy/32x32/linkedin.png">
    </a>
</div>
<?php endif; ?>

<?php if (isset($user_profile['field_twitter'][0]['#markup'])): ?>
<div style="display:inline">
    <a target="_blank" href="http://www.twitter.com/<?php print $user_profile['field_twitter'][0]['#markup']; ?>">
        <img src="/sites/all/modules/socialmedia/icons/levelten/glossy/32x32/twitter.png">
    </a>
</div>
<?php endif; ?>

<?php if (isset($user_profile['field_youtubecode'][0]['#markup'])): ?>
<div style="display:inline">
    <a target="_blank" href="http://www.youtube.com/user/<?php print $user_profile['field_youtubecode'][0]['#markup']; ?>">
        <img src="/sites/all/modules/socialmedia/icons/levelten/glossy/32x32/youtube.png">
        &nbsp; Find me on YouTube
    </a>
</div>
<?php endif; ?>