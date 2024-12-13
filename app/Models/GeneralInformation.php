<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInformation extends Model
{
    //
    use HasFactory;
    protected $table = 'general_information';
    protected $fillable = [
        'case_date',
        'hn',
        'an',
        'sn',
        'prefix',
        'full_name',
        'id_card_num',
        'birth_date',
        'age',
        'nationality',
        'ethnicity',
        'religion',
        'marital_status',
        'healthcare_rights',
        'occupation',
        'phone_num',
        'current_address',
        'target_group'
    ];
}
