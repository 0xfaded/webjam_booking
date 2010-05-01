<td colspan="3">
  <?php echo __('%%id%% - %%name%% - %%description%%', array('%%id%%' => link_to($company->getId(), 'company_edit', $company), '%%name%%' => $company->getName(), '%%description%%' => $company->getDescription()), 'messages') ?>
</td>
