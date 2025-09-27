<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'ktp',
        'alamat',
        'category_id',
        'loker_id',
        'foto_sampul',

    ];

    // Definisikan relasi dengan Category, Loker, dan User
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function loker()
    {
        return $this->belongsTo(Loker::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
