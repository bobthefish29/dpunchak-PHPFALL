


<!DOCTYPE html>
<html>


    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <!-- this is the first assigmet for lists -->
        <h1>Hello</h1>
        <h1>this is your daily task</h1>
        <!-- this is the sescond assigment-->

        <?= ucwords('Hello my name is paul') ?>

        <ul>
            <li>
                <strong>Name: <strong><?= $task['title'];?></strong> </strong>
            </li>
            <li>
                <strong>Due: <strong><?= $task['due'];?></strong> </strong>
            </li>
            <li>
                <strong>Assigned To: <strong><?= $task['assigned_to'];?></strong> </strong>
            </li>
            <li>
                <!-- the way this is working is the '?' is the if. SO if the value is false you get incomplete but if its true you get true -->
                <strong>Completed: <strong><?= $task['completed']? 'Completed' : 'Incomplete';?>
            </li>

            <li>
                <!-- the way this is working is the '?' is the if. SO if the value is false you get incomplete but if its true you get true -->
                <strong>Are you having fun: <strong><?= $task['fun']? 'Yes' : 'No';?>
            </li>


        </ul>
    </body>
</html>