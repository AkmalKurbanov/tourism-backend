<?php namespace Grouptours\Grouptours\Models;

use Model;

/**
 * Model
 */
class Tours extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'grouptours_grouptours_list';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];
}
