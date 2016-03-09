<?php

namespace Admin\Bundle\Entity;




use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class Admin extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}