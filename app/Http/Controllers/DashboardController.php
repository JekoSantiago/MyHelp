<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = "MyHelp | Dashboard";

        $date = Carbon::now()->toDateString();
        $data['datenow'] = $date;

        return view('pages.dashboard.index', $data);
    }

    public function getTicketsPerDept()
    {
        echo json_encode(Dashboard::getTicketPerDept());
    }
}



/* End of file DashboardController.php
 * Location: app/Http/Controllers/DashboardController.php
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update:
 * Project Name : MyHelp
 */
