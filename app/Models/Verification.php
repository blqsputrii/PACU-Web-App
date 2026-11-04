<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    use HasFactory;

    protected $table = 'verifications';
    protected $primaryKey = 'idverifications';
    public $timestamps = false;

    protected $fillable = [
        'idprospect',
        'iduser',
        'status',
        'verified_at',
    ];

    public function prospect()
    {
        return $this->belongsTo(Prospect::class, 'idprospect', 'idprospect');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }
}
