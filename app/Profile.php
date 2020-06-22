<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
//use AjCastro\Searchable\Searchable;

class Profile extends Model
{
    //use Searchable;

    //use FullTextSearch;
    //use Searchable;


    // protected $searchable = [
    //     // This will search on the defined searchable columns
    //     'columns' => [
    //       'profiles.tribe',
    //       'profiles.residence',
          
    //     ],
        
    // ];

    // protected $searchableColumns = [
    //     'tribe',
    //     'residence',
    // ];

    // protected $searchable = [
    //     'tribe',
    //     'residence',
    // ];

    protected $primaryKey = 'id';

    protected $table = 'profiles';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function toSearchableArray()
    {
        $array = $this->only('id', 'tribe', 'residence');
        
        // Customize array...

        //return array_merge($array, $related);
        return $array;
    }
}
