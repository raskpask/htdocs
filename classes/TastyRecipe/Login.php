<?php
/**
 * Created by PhpStorm.
 * User: molin
 * Date: 2018-11-21
 * Time: 21:09
 */
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Controller\Controller;
use TastyRecipe\Util\Constants;

class Login extends AbstractRequestHandler{
    private $username;
    private $password;


    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    protected function doExecute()
    {
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        if($contr->login($_POST['username'], $_POST['password'])) {
            $this->addVariable(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
            $this->session->set(Constants::TASTY_ISLOGGEDIN, true);
            $this->addVariable(Constants::TASTY_ISLOGGEDIN, true);
            $this->session->set(Constants::TASTY_CONTR_KEY,$contr);
            return Constants::TASTY_LOGIN_VIEW;
        }
        echo "Wrong username or password";
        return Constants::TASTY_LOGINP_VIEW;

    }
}