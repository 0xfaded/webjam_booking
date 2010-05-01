<?php

/**
 * PluginCompany form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginCompanyForm extends BaseCompanyForm
{
  public function setup()
  {
    parent::setup();

    unset($this['arrangements_list']);

//    $query = Doctrine_Query::create()
//                  ->from('Arranglement a')
//                  ->addWhere('a.id = ?', $stock_id);
//    $product_stock = $query->fetchOne();

    // Embed
    $profileForm = new ArrangementForm();
    $this->embedForm("arrangement", $profileForm);
  }
}
