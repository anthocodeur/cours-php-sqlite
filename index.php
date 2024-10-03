<?php

echo "Bonjour, monde!";
$db = new SQLite3('test.db');
$db->exec('CREATE TABLE IF NOT EXISTS test (id INTEGER PRIMARY KEY, name TEXT)');
echo "Base de données créée avec succès!";
