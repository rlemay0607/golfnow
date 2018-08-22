<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class League
 *
 * @package App
 * @property string $name
 * @property string $league_type
*/
class League extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['name', 'league_type_id'];
    

    public static function storeValidation($request)
    {
        return [
            'name' => 'max:191|required',
            'league_type_id' => 'integer|exists:league_types,id|max:4294967295|nullable',
            'league_manager' => 'array|nullable',
            'league_manager.*' => 'integer|exists:users,id|max:4294967295|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'name' => 'max:191|required',
            'league_type_id' => 'integer|exists:league_types,id|max:4294967295|nullable',
            'league_manager' => 'array|nullable',
            'league_manager.*' => 'integer|exists:users,id|max:4294967295|nullable'
        ];
    }

    

    
    
    public function league_type()
    {
        return $this->belongsTo(LeagueType::class, 'league_type_id')->withTrashed();
    }
    
    public function league_manager()
    {
        return $this->belongsToMany(User::class, 'league_user');
    }
    
    
}
