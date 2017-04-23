<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @property-read \App\File $file
 * @mixin \Eloquent
 */
class Product extends Model
{
    public function file()
    {
        return $this->belongsTo('App\File', 'product_file_id', 'id');
    }
}
