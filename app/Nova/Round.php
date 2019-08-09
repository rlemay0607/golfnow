<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;

class Round extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\\Round';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Course ID'),
            Text::make('Tournament Day'),
            Boolean::make('Complete Round'),
                
            new Panel('Golfer 1', $this->golfer_1()),
            new Panel('Golfer 2', $this->golfer_2()),
            new Panel('Golfer 3', $this->golfer_3()),
            new Panel('Golfer 4', $this->golfer_4()),
        ];
    }
    protected function golfer_1()
{
    return [
        //Text::make('ID', 'golfer_1'),
        Text::make('Name', 'golfer_1_name'),
        Text::make('Handicap', 'golfer_1_handicap')->hideFromIndex(),
        Text::make('Front Score', 'golfer_1_front')->hideFromIndex(),
        Text::make('Back Score', 'golfer_1_back')->hideFromIndex(),
        Text::make('Total Score', 'golfer_1_total')->hideFromIndex(),
        Text::make('Putts', 'golfer_1_putts')->hideFromIndex()
        
    ];
}


protected function golfer_2()
{
    return [
        //Text::make('ID', 'golfer_2'),
        Text::make('Name', 'golfer_2_name'),
        Text::make('Handicap', 'golfer_2_handicap')->hideFromIndex(),
        Text::make('Front Score', 'golfer_2_front')->hideFromIndex(),
        Text::make('Back Score', 'golfer_2_back')->hideFromIndex(),
        Text::make('Total Score', 'golfer_2_total')->hideFromIndex(),
        Text::make('Putts', 'golfer_2_putts')->hideFromIndex()
        
    ];
}
protected function golfer_3()
{
    return [
        //Text::make('ID', 'golfer_3'),
        Text::make('Name', 'golfer_3_name'),
        Text::make('Handicap', 'golfer_3_handicap')->hideFromIndex(),
        Text::make('Front Score', 'golfer_3_front')->hideFromIndex(),
        Text::make('Back Score', 'golfer_3_back')->hideFromIndex(),
        Text::make('Total Score', 'golfer_3_total')->hideFromIndex(),
        Text::make('Putts', 'golfer_3_putts')->hideFromIndex()
        
    ];
}
protected function golfer_4()
{
    return [
        //Text::make('ID', 'golfer_4'),
        Text::make('Name', 'golfer_4_name'),
        Text::make('Handicap', 'golfer_4_handicap')->hideFromIndex(),
        Text::make('Front Score', 'golfer_4_front')->hideFromIndex(),
        Text::make('Back Score', 'golfer_4_back')->hideFromIndex(),
        Text::make('Total Score', 'golfer_4_total')->hideFromIndex(),
        Text::make('Putts', 'golfer_4_putts')->hideFromIndex()
        
    ];
}

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
    
}
