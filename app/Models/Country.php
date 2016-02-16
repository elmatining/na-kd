<?php namespace Nakd\Models;

use Nakd\Common\Base\BaseModel;

class Country extends BaseModel
{
    public $timestamps = false;

    function __construct($attributes = array())
    {
        parent::__construct($attributes);
        $this->table = 'countries';
    }

    public static function boot()
    {
        parent::boot();
        self::observe(self::$modelObserver);
    }
}