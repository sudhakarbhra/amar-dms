<?php

class InvoiceClass
{

    // Fetching this->conn connection via intance of this class
    public function __construct($db)
    {
        $this->conn = $db;
    }

    private $_TABLE = "INVOICES";

  

    function fetchInvoice(){
    	return $this->conn->select($this->_TABLE, "*", ["ORDER" => ["createdAt" => "DESC"]]);
    }  

    function fetchInvoiceByReceiptId($req){
        return $this->conn->select($this->_TABLE, "*", ["ORDER" => ["createdAt" => "DESC"], "receiptId" => $req]);
    }
    
    function getInvoice($req){
        return $this->conn->get($this->_TABLE, "*", ["id" => cleanMe($req)]);
    }

    function getInvoiceInfo($req, $column){
        return $this->conn->get($this->_TABLE, $column, ["id" => cleanMe($req)]);
    }

    function getInvoiceTotal($req){
        return $this->conn->sum($this->_TABLE, "amountReceived", ["receiptId" => $req]);
    }

    function createInvoice($req){
    	

        $this->conn->insert($this->_TABLE, [
            "receiptId"     => cleanMe($req["receiptId"]),
            "createdBy"     => cleanMe($req["createdBy"]),
            "receiptDate"   => cleanMe($req["receiptDate"]),
            "amountReceived"=> cleanMe($req["amountReceived"]),
            "paymentType"   => cleanMe($req["paymentType"]),
            "chequeNo"      => cleanMe($req["chequeNo"]),
            "upiNo"         => cleanMe($req["upiNo"]),
            "bankName"      => cleanMe($req["bankName"]),
            "comment"       => cleanMe($req["comment"])
        ]);
        return array("success" => 1,"msg" => 'Invoice is created successfully!!');
	    
	}

    function editInvoice($req){
    	$this->conn->update($this->_TABLE, [
            "receiptId"     => cleanMe($req["receiptId"]),
            "createdBy"     => cleanMe($req["createdBy"]),
            "receiptDate"   => cleanMe($req["receiptDate"]),
            "amountReceived"=> cleanMe($req["amountReceived"]),
            "paymentType"   => cleanMe($req["paymentType"]),
            "chequeNo"      => cleanMe($req["chequeNo"]),
            "upiNo"         => cleanMe($req["upiNo"]),
            "bankName"      => cleanMe($req["bankName"]),
            "comment"       => cleanMe($req["comment"])
        ],[
            "id" => $req["id"] 
        ]);
        return array("success" => 1,"msg" => 'Invoice is Updated successfully!!');
	  
	}

    function deleteInvoice($req){
        $this->conn->delete($this->_TABLE, ["id" => cleanMe($req["id"])]);
        return array("success" => 1, "msg" => "Invoice Deleted Successfully");
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
