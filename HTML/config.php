<?php
$conn = mysqli_connect('localhost', 'root', '', 'chyeh');
if (!$conn) {
    echo 'connection error' . mysqli_connect_error();
}
