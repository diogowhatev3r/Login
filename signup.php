<?php
include_once "header.php";
?>

<div class="wrapper">
    <section class="signup-form">
        <h2>Signup page</h2>
        <div class="signup-form-form">
            <form action="signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Full name">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" name="submit">Signup</button>

            </form>
        </div>
    </section>

    <?php
    include_once "footer.php";
    ?>