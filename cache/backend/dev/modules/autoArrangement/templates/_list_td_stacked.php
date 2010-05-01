<td colspan="8">
  <?php echo __('%%id%% - %%number%% - %%shape%% - %%seats%% - %%x%% - %%y%% - %%length%% - %%width%%', array('%%id%%' => link_to($arrangement->getId(), 'arrangement_edit', $arrangement), '%%number%%' => $arrangement->getNumber(), '%%shape%%' => $arrangement->getShape(), '%%seats%%' => $arrangement->getSeats(), '%%x%%' => $arrangement->getX(), '%%y%%' => $arrangement->getY(), '%%length%%' => $arrangement->getLength(), '%%width%%' => $arrangement->getWidth()), 'messages') ?>
</td>
