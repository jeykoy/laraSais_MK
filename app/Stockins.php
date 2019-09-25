<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Items;
class Stockins extends Model
{
    public function items(){
        return $this->belongsTo(Items::class);
    }
}
