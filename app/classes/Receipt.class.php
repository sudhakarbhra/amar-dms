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

    function getReceiptInfo($req, $column){
        return $this->conn->get($this->_TABLE, $column, ["id" => cleanMe($req)]);
    }
    
    function createReceipt($req){
    	

        $this->conn->insert($this->_TABLE, [
            "userId" => cleanMe($req["userId"]),
            "vehicleModel" => cleanMe($req["vehicleModel"]),
            "vehicleColor" => cleanMe($req["vehicleColor"]),
            "payType" => cleanMe($req["payType"]),
            "vehicleCost" => cleanMe($req["vehicleCost"]),
            "regCharge" => cleanMe($req["regCharge"]),
            "fittings" => cleanMe($req["fittings"]),
            "insurance" => cleanMe($req["insurance"]),
            "discount" => cleanMe($req["discount"]),
            "total" => cleanMe($req["total"]),
            "downPayment" => cleanMe($req["downPayment"]),
            "chequeNo" => cleanMe($req["chequeNo"]),
            "bankName" => cleanMe($req["bankName"]),
            "comment" => cleanMe($req["comment"]),
            "createdBy" => cleanMe($req["createdBy"]),
        ]);
        return array("success" => 1,"msg" => 'Receipt is created successfully!!');
	    
	}

    function editReceipt($req){
    	$this->conn->update($this->_TABLE, [
            "userId" => cleanMe($req["userId"]),
            "vehicleModel" => cleanMe($req["vehicleModel"]),
            "vehicleColor" => cleanMe($req["vehicleColor"]),
            "payType" => cleanMe($req["payType"]),
            "vehicleCost" => cleanMe($req["vehicleCost"]),
            "regCharge" => cleanMe($req["regCharge"]),
            "fittings" => cleanMe($req["fittings"]),
            "insurance" => cleanMe($req["insurance"]),
            "discount" => cleanMe($req["discount"]),
            "total" => cleanMe($req["total"]),
            "downPayment" => cleanMe($req["downPayment"]),
            "chequeNo" => cleanMe($req["chequeNo"]),
            "bankName" => cleanMe($req["bankName"]),
            "comment" => cleanMe($req["comment"]),
            "createdBy" => cleanMe($req["createdBy"]),
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
