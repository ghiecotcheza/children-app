<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'description', 'date', 'location', 'type'];

    //protected $dates = 'datetime';

    public function content()
    {
        return $this->belongsTo(Child::class);
    }

}
