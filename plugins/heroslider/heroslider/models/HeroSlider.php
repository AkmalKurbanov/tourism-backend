<?php namespace HeroSlider\HeroSlider\Models;

use Model;

/**
 * Model
 */
class HeroSlider extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'heroslider_heroslider_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];



        public $attachOne = [
        'slider_item_img' => 'System\Models\File'
    ];
}
