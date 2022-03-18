<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::table('courses')->get();
        return view('dashboard.user.course', ['courses' => $courses]);
        
    }
    public function create()
    {
        return view('dashboard.user.course');
    }
    public function cart()

    {
        return view('dashboard.user.booking');
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

        return redirect()->route('user.cart')->with('success', 'Product added to cart successfully!');
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
