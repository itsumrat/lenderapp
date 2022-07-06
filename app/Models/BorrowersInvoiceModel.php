<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowersInvoiceModel extends Model {
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'borrowers_invoice';
    
    function __construct() {
        parent::__construct();
    }
    
}
