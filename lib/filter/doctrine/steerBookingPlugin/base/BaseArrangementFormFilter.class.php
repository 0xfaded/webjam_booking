<?php

/**
 * Arrangement filter form base class.
 *
 * @package    booking
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArrangementFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'number'       => new sfWidgetFormFilterInput(),
      'shape'        => new sfWidgetFormFilterInput(),
      'seats'        => new sfWidgetFormFilterInput(),
      'x'            => new sfWidgetFormFilterInput(),
      'y'            => new sfWidgetFormFilterInput(),
      'length'       => new sfWidgetFormFilterInput(),
      'width'        => new sfWidgetFormFilterInput(),
      'company_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Company')),
    ));

    $this->setValidators(array(
      'number'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'shape'        => new sfValidatorPass(array('required' => false)),
      'seats'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'x'            => new sfValidatorPass(array('required' => false)),
      'y'            => new sfValidatorPass(array('required' => false)),
      'length'       => new sfValidatorPass(array('required' => false)),
      'width'        => new sfValidatorPass(array('required' => false)),
      'company_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Company', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('arrangement_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addCompanyListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query->leftJoin('r.CompanyToArrangement CompanyToArrangement')
          ->andWhereIn('CompanyToArrangement.company_id', $values);
  }

  public function getModelName()
  {
    return 'Arrangement';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'number'       => 'Number',
      'shape'        => 'Text',
      'seats'        => 'Number',
      'x'            => 'Text',
      'y'            => 'Text',
      'length'       => 'Text',
      'width'        => 'Text',
      'company_list' => 'ManyKey',
    );
  }
}
