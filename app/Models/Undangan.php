<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'template_id',
        'nama_pengirim',
        'nama_acara',
        'tempat_acara',
        'tanggal_acara',
        'tujuan_undangan',
        'pesan_tambahan',
        'nama_user',
        'email_user'
    ];

    protected $casts = [
        'tanggal_acara' => 'datetime',
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}