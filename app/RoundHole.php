<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RoundHole
 *
 * @package App
 * @property string $course_name
 * @property string $course_side
 * @property string $user
 * @property string $round
 * @property string $tournament
 * @property string $tees
 * @property integer $hole_number
 * @property integer $hole_distance
 * @property integer $hole_handicap
 * @property integer $hole_par
 * @property integer $user_score
 * @property integer $user_score_handicap
 * @property tinyInteger $track_multiple_tournament_dates
 * @property tinyInteger $track_skins
 * @property tinyInteger $track_handicap_skins
 * @property tinyInteger $track_handicap_tournament
 * @property integer $user_handicap
 * @property integer $tournament_day
*/
class RoundHole extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['hole_number', 'hole_distance', 'hole_handicap', 'hole_par', 'user_score', 'user_score_handicap', 'track_multiple_tournament_dates', 'track_skins', 'track_handicap_skins', 'track_handicap_tournament', 'course_name_id',
        'course_side_id', 'user_id', 'round_id', 'tournament_id', 'tees_id', 'user_handicap', 'tournament_day', 'putts', 'track_putts', 'golfer_name'];
    

    public static function storeValidation($request)
    {
        return [
            'course_name_id' => 'integer|exists:courses,id|max:4294967295|required',
            'course_side_id' => 'integer|exists:sides,id|max:4294967295|required',
            'user_id' => 'integer|exists:users,id|max:4294967295|required',
            'round_id' => 'integer|exists:rounds,id|max:4294967295|required',
            'tournament_id' => 'integer|exists:tournaments,id|max:4294967295|nullable',
            'tees_id' => 'integer|exists:tees,id|max:4294967295|required',
            'hole_number' => 'integer|min:1|max:18|required',
            'hole_distance' => 'integer|max:2147483647|required',
            'hole_handicap' => 'integer|max:2147483647|required',
            'hole_par' => 'integer|min:3|max:5|required',
            'user_score' => 'integer|max:2147483647|nullable',
            'user_score_handicap' => 'integer|max:2147483647|nullable',
            'track_multiple_tournament_dates' => 'boolean|nullable',
            'track_skins' => 'boolean|nullable',
            'track_handicap_skins' => 'boolean|nullable',
            'track_handicap_tournament' => 'boolean|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'course_name_id' => 'integer|exists:courses,id|max:4294967295|required',
            'course_side_id' => 'integer|exists:sides,id|max:4294967295|required',
            'user_id' => 'integer|exists:users,id|max:4294967295|required',
            'round_id' => 'integer|exists:rounds,id|max:4294967295|required',
            'tournament_id' => 'integer|exists:tournaments,id|max:4294967295|nullable',
            'tees_id' => 'integer|exists:tees,id|max:4294967295|required',
            'hole_number' => 'integer|min:1|max:18|required',
            'hole_distance' => 'integer|max:2147483647|required',
            'hole_handicap' => 'integer|max:2147483647|required',
            'hole_par' => 'integer|min:3|max:5|required',
            'user_score' => 'integer|max:2147483647|nullable',
            'user_score_handicap' => 'integer|max:2147483647|nullable',
            'track_multiple_tournament_dates' => 'boolean|nullable',
            'track_skins' => 'boolean|nullable',
            'track_handicap_skins' => 'boolean|nullable',
            'track_handicap_tournament' => 'boolean|nullable'
        ];
    }

    

    
    
    public function course_name()
    {
        return $this->belongsTo(Course::class, 'course_name_id')->withTrashed();
    }
    
    public function course_side()
    {
        return $this->belongsTo(Side::class, 'course_side_id')->withTrashed();
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function round()
    {
        return $this->belongsTo(Round::class, 'round_id')->withTrashed();
    }
    
    public function tournament()
    {
        return $this->belongsTo(Tournament::class, 'tournament_id')->withTrashed();
    }
    
    public function tees()
    {
        return $this->belongsTo(Tee::class, 'tees_id')->withTrashed();
    }
    
    
}
