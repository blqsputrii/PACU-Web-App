<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    protected $table = 'prospect';
    protected $primaryKey = 'idprospect';
    public $timestamps = false;

    protected $fillable = [
        'iduser',
        'idproperty_category',
        'prospect_date',
        'domisili',
        'nama_agen',
        'no_telp_agen',
        'no_telp_kantor',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }

    public function propertyCategory()
    {
        return $this->belongsTo(PropertyCategory::class, 'idproperty_categories', 'idproperty_categories');
    }

    public function prospectActivities()
    {
        return $this->hasOne(ProspectActivity::class, 'idprospect', 'idprospect');
    }

    public function evidences()
    {
        return $this->hasMany(Evidence::class, 'idprospect', 'idprospect');
    }
}
