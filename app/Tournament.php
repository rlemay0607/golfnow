<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tournament
 *
 * @package App
 * @property string $name
 * @property string $course
 * @property string $date
 * @property string $manager
 * @property string $number_rounds
 * @property tinyInteger $handicap_tournament
 * @property tinyInteger $track_skins
 * @property tinyInteger $track_handicap_skin
 * @property text $details
*/
class Tournament extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['name', 'date', 'number_rounds', 'handicap_tournament', 'track_skins', 'track_handicap_skin', 'details', 'course_id', 'manager_id'];
    

    public static function storeValidation($request)
    {
        return [
            'name' => 'max:191|required',
            'course_id' => 'integer|exists:courses,id|max:4294967295|required',
            'date' => 'date_format:' . config('app.date_format') . '|max:191|required',
            'manager_id' => 'integer|exists:users,id|max:4294967295|nullable',
            'number_rounds' => 'in:1,2,3,4|max:191|required',
            'handicap_tournament' => 'boolean|nullable',
            'track_skins' => 'boolean|nullable',
            'track_handicap_skin' => 'boolean|nullable',
            'details' => 'max:65535|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'name' => 'max:191|required',
            'course_id' => 'integer|exists:courses,id|max:4294967295|required',
            'date' => 'date_format:' . config('app.date_format') . '|max:191|required',
            'manager_id' => 'integer|exists:users,id|max:4294967295|nullable',
            'number_rounds' => 'in:1,2,3,4|max:191|required',
            'handicap_tournament' => 'boolean|nullable',
            'track_skins' => 'boolean|nullable',
            'track_handicap_skin' => 'boolean|nullable',
            'details' => 'max:65535|nullable'
        ];
    }

    

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateAttribute($input)
    {
        if ($input) {
            $this->attributes['date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        }
    }

    /**
     * Get attribute from date format
     * @param $output
     *
     * @return string
     */
    public function getDateAttribute($output)
    {
        if ($output) {
            return Carbon::createFromFormat('Y-m-d', $output)->format(config('app.date_format'));
        }
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id')->withTrashed();
    }
    
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
    
    
}
