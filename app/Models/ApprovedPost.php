<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Scopes\ApprovedPostScope;

class ApprovedPost extends Post
{
    use HasFactory;

    protected static function booted() : void {
        static::addGlobalScope(new ApprovedPostScope());
    }

}
