<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LeagueType
 *
 * @package App
 * @property string $league_type
*/
class LeagueType extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['league_type'];
    

    public static function storeValidation($request)
    {
        return [
            'league_type' => 'max:191|required'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'league_type' => 'max:191|required'
        ];
    }

    

    
    
    
}
