<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProspectActivity extends Model
{
    use HasFactory;

    protected $table = 'prospect_activities';
    protected $primaryKey = 'idprospect_activities';
    public $timestamps = false;

    protected $fillable = [
        'idprospect',
        'is_merespon',
        'is_survey',
        'is_deal',
        'calculated_points',
    ];

    public function prospect()
    {
        return $this->belongsTo(Prospect::class, 'idprospect', 'idprospect');
    }
}
