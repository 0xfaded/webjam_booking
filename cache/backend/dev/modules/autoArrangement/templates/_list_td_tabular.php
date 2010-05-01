<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($arrangement->getId(), 'arrangement_edit', $arrangement) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_number">
  <?php echo $arrangement->getNumber() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_shape">
  <?php echo $arrangement->getShape() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_seats">
  <?php echo $arrangement->getSeats() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_x">
  <?php echo $arrangement->getX() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_y">
  <?php echo $arrangement->getY() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_length">
  <?php echo $arrangement->getLength() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_width">
  <?php echo $arrangement->getWidth() ?>
</td>
