<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $name = ['title', 'category_id', 'level_id', 'formateur_id', 'image', 'description', 'prix', 'url_video'];

    public function level() {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function formateur() {
        return $this->belongsTo(Formateur::class, 'formateur_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');

    }

}
