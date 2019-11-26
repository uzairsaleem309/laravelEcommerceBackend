<?php
namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;


use Validator;

use App;
use Lang;

use DB;
//for password encryption or hash protected
use Hash;
use App\Admin;
use App\Models\Core\Categories;
use App\Models\Core\Languages;
use App\Models\Core\Products;
use App\Models\Core\Images;

//for authenitcate login data
use Auth;



//for requesting a value
use Illuminate\Http\Request;


class AdminSlidersController extends Controller
{

	//listingTaxClass
	public function sliders(Request $request){
		$title = array('pageTitle' => Lang::get("labels.ListingSliders"));

		$result = array();
		$message = array();

		$banners = DB::table('sliders_images')
		             ->leftJoin('languages','languages.languages_id','=','sliders_images.languages_id')
								 ->leftJoin('image_categories','sliders_images.sliders_image','=','image_categories.image_id')
								 ->select('sliders_images.*','image_categories.path')
								 ->orderBy('sliders_images.sliders_id','ASC')
								 ->groupBy('sliders_images.sliders_id')
								 ->paginate(20);

		$result['message'] = $message;
		$result['sliders'] = $banners;

		return view("admin.settings.web.sliders.index", $title)->with('result', $result);
	}

	//addTaxClass
	public function addsliderimage(Request $request){
		$title = array('pageTitle' => Lang::get("labels.AddSliderImage"));

		$result = array();
		$message = array();

		//get function from other controller
		$myVar = new Categories();
		$categories = $myVar->getter(1);

		$images  = new Images();
		$allimage = $images->getimages();

		$myVar = new Products();
		$products = $myVar->getter();
		//get function from other controller
		$myVar = new Languages();
		$result['languages'] = $myVar->getter();
		$data = DB::table('front_end_theme_content')
		          ->first();
		$carousels = json_decode($data->carousels, true);

		$result['message'] =    $message;
		$result['categories'] = $categories;
		$result['products'] =   $products;
		$result['carousels'] =  $carousels;

		return view("admin.settings.web.sliders.add", $title)->with(['result' => $result,'allimage' => $allimage]);
	}

	//addNewZone
	public function addNewSlide(Request $request){

		$images  = new Images();
		$allimage = $images->getimages();

		//get function from other controller
		$myVar = new Languages();
		$result['languages'] = $myVar->getter();

		$expiryDate = str_replace('/', '-', $request->expires_date);
		$expiryDateFormate = date('Y-m-d H:i:s', strtotime($expiryDate));
		$type = $request->type;

		if($request->image_id){
	    $uploadImage = $request->image_id;
		}else{
			$uploadImage = '';
		}

		if($type=='category'){
			$sliders_url = $request->categories_id;
		}else if($type=='product'){
			$sliders_url = $request->products_id;
		}else{
			$sliders_url = '';
		}

		DB::table('sliders_images')->insert([
				'sliders_title'  		 =>   $request->sliders_title,
				'date_added'	 		 =>   date('Y-m-d H:i:s'),
				'sliders_image'			 =>	  $uploadImage,
				'carousel_id'      		 =>   $request->carousel_id,
				'sliders_url'	 		 =>   $sliders_url,
				'status'	 			 =>   $request->status,
				'expires_date'			 =>	  $expiryDateFormate,
				'type'					 =>	  $request->type,
				'languages_id'			 =>	  $request->languages_id
				]);

		$message = Lang::get("labels.SliderAddedMessage");
		return redirect()->back()->withErrors([$message]);
	}

	//editTaxClass
	public function editslide(Request $request){
		$title = array('pageTitle' => Lang::get("labels.EditSliderImage"));
		$result = array();
		$result['message'] = array();

		$banners = DB::table('sliders_images')
		             ->leftJoin('image_categories','sliders_images.sliders_image','=','image_categories.image_id')
								 ->select('sliders_images.*','image_categories.path')
		             ->where('sliders_id', $request->id)
								 ->groupBy('sliders_images.sliders_id')
								 ->get();
		$result['sliders'] = $banners;

		//get function from other controller
		$myVar = new Categories();
		$categories = $myVar->getter(1);

		$images  = new Images();
		$allimage = $images->getimages();

		//get function from other controller
		$myVar = new Products();
		$products = $myVar->getter();

		//get function from other controller
		$myVar = new Languages();
		$result['languages'] = $myVar->getter();

		$result['categories'] = $categories;
		$result['products'] = $products;

		return view('admin.settings.web.sliders.edit',$title)->with(['result' => $result,'allimage' => $allimage]);
	}

	public function updateSlide(Request $request){

		$myVar = new Languages();
		$languages = $myVar->getter();
		$expiryDate = str_replace('/', '-', $request->expires_date);
		$expiryDateFormate = date('Y-m-d H:i:s', strtotime($expiryDate));
		$type = $request->type;

		if($type=='category'){
			$sliders_url = $request->categories_id;
		}else if($type=='product'){
			$sliders_url = $request->products_id;
		}else{
			$sliders_url = '';
		}

		if($request->image_id){
			$uploadImage = $request->image_id;
			$countryUpdate = DB::table('sliders_images')->where('sliders_id', $request->id)->update([
				'date_status_change'	 =>   date('Y-m-d H:i:s'),
				'sliders_title'  		 =>   $request->sliders_title,
				'date_added'	 		 =>   date('Y-m-d H:i:s'),
				'sliders_image'			 =>	  $uploadImage,
				'sliders_url'	 		 =>   $sliders_url,
				'status'	 			 =>   $request->status,
				'expires_date'			 =>	  $expiryDateFormate,
				'type'					 =>	  $request->type,
				'languages_id'			 =>	  $request->languages_id
				]);
		}else{
			$countryUpdate = DB::table('sliders_images')->where('sliders_id', $request->id)->update([
				'date_status_change'	 =>   date('Y-m-d H:i:s'),
				'sliders_title'  		 =>   $request->sliders_title,
				'date_added'	 		 =>   date('Y-m-d H:i:s'),
				'sliders_url'	 		 =>   $sliders_url,
				'status'	 			 =>   $request->status,
				'expires_date'			 =>	  $expiryDateFormate,
				'type'					 =>	  $request->type,
				'languages_id'			 =>	  $request->languages_id
				]);
		}


		$message = Lang::get("labels.SliderUpdatedMessage");
		return redirect()->back()->withErrors([$message ]);
	}

	//deleteCountry
	public function deleteSlider(Request $request){
		DB::table('sliders_images')->where('sliders_id', $request->sliders_id)->delete();
		return redirect()->back()->withErrors([Lang::get("labels.SliderDeletedMessage")]);
	}
}
