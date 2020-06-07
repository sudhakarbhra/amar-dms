<?php

class AccountClass
{

    // Fetching Database connection via intance of this class
    public function __construct($db)
    {
        $this->conn = $db;
    }

    private $_STUDENT = "student";
    private $_ACCOUNT = "account";

  
}
