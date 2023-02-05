<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;


    # function name must starts with scope
    public function scopeMyNameFilter($query, $s_name) {
        if($s_name ?? false) {
            $query->where('first_name', 'like', '%' . $s_name . '%');
        }
    }


    public function scopeMyFilter($query, array $filters) {
        if($filters['s_name'] ?? false) {
            $query->where('first_name', 'like', '%' . $filters['s_name'] . '%');
        }

        if($filters['search_value'] ?? false) {
            $query->where('first_name',  'like', '%' . $filters['search_value'] . '%')
                ->orWhere('last_name',   'like', '%' . request('search_value') . '%')
                ->orWhere('description', 'like', '%' . $filters['search_value'] . '%');
        }
    }
}
