<?php
namespace salesfokuz\gamification\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [ 'id','name','status'];

    // Define connections based on the DB type
    protected $connection = 'mysql'; // Default is MySQL, but can be switched

    public static function boot()
    {
        parent::boot();

        // You can handle MongoDB-specific logic here
        if (config('gamification.db_connection') == 'mongodb') {
            static::setConnection('mongodb');
        }
    }
}
