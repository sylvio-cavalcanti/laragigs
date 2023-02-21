<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    
    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false){ // Checks if there is a tag being passed in the url
            // dd(request('tag'));

            /* This is a SQL query that looks in the 'tags' column in the Listing table.
                It searches and filters for all the results according with the query parameter passed in the URL 
            '%' represents anything before or after that comes in the 'tag' query parameter in the URL */
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
    }
}
