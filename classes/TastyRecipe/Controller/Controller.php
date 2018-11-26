<?php

namespace TastyRecipe\Controller;

use TastyRecipe\Integration\ConversationStore;
use TastyRecipe\Model\Entry;
use TastyRecipe\Util\Constants;
use TastyRecipe\Model\Entry_user;

class Controller
{


    private $conversation;
    private $username;

    public function __construct()
    {

        $this->conversation = new ConversationStore();

    }

    public function getUsername()
    {
        return $this->username;
    }

    public function addEntry(Entry $entry,$recipe)
    {
        $this->conversation->addEntry($entry,$recipe);
    }

    public function getConversation($recipe)
    {
        return $this->conversation->getConversation($recipe);
    }

    public function login($username, $password)
    {
        $filename = 'users.txt' ;
        $entries = explode(";\n", file_get_contents($filename));
        for ($i = count($entries)-1; $i >= 0; $i--) {
            $entry = unserialize($entries[$i]);
            if ( $entry instanceof Entry_user and (trim($entry->getUsername()) == $username) and (trim($entry->getPassword()) == $password)) {
               $this->username=$username;
                return true;
            }
        }
        return false;
    }

    public function deleteEntry($timestamp,$recipe)
    {
        $this->conversation->deleteEntry($timestamp,$recipe);
    }

    public function signup($username, $password)
    {
        $filename = 'users.txt';
        $entry = new Entry_user($username, $password);
        file_put_contents($filename, serialize($entry) . ";\n",FILE_APPEND);
    }

    public function logout(){
        $this->username = null;
    }
}