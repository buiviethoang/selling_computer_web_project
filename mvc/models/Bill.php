<?php
/**
 * Bill
 */
class Bill {
    private $product_id;  // int
    private $user_name;   //  String
    private $date_bill;   //  String
    private $total_money; // double
    private $quantity;    // int

    public function __construct($product_id, $user_name, $date_bill, $total_money, $quantity) {
        self::setProductID($product_id);
        self::setUsername($user_name);
        self::setDateBill($date_bill);
        self::setTotalMoney($total_money);
        self::setQuantity($quantity);
    }

    public function getProductID(){
        return $this->product_id;
    }

    public function getUsername(){
        return $this->user_name;
    }

    public function getDateBill(){
        return $this->date_bill;
    }

    public function getTotalMoney(){
        return $this->total_money;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setProductID($product_id){
        $this->product_id = $product_id;
    }

    public function setUsername($user_name){
        $this->user_name = $user_name;
    }

    public function setDateBill($date_bill){
        $this->date_bill = $date_bill;
    }

    public function setTotalMoney($total_money){
        $this->total_money = $total_money;
    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
}
