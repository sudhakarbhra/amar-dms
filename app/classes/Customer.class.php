<?php

class CustomerClass
{

    // Fetching this->conn connection via intance of this class
    public function __construct($db)
    {
        $this->conn = $db;
    }

    private $_TABLE = "CUSTOMER";

  

    function fetchCustomers(){
    	return $this->conn->select($this->_TABLE, "*", ["ORDER" => ["createdAt" => "DESC"]]);
    }
    
    function getCustomer($req){
        return $this->conn->get($this->_TABLE, "*", ["id" => cleanMe($req)]);
    }

    function getCustomerInfo($req, $column){
        return $this->conn->get($this->_TABLE, $column, ["id" => cleanMe($req)]);
    }


    function createCustomer($req){
    	

        $this->conn->insert($this->_TABLE, [
            "name" => cleanMe($req["name"]),
            "fatherName" => cleanMe($req["fatherName"]),
            "address1" => cleanMe($req["address1"]),
            "address2" => cleanMe($req["address2"]),
            "area" => cleanMe($req["area"]),
            "city" => cleanMe($req["city"]),
            "pincode" => cleanMe($req["pincode"]),
            "phone" => cleanMe($req["phone"]),
            "createdBy" => cleanMe($req["createdBy"]),
            "phoneAlt" => cleanMe($req["phoneAlt"])

        ]);
        return array("success" => 1,"msg" => 'Customer is created successfully!!');
	    
	}

    function editCustomer($req){
    	$this->conn->update($this->_TABLE, [
            "name" => cleanMe($req["name"]),
            "fatherName" => cleanMe($req["fatherName"]),
            "address1" => cleanMe($req["address1"]),
            "address2" => cleanMe($req["address2"]),
            "area" => cleanMe($req["area"]),
            "city" => cleanMe($req["city"]),
            "pincode" => cleanMe($req["pincode"]),
            "phone" => cleanMe($req["phone"]),
            "phoneAlt" => cleanMe($req["phoneAlt"])

        ],[
            "id" => $req["id"] 
        ]);
        return array("success" => 1,"msg" => 'Customer is Updated successfully!!');
	  
	}

    function deleteCustomer($req){
        $this->conn->delete($this->_TABLE, ["id" => cleanMe($req["id"])]);
        return array("success" => 1, "msg" => "Customer Deleted Successfully");
    }

    function toggleStatus($req){
        $isActive = $this->conn->get($this->_TABLE, "isActive", ["id" => cleanMe($req["id"])]);
        $isActive == 1 ? $isActive = 0 : $isActive = 1;
        $this->conn->update($this->_TABLE, [
            "isActive" => $isActive,
        ], [
            "id" => cleanMe($req["id"]),
        ]);
        return array("success" => 1, "msg" => "Status Changed Successfully", "debug" => $this->conn->log());
    }




// AccountClass EOL
}
