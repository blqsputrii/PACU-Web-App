<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointRule extends Model
{
     use HasFactory;

    protected $table = 'point_rules';
    protected $primaryKey = 'idpoint_rules';
    public $timestamps = false;

    protected $fillable = [
        'activity_key',
        'activity_label',
        'point_value',
        'updated_at',
    ];
}
