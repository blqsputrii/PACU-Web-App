<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyLeaderboard extends Model
{
    use HasFactory;
    protected $table = 'monthly_leaderboard';
    protected $primaryKey = 'idmonthly_leaderboard';
    public $timestamps = false;

    protected $fillable = [
        'iduser',
        'month',
        'year',
        'total_points',
        'rank_position',
        'update_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }
}
