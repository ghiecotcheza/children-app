<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['child_id', 'title', 'description', 'date', 'location', 'content_type_id'];

    public function child()
    {
        return $this->belongsTo(Child::class);
    }

    public function type()
    {
        return $this->belongsTo(ContentType::class);
    }

    public function getImageAttribute()
    {
        return asset('storage/childs/' . $this->child_id . '/contents/' . $this->id . '/image.jpg');
    }
}
