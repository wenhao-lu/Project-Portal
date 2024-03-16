<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'url',
        'subtitle',
        'content1',
        'content2',
        'content3',
        'slug',
        'image',
        'type_id',
        'user_id',
        'stack1',
        'stack2',
        'stack3',
        'stack4',
        'stack5',
        'stack6',
        'stack7',
        'stack8',
        'stack9',
        'stack10',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function user()
    {
        return $this->belongsTo(USer::class, 'user_id');
    }

    public function stacks()
    {
        return $this->belongsToMany(Stack::class);
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
