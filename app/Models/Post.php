<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','slug','extract','body','status','user_id','category_id'];

    //One to Many Relationship (Inverse)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //One to Many Relationship (Inverse)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Many to Many Relationship
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Polymorphic Relationship (User & Post)
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
