<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @param int $id
     */
    public static function findOrFail(int $id)
    {
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
