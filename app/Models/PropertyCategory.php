<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{
    use HasFactory;

    protected $table = 'property_categories';
    protected $primaryKey = 'idproperty_categories';
    public $timestamps = false;

    protected $fillable = [
        'category_name',
    ];

    public function prospects()
    {
        return $this->hasMany(Prospect::class, 'idproperty_categories', 'idproperty_categories');
    }
}
