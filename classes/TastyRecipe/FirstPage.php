<?php
/**
 * Created by PhpStorm.
 * User: molin
 * Date: 2018-11-21
 * Time: 21:06
 */
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Util\Constants;

class FirstPage extends AbstractRequestHandler{
    protected function doExecute()
    {
        $this->session->restart();

        return Constants::TASTY_LOGIN_VIEW;
    }
}