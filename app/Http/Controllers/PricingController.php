<?php

namespace App\Http\Controllers;

use App\Http\Requests\PricingRequest;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pricing.index',['pricings' => Pricing::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PricingRequest $request, Pricing $pricing)
    {
        $request->validate([
            'nameItem' => 'required',
            'price' => 'required',
        ]);

        $pricing->nameItem = $request->nameItem;
        $pricing->price = $request->price;
        $pricing->save();

        return redirect()->route('pricing.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {

        return view('pricing.edit', compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(PricingRequest $request, Pricing $pricing)
    {
        $request->validate([
            'nameItem' => 'required',
            'price' => 'required'
        ]);
        $pricing->nameItem = $request->nameItem;
        $pricing->price = $request->price;

        $pricing->save();

        return redirect()->route('pricing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        $pricing->delete();

        return redirect()->route('pricing.index');
    }
}
