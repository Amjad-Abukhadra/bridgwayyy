<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipOpportunity extends Model
{
    use HasFactory;

    protected $fillable=
    [
        'title',
        'strat_date',
        'end_date',
        'requirments',
        'description'
    ];

    public function company()
{
    return $this->belongsTo(Company::class);
}

}
