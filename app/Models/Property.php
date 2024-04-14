<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function documents()
    {
        return $this->morphMany(Document::class, 'documenttable');
    }

    public function financing_percentage()
    {

        $property = Property::find($this->id);
        $items = Userproperty::where('property_id',$this->id)->get();
        $total = 0;
        $line_calcul = 0;
        foreach( $items as $item){
            $line_calcul = $item->nbr_ethix * $item->value_ethix;
            $total = $total +$line_calcul ;
        }

        $percentage = ($total * 100) / (int)$property->obj_financement;
        $percentage = number_format($percentage,2);
        return  $percentage;

    }
}
