<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandersInvoiceModel extends Model {
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'landers_invoice';
    
    function __construct() {
        parent::__construct();
    }
    
}
