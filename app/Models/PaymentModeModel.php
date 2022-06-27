<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentModeModel extends Model {
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'payment_mode';
    
    function __construct() {
        parent::__construct();
    }
    
}
