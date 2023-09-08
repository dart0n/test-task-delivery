<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeliveryRequest;
use App\Models\Delivery;
use App\Models\DeliveryService;
use Illuminate\View\View;

class DeliveryController extends Controller
{
    public function create(): View
    {
        $deliveryServices = DeliveryService::all();

        return view('delivery', compact('deliveryServices'));
    }

    public function store(CreateDeliveryRequest $request)
    {
        $deliveryService = DeliveryService::find($request['deliveryService']);
        $delivery = Delivery::create(
            array_merge(
                $request->validated(), ['delivery_service_id' => $deliveryService->id]
            )
        );
        $deliveryService->sendParcel($delivery);

        return redirect('/')->with('status', 'Посылка отправлена');
    }
}
