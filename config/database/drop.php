<?php

use Illuminate\Database\Capsule\Manager;

$tables = [
    'activations',
    'persistences',
    'reminders',
    'role_users',
    'throttle',
    'roles',
    'user',
    'product',
    'customer',
    'repairStatus',
    'repairPart'
];

Manager::schema()->disableForeignKeyConstraints();
foreach ($tables as $table) {
    Manager::schema()->dropIfExists($table);
}