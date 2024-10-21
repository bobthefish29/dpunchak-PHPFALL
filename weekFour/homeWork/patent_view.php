<?php
    include '../../includes/header.php';
    include '../../functions.php';

    include 'models/model_patent.php';

    $person = getPerson();
?>

<style>
    <?php include '../../style/navBar.css' ?>
    <?php include '../../style/weeks/four/main.css' ?>
</style>


<nav id="navBar">
    <label id="navLabel">David's</label>
    <a class='navELM' href="../index.php">Back</a>
</nav>
<div>
    <h1>People</h1>
    <div id="newPerson"><a id="newPersonButton" href="patent.php">Add New Person</a></div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First</th>
                <th>Last</th>
                <th>Marrage</th>
                <th>Birth</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($person as $persons):                 
            ?>
                <tr>
                    <td><?= $persons['id']; ?></td>
                    <td><?= $persons['patientFirstName']; ?></td>
                    <td><?= $persons['patientLastName']; ?></td> 
                    <td><?= $persons['patientMarried']; ?></td> 
                    <td><?= $persons['patientBirthDate']; ?></td>       
                </tr>
            <?php endforeach; ?>

        </tbody>


    </table>

</div>



<?php include '../../includes/footer.php'; ?>