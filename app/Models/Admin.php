<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admins';

    protected $primaryKey = 'id';

    protected $fillable = ['user', 'password', 'created_at', 'update_at'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'id_client', 'id');
    }
}
