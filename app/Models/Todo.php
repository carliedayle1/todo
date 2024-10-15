<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Todo extends Model
{
    use HasFactory;
    // Fillable fieldsssss Activity 2
    protected $fillable = ['title', 'description', 'completed'];
}