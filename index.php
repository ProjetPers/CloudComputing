
<?php
//var_dump($_SERVER);die();
if(!isset($_SESSION))
{
    session_start();
}

require_once 'partials/functions.php';
$title = (isset($_GET['p']))? $_GET['p']:"Authentification";

//include_once 'partials/header.php';

if(isset($_GET['p']))
{
    $page='controls/'.$_GET['p'].'.control.php';

    if(file_exists($page))
    {
        include_once $page;

    }
    else
    {
        $page='controls/erreur.control.php';
        include_once $page;
    }
}
else
{
    $page='controls/login.control.php';
    include_once $page;
}
//include_once 'partials/footer.php';