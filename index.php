<?php include 'includes/header.php';?>

<!-- this is how you include css in you pages -->
<style>
<?php include 'style/main.css';?>
<?php include 'style/weeks/homePage.css';?>
<?php include 'style/navBar.css';?>
</style>
<!-- <script>
    let test = '';
    debugger;

</script> -->
<h1>Welcome to David's PHP page</h1>

<nav id='navBar'>
    <label id="navLabel">David</label>
    <a class='navELM' href="#">Week one(disable)</a>
    <a class='navELM' href="WeekTwo/index.php">Week Two</a>
    <a class='navELM' href="WeekThree/index.php">Week 3</a>
    <a class='navELM' href="weekFour/index.php">Week 4</a>
    <a class='navELM' href="#">Week 5</a>
    <a class='navELM' href="#">Week 6</a>
    <a class='navELM' href="#">Week 7</a>
    <a class='navELM' href="#">Week 8</a>
    <a class='navELM' href="#">Week 9</a>
    <a class='navELM' href="#">Week 10</a>
</nav>

<main class='secHolder'>
    <h2>Links to php items</h2>
    <div class="info">
        <label>GitRepo</label>
        <ul>
            <li> 
                <a href="https://github.com/bobthefish29/dpunchak-PHPFALL">GitRepo</a>
            </li>
        </ul>
    </div>

    <div class="info">
        <label>PHP help</label>
        <ol>
            <li><a href='https://www.w3schools.com/php/'>W3 Schools</a></li>
            <li><a href='https://www.php.net/manual/en/filter.filters.php'>PHP Filters</a></li>
            <li><a href='https://github.com/NEIT-DRR/se266-example-code'>Dug's PHP GIT</a></li>
        </ol>
    </div>

    <div class="info">
        <label>Git help</label>
        <ol>
            <li><a href='https://product.hubspot.com/blog/git-and-github-tutorial-for-beginners'>Product hub</a></li>
            <li><a href='https://rogerdudler.github.io/git-guide/'>GitHub</a></li>
            <li><a href='https://git-scm.com/book/en/v2/Git-Basics-Getting-a-Git-Repository'>Git SCM</a></li>
        </ol>
    </div>

    <div class="info">
        <label>Stuff i like</label>
        <ol>
            <li>Playing video games</li>
            <li>Anyting but front end codding</li>
            <li>being a silly billy</li>
        </ol>
    </div>
</main>

</br>
</br>
</br>
</br>

<h3 style="display:flex; justify-content: center;">There is really no style yet<h3>
<p>This page was last changed 10/7/2024</p>

<?php include 'includes/footer.php'; ?>