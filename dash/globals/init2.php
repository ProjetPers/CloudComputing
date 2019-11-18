<?php
if(isset($_SESSION['ps']))
{
    header('Location: dash/');
    exit();
}