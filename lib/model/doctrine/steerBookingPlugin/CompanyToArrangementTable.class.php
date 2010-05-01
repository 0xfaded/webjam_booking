<?php


class CompanyToArrangementTable extends PluginCompanyToArrangementTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CompanyToArrangement');
    }
}