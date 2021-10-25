<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteCategoria extends Model
{
    use HasFactory;

    protected $table = 'sites_categorias';

    public function site(){
        $this->hasOne(Site::class,'id','site_id');
    }

    public function categoria(){
        $this->hasOne(Categoria::class,'id','categoria_id');
    }
}
