<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        session_start();
        if(isset($_GET['lang'])){
            $lang = $_GET['lang'];
            $_SESSION['lang'] = $lang;
            setcookie('lang', $lang, time() + (3600 * 24 *30));

        }else if(isset($_SESSION['lang'])){
            $lang = $_SESSION['lang'];
        }else if(isset($_COOKIE['lang'])){
            $lang = $_COOKIE['lang'];
        }else{
            $lang = 'sv';
        }

        $lang_file = 'lang.'.$lang.'.php';

        include_once $lang_file;
    ?>

</body>
</html>