<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Select;
use ProtoneMedia\Splade\SpladeForm;

class OrderController extends Controller
{

    public function index()
    {
        return view('order.index');
    }

    public function create()
    {
        $dataProduct = Product::all();
        $productOptions = $dataProduct->isNotEmpty() ? $dataProduct->pluck('name', 'id') : [];
        $dataOrder = Order::all();


        return view('order.create', [
            'dataProduct' => $dataProduct,
            'productOptions' => $productOptions,
            'discount' => $dataOrder->where('status', true)->first()->discount ?? null,
            'plugin' => $dataProduct->where('name', 'Elementor Pro')->first()->id ?? null,
            'bootcamp' => $dataProduct->where('name', 'Bootcamp')->first()->id ?? null,
            'paket' => $dataProduct->where('name', 'Elementor Pro dan Bootcamp')->first()->id ?? null,
        ]);
    }

    public function store(OrderRequest $orderRequest)
    {
        $validatedData = $orderRequest->validated();

        if (isset($validatedData['product']) && !isset($validatedData['product_id'])) {
            $validatedData['product_id'] = $validatedData['product'];
        }

        $product = Product::findOrFail($validatedData['product_id']);
        $validatedData['price'] = $product->harga;

        if ($validatedData['discount']) {
            $validatedData['price'] *= 0.81; // 19% diskon
        }

        $order = Order::create($validatedData);

        session()->flash('order', $order);
        Toast::success('Terima kasih 🔥. Orderan anda berhasil dibuat');

        return redirect()->route('order.verification', ['order' => $order->id]);
    }

    public function verification(Order $order)
    {
        return view('order.verification', compact('order'));
    }
}
