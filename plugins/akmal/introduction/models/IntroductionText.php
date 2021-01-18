<?php namespace Akmal\Introduction\Models;

use Model;

/**
 * Model
 */
class IntroductionText extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'akmal_introduction_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


     public $attachOne = [
        'logo' => 'System\Models\File'
    ];
}
