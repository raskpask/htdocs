<?php
class commentsEntry{
  private $username;
  private $message;
  private $timestamp;
  private $deleted;

  public function __construct($username, $message){
    $this->username = $username;
    $this->message = $message;
    $this->timestamp = time();
    $this->delted = false;
  }

  public function getUsername(){
    return $this->username;
  }

  public function getMessage(){
    return $this->message;
  }
  public getTimestamp(){
    return $this->timestamp;
  }

  public function isDeleted(){
    return $this->deleted;
  }

  public function setDeleted($deleted){
    $this->deleted= $deleted;
  }
}
 ?>
