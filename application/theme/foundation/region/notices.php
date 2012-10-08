<?php if ($this->session->flashdata('error')): ?>
    <div class="alert-box alert">
        <?php echo $this->session->flashdata('error'); ?>
        <a href="" class="close">&times;</a>
    </div>
<?php endif; ?>

<?php if (validation_errors()): ?>
    <div class="alert-box alert">
        <?php echo validation_errors(); ?>
        <a href="" class="close">&times;</a>
    </div>
<?php endif; ?>

<?php if (!empty($messages['error'])): ?>
    <div class="alert-box alert">        
        <?php echo $messages['error']; ?>
        <a href="" class="close">&times;</a>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('notice')): ?>
    <div class="alert-box secondary">
        <?php echo $this->session->flashdata('notice'); ?>
        <a href="" class="close">&times;</a>
    </div>
<?php endif; ?>

<?php if (!empty($messages['notice'])): ?>
    <div class="alert-box secondary">
        <?php echo $messages['notice']; ?>
        <a href="" class="close">&times;</a>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('success')): ?>
    <div class="alert-box success">
        <?php echo $this->session->flashdata('success'); ?>
        <a href="" class="close">&times;</a>
    </div>
<?php endif; ?>

<?php if (!empty($messages['success'])): ?>
    <div class="alert-box success">
        <?php echo $messages['success']; ?>
        <a href="" class="close">&times;</a>
    </div>
<?php endif; ?>