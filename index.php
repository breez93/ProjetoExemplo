<?php
include "webrequest.php";
include "acessorestrito.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title></title>
</head>
<div class="container">

    <body>
        <?php
    if(!isset("registar"))
        {?>
        <form action="index.php" method="POST">
        <p>
            <label for="email">Email :</label>
            <input type="text" name="email" placeholder="Insert Email...">
        </p>
        <p>
            <label for="password">Password :</label>
            <input type="password" name="password" placeholder="Insert Pasword...">
        </p>
        <label for="submit"><input type="submit" name="submit" value="Autenticar"></label>
        <a href="index.php?registar" class="button" value="registar">Registar</a>
    </form>
<?php        
}
else{?>
        <form action="">
            <p>
                <label for="Nome">Nome :</label>
                <input type="text" name="email" placeholder="Insert Email...">
            </p>
            <p>
                <label for="email">Email :</label>
                <input type="text" name="email" placeholder="Insert Email...">
            </p>
            <p>
                <label for="email">Email :</label>
                <input type="text" name="email" placeholder="Insert Email...">
            </p>
            <p>
                <label for="email">Email :</label>
                <input type="text" name="email" placeholder="Insert Email...">
            </p>
            <p>
                <label for="email">Email :</label>
                <input type="text" name="email" placeholder="Insert Email...">
            </p>
            <label for="submit"><input type="submit" name="submit" value="Autenticar"></label>
            <a href="index.php?registar" class="button" value="registar">Registar</a>

        </form>
            <?php endif}?>

    </body>
</div>

</html>