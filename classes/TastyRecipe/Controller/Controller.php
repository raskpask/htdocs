<?php

namespace TastyRecipe\Controller;

use TastyRecipe\Integration\ConversationStore;
use TastyRecipe\Integration\UserStore;
use TastyRecipe\Model\Entry;
use TastyRecipe\Model\Entry_user;

class Controller
{

    private $username;
    private $users;

    public function __construct()
    {
        $this->users = new UserStore();
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function addEntry(Entry $entry,$recipe)
    {
        return $this->users->addEntry($entry,$recipe);
    }

    public function getConversation($recipe)
    {
        return $this->users->getConversation($recipe);
    }

    public function login($username, $password)
    {
       if($this->users->login($username,$password)){
       $this->username=$username;
       return true;
    }
    return false;
    }

    public function deleteEntry($timestamp)
    {
        $this->users->deleteEntry($timestamp);
    }

    public function signup($username, $password)
    {
        return $this->users->storeUser($username,password_hash($password, PASSWORD_DEFAULT));
    }

    public function logout(){
        $this->username = null;
    }
}