<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_loker', 'category_id', 'deskripsi', 'gaji', 'kontrak_kerja', 'foto_sampul'];

    public $incrementing = false;
    protected $keyType = 'string';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function pekerja()
    {
        return $this->hasMany(Pekerja::class);
    }

}
