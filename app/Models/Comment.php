<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = [
        'name',
        'email',
        'content',
        'tin_id'

    ];
    public function tin(){
        return $this->belongsTo(Tin::class, 'tin_id');
    }

}