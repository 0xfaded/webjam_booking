<?php

/**
 * CompanyToArrangement form base class.
 *
 * @method CompanyToArrangement getObject() Returns the current form's model object
 *
 * @package    booking
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCompanyToArrangementForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'company_id' => new sfWidgetFormInputHidden(),
      'table_id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'company_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'company_id', 'required' => false)),
      'table_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'table_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('company_to_arrangement[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CompanyToArrangement';
  }

}
