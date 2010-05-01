<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($company->getId(), 'company_edit', $company) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $company->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $company->getDescription() ?>
</td>
