<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\Comments;


class Post extends Model
{
    use HasFactory;
    public $fillable = ['title', 'thumb', 'full_img', 'user_id', 'categories_id', 'approved'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function comments() {
        return $this->hasMany(Comments::class);
    }

    // public function getImageAttribute ($value) {
    //     return 'http://'.$value;
    // }



}
