<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $table="comments";
    protected $fillable = [ "product_id","user_id", "contains","created_at", "updated_at"];

}
