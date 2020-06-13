<?php

class BikeClass
{

    // Fetching this->conn connection via intance of this class
    public function __construct($db)
    {
        $this->conn = $db;
    }

    private $_TABLE = "BIKE_MODELS";

  

    function fetchBikes(){
    	return $this->conn->select($this->_TABLE, "*", ["ORDER" => ["createdAt" => "DESC"]]);
    }
    
    function getBike($req){
        return $this->conn->get($this->_TABLE, "*", ["id" => $req]);
    }

    function getBikeInfo($req, $column){
        return $this->conn->get($this->_TABLE, $column, ["id" => cleanMe($req)]);
    }

    function createBike($req){
    	

        $this->conn->insert($this->_TABLE, [
            "name" => cleanMe($req["name"]),
            "colors" => json_encode($req["colors"])
        ]);
        return array("success" => 1,"msg" => 'Bike is created successfully!!');
	    
	}

    function editBike($req){
    	$this->conn->update($this->_TABLE, [
            "name" => cleanMe($req["name"]),
            "colors" => json_encode($req["colors"])
        ],[
            "id" => $req["id"] 
        ]);
        return array("success" => 1,"msg" => 'Bike is Updated successfully!!');
	  
	}

    function deleteBike($req){
        $this->conn->delete($this->_TABLE, ["id" => cleanMe($req["id"])]);
        return array("success" => 1, "msg" => "Bike Deleted Successfully");
    }




// AccountClass EOL
}
