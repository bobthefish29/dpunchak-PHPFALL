<?php

require_once "./account.php";

class CheckingAccount extends Account 
{
	const OVERDRAW_LIMIT = -200;

	public function withdrawal($amount) 
	{
		// write code here. Return true if withdrawal goes through; false otherwise
		$tempBalance = $this->balance;

		$tempBalance = $tempBalance - $amount;

		if($tempBalance >= self::OVERDRAW_LIMIT){
			//this might need to go, its setting the balance in the function
			$this->balance = $tempBalance;
			return true;
		}
		else{
			return false;
		}
	} // end withdrawal

	//freebie. I am giving you this code.
	public function getAccountDetails() 
	{
		$accountDetails = "<h2>Checking Account</h2>";
		$accountDetails .= parent::getAccountDetails();
		
		return $accountDetails;
	}
}



// The code below runs everytime this class loads and 
// should be commented out after testing.

$checkingFun = new CheckingAccount ('C123', 1000, '12-20-2019');

// $checking = new CheckingAccount ('C123', 1000, '12-20-2019');
// echo $checking->getAccountDetails();
//echo $checkingFun->getAccountDetails();
// $checking->deposit(500);
// echo $checking->getAccountDetails();
// var_dump($checking);


// $checking->withdrawal(300);

// echo $checking->getAccountDetails();
// echo $checking->getStartDate();

// $checking->withdrawal(101);

// echo $checking->getAccountDetails();
    
?>
