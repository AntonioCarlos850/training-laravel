<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'value',
        'slug',
        'image'
    ];

    public function scopeFilter($query,$filters){
        $query->when($filters['category'] ?? false,fn($query,$category)=>
            $query->whereHas('category',fn($query)=>
                $query->where('slug',$category)
            )
        );
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
