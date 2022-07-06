<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandersCommunicationModel extends Model {
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'landers_communication';
    
    function __construct() {
        parent::__construct();
    }
    
}
