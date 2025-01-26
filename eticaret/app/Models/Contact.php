<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'ip',
        'status',
    ];

    /**
     * Status alanını okunabilir metne çevirir.
     *
     * @return string
     */
    public function getStatusTextAttribute()
    {
        return $this->status == '1' ? 'Okundu' : 'Okunmadı';
    }
}
