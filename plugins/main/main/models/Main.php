<?php namespace Main\Main\Models;

use Model;

/**
 * Model
 */
class Main extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'main_main_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $attachOne = [
        'logo' => 'System\Models\File'
    ];


    
}
