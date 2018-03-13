<!-- Banner -->
<section id="banner">
    <header>
        <form method="POST" style="width: 35em; margin: auto; " action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="row 50%">
                <div class="6u 12u(mobilep)">
                    <input type="email" name="email" id="email" placeholder="Email*" required="" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="submit"  value="Join newsletter" />
                </div>
            </div>
        </form>
    </header>
</section>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $email=sanitizeString($_POST["email"]);
    $mailCheck=queryMysql("SELECT mail from subs WHERE mail='$email'");
    if ($email!="" and !$mailCheck->num_rows){
        queryMysql("INSERT INTO subs(mail) VALUES('$email')");
        echo "<p>You have joined our newsletter!</p>";
    }
    else{echo "<p>E-mail address is already in the list!</p>";}
}
?>