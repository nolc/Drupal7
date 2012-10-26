<?php
 //print the variables if needed to allow for individual field theming or breaking them up.
    // print '<pre>';
    // print_r($variables);
    // print '</pre>';

?>

<div class="test-user-login-form-wrapper">

<div class="login-wrapper">

    <h2><?php print render($intro_text); ?></h2>
<span style="color:blue;"><?php print drupal_render($form['name']); ?></span>
<span style="color:blue;"><?php print drupal_render($form['pass']); ?></span>

    <div class="user-links">
        <span  class="passlink"><a href="<?php echo base_path() ?>user/password">Forget your password?</a></span> | <span class="reglink"><a href="<?php echo base_path() ?>user/register">Create an account</a></span>
    </div>

    <?php
     print drupal_render($form['form_build_id']);
     print drupal_render($form['form_id']);
     print drupal_render($form['actions']);
    ?>

</div><!--//login-wrapper-->

    <div class="login-photo">
        <img src="<?php print base_path() . drupal_get_path('theme', 'test')
            . '/logo.png'; ?>"
             alt="Login" title="Login" width='127' height='121' />
    </div>


</div><!--//your-themename-user-login-form-wrapper -->

