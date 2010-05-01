<?php

/**
 * Booking form base class.
 *
 * @method Booking getObject() Returns the current form's model object
 *
 * @package    booking
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBookingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'first_name' => new sfWidgetFormInputText(),
      'last_name'  => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'phone'      => new sfWidgetFormInputText(),
      'seats'      => new sfWidgetFormInputText(),
      'arrival'    => new sfWidgetFormDateTime(),
      'no_show'    => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'first_name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'seats'      => new sfValidatorInteger(array('required' => false)),
      'arrival'    => new sfValidatorDateTime(array('required' => false)),
      'no_show'    => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('booking[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Booking';
  }

}
