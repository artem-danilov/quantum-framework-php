<?php

namespace Modules\Main\Models;
use Quantum\Mvc\Qt_Model;


class User extends Qt_Model {
    
    public $idColumn = 'user_id';

    public $table = 'user';
    
    public $fillable = [
        'firstname',
        'lastname',
        'email',
        'pass',
    ];
       
}
