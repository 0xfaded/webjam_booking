<?php


class BookingTable extends PluginBookingTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Booking');
    }
}