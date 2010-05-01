<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($booking->getId(), 'booking_edit', $booking) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_first_name">
  <?php echo $booking->getFirstName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_last_name">
  <?php echo $booking->getLastName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $booking->getEmail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_phone">
  <?php echo $booking->getPhone() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_seats">
  <?php echo $booking->getSeats() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_arrival">
  <?php echo false !== strtotime($booking->getArrival()) ? format_date($booking->getArrival(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_no_show">
  <?php echo get_partial('booking/list_field_boolean', array('value' => $booking->getNoShow())) ?>
</td>
