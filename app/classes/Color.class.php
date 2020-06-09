<?php

class ColorClass
{

    // Fetching this->conn connection via intance of this class
    public function __construct($db)
    {
        $this->conn = $db;
    }

    private $_TABLE = "BIKE_COLORS";

  

    function fetchColors(){
    	return $this->conn->select($this->_TABLE, "*", ["ORDER" => ["createdAt" => "DESC"]]);
    }
    
    function getColor($req){
        return $this->conn->get($this->_TABLE, "*", ["id" => $req]);
    }

    function createColor($req){
    	

        $this->conn->insert($this->_TABLE, [
            "colorName" => cleanMe($req["colorName"]),
            "colorCode" => cleanMe($req["colorCode"])
        ]);
        return array("success" => 1,"msg" => 'Color is created successfully!!');
	    
	}

    function editColor($req){
    	$this->conn->update($this->_TABLE, [
            "colorName" => cleanMe($req["colorName"]),
            "colorCode" => cleanMe($req["colorCode"])
        ],[
            "id" => $req["id"] 
        ]);
        return array("success" => 1,"msg" => 'Color is Updated successfully!!');
	  
	}

    function deleteColor($req){
        $this->conn->delete($this->_TABLE, ["id" => cleanMe($req["id"])]);
        return array("success" => 1, "msg" => "Color Deleted Successfully");
    }




// AccountClass EOL
}
