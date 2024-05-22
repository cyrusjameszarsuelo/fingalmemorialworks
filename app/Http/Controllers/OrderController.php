<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.order.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tab = null)
    {
        $tabs = [
            'general-details',
            'job-details',
            'inscription-details',
            'accounts-posting',
            'photos',
        ];
        $url = 'pages.order.' . $tab;
        print_r($url);
        switch ($tab) {
            case 'general-details':
                return view($url)
                    ->withTabs($tabs);
                break;
            case 'job-details':
                return view($url)
                    ->withTabs($tabs);
                break;
            default:
                break;
        }
        // return view('pages.order.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
