<?php namespace Nakd\Common\Base;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Nakd\Common\Observers\ModelObserver;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Mappable;
use Sofa\Eloquence\Mutable;

class BaseModel extends Eloquent
{
    use Eloquence, Mappable, Mutable;

    protected $table;

    protected static $modelObserver;

    public static function boot()
    {
        parent::boot();
        self::$modelObserver = new ModelObserver();
    }

    public static function table()
    {
        $model_instance = new static;
        return $model_instance->getTable();
    }

}