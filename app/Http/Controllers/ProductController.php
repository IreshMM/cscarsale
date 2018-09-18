<?php
/*control cardetails in product table*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->forget('product');
        $products = Product::all();
        return view('products.index',compact('products',$products));
    }

    /**
     * Show the step 1 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)

    {   
        return view('products.create-step1');
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep1(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            
            'car_model' => 'required',
            'year' => 'required',
            'fuel' => 'required',
            'engine' => 'required',
            'condition' => 'required',
            'transmission' => 'required'
        ]);

        $product = new Product();
        if(empty($request->session()->get('product'))){
            $product = new Product();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }
        return redirect('/products/create-step1-2');
    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep12(Request $request)

    {   
        
        $product = $request->session()->get('product');
        return view('products.create-step1-2',compact('product', $product));
    }
    public function postCreateStep12(Request $request)
    {

        $validatedData = $request->validate([
           
            'mileage' => 'required',
            'price' => 'required|numeric',
            
            
            
            
            
            
            
        ]);

        $product = new Product();

        if(empty($request->session()->get('product'))){
            $product = new Product();
            $product->fill($validatedData);

            $request->session()->put('product', $product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect('/products/create-step2');

    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function createStep2(Request $request)
    {
        $product = $request->session()->get('product');
        return view('products.create-step2',compact('product', $product));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2(Request $request)
    {
        $product = $request->session()->get('product');
        if(!isset($product->productImg)) {
            $request->validate([
                'productimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $fileName = "productImage-" . time() . '.' . request()->productimg->getClientOriginalExtension();

            $request->productimg->storeAs('productimg', $fileName);

            $product = $request->session()->get('product');

            $product->productImg = $fileName;
            $request->session()->put('product', $product);
        }

        
       // return $request->session()->get('product');
        return redirect('/products/create-step3');

    }

    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function removeImage(Request $request)
    {
        $product = $request->session()->get('product');
        $product->productImg = null;
        return view('products.create-step2',compact('product', $product));
    }

    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3(Request $request)
    {
        $product = $request->session()->get('product');
        
    
        return view('products.create-step3',compact('product',$product));
    }

    /**
     * Store product
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->session()->get('product');
        $product->seller_id = auth()->user()->id;
        $product->save();
        return redirect('/products');
    }

}
