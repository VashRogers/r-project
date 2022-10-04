<?php 
require_once('Model.php');

class User extends Model {
    protected static $tablename = 'users';
    protected static $columns = [
        'id',
        'name',	
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin',	
    ];

}