<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    /* 
        Allow mass assignment rule: In order to insert data into the Listing table in the DB, the columns 
        in which can be inserted data, must be define in the $fillable variable.
    */
    protected $fillable = ['title', 'tags', 'company', 'location', 'email', 'website', 'description',];

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false){ // Checks if there is 'tag' being passed in the url
            // dd(request('tag'));

            /* This is a SQL query that looks in the 'tags' column in the Listing table.
                It searches and filters for all the results according with the query parameter passed in the URL 
            '%' represents anything before or after that comes in the 'tag' query parameter in the URL */
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false){ // Checks if there is 'search' being passed in the url
            /* 
                This filter is used in the search bar in the '/' home 
                This search filter things in the columns: title, description and tags 
                of the Listing table
            */
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
}
