<?php

namespace Modules\Orders\Entities;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $primaryKey = 'order_id';
    protected $fillable = [];
}
