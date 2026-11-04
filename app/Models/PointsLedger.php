<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointsLedger extends Model
{
    use HasFactory;

    protected $table = 'points_ledger';
    protected $primaryKey = 'idpoints_ledger';
    public $timestamps = false;

    protected $fillable = [
        'idprospect',
        'iduser',
        'points_earned',
        'earned_at'
    ];

    public function prospect()
    {
        return $this->belongsTo(Prospect::class, 'idprospect', 'idprospect');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }
}
