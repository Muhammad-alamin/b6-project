<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
        return $this->hasMany(product::class);
    }
    /**
     * @param int $id
     */
    public static function findOrFail(int $id)
    {
    }
}
