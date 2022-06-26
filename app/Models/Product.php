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
        'image',
        'description',
        'category_id'
    ];

    public function scopeFilter($query,$filters){
        $query->when($filters['category'] ?? false,fn($query,$category)=>
            $query->whereHas('category',fn($query)=>
                $query->where('slug',$category)
            )
        );

        $query->when($filters['q'] ?? false,fn($query,$search)=>
            $query->where('name','like', "%".$search."%")
        );
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
