<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    public $table = 'educations';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'degree',
        'major',
        'school',
        'date',
        'course',
    ];

    public function user()
    {
        return $this->belongsTo(USer::class, 'user_id');
    }
    
}
