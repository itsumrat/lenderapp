<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsModel extends Model {
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'settings';
    
    function __construct() {
        parent::__construct();
    }
    
}
