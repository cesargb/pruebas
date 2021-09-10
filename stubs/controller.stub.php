<?php

namespace Descom\Skeleton\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SkeletonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([]);
    }
}
