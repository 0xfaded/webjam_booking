<?php

/**
 * Arrangement form base class.
 *
 * @method Arrangement getObject() Returns the current form's model object
 *
 * @package    booking
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArrangementForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'number'       => new sfWidgetFormInputText(),
      'shape'        => new sfWidgetFormInputText(),
      'seats'        => new sfWidgetFormInputText(),
      'x'            => new sfWidgetFormInputText(),
      'y'            => new sfWidgetFormInputText(),
      'length'       => new sfWidgetFormInputText(),
      'width'        => new sfWidgetFormInputText(),
      'company_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Company')),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'number'       => new sfValidatorInteger(array('required' => false)),
      'shape'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'seats'        => new sfValidatorInteger(array('required' => false)),
      'x'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'y'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'length'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'width'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'company_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Company', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('arrangement[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Arrangement';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['company_list']))
    {
      $this->setDefault('company_list', $this->object->Company->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveCompanyList($con);

    parent::doSave($con);
  }

  public function saveCompanyList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['company_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Company->getPrimaryKeys();
    $values = $this->getValue('company_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Company', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Company', array_values($link));
    }
  }

}
