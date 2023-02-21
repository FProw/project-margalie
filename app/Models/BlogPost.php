<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public $primarykey = 'id';
    protected $dates = ['created_at'];
    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getCarbonDateAttribute(){
        return $this->created_at->diffForHumans();
    }
}
