<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class batch extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded =[];

    public function order()
{
    return $this->belongsTo(Order::class, 'order_id');
}
}