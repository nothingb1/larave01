<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;
    protected $table = 'theloai';
    protected $fillable = [
        'name',
        'slug',
        'order',
        'status'
    ];
    public function loaiTins(){
        return $this->hasMany(LoaiTin::class, 'theloai_id');
    }
}