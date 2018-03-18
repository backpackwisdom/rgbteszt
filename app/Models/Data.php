<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Data extends Model {
        // setting default table name
        protected $table = 'data';

        // disabling timestamps in database
        public $timestamps = false;

        // defining columns to be filled with values
        protected $fillable = ['text'];
    }