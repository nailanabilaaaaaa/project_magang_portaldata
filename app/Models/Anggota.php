<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $fillable = ['user_id', 'nip', 'nama', 'tempat_lahir', 'tgl_lahir', 'jk', 'alamat'];


    /**
     * Method One To One 
     */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
