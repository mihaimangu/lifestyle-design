<h1>LifeStyle Design General Settings</h1>

<?php settings_errors(); ?>

<form method="post" action="options.php">
    <?php settings_fields('ld-settings-group');  ?>
    <?php do_settings_sections('lifestyle_design'); ?>
    <?php submit_button();  ?>
    
</form>