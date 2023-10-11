<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Order extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded =[];


    public function buyer()
{
    return $this->belongsTo(Buyer::class, 'buyer_id');
}

public function server()
{
    return $this->belongsTo(Server::class, 'server_id');
}

public function payment()
{
    return $this->belongsTo(Payment::class, 'payment_id');
}

public function batch()
{
    return $this->belongsTo(Batch::class, 'batch');
}

public function player()
{
    return $this->belongsTo(Player::class, 'player_id');
}

}

