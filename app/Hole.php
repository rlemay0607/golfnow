<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hole
 *
 * @package App
 * @property string $course_name
 * @property string $tees
 * @property string $side
 * @property integer $hole_number
 * @property integer $hole_handicap
 * @property integer $hole_yardage
 * @property integer $hole_par
 * @property text $description
*/
class Hole extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['hole_number', 'hole_handicap', 'hole_yardage', 'hole_par', 'description', 'course_name_id', 'tees_id', 'side_id'];
    

    public static function storeValidation($request)
    {
        return [
            'course_name_id' => 'integer|exists:courses,id|max:4294967295|required',
            'tees_id' => 'integer|exists:tees,id|max:4294967295|required',
            'side_id' => 'integer|exists:sides,id|max:4294967295|required',
            'hole_number' => 'integer|min:1|max:18|required',
            'hole_handicap' => 'integer|min:1|max:18|required',
            'hole_yardage' => 'integer|max:4294967295|required',
            'hole_par' => 'integer|min:3|max:5|required',

        ];
    }

    public static function updateValidation($request)
    {
        return [
            'course_name_id' => 'integer|exists:courses,id|max:4294967295|required',
            'tees_id' => 'integer|exists:tees,id|max:4294967295|required',
            'side_id' => 'integer|exists:sides,id|max:4294967295|required',
            'hole_number' => 'integer|min:1|max:18|required',
            'hole_handicap' => 'integer|min:1|max:18|required',
            'hole_yardage' => 'integer|max:4294967295|required',
            'hole_par' => 'integer|min:3|max:5|required',

        ];
    }

    

    
    
    public function course_name()
    {
        return $this->belongsTo(Course::class, 'course_name_id')->withTrashed();
    }
    
    public function tees()
    {
        return $this->belongsTo(Tee::class, 'tees_id')->withTrashed();
    }
    
    public function side()
    {
        return $this->belongsTo(Side::class, 'side_id')->withTrashed();
    }
    
    
}
