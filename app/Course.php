<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course
 *
 * @package App
 * @property string $course_name
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $phone_number
 * @property string $website
*/
class Course extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['course_name', 'street', 'city', 'state', 'zip_code', 'phone_number', 'website'];
    

    public static function storeValidation($request)
    {
        return [
            'course_name' => 'min:6|max:191|required|unique:courses,course_name',
            'street' => 'max:191|nullable',
            'city' => 'max:191|required',
            'state' => 'min:2|max:2|nullable',
            'zip_code' => 'min:5|max:8|nullable',
            'phone_number' => 'max:191|nullable',
            'website' => 'max:191|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'course_name' => 'min:6|max:191|required|unique:courses,course_name,'.$request->route('course'),
            'street' => 'max:191|nullable',
            'city' => 'max:191|required',
            'state' => 'min:2|max:2|nullable',
            'zip_code' => 'min:5|max:8|nullable',
            'phone_number' => 'max:191|nullable',
            'website' => 'max:191|nullable'
        ];
    }

    

    
    
    
}
