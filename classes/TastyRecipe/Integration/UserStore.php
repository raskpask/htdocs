<?php

namespace TastyRecipe\Integration;

use TastyRecipe\Model\Entry_user;

class UserStore{
    public function __construct()
    {
    }

    public function storeUser($username, $password){
        $filename = 'users.txt';
        $entry = new Entry_user($username, $password);
        file_put_contents($filename, serialize($entry) . ";\n",FILE_APPEND);
    }

    public function login($username, $password){
        $filename = 'users.txt' ;
        $entries = explode(";\n", file_get_contents($filename));
        for ($i = count($entries)-1; $i >= 0; $i--) {
            $entry = unserialize($entries[$i]);
            if ( $entry instanceof Entry_user and (trim($entry->getUsername()) == $username) and password_verify($password,trim($entry->getPassword()))) {
                return true;
            }
        }
        return false;
    }
}