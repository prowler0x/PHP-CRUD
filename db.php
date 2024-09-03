<?php

$con = new mysqli('localhost', 'root', '', 'users_app');

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
