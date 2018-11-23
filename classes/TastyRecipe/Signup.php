<?php
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Controller\Controller;
use TastyRecipe\Util\Constants;


class Signup extends AbstractRequestHandler{
    private $username;
    private $password;

    public function setUsername(){
    return $this->username;
    }

    public function setPassword(){
    return $this->password;
    }
    protected function doExecute()
    {
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $contr->signup($_POST['username'], $_POST['password']);
        return Constants::TASTY_LOGIN_VIEW;
    }
}