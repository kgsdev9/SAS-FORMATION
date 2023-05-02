<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = ['discount_percent', 'course_id', 'code', 'delai', 'slug', 'status', 'expire_at'];


    public function course() {
        return $this->belongsTo(Course::class, 'course_id');
    }

    // public function  difffForData($debut , $fin)   {
    //     $start_date = date_create($debut);
    //     $end_date   = date_create($fin);
    //     $resultat  = date_diff($start_date, $end_date);

    //     return $resultat ;


    // }

}
