<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
     
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "landing/img/semnasti/favicon.svg";
        $logoText = "SEMNASTI";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = 'dashboard_1';
		
        return view('admin.dashboard.index', compact('page_title', 'page_description','action','logo','logoText'));
    }
}
