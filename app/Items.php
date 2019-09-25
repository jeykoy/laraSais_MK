<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stockins;
class Items extends Model
{
    //
    public function stockins(){
        return $this->hasMany(Stockins::class);
    }
}
