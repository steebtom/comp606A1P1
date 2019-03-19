<?php
require "header.php"
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <form action="extra/signupex.php" class="signup-form" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="passwordrepeat" placeholder="Confirm Password">
            <button type="submit" class="btn btn-outline-dark" name="signupbtn">Signup</button>
            </form>
        </section>

    </div>
</main>


<?php
require "footer.php"
?>