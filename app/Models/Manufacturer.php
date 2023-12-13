<?php

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'manufacturer', 'price', 'manufacturing_date'];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer');
    }
}
