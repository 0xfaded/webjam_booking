<?php

/**
 * company module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage company
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCompanyGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'company' : 'company_'.$action;
  }
}
