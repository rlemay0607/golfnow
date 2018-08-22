<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RoundHoleNote
 *
 * @package App
 * @property text $notes
 * @property string $course
 * @property integer $hole
 * @property string $tees
*/
class RoundHoleNote extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['notes', 'hole', 'course_id', 'tees_id'];
    

    public static function storeValidation($request)
    {
        return [
            'notes' => 'max:65535|nullable',
            'course_id' => 'integer|exists:courses,id|max:4294967295|required',
            'hole' => 'integer|max:2147483647|required',
            'tees_id' => 'integer|exists:tees,id|max:4294967295|required'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'notes' => 'max:65535|nullable',
            'course_id' => 'integer|exists:courses,id|max:4294967295|required',
            'hole' => 'integer|max:2147483647|required',
            'tees_id' => 'integer|exists:tees,id|max:4294967295|required'
        ];
    }

    

    
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id')->withTrashed();
    }
    
    public function tees()
    {
        return $this->belongsTo(Tee::class, 'tees_id')->withTrashed();
    }
    
    
}
