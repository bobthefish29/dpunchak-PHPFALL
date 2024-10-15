<nav>
    <a href="../index.php">Back</a>

</nav>
<?php
    require_once "./checking.php";
    require_once "./savings.php";

    //so this is taking the infromation from the inputs when the page gets posted. SO when a click happends
    $checkingID = filter_input(INPUT_POST, 'checkingID');
    $checkingBal = filter_input(INPUT_POST, 'checkingBal');
    $checkingDate = filter_input(INPUT_POST, 'checkingDate');
    $checking = new CheckingAccount($checkingID,$checkingBal,$checkingDate);
    //for saving
    $savingId = filter_input(INPUT_POST, 'savingId');
    $savingBal = filter_input(INPUT_POST, 'savingBal');
    $savingDate = filter_input(INPUT_POST, 'savingDate');
    $saving = new SavingsAccount($savingId,$savingBal,$savingDate);


    //check to see if anybutton was clicked, else its setting the placeholder values in the else
    if (isset ($_POST['withdrawChecking'])) 
    {
        //check for valed number
        if(filter_input(INPUT_POST, 'checkingWithdrawAmount', FILTER_VALIDATE_FLOAT)){
            //check for postive
            if(filter_input(INPUT_POST, 'checkingWithdrawAmount', FILTER_VALIDATE_FLOAT) >= -0){
                //checks if the value will go under the limit
                if($checking->withdrawal(filter_input(INPUT_POST, 'checkingWithdrawAmount'))){
                    $checkingBal = $checking->getBalance();
                }else{
                    echo "Over the amount in your balance";
                }
            }else{
                echo "Withdraw must be a postive number";
            }
        }else{
            echo "Please put a number in the balance withdraw";
        }
    } 

    else if (isset ($_POST['depositChecking'])) 
    {
        //Check for a valed number
        if(filter_input(INPUT_POST, 'checkingDepositAmount', FILTER_VALIDATE_FLOAT)){
            //check for postive
            if(filter_input(INPUT_POST, 'checkingDepositAmount', FILTER_VALIDATE_FLOAT) >= -0){
                //addes it to the value
                $checkingBal = $checking->deposit(filter_input(INPUT_POST, 'checkingDepositAmount', FILTER_VALIDATE_FLOAT));
            }else{
                echo "Deposet must be a postive number";
            }
        }else{
            echo "Please put a number in the Checking Deposet";
        }
    } 
    else if (isset ($_POST['withdrawSavings'])) 
    {
        //check for valed number
        if(filter_input(INPUT_POST, 'savingsWithdrawAmount', FILTER_VALIDATE_FLOAT)){
            //check for postive
            if(filter_input(INPUT_POST, 'savingsWithdrawAmount', FILTER_VALIDATE_FLOAT) >= -0){
                //checks if the value will go under the limit
                if($saving->withdrawal(filter_input(INPUT_POST, 'savingsWithdrawAmount'))){
                    $savingBal = $saving->getBalance();
                }else{
                    echo "Over the amount in your balance";
                }
            }else{
                echo "Withdraw must be a postive number";
            }
        }else{
            echo "Please put a number in the saving withdraw";
        }
    } 
    else if (isset ($_POST['depositSavings'])) 
    {
        //Check for a valed number
        if(filter_input(INPUT_POST, 'savingsDepositAmount', FILTER_VALIDATE_FLOAT)){
            //check for postive
            if(filter_input(INPUT_POST, 'savingsDepositAmount', FILTER_VALIDATE_FLOAT) >= -0){
                //addes it to the value
                $savingBal = $saving->deposit(filter_input(INPUT_POST, 'savingsDepositAmount', FILTER_VALIDATE_FLOAT));
            }else{
                echo "Deposet must be a postive number";
            }
        }else{
            echo "Please put a number in the Checking Deposet";
        }


    }
    else
    {
        // if its the first time comming this is just setting the values
        // if its your first time comming than this is the values to change
        //this is where the get info would go

        $checkingID = "C123";
        $checkingBal = 1000;
        $checkingDate = "03-20-2020";
        $checking = new CheckingAccount($checkingID,$checkingBal,$checkingDate);
        $savingId = 'S123';
        $savingBal = 5000;
        $savingDate = '03-20-2020';
        $saving = new SavingsAccount($savingId,$savingBal,$savingDate);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <style type="text/css">
        body {
            margin-left: 120px;
            margin-top: 50px;
        }
        .wrapper {
            display: grid;
            grid-template-columns: 300px 300px;
        }
        .account {
            border: 1px solid black;
            padding: 10px;
        }
        .label {
            text-align: right;
            padding-right: 10px;
            margin-bottom: 5px;
        }
        label {
            font-weight: bold;
        }
        input[type=text] {width: 80px;}
        .error {color: red;}
        .accountInner {
            margin-left:10px;margin-top:10px;
        }
    </style>
</head>
<body>

    <form method="post">
        <h1>ATM</h1>
        <div class="wrapper">
            
            <div class="account">
                <?=$checking->getAccountDetails()?>
                <input type="hidden" name="checkingID" value=<?=$checkingID?>>
                <input type="hidden" name="checkingBal" value=<?=$checkingBal?>>
                <input type="hidden" name="checkingDate" value=<?=$checkingDate?>>
                <div class="accountInner">
                    <input type="text" name="checkingWithdrawAmount" value="" />
                    <input type="submit" name="withdrawChecking" value="Withdraw" />
                </div>
                <div class="accountInner">
                    <input type="text" name="checkingDepositAmount" value="" />
                    <input type="submit" name="depositChecking" value="Deposit" /><br />
                </div>
            </div>

            <div class="account">
                <?=$saving->getAccountDetails()?>
                <input type="hidden" name="savingId" value=<?=$savingId?>>
                <input type="hidden" name="savingBal" value=<?=$savingBal?>>
                <input type="hidden" name="savingDate" value=<?=$savingDate?>>
                <div class="accountInner">
                    <input type="text" name="savingsWithdrawAmount" value="" />
                    <input type="submit" name="withdrawSavings" value="Withdraw" />
                </div>
                <div class="accountInner">
                    <input type="text" name="savingsDepositAmount" value="" />
                    <input type="submit" name="depositSavings" value="Deposit" /><br />
                </div>
            </div>
            
        </div>
    </form>
    <div>Last worked on : 10/14/2024 3:10pm</div>
</body>
</html>
