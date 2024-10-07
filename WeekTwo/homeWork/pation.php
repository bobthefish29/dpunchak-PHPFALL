<?php 
include '../../includes/header.php';
// this is adding the functions
include '../../functions.php';
?>

<style>
<?php include '../weekTwoStyle.css'; ?>
</style>

<nav id='navBar'>
    <div><a href="InClass/formDemo.php">Back</a></div>
    <div><a href="../../index.php">Home</a></div>
</nav>

<h1>Label</h1>

<main>
    <main>
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






        <div>
            <h2>Form outPut</h2>

        </div>
    </main>



</main>


<?php include '../../includes/footer.php';?>