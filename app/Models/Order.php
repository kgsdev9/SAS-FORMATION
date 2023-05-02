<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $name = ['codeCommande', 'taxe', 'adresse', 'quantite', 'course_id', 'user_id', 'amount', 'statut', ''];
}
