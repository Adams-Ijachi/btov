<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dog extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'breed',
        'age',
        'user_id',
        'date_of_birth',
        'weight',
        'gender'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
