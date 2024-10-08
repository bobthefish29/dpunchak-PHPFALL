<?php 


include '../../includes/header.php';
// this is adding the functions
include '../../functions.php';

$name = '';
$oneNum = '';
$error = '';
$secNum = '';

var_dump($_POST);

if(filter_input(INPUT_POST, 'name') != ''){
    $name = filter_input(INPUT_POST, 'name');
}else{
    $error .= 'Need an input for name </br>';
}


if(filter_input(INPUT_POST, 'firstNum', FILTER_VALIDATE_FLOAT)){
    $oneNum = filter_input(INPUT_POST, 'firstNum');
}else{
    $error .= 'The first Number is not a number </br>';
}


if(filter_input(INPUT_POST, 'secNum', FILTER_VALIDATE_FLOAT)){

    $secNum = filter_input(INPUT_POST, 'secNum', FILTER_VALIDATE_FLOAT);
}
else
{
    // allows to do '+='
    $error .= 'secoend number is not a number </br>';
}

?>


<h1>Amost form</h1>


<main>


    <div style="background-color: black; display:flex; justify-content:center; height:100px; font-size:75px;"><a href="../../index.php">Home</a></div>

    <div class='form-wrapper'>
        <form method='post'>
            <div class='form-control'>
                <label for='name'>Name<label></br>
                <!-- In vlaue you need the = -->
                <input type='textBox' name='name' value="<?=$name;?>">
            </div>
            <div class='form-control'>
                <label>num 1<label>
                <input type='textBox' name='firstNum' value="<?=$oneNum;?>">
            </div>
            <div class='form-control'>
                <label>num 2<label>
                <input type='textBox' name='secNum' value="<?=$secNum;?>">
            </div>
            <div class='form-submit'>
                <button type='submit' name='submitButton'>Click</button>
            </div>
        </form>
    </div>

    </br>
    <h3>Form</h3>
    <p><?=$error;?></p>
    <p>name: <?=$name; ?></p>
    <p>num one: <?=$oneNum; ?></p>
    <p>num two: <?=$secNum; ?></p>
    </br>
    <hr>
    <p>This will brake if you do just come to the page VVVVVVVVvv</p>
    </br>
    <p>total num <?=doAdd($oneNum, $secNum);?> </p>



</main>




<?php include '../../includes/footer.php'; ?>