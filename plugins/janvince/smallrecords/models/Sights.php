<?php namespace JanVince\SmallRecords\Models;

use Model;

/**
 * Model
 */
class Sights extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'janvince_smallrecords_sights';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
