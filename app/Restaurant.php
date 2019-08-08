<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $primaryKey = 'id_restaurant';
    protected $guarded = ['id_restaurant'];

    public function user()
    {
        return $this->belongsTo(User::class, 'restaurant_user', 'id_user');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_restaurant', 'id_restaurant', 'id_category');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'menu_user');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'id_user');
    }
}
