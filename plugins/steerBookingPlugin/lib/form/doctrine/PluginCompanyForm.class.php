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
//                  ->from('Arrangement a');
//    $arrangements = $query->Execute();

    $this->embedCompanyToArrangement();

    // Embed
    //$profileForm = new ArrangementForm();
    //$this->embedForm("arrangement", $profileForm);
  }

  public function embedCompanyToArrangement()
  {
    foreach($this->getObject()->Arrangements as $arrangement)
    {
      $key = 'company_to_arrangement_'.$arrangement->getId();

//      $company_to_arrangement = new CompanyToArrangement();
//      $company_to_arrangement->setCompanyId($this->getObject()->getId());
//      //$company_to_arrangement->setArrangementId($arrangement->getId());
//
//      $company_to_arrangement_form = new CompanyToArrangementForm($arrangement);
//      //$company_to_arrangement_form->setArrangement($arrangement);
//
//
      $profileForm = new ArrangementForm($arrangement);
      $this->embedForm($key, $profileForm);
      $this->widgetSchema[$key]->setLabel('Table no '.$arrangement->getNumber());
    }
    $profileForm_new = new ArrangementForm();
    $this->embedForm('company_to_arrangement', $profileForm_new);
    $this->widgetSchema['company_to_arrangement']->setLabel('New table');
  }
}