<?php

class ReceiptClass
{

    // Fetching this->conn connection via intance of this class
    public function __construct($db)
    {
        $this->conn = $db;
    }

    private $_TABLE = "RECEIPTS";

  

    function fetchReceipts(){
    	return $this->conn->select($this->_TABLE, "*", ["ORDER" => ["createdAt" => "DESC"]]);
    }
    
    function getReceipt($req){
        return $this->conn->get($this->_TABLE, "*", ["id" => cleanMe($req)]);
    }

    function createReceipt($req){
    	

        $this->conn->insert($this->_TABLE, [
            "name" => cleanMe($req["name"])
        ]);
        return array("success" => 1,"msg" => 'Receipt is created successfully!!');
	    
	}

    function editReceipt($req){
    	$this->conn->update($this->_TABLE, [
            "name" => cleanMe($req["name"])
        ],[
            "id" => $req["id"] 
        ]);
        return array("success" => 1,"msg" => 'Receipt is Updated successfully!!');
	  
	}

    function deleteReceipt($req){
        $this->conn->delete($this->_TABLE, ["id" => cleanMe($req["id"])]);
        return array("success" => 1, "msg" => "Receipt Deleted Successfully");
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
