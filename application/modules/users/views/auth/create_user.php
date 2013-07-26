<h1><?php echo lang('create_user_heading'); ?></h1>
<p><?php echo lang('create_user_subheading'); ?></p>

<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open("auth/create_user", array('class' => 'form-horizontal')); ?>

<div class="control-group">
    <?php echo lang('create_user_fname_label', 'first_name', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($first_name); ?>
    </div>
</div>

<div class="control-group">
    <?php echo lang('create_user_lname_label', 'first_name', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($last_name); ?>
    </div>
</div>

<div class="control-group">
    <?php echo lang('create_user_company_label', 'company', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($company); ?>
    </div>
</div>

<div class="control-group">
    <?php echo lang('create_user_email_label', 'email', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($email); ?>
    </div>
</div>

<div class="control-group">
    <?php echo lang('create_user_phone_label', 'phone', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($phone1); ?>-<?php echo form_input($phone2); ?>-<?php echo form_input($phone3); ?>
    </div>
</div>

<div class="control-group">
    <?php echo lang('create_user_password_label', 'password', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($password); ?>
    </div>
</div>

<div class="control-group">
    <?php echo lang('create_user_password_confirm_label', 'password_confirm', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($password_confirm); ?>
    </div>
</div>

<div class="control-group">
    <div class="controls">
        <?php echo form_submit('submit', lang('create_user_submit_btn')); ?>
    </div>
</div>

<?php echo form_close(); ?>

<script>

    // Turn off automatic editor creation first.

    CKEDITOR.replace('user_image', {
        customConfig: '<?php echo base_url('assets/js/ckeditor/custom/ckeditor_config.js'); ?>',
        filebrowserBrowseUrl: '<?php echo base_url('file_manager/file_manager/ckeditor'); ?>',
    });


</script>