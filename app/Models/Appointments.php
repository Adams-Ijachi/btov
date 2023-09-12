<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointments extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'title',
        'body',
        'status',
        'user_id',
        'doctor_id',
        'had_surgery',
        'had_medications',
        'had_examinations',
        'details',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
