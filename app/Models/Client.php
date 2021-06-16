<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'created_at', 'update_at'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'id_client', 'id');
    }

    public function getClients()
    {
        return $this->all();
    }
}
