<?php

namespace App\Models;

use App\Helpers\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function setOwnerIdAttribute($value)
    {
        $this->attributes['owner_id'] = Auth::id();
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function subcategory()
    {
        return $this->belongsTo(Category::class, 'subcategory_id');
    }


    protected $casts = [
        'tags' => 'array',
    ];

    public function scopeConfirmed($query)
    {
            return $query->where('status',Status::CONFIRMED);
    }
}
