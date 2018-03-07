<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Study Helper</title>
    <meta name="description" content="Zarejestruj się na Study helper">
    <meta name="author" content="Albus">

    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,700&amp;subset=latin-ext" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

<div class="container">
    <header>
        <div class="header">
            <h1>STUDY HELPER Politechnika Świętokrzyska</h1>
        </div>

        <form action="register-account.php" method="post">
            <div class="formbox">
                <label>E-mail</label>
                <input type="email" name="email1"/>
                <label>Powtórz E-mail</label>
                <input type="email" name="email2"/>
                <label>Nick</label>
                <input type="text" name ="nick"/>
                <label>Hasło</label>
                <input type="password" name="password1"/>
                <label>Powtórz hasło</label>
                <input type="password" name="password2"/>

                <div class="g-recaptcha" data-sitekey="6LcxlEoUAAAAAABk3vEDKMBlWDPJa39jtlEblG10"></div>

                <div class="form-submit">
                    <input type="submit" value="Zarejestruj sie"/>
                </div>
            </div>
        </form>

    </header>

    <div class="footer" id="register-footer">
        <p>Albert Bernat 2018 </p>
    </div>
</div>

</body>
</html>