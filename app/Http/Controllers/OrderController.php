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
            'document',
        ];
        $icons = [
            'fa-file-text-o',
            'fa-folder-open-o',
            'fa-text-height',
            'fa-calculator',
            'fa-file-o',
        ];
        $url = 'pages.order.tabs.' . $tab;
        switch ($tab) {
            case 'general-details':
                return view($url)
                    ->withTabs($tabs)
                    ->withIcons($icons);
                break;
            case 'job-details':
                return view($url)
                    ->withTabs($tabs)
                    ->withIcons($icons);
                break;
            case 'inscription-details':
                return view($url)
                    ->withTabs($tabs)
                    ->withIcons($icons);
                break;
            case 'accounts-posting':
                return view($url)
                    ->withTabs($tabs)
                    ->withIcons($icons);
                break;
            case 'document':
                return view($url)
                    ->withTabs($tabs)
                    ->withIcons($icons);
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
