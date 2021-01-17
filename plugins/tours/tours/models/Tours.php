<?php namespace Tours\Tours\Models;

use Model;

/**
 * Model
 */
class Tours extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tours_tours_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];







    
public $belongsToMany = [
    'types' => [
        
        'Tours\Tours\Models\Type',
        'table' => 'tours_tours_tours_types',
        'order' => 'type_title'    
                
    ]
    ];
    
 

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

}
