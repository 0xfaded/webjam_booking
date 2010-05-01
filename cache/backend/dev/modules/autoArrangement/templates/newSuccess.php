<?php use_helper('I18N', 'Date') ?>
<?php include_partial('arrangement/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Arrangement', array(), 'messages') ?></h1>

  <?php include_partial('arrangement/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('arrangement/form_header', array('arrangement' => $arrangement, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('arrangement/form', array('arrangement' => $arrangement, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('arrangement/form_footer', array('arrangement' => $arrangement, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
