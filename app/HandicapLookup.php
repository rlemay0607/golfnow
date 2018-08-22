<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HandicapLookup
 *
 * @package App
 * @property integer $hole_handicap
 * @property integer $user_handicap
 * @property integer $strokes
*/
class HandicapLookup extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['hole_handicap', 'user_handicap', 'strokes'];
    

    public static function storeValidation($request)
    {
        return [
            'hole_handicap' => 'integer|min:1|max:18|required',
            'user_handicap' => 'integer|max:36|required',
            'strokes' => 'integer|max:2|required'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'hole_handicap' => 'integer|min:1|max:18|required',
            'user_handicap' => 'integer|max:36|required',
            'strokes' => 'integer|max:2|required'
        ];
    }

    

    
    
    
}
