<?php
class BankAccount
{
    private $balance = 0;
 
    public function getBalance()
    {
        return $this->balance;
    }
 
    protected function setBalance($balance)
    {
        PHPUnit_Framework_Assert::assertTrue($balance >= 0);
 
        $this->balance = $balance;
    }
 
    public function depositMoney($amount)
    {
        PHPUnit_Framework_Assert::assertTrue($amount >= 0);
 
        $this->setBalance($this->getBalance() + $amount);
 
        return $this->getBalance();
    }
 
    public function withdrawMoney($amount)
    {
        PHPUnit_Framework_Assert::assertTrue($amount >= 0);
        PHPUnit_Framework_Assert::assertTrue($this->balance >= $amount);
 
        $this->setBalance($this->getBalance() - $amount);
 
        return $this->getBalance();
    }
}
?>
