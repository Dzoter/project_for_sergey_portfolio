<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories',

    ];


    public function lables()
    {
        return [
            'Arches'=>'Арки',
            'Vertical'=>'Вертикальные',
            'Horizontal'=>'Горизонтальные',
            'Ready-made solutions'=>'Готовые решения',
            'Double'=>'Двойные',
            'Expensive Euros'=>'Дорогие евро',
            'European'=>'Европейские',
            'Made of glass'=>'Из стекла',
            'Calumbaria'=>'Калумбарии',
            'Combo double'=>'Комби двойные',
            'Combo with hood'=>'Комби с гуда',
            'Combined'=>'Комбинированные',
            'Crosses'=>'Кресты',
            'Memorial complexes'=>'Мемориальные комплексы',
            'Muslim'=>'Мусульманские',
            'For three'=>'На троих',
            'Plinth'=>'Цоколя',
            'Chapels'=>'Часовни',

        ];
    }
    public  static function getLabels($label)
    {
        $categories = new Categories();
        foreach ( $categories->lables() as $engLabel=>$rusLabel){
            if ($label === $engLabel){
                return $rusLabel;
            }
        }
        return false;
    }

    public function files()
    {
        return $this->hasOne(Files::class);
    }

}
