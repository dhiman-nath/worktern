<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Gig;
use App\User;
use App\BasicPackage;
use App\StandardPackage;
use App\PremiumPackage;
use DB;

class HomeController extends Controller
{
    public function chat(){
        return view('chat');
    }

    public function deactivated(){
        return view('front.deactivated');
    }
    
    public function index(){
        
        //$gigs = Gig::orderBy('score','desc')->get();
        
        $gigs = DB::table('gigs')
        ->join('basic_packages','basic_packages.gig_id','=','gigs.id')
        // ->leftJoin('standard_packages','standard_packages.gig_id','=','gigs.id')
        // ->leftJoin('premium_packages','premium_packages.gig_id','=','gigs.id')
        ->select('gigs.*','basic_packages.amount as starting_amount')
        ->orderBy('gigs.score','desc')
        ->take(15)
        ->get();

        //return $gigs;
        
        $categories = Category::where('parent_id',0)->where('status',1)->get();
        return view('front.home.index', compact('categories','gigs'));
    }
    
    public function subCat(Request $request)
    {
        
        $parent_id = $request->cat_id;
        
        $subcategories = Category::where('parent_id',$parent_id)->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }
    
    public function gigDetails($id){
        
        $gigi = Gig::find($id);
        //$gigs = Gig::where('seller_id',$gig->seller_id)->get();
        
        $seller = User::find($gigi->seller_id);
        
        $ongoingJobs = DB::table('projects')
        ->join('users','projects.seller_id','users.id')
        ->where('projects.seller_id',$seller->id)
        ->where('projects.status',0)
        // ->groupBy('seller_code')
        ->orderBy('projects.id','desc')
        ->select('projects.*')                        
        ->get();
        
        $completedJobs = DB::table('projects')
        ->join('users','projects.seller_id','users.id')
        ->where('projects.seller_id',$seller->id)
        ->where('projects.status',1)
        ->orderBy('projects.id','desc')
        ->get(); 
        
        $appliedJobs = DB::table('proposals')
        ->join('users','proposals.seller_id','users.id')
        ->where('proposals.seller_id',$seller->id)
        ->orderBy('proposals.id','desc')
        ->get();
        
        $gig = DB::table('gigs')
        ->join('users','gigs.seller_id','users.id')
        
        ->where('gigs.id',$id)
        ->select('gigs.*','users.name','users.created_at as member_since')
        ->first();
        
        //return $gig;
        $seller = User::find($gig->seller_id);
        //return $seller;
        $gigs = Gig::where('seller_id',$seller->id)->where('id','!=',$id)->get();
        //return $gigs;
        $feedbacksRequest = DB::table('feedback')
        ->join('requested_orders','requested_orders.id','feedback.project_id')
        ->where('feedback.gig_id',$id)
        ->orderBy('feedback.id','desc')
        ->select('feedback.*','requested_orders.title')
        ->get();  

        $feedbacksOrder = DB::table('feedback')
        ->join('orders','orders.id','feedback.order_id')
        ->join('gigs','orders.gig_id','gigs.id')
        ->where('feedback.gig_id',$id)
        ->orderBy('feedback.id','desc')
        ->select('feedback.*','gigs.gig_title')
        ->get();  
        
        $basic = BasicPackage::where('gig_id',$id)->first();
        $standard = StandardPackage::where('gig_id',$id)->first();
        $premium = PremiumPackage::where('gig_id',$id)->first();
        
        return view('front.gig-details',compact('gig','gigs','seller','feedbacksRequest','feedbacksOrder','ongoingJobs','completedJobs','appliedJobs','basic','standard','premium'));
    }
    
    public function sellerSearch(Request $request){
        $sellers = DB::table('gigs')
        ->join('categories','gigs.cat_id','=','categories.id')
        ->join('users','gigs.seller_id','=','users.id')
        ->where('categories.title','LIKE','%'.$request->service.'%')
        ->orWhere('categories.name','LIKE','%'.$request->service.'%')
        ->orWhere('gigs.gig_title','LIKE','%'.$request->service.'%')
        ->select('gigs.*','users.name','categories.title')
        ->orderBy('gigs.score','desc')
        ->paginate(10);

        //return $sellers;
        
        $searchedKeyword = $request->service;    
        
        
        return view('front.search',compact('sellers','searchedKeyword'));
    }
    
    public function allCategories(){
        $categories = Category::where('status',1)->get();
        return view('front.home.all-categories',compact('categories'));
    }
    
    public function categorySellers($id){
        
        $sellers = DB::table('gigs')
        ->join('categories','gigs.cat_id','=','categories.id')
        ->join('users','gigs.seller_id','=','users.id')
        ->where('gigs.cat_id','=',$id)
        ->orWhere('gigs.parent_cat_id','=',$id)
        ->select('gigs.*','users.name','categories.title')
        ->paginate(10);
        
        return view('front.home.category-sellers',compact('sellers'));
    }
}
