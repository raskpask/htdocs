<?php

/**
 * Class teamEntry
 */
class teamEntry
{
    private $userNamn;
    private $userPaddling;
    private $userSimning;
    private $userCykling;
    private $userLopning;

    public function __construct($userNamn,$userPaddling, $userSimning, $userCykling, $userLopning)
    {
        $this->userNamn = $userNamn;
        $this->userPaddling = $userPaddling;
        $this->userSimning = $userSimning;
        $this->userCykling = $userCykling;
        $this->userLopning = $userLopning;
    }

    /**
     * @return mixed
     */
    public function getUserCykling()
    {
        return $this->userCykling;
    }

    /**
     * @return mixed
     */
    public function getUserPaddling()
    {
        return $this->userPaddling;
    }

    /**
     * @return mixed
     */
    public function getUserLopning()
    {
        return $this->userLopning;
    }

    /**
     * @return mixed
     */
    public function getUserSimning()
    {
        return $this->userSimning;
    }

    /**
     * @return mixed
     */
    public function getUserNamn()
    {
        return $this->userNamn;
    }
}