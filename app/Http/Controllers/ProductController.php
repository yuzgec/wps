<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\ProdoctCategoryPivot;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $All = Product::with('getCategory')->orderBy('id', 'desc')->get();

        $Kategori = ProductCategory::get()->toFlatTree();
        return view('backend.product.index', compact('All', 'Kategori'));
    }

    public function create()
    {
        $Kategori = ProductCategory::get()->toFlatTree();
        $Brand = Brand::all();
        return view('backend.product.create',compact('Kategori', 'Brand'));
    }

    public function store(Request $request)
    {

        DB::transaction(function () use($request){
            $New = Product::create($request->except('_token', 'image', 'gallery', 'category', 'web_nl', 'mobil_nl', 'web_en', 'mobil_en'));

            if ($request->hasfile('image')) {
                $New->addMedia($request->image)->toMediaCollection('page');
            }

            if ($request->hasfile('gallery')) {
                foreach ($request->gallery as $item) {
                    $New->addMedia($item)->toMediaCollection('gallery');
                }
            }

            if ($request->hasfile('web_nl')) {
                $New->addMedia($request->web_nl)->toMediaCollection('web_nl');
            }

            if ($request->hasfile('mobil_nl')) {
                $New->addMedia($request->mobil_nl)->toMediaCollection('mobil_nl');
            }

            if ($request->hasfile('web_en')) {
                $New->addMedia($request->web_en)->toMediaCollection('web_en');
            }

            if ($request->hasfile('mobil_en')) {
                $New->addMedia($request->mobil_en)->toMediaCollection('mobil_en');
            }

            if ($request->hasfile('web_ru')) {
                $New->addMedia($request->web_ru)->toMediaCollection('web_ru');
            }

            if ($request->hasfile('mobil_ru')) {
                $New->addMedia($request->mobil_ru)->toMediaCollection('mobil_ru');
            }

            if ($request->category) {
                foreach ($request->category as $c) {
                    $Category = new ProdoctCategoryPivot;
                    $Category->product_id = $New->id;
                    $Category->category_id = $c;
                    $Category->save();
                }
            }
        });

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('product.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Edit = Product::with('getCategory')->where('id',$id)->first();
        $Kategori = ProductCategory::get()->toFlatTree();
        $Brand = Brand::all();

        return view('backend.product.edit', compact('Edit', 'Kategori','Brand'));
    }

    public function update(Request $request, Product $Update)
    {

        DB::transaction(function () use($request, $Update) {
            $Update->update($request->except('_token', 'image', 'gallery', 'category', 'web_nl', 'mobil_nl', 'web_en', 'mobil_en'));

            if ($request->removeImage == "1") {
                $Update->media()->where('collection_name', 'page')->delete();
            }

            if ($request->hasFile('image')) {
                $Update->media()->where('collection_name', 'page')->delete();
                $Update->addMedia($request->image)->toMediaCollection('page');
            }

            if ($request->hasfile('web_nl')) {
                $Update->media()->where('collection_name', 'web_nl')->delete();
                $Update->addMedia($request->web_nl)->toMediaCollection('web_nl');
            }

            if ($request->hasfile('mobil_nl')) {
                $Update->media()->where('collection_name', 'mobil_nl')->delete();
                $Update->addMedia($request->mobil_nl)->toMediaCollection('mobil_nl');
            }

            if ($request->hasfile('web_en')) {
                $Update->media()->where('collection_name', 'web_en')->delete();
                $Update->addMedia($request->web_en)->toMediaCollection('web_en');
            }

            if ($request->hasfile('mobil_en')) {
                $Update->media()->where('collection_name', 'mobil_en')->delete();
                $Update->addMedia($request->mobil_en)->toMediaCollection('mobil_en');
            }

            if ($request->hasfile('gallery')) {
                foreach ($request->gallery as $item) {
                    $Update->addMedia($item)->toMediaCollection('gallery');
                }
            }

            $Update->save();

            if ($request->category) {
                foreach ($request->category as $c) {
                    ProdoctCategoryPivot::updateOrCreate(['product_id' => $Update->id, 'category_id' => $c]);
                }
            }
        });

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('product.index');
    }


    public function destroy($id)
    {
        $Delete = Product::findOrFail($id);
        $Delete->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('product.index');
    }

    public function getOrder(Request $request){
        foreach($request->get('page') as  $key => $rank ){
            Product::where('id',$rank)->update(['rank'=>$key]);
        }
    }

    public function getSwitch(Request $request){
        $update=Product::findOrFail($request->id);
        $update->status = $request->status == "true" ? 1 : 0 ;
        $update->save();
    }
}
