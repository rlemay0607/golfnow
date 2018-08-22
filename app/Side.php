<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Side
 *
 * @package App
 * @property string $name
*/
class Side extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['name'];
    

    public static function storeValidation($request)
    {
        return [
            'name' => 'max:191|required'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'name' => 'max:191|required'
        ];
    }

    

    
    
    
}
