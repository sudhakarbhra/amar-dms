<?php

class AccountClass
{

    // Fetching this->conn connection via intance of this class
    public function __construct($db)
    {
        $this->conn = $db;
    }

    private $_TABLE = "ACCOUNTS";

  

    function fetchUsers(){
    	return $this->conn->select($this->_TABLE, "*", ["ORDER" => ["createdAt" => "DESC"]]);
    }
    
    function getUser($req){
        return $this->conn->get($this->_TABLE, "*", ["id" => $req]);
    }

    function createUser($req){
    	$uName 		= cleanMe($req["userName"]);
	    $fName 		= cleanMe($req["firstName"]);
	    $lName 		= cleanMe($req["lastName"]);
	    $email 		= cleanMe($req["email"]);
	    $phone 		= cleanMe($req["phone"]);
	    $location 	= cleanMe($req["location"]);
	    $password 	= cleanMe($req["password"]);

	    if(empty($uName) || empty($email) || empty($password)){
			return array( "success" => 0,"msg" => 'Username Or Email or Password Missing !!');
		}
		        
		if ($this->conn->has($this->_TABLE,["OR" =>["email"=>$email,"name" => $uName]])) {
	        return array("success" => 0, "msg" => 'Email or Username already exists');
    	} else {

        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $verifytoken = md5(rand(0, 1000));
        $this->conn->insert($this->_TABLE, [
            "name" 		=> $uName,
            "firstName" => $fName,
            "lastName" 	=> $lName,
            "email" 	=> $email,
            "location" 	=> $location,
            "phone" 	=> $phone,
            "password" 	=> $password_hash,
            "passString"=> $password,
            "token" 	=> $verifytoken,
        ]);
        return array("success" => 1,"msg" => 'Your Account is created successfully!!');
	    }
	}

    function editUser($req){
    	$uName 		= cleanMe($req["userName"]);
	    $fName 		= cleanMe($req["firstName"]);
	    $lName 		= cleanMe($req["lastName"]);
	    $email 		= cleanMe($req["email"]);
	    $phone 		= cleanMe($req["phone"]);
	    $location 	= cleanMe($req["location"]);
	    $password 	= cleanMe($req["password"]);

	    if(empty($uName) || empty($email) || empty($password)){
			return array( "success" => 0,"msg" => 'Username Or Email or Password Missing !!');
    	} else {

        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $verifytoken = md5(rand(0, 1000));
        $this->conn->update($this->_TABLE, [
            "name" 		=> $uName,
            "firstName" => $fName,
            "lastName" 	=> $lName,
            "email" 	=> $email,
            "location" 	=> $location,
            "phone" 	=> $phone,
            "password" 	=> $password_hash,
            "passString"=> $password,
            "token" 	=> $verifytoken,
        ],[
        	"id" => $req["id"]
        ]);
        return array("success" => 1,"msg" => 'Your Account is Updated successfully!!');
	    }
	}

    function deleteUser($req){
        $this->conn->delete($this->_TABLE, ["id" => cleanMe($req["id"])]);
        return array("success" => 1, "msg" => "Account Deleted Successfully");
    }




// AccountClass EOL
}
