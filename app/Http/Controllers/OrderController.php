<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\OrderType;
use App\Models\Branch;
use App\Models\Cemetery;
use App\Models\Source;
use App\Models\Category;
use App\Models\GraveSpace;
use App\Models\Title;
use Auth;


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

        $orderTypes     = OrderType::All();
        $branches       = Branch::All();
        $cemeteries     = Cemetery::All();
        $sources        = Source::All();
        $categories     = Category::All();
        $graveSpaces    = GraveSpace::All();
        $titles         = Title::All();

        switch ($tab) {
            case 'general-details':
                return view($url)
                    ->withTabs($tabs)
                    ->withIcons($icons)
                    ->withOrderTypes($orderTypes)
                    ->withBranches($branches)
                    ->withCemeteries($cemeteries)
                    ->withSources($sources)
                    ->withCategories($categories)
                    ->withGraveSpaces($graveSpaces)
                    ->withTitles($titles);
                break;
            case 'job-details':
                return view($url)
                    ->withTabs($tabs)
                    ->withIcons($icons)
                    ->withOrderTypes($orderTypes)
                    ->withBranches($branches);
                break;
            case 'inscription-details':
                return view($url)
                    ->withTabs($tabs)
                    ->withIcons($icons)
                    ->withOrderTypes($orderTypes)
                    ->withBranches($branches);
                break;
            case 'accounts-posting':
                return view($url)
                    ->withTabs($tabs)
                    ->withIcons($icons)
                    ->withOrderTypes($orderTypes)
                    ->withBranches($branches);
                break;
            case 'document':
                return view($url)
                    ->withTabs($tabs)
                    ->withIcons($icons)
                    ->withOrderTypes($orderTypes)
                    ->withBranches($branches);
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
        $request->validate(self::formRule());
        Order::create($request->all());
        return redirect('/order')
            ->with('success','Created Successfully!');
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

    public function insertCustomer($data){
        $customerData               = new Customer;

        $customerData->title_id     = $data["title_id"];
        $customerData->firstname    = $data["firstname"];
        $customerData->middlename   = $data["middlename"];
        $customerData->surname      = $data["surname"];
        $customerData->mobile       = $data["mobile"];
        $customerData->telno        = $data["telno"];
        $customerData->email        = $data["email"];
        $customerData->address1     = $data["address1"];
        $customerData->address2     = $data["address2"];
        $customerData->address3     = $data["address3"];
        $customerData->town         = $data["town"];
        $customerData->county       = $data["county"];
        $customerData->postcode     = $data["postcode"];

        $customerData->save();
        return $customerData->id;
    }

    public function insertOrder($data,$customerID){
        $orderData                          = new Order;
        $orderData->order_type_id           = $data["order_type_id"];    
        $orderData->branch_id               = $data["order_branch"];
        $orderData->deceased_name           = $data["deceased_name"];
        $orderData->date_of_death           = date('Y-m-d H:i:s', strtotime($data["date_of_death"]));
        $orderData->order_headline          = $data["order_headline"];
        $orderData->cemetery_id             = $data["cemetery_id"];
        $orderData->plot_grave              = $data["plot_grave"];
        $orderData->inscription_completed   = $data["inscription_completed"] == "on" ? "1" : "0";
        $orderData->job_was_fixed_on        = date('Y-m-d H:i:s', strtotime($data["job_was_fixed_on"]));
        $orderData->source_id               = $data["source_id"];
        $orderData->category_id             = $data["category_id"];
        $orderData->customer_id             = $customerID;
        $orderData->grave_space_id          = $data["grave_space_id"];
        $orderData->special_instructions    = $data["special_instructions"];
        $orderData->created_by              = Auth::id();   
        $orderData->created_at              = date('Y-m-d H:i:s', strtotime($data["order_date"]));
        
        $orderData->save();
        dd($orderData->id);

    }


    public function createGeneralDetails(Request $request){
        // Insert Customer Details
        $customerID                         = self::insertCustomer($request->customerData);

        // Insert Order Details
        $orderID                            = self::insertOrder($request->orderData,$customerID);
        
       return response()->json($request);
    }
}
