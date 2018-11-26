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
        $this->session->restart();
        if(ctype_alnum($_POST['username']) and ctype_print($_POST['password']) and !empty($_POST['username']) and !empty($_POST['password'])) {
            $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
            $contr->signup($_POST['username'], $_POST['password']);
            return Constants::TASTY_LOGIN_VIEW;
        }
        echo "Only characters and numbers in username!";
        return Constants::TASTY_SIGNUPP_VIEW;
    }
}