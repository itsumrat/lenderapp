<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowersNewloanModel extends Model {
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'borrowers_new_loan';
    
    function __construct() {
        parent::__construct();
    }
    
}
