<?php
/*
 * This file is part of the steerShopPlugin package.
 * (c) 2006-2008 digital Wranglers <steercms@wranglers.com.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * BookingFrontendActions
 *
 * Simple list and display controller for products.
 *
 * @package    steerBookingPlugin
 * @author     Konny Zurcher <konny@wranglers.com.au>
 */
// BaseBookingFrontendActions

class BaseBookingFrontendActions extends sfActions
{
  /**
   * Set the theme for this module actions.
   */
  public function preExecute()
  {
    //SteerCmsThemeTools::setThemeFromDomain($this->getRequest(), $this->getResponse());
  }

  /**
   * Display a paginated list of available products.
   *
   * @param sfWebRequest $request
   */
  public function executeIndex(sfWebRequest $request)
  {
    $query = Doctrine_Query::create()
                  ->from('Arranglement a')
                  //->leftJoin($join, $params)
                  ->addWhere('a.id = ?', $stock_id);
    $arrangements = $query->Execute();

    $query = Doctrine_Query::create()
                  ->from('Booking b');
    $bookings = $query->Execute();

    
  }
}