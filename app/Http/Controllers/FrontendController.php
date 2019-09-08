<?php

namespace App\Http\Controllers;

use App\CustomerQuestion;
use App\Product;
use App\Service;
use App\Slider;
use App\Support;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.home.index', compact('product_show','show_slider', 'show_service'));
    }

    public function view_product(){
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $product_page = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.product.products', compact('show_slider', 'product_page', 'product_show', 'show_service'));
    }

    public function supports(){
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $product_page = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $show_support = Support::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.support.support', compact('show_support','show_slider', 'product_page', 'product_show', 'show_service'));
    }

    public function service_details(){
//        $single_product_info = Service::where('id', $id)->where('status', 1)->get();
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $product_page = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.service.service', compact('show_service','show_slider', 'product_page', 'product_show'));
    }

    public function customer_question(Request $get){
        $insert = CustomerQuestion::insert([
            "name" => $get->name,
            "email" => $get->email,
            "phone_number" => $get->phone_number,
            "question" => $get->question,
        ]);
        if ($insert){
            return response()->json("success");
        }else{
            return response()->json("error");
        }

    }
}
