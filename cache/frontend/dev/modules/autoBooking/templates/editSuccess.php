<?php use_helper('I18N', 'Date') ?>
<?php include_partial('booking/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Booking', array(), 'messages') ?></h1>

  <?php include_partial('booking/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('booking/form_header', array('booking' => $booking, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('booking/form', array('booking' => $booking, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('booking/form_footer', array('booking' => $booking, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
