<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    /**
     * Tabel yang akan digunakan oleh model ini
     *
     * @var string
     */
    protected $table = 'kategori';

    /**
     * Apakah tabel mempunyai kolom "created_at" dan "updated_at"?
     * Tentukan disini.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Kolom apa saja yang boleh diisi data dengan mass assignment?
     * 
     * @var string
     */
    public $fillable = ['nama'];
}
