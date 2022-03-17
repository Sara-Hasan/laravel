<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
class BookingAdminController extends Controller
{
    public function cart()

    {

        return view('cart');

    }
    /**

     * Write code on Method

     *

     * @return response()

     */

    public function addToCart($id)
    {
        $product = Course::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {

            $cart[$id] = [

                "name_course" => $product->name_course,

                "quantity" => 1,

                "price_course" => $product->price_course,

                "houre_course" => $product->houre_course,

                "image_course" => $product->image_course

            ];

        }
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    /**

     * Write code on Method

     *

     * @return response()

     */

    public function update(Request $request)

    {

        if($request->id && $request->quantity){

            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');

        }

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function remove(Request $request)

    {

        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);

            }

            session()->flash('success', 'Product removed successfully');

        }

    }
}
