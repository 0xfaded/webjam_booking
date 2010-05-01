<?php

/**
 * arrangement module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage arrangement
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArrangementGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'arrangement' : 'arrangement_'.$action;
  }
}
