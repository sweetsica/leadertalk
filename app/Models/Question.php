<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function setCategoryAttribute($value)
    {
        switch ($value){
            case "Marketing":
                $this->attributes['category'] = 1;
                break;
            case "Dịch vụ bán hàng":
                $this->attributes['category'] = 2;
                break;
            case "Kế toán":
                $this->attributes['category'] = 3;
                break;
            case "Khác":
                $this->attributes['category'] = 4;
                break;
            default:
                return $value;
        }
    }

    public function getCategoryAttribute($value)
    {
        switch ($value){
            case 1:
                return "Marketing";
            case 2:
                return "Dịch vụ bán hàng";
            case 3:
                return "Kế toán";
            case 4:
                return "Không tốt";
            case 5:
                return "Khác";
            default:
                return $value;
        }
    }
}
