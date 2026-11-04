<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    use HasFactory;

    protected $table = 'evidences';
    protected $primaryKey = 'idevidences';
    public $timestamps = false;

    protected $fillable = [
        'idprospect',
        'file_name',
        'file_path',
        'uploaded_at',
    ];

    public function prospect()
    {
        return $this->belongsTo(Prospect::class, 'idprospect', 'idprospect');
    }
}
