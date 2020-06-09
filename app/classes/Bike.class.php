<?php

class BikeClass
{

    // Fetching this->conn connection via intance of this class
    public function __construct($db)
    {
        $this->conn = $db;
    }

    private $_BIKE = "BIKE_MODELS";

  

    function fetchBikes(){
    	return $this->conn->select($this->_BIKE, "*", ["ORDER" => ["createdAt" => "DESC"]]);
    }
    
    function getBike($req){
        return $this->conn->get($this->_BIKE, "*", ["id" => $req]);
    }

    function createBike($req){
    	

        $this->conn->insert($this->_BIKE, [
            "name" => cleanMe($req["name"])
        ]);
        return array("success" => 1,"msg" => 'Bike is created successfully!!');
	    
	}

    function editBike($req){
    	$this->conn->update($this->_BIKE, [
            "name" => cleanMe($req["name"])
        ],[
            "id" => $req["id"] 
        ]);
        return array("success" => 1,"msg" => 'Bike is Updated successfully!!');
	  
	}

    function deleteBike($req){
        $this->conn->delete($this->_BIKE, ["id" => cleanMe($req["id"])]);
        return array("success" => 1, "msg" => "Bike Deleted Successfully");
    }




// AccountClass EOL
}
