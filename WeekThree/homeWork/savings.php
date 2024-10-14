<?php

require_once "./account.php";

class SavingsAccount extends Account 
{
	const zero = 0;

	public function withdrawal($amount) 
	{
		// write code here. Return true if withdrawal goes through; false otherwise
		$tempBalance = $this->balance;
		$tempBalance = $tempBalance - $amount;

		if($tempBalance >= -self::zero){
			//this might need to go, its setting the balance in the function
			$this->balance = $tempBalance;
			return true;
		}
		else{
			return false;
		}
	} // end withdrawal

	public function getAccountDetails() 
	{
		$accountDetails = "<h2>Savings Account</h2>";
		$accountDetails .= parent::getAccountDetails();
		
		return $accountDetails;
	}
	
} // end Savings

// The code below runs everytime this class loads and 
// should be commented out after testing.

$savingsFun = new SavingsAccount('S123', 5000, '03-20-2020');

// $savings->withdrawal(5001);
echo $savingsFun->getAccountDetails();

// $savings->deposit(1000);
// echo $savings->getAccountDetails();

// $savings->withdrawal(999);
// echo $savings->getAccountDetails();

    
?>
