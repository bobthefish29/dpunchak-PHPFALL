<?php 
include '../../includes/header.php';
// this is adding the functions
include '../../functions.php';

// filter_input(INPUT_POST, 'name')

// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

$fName = '';
$lName = '';


$married = '';
$birth = '';

$height = '';
$weight = '';
$error = ' ';


if(isset($_POST['submitButton'])){
    $error = '';


    

    // first Name
    if(filter_input(INPUT_POST, 'fName') != ''){
        $fName = filter_input(INPUT_POST, 'fName');
    }else{
        $error .= 'You need a First Name </br></br>';
    }

    // Last Name
    if(filter_input(INPUT_POST, 'lName') != ''){
        $lName = filter_input(INPUT_POST, 'lName');
    }else{
        $error .= 'You need a Last Name </br></br>';
    }

    if(filter_input(INPUT_POST, 'married') != null){
        $married = filter_input(INPUT_POST, 'married');
    }
    else{
        $error .= 'Married needs a value</br></br>';
    }

    //this if for the date
    if(filter_input(INPUT_POST, 'date') != ''){
        if(strtotime(filter_input(INPUT_POST, 'date')) > strtotime(date("Y/m/d"))){
            $error .= 'Date can not be in the future</br></br>';
            $birth = filter_input(INPUT_POST, 'date');
        }else{
            $birth = filter_input(INPUT_POST, 'date');
        }
    }else{
        $error .= 'Date needs a value</br></br>';
    }


    // height
    // check if its an input
    if(filter_input(INPUT_POST, 'height') != ''){
        // checks if its a number
        if(filter_input(INPUT_POST, 'height',FILTER_VALIDATE_INT)){
            // check if it over -0 and if its under 8ft
            if(filter_input(INPUT_POST, 'height') > -0 & filter_input(INPUT_POST, 'height') < 96){
                $height = filter_input(INPUT_POST, 'height');
            }else{
                $error .= 'Height needs a postive number and under 96in (8ft)</br></br>';
                $height = filter_input(INPUT_POST, 'height');
            }
        }else{
            $error .= 'Height needs a number</br></br>';
        }
    }else{
        $error .= 'Height needs a input</br></br>';
    }
    // weight
    // checks if its there
    if(filter_input(INPUT_POST, 'weight') != ''){
        // check if its a number
        if(filter_input(INPUT_POST, 'weight',FILTER_VALIDATE_INT)){
            // check if its over -0 and under 800
            if(filter_input(INPUT_POST, 'weight') > -0 & filter_input(INPUT_POST, 'weight') < 800){
                $weight = filter_input(INPUT_POST, 'weight');
            }else{
                $error .= 'Weight needs a postive number and under 800lb</br></br>';
                $weight = filter_input(INPUT_POST, 'weight');
            }
        }else{
            $error .= 'Weight needs a number</br></br>';
        }
    }else{
        $error .= 'Weight needs a input</br></br>';
    }






}else{
    echo 'First time comming';
    $fName = '';
    $lName = '';


    $married = '';
    $birth = '';

    $height = '';
    $weight = '';
}



?>
<!-- this sesction is just for the nav bar-->
<style>
<?php include '../weekTwoStyle.css'; ?>
</style>
<nav id='navBar'>
    <div><a href="../index.php">Back</a></div>
    <div><a href="../../index.php">Home</a></div>
</nav>


<!-- this is starting the html -->
<h1>Patient Intake Form</h1>


<main>
    <!-- this is the form -->
    <div class='form-wrapper'>
        <form method='post'>
            
            <!-- FName -->
            <div class='form-control'>
                <label for='fName'>First name<label></br>
                <!-- In vlaue you need the = -->
                <input type='textBox' name='fName' value="<?=$fName;?>">
            </div>

            <!-- lName VVVVV -->
            <div class='form-control'>
                <label for='lName'>Last name<label></br>
                <!-- In vlaue you need the = -->
                <input type='textBox' name='lName' value="<?=$lName;?>">
            </div>

            <!-- Married -->
            <div class='form-control'>
                <label>Married<label></br>
                <!-- In vlaue you need the = -->
                <label>Yes</label>
                <input type="radio" name="married" value="yes" <?=($married=='yes') ? "checked" : ""?>>
                <!-- <input type='radio' name='married' value=1> -->
                <label>no</label>
                <input type="radio" name="married" value="no" <?=($married=='no') ? "checked" : ""?>>
                
                <!-- <input type='radio' name='married' value=0 checked> -->
            </div>


            <!-- Birth -->
            <div class='form-control'>
                <label for='birth'>Birth Date<label></br>
                <!-- In vlaue you need the = -->
                <input type='date' name='date' value="<?=$birth;?>">
            </div>

            <!-- height -->
            <div class='form-control'>
                <label for='height'>Height in inch<label></br>
                <!-- In vlaue you need the = -->
                <input type='textBox' name='height' value="<?=$height;?>">
            </div>

            <!-- weight -->
            <div class='form-control'>
                <label for='weight'>Weight in pounds<label></br>
                <!-- In vlaue you need the = -->
                <input type='textBox' name='weight' value="<?=$weight;?>">
            </div>


            <div class='form-submit'>
                <button type='submit' name='submitButton'>Click</button>
            </div>
        </form>
    </div>
    </br>
    <!-- this is the output -->
    <div id='form-output-holder'>
        <h2>Form outPut</h2>
        <div id='form-output'>
            <?php if($error == '') : ?>
                <p>Name: <?=$fName,' ',$lName?></p>
                <p>Married: <?=$married?></p>
                <p>Age: <?=findAge($birth)?></p>
                <p>BMI: <?=$bmi = calBMI(($weight / 2.20462),($height * 0.0254 ))?></p>
                <p>You are: <?=bmiIndex($bmi)?></p>
            <?php else : ?>
                <p style='color:red;'> <?=$error ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>


<?php include '../../includes/footer.php';?>