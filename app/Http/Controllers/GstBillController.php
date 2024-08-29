<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GstBillController extends Controller
{
    public function addGstBill()
    {
        return view('gst-bill.index');
    }

    public function index()
    {
        return view('gst-bill.add');
    }

    public function print()
    {
        return view('gst-bill.print');
    }
}
