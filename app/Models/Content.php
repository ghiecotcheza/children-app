<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'description', 'date', 'location', 'type'];


    public function child()
    {
        return $this->belongsTo(Child::class);
    }

    public function type()
    {
        return $this->belongsTo(ContentType::class);
    }
}
