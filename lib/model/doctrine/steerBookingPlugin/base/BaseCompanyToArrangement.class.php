<?php

/**
 * BaseCompanyToArrangement
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $company_id
 * @property integer $table_id
 * @property Company $Company
 * @property Arrangement $Arrangement
 * 
 * @method integer              getCompanyId()   Returns the current record's "company_id" value
 * @method integer              getTableId()     Returns the current record's "table_id" value
 * @method Company              getCompany()     Returns the current record's "Company" value
 * @method Arrangement          getArrangement() Returns the current record's "Arrangement" value
 * @method CompanyToArrangement setCompanyId()   Sets the current record's "company_id" value
 * @method CompanyToArrangement setTableId()     Sets the current record's "table_id" value
 * @method CompanyToArrangement setCompany()     Sets the current record's "Company" value
 * @method CompanyToArrangement setArrangement() Sets the current record's "Arrangement" value
 * 
 * @package    booking
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCompanyToArrangement extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('company_to_arrangement');
        $this->hasColumn('company_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('table_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Company', array(
             'local' => 'company_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Arrangement', array(
             'local' => 'table_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}