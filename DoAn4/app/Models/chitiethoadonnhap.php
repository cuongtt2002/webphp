<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiethoadonnhap extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'hoadonnhap_id',
        'sanpham_id',
        'SoLuong',
        'GiaTien',
        
    ];
    protected $table ='chitiethoadonnhap';
}
