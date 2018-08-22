<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tee extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['tee_name'];
    

    public static function storeValidation($request)
    {
        return [
            'tee_name' => 'max:191|required'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'tee_name' => 'max:191|required'
        ];
    }

    

    
    
    
}
