<?php
namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Validator;
use App;
use Lang;
use DB;
use Hash;
use App\Administrator;
use Auth;
use Illuminate\Http\Request;
use App\Models\Core\Categories;
use App\Models\Core\Languages;
use App\Models\Core\Products;
use App\Models\Core\Images;
use App\Models\Core\ConstantBanner;

class AdminConstantController extends Controller
{

	public function constantBanners(Request $request){
		$title = array('pageTitle' => Lang::get("labels.ListingConstantBanners"));
		$result = ConstantBanner::paginator();
		return view("admin.settings.web.banners.index", $title)->with(['result' => $result]);
	}

	public function addconstantbanner(Request $request){
		$title = array('pageTitle' => Lang::get("labels.AddConstantBanner"));

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

		$result['message'] = $message;
		$result['categories'] = $categories;
		$result['products'] = $products;

		return view("admin.settings.web.banners.add", $title)->with(['result' => $result,'allimage' => $allimage]);
	}

	public function addNewConstantBanner(Request $request){
		//check exist banner
		$exist = ConstantBanner::existbanner($request);

		if($exist==1){
			return redirect()->back()->with('error', Lang::get("labels.constantBannerErrorMessage"));
		}else{

			//add banner
			$insert = ConstantBanner::insert($request);
			
			return redirect()->back()->with('success', Lang::get("labels.BannerAddedMessage"));
			}

	}

	public function editconstantbanner(Request $request){
		$title = array('pageTitle' => Lang::get("labels.EditBanner"));
		$result = array();
		$result['message'] = array();

		$banners = ConstantBanner::edit($request);
		$result['banners'] = $banners;

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

		$result['categories'] = $categories;
		$result['products'] = $products;

		return view("admin.settings.web.banners.edit",$title)->with(['result' => $result,'allimage' => $allimage]);
	}

	public function updateconstantBanner(Request $request){

		$exist = ConstantBanner::existbannerforupdate($request);
		$title = array('pageTitle' => Lang::get("labels.EditBanner"));			

		if($exist==1){
			return redirect()->back()->with('error', Lang::get("labels.constantBannerErrorMessage"));
		}else{
			$exist = ConstantBanner::updatebanner($request);
			return redirect()->back()->with('success', Lang::get("labels.BannerUpdatedMessage"));
		}
	}

	public function deleteconstantBanner(Request $request){
		ConstantBanner::deletebanners($request);		
		return redirect()->back()->withErrors([Lang::get("labels.BannerDeletedMessage")]);

	}
}
