<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class FrontController extends Controller
{
    public function competition(): View
    {
        return view("pages.competition");
    }

    public function competition_en(): View
    {
        return view("pages.competition-en");
    }

    public function teachers_training(): View
    {
        return view("pages.teachers-training");
    }

    public function online_courses(): View
    {
        return view("pages.online-courses");
    }

    public function science_day(): View
    {
        return view("pages.science-day");
    }

    public function summer_camps(): View
    {
        return view("pages.summer-camps");
    }

    public function shows(): View
    {
        return view("pages.shows");
    }
}
