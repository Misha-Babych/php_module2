<?php

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = ['brand', 'country', 'contact_phone', 'email'];

    public function products()
    {
        return $this->hasMany(Product::class, 'manufacturer');
    }
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer');
    }
}
