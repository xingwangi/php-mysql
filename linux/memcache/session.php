<?php
session_start();
$_SESSION['test'] = 'ceshi';
echo $_SESSION['test'];