<?php

namespace App\Models\CMS;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = TableEnum::CMS_CONTACT_US;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message'
    ];
}
