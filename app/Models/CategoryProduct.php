<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    // Inisialisasi tabel category_product
    protected $table = 'category_product';

    // Inisialisasi primary key
    protected $primaryKey = 'id_category';

    // Kolom yang tidak dapat diisi secara massal
    protected $guarded = ['id_category'];
}
