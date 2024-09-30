<?php
    include 'includes/header.php';

    $name = 'david';
    $score = 50;
?>
<h3>IFS</h3>


<h2>Results</h2>

<?php if($score > 65): ?>
    <!-- Passed -->
    <h3 style = " color:green;">Wow you passed</h3>

<?php else: ?>
    <h3 style = " color:red;">Try again</h3>

<?php endif; ?>



<?php include 'includes/footer.php'; ?>



