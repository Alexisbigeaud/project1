<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = ['first_name','last_name', 'age']; 
    use HasFactory;

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
