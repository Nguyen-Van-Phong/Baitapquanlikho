<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['name','img','desc','category_id','price','unit','import_price','quantity'];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
