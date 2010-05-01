<?php


class ArrangementTable extends PluginArrangementTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Arrangement');
    }
}