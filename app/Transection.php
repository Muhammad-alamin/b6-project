<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transection extends Model
{
   const STATUS_PENDING = 'pending';
   const STATUS_SUCCESS = 'success';
   const STATUS_FAILED = 'failed';
   const STATUS_CANCELLED = 'cancelled';

}
