<?php
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Util\Constants;
use TastyRecipe\Model\Entry;

class DelteEntry extends AbstractRequestHandler{

    private $timestamp;

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    protected function doExecute()
    {
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $contr->deleteEntry((integer) $this->timestamp);
        $this->addVariable(Constants::TASTY_ENTRIES_VAR, $contr->getConversation(TRUE));
        $this->addVariable(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
        $this->session->set(Constants::TASTY_CONTR_KEY, $contr);
        return Constants::TASTY_CONVERSATION_VIEW;
    }
}

