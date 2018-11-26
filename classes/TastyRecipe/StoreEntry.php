<?php
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Util\Constants;
use TastyRecipe\Model\ENTRY;
use TastyRecipe\Controller\Controller;

class StoreEntry extends AbstractRequestHandler{
    private $message;

    public function setMessage($message){
        $this->message = $message;
    }

    protected function doExecute()
    {
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        if ($contr->getUsername() !== null) {
            $contr->addEntry(new Entry($contr->getUsername(), $_POST['message']), $this->session->get(Constants::TASTY_RECIPE));
            $this->addVariable(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
            $this->session->set(Constants::TASTY_CONTR_KEY, $contr);
            if ($this->session->get(Constants::TASTY_RECIPE) == 0) {
                $this->addVariable(Constants::TASTY_ENTRIES_VAR, $contr->getConversation("0"));
                return Constants::TASTY_RECIPE_VIEW;
            } else
                $this->addVariable(Constants::TASTY_ENTRIES_VAR, $contr->getConversation("1"));
            return Constants::TASTY_MEATBALL_VIEW;
        } else{
            echo "Please login to comment";
            return Constants::TASTY_LOGINP_VIEW;
        }
    }
}