<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // match your table name
    protected $primaryKey = 'id';

    protected $allowedFields = ['firstname', 'middlename', 'lastname'];

    protected $useTimestamps = true;
}
