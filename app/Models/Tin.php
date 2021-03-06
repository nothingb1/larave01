<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;
    protected $table = 'tin';
    protected $fillable = [
        'tieu_de',
        'slug',
        'tom_tat',
        'view',
        'status',
        'user_id',
        'theloai_id',
        'loaitin_id'
    ];
    public function Comment(){
        return $this->hasMany(Comment::class, 'tin_id');
    }
    public function loaiTins(){
        return $this->belongsTo(LoaiTin::class);
    }
}