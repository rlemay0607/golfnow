<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Round
 *
 * @package App
 * @property string $tournment
 * @property string $course_id
 * @property string $date
 * @property string $golfer_1
*/
class Round extends Model
{
    use SoftDeletes;


    protected $fillable = ['date', 'tournment_id', 'course_id', 'golfer_1', 'golfer_2', 'golfer_3', 'golfer_4',
        'golfer_1_handicap', 'golfer_2_handicap', 'golfer_3_handicap', 'golfer_4_handicap',
        'golfer_1_name', 'golfer_2_name','golfer_3_name','golfer_4_name', 'golfer_1_front', 'golfer_1_back', 'golfer_1_total',
        'golfer_2_front', 'golfer_2_back', 'golfer_2_total', 'golfer_3_front', 'golfer_3_back', 'golfer_3_total',
        'golfer_4_front', 'golfer_4_back', 'golfer_4_total', 'tournament_day', 'putts', 'golfer_1_putts', 'golfer_2_putts',
        'golfer_3_putts', 'golfer_4_putts', 'golfer_1_hdc_score', 'golfer_2_hdc_score', 'golfer_3_hdc_score', 'golfer_4_hdc_score', 'hole',
        'golfer_1_hole', 'golfer_2_hole', 'golfer_3_hole', 'golfer_4_hole', 'complete_round'];


   public static function storeValidation($request)
    {
        return [
            'tournment_id' => 'integer|exists:tournaments,id|max:4294967295|nullable',
            'course_id' => 'integer|exists:courses,id|max:4294967295|required',
            'date' => 'date_format:' . config('app.date_format') . '|max:191|required',
            'score_keeper' => 'array|nullable',
            'score_keeper.*' => 'integer|exists:users,id|max:4294967295|nullable'

        ];
    }

    public static function updateValidation($request)
    {
        return [
            'tournment_id' => 'integer|exists:tournaments,id|max:4294967295|nullable',
            'course_id' => 'integer|exists:courses,id|max:4294967295|required',
            'date' => 'date_format:' . config('app.date_format') . '|max:191|required',
            'score_keeper' => 'array|nullable',
            'score_keeper.*' => 'integer|exists:users,id|max:4294967295|nullable'
        ];
    }



    /**
     * Set attribute to date format
     * @param $input
     */



    /**
     * Get attribute from date format
     * @param $output
     *
     * @return string
     */


    public function tournment()
    {
        return $this->belongsTo(Tournament::class, 'tournment_id')->withTrashed();
    }

   public function course()
    {
        return $this->belongsTo(Course::class, 'course_id')->withTrashed();
    }

    public function golfer_1()
    {
        return $this->belongsTo(User::class, 'golfer_1')->withTrashed();
    }
    public function golfer_2()
    {
        return $this->belongsToMany(User::class, 'round_user');
    }
    public function golfer_3()
    {
        return $this->belongsToMany(User::class, 'round_user');
    }
    public function golfer_4()
    {
        return $this->belongsToMany(User::class, 'round_user');
    }


}
