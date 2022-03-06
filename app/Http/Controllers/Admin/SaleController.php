<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\BaseController;
use App\Contracts\SaleContract;

class SaleController extends BaseController
{
    
    /**
     * @var SaleContract
     */
    protected $saleRepository;

    /**
     * SaleController constructor.
     * @param SaleContract $saleRepository
     */
    public function __construct(SaleContract $saleRepository)
    {
        $this->saleRepository = $saleRepository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $today = Carbon::today('Asia/Tokyo');
        //$sale = Sale::where('sale_exp', '>', $today)
        //                ->where('active', '1');
        
        $sales = $this->saleRepository->listSales();
        
        $this->setPageTitle('Sales', 'List of all sale events');
        return view('admin.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPageTitle('Sales', 'Create Sale Event');
        return view('admin.sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     =>  'required|max:191',
            'sale_exp'  =>  'required'
        ]);

        $params = $request->except('_token');

        $sale = $this->saleRepository->createSale($params);

        $msg = 'Sale event 「'.$sale->title.'」 added successfully';

        if (!$sale) {
            return $this->responseRedirectBack('Error occurred while creating sale event.', 'error', true, true);
        }

        if($sale->active == 1) {
            Sale::where('id', '<>', $sale->id)->update(['active' => 0]);
        }

        return $this->responseRedirect('admin.sales.index', $msg ,'success',false, false);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $sale = $this->saleRepository->findSaleById($id);

        $this->setPageTitle('Sales', 'Edit Sale Event: '.$sale->title);
        return view('admin.sales.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title'     =>  'required|max:191',
            'sale_exp'  =>  'required'
        ]);

        $params = $request->except('_token');

        $sale = $this->saleRepository->updateSale($params);

        $msg = 'Sale event 「'.$sale->title.'」 updated successfully';

        if (!$sale) {
            return $this->responseRedirectBack('Error occurred while updating sale.', 'error', true, true);
        }

        if($sale->active == 1) {
            Sale::where('id', '<>', $sale->id)->update(['active' => 0]);
        }

        return $this->responseRedirect('admin.sales.index', $msg,'success',false, false);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $targetSale = $this->saleRepository->findSaleById($id);

        $sale = $this->saleRepository->deleteSale($id);

        $msg = 'Sale event 「'.$targetSale->title.'」 deleted successfully';

        if (!$sale) {
            return $this->responseRedirectBack('Error occurred while deleting sale.', 'error', true, true);
        }
        return $this->responseRedirect('admin.sales.index', $msg ,'success',false, false);
    }
}
