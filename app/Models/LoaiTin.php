<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;
    protected $table = 'loaitin';
    protected $fillable = [
        'name',
        'slug',
        'order',
        'status',
        'theloai_id'
    ];
    public function theLoais(){
        return $this->belongsTo(TheLoai::class);
    }
    public function tins(){
        return $this->hasMany(Tin::class, 'loaitin_id');
    }
}