<?php


class CompanyTable extends PluginCompanyTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Company');
    }
}