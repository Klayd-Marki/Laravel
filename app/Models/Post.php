<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ["title","body","excerpt","slug","category_id"];

    protected $with = ['category',"author"];



    public function scopeFilter($query,array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query,$search)=>
            $query
                ->where('title','like','%'.$search.'%')
                ->orWhere('excerpt','like','%'.$search.'%')
                ->orWhere('body','like','%'.$search.'%')
        );
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
