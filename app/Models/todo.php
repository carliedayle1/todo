<?php
#activity 2 done
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;

    protected $table = 'Todo';
    protected $fillable = ['name', 'description', 'completed'];
}
