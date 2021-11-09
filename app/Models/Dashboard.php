<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
    public static function getTicketPerDept()
    {
        return DB::select('sp_DB_TicketPerDept');
    }
}
