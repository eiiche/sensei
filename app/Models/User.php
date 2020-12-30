<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = ["id","created_at","updated_at"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'icon',
        'profile_text'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'user_tag');//複数のタグに所属
    }

    /**
     * 先生に予約した場合のリレーション（生徒として予約したもの）
     * 予約した先生の予約一覧を取得するときに利用する
     */
    public function sensei_reservations()
    {
        return $this->hasMany(Reservation::class, 'sensei_id', 'id');
    }
    /**
     * 生徒に予約された場合のリレーション（生徒として予約したもの）
     * 生徒の予約一覧を取得するときとかに利用する
     */
    public function seito_reservations()
    {
        return $this->hasMany(Reservation::class, 'seito_id', 'id');
    }
}
