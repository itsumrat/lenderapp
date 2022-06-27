<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowersModel extends Model {
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'borrowers';
    
    function __construct() {
        parent::__construct();
    }
    
}
