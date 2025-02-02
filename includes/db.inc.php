<?php

$db = new SQLite3('data/rosemary.db');

if (!$db) {
    die('Error connecting to the database');
    exit();
}
