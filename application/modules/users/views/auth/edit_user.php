<h1><?php echo lang('edit_user_heading'); ?></h1>
<p><?php echo lang('edit_user_subheading'); ?></p>
<div id="infoMessage"><?php echo $message; ?></div>
<?php echo form_open(uri_string(), array('class' => 'form-horizontal')); ?>
<?php echo form_hidden('id', $user->id); ?>
<?php echo form_hidden($csrf); ?>
<!-- FIRST NAME --> 
<div class="control-group">
    <?php echo lang('edit_user_fname_label', 'first_name', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($first_name); ?>
    </div>
</div>
<!-- LAST NAME -->
<div class="control-group">
    <?php echo lang('edit_user_lname_label', 'last_name', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($last_name); ?>
    </div>
</div>
<!-- COMPANY -->
<div class="control-group">
    <?php echo lang('edit_user_company_label', 'company', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($company); ?>
    </div>
</div>
<!-- PHONE --> 
<div class="control-group">
    <?php echo lang('edit_user_phone_label', 'phone', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($phone1); ?>-<?php echo form_input($phone2); ?>-<?php echo form_input($phone3); ?>
    </div>
</div>
<!-- PASSWORD --> 
<div class="control-group">
    <?php echo lang('edit_user_password_label', 'password', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($password); ?>
    </div>
</div>

<div class="control-group">
    <?php echo lang('edit_user_password_confirm_label', 'password_confirm', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo form_input($password_confirm); ?>
    </div>
</div>

<!-- USER GROUPS --> 
<div class="control-group">
    <?php echo lang('edit_user_groups_heading' , 'edit_user_groups_heading' ,array('class' => 'control-label')); ?>
        <div class="controls"> 
<?php foreach ($groups as $group): ?>
    <label class="checkbox">
        <?php
        $gID = $group['id'];
        $checked = null;
        $item = null;
        foreach ($currentGroups as $grp) {
            if ($gID == $grp->id) {
                $checked = ' checked="checked"';
                break;
            }
        }
        ?>

        <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
        <?php echo $group['name']; ?>
    </label>
<?php endforeach ?>
        </div>
</div>
<div class="control-group">
    <div class="controls">
        <button type="submit" class="btn btn-primary"><i class="icon-save"></i> Save User</button>
    </div>
</div>
<?php echo form_close(); ?>
<script>
    CKEDITOR.replace('user_image', {
        customConfig: '<?php echo base_url('assets/js/ckeditor/custom/ckeditor_config.js'); ?>',
        filebrowserBrowseUrl: '<?php echo base_url('file_manager/file_manager/ckeditor'); ?>',
        filebrowserUploadUrl: '<?php echo base_url('file_manager/uploader/add'); ?>'
    });
</script>