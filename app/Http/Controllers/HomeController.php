<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Service;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        SEOMeta::setTitle("WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());


        return view('frontend.index');
    }

    public function rental(){

        SEOMeta::setTitle("WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.rental.index');
    }

    public function studio(){

        SEOMeta::setTitle("WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.studio.index');
    }

    public function studio_detail($url){

        $show = Service::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        SEOMeta::setTitle("WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.studio.studio', compact('show'));
    }

    public function contactus(){

        SEOMeta::setTitle("Contact Us | WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.pages.contact-us');
    }

    public function gallery(){

        SEOMeta::setTitle("Gallery | WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.gallery.index');
    }

    public function video(){

        SEOMeta::setTitle("Video Gallery | WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());
        $all = Video::all();
        return view('frontend.gallery.video',  compact('all'));
    }

    public function foto(){

        SEOMeta::setTitle("Foto Gallery | WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());
        $all = GalleryCategory::with('getGallery')->withCount('getGallery')->get();
        return view('frontend.gallery.fotos', compact('all'));
    }


    public function foto_gallery(Request $request, $url){


        $show = GalleryCategory::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        $all = Gallery::where('category', $show->id)->get();
        SEOMeta::setTitle($show->title." | WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.gallery.fotochild', compact('show', 'all'));
    }

    public function foto_detail($slug, $url){

        $show = GalleryCategory::whereHas('translations', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->first();

        $all = Gallery::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        SEOMeta::setTitle($show->title." | ". $all->title ." | WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.gallery.foto', compact('show', 'all'));
    }


    public function project(){

        SEOMeta::setTitle("WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.gallery.project');
    }

    public function faq(){

        SEOMeta::setTitle("F.A.Q | WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.pages.faq');
    }

    public function lightvan(){

        SEOMeta::setTitle("WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.rental.index');
    }

    public function kinefinity(){

        SEOMeta::setTitle("WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.pages.kinefinity');
    }

    public function services(){

        SEOMeta::setTitle("WesterPark Studio | Amsterdam");
        SEOMeta::setDescription("Wester Park Studio");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.rental.index');
    }
}
