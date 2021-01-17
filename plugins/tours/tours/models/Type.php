<?php namespace Tours\Tours\Models;

use Model;

/**
 * Model
 */
class Type extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tours_tours_types';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
