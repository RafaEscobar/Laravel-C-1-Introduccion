<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Person extends Model{
    use HasFactory;

    protected function nombre(): Attribute {
        return new Attribute(
            set: function($value){
                return ucfirst($value);
            }
        );
    }
}