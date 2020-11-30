<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = ["id", "created_at", "updated_at"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "sensei_id",
        'seito_id',
        'schedule',
        'hour',
        'review_text',
        'rating'

    ];
}
