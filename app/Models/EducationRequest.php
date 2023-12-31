<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_id", "peaktopup", "mobilenig"
    ];  
    
    public $timestamps = false;
    
    public function product() {
        return $this->hasOne(Product::class, "product_id", "product_id");
    }
}