<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Category;
use App\Gig;
use App\User;
use App\Job;
use App\Proposal;
use App\Project;
use App\Feedback;
use App\File;
use App\Conversation;
use App\Message;
use App\RequestedOrder;
use App\BasicPackage;
use App\StandardPackage;
use App\PremiumPackage;
use App\Order;
use Image;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function dashboard(){
        
        \DB::statement("SET SQL_MODE=''");
        
        $ongoingJobs = DB::table('requested_orders')
        // ->join('users','projects.seller_id','users.id')
        ->join('users','requested_orders.buyer_id','users.id')
        ->where('requested_orders.seller_id',Auth::id())
        ->where('requested_orders.status',"1")
        // ->groupBy('seller_code')
        ->orderBy('requested_orders.id','desc')
        ->select('requested_orders.*','users.name')                        
        ->get();

        $ongoingOrders = DB::table('orders')
        ->join('users','orders.buyer_id','users.id')
        ->join('gigs','orders.gig_id','gigs.id')
        ->where('orders.seller_id',Auth::id())
        ->where('orders.status',"0")
        // ->groupBy('seller_code')
        ->orderBy('orders.id','desc')
        ->select('orders.*','users.name','gigs.gig_title')                        
        ->get();
        
        //return $ongoingOrders; 

        $cancelledJobs = DB::table('requested_orders')
        // ->join('users','projects.seller_id','users.id')
        ->join('users','requested_orders.buyer_id','users.id')
        ->where('requested_orders.seller_id',Auth::id())
        ->where('requested_orders.status',4)
        // ->groupBy('seller_code')
        ->orderBy('requested_orders.id','desc')
        ->select('requested_orders.*','users.name')                        
        ->get();

        $cancelledOrders = DB::table('orders')
        // ->join('users','projects.seller_id','users.id')
        ->join('users','orders.buyer_id','users.id')
        ->join('gigs','orders.gig_id','gigs.id')
        ->where('orders.seller_id',Auth::id())
        ->where('orders.status',"2")
        // ->groupBy('seller_code')
        ->orderBy('orders.id','desc')
        ->select('orders.*','users.name','gigs.gig_title')                        
        ->get();
        
        $completedJobs = DB::table('requested_orders')
        // ->join('users','projects.seller_id','users.id')
        ->join('users','requested_orders.buyer_id','users.id')
        ->where('requested_orders.seller_id',Auth::id())
        ->where('requested_orders.status',3)
        // ->groupBy('seller_code')
        ->orderBy('requested_orders.id','desc')
        ->select('requested_orders.*')                        
        ->get();
        
        $completedOrders = DB::table('orders')
        // ->join('users','projects.seller_id','users.id')
        ->join('users','orders.buyer_id','users.id')
        ->join('gigs','orders.gig_id','gigs.id')
        ->where('orders.seller_id',Auth::id())
        ->where('orders.status',"1")
        // ->groupBy('seller_code')
        ->orderBy('orders.id','desc')
        ->select('orders.*','gigs.gig_title')                        
        ->get();
        
        $appliedJobs = DB::table('proposals')
        // ->join('users','proposals.seller_id','users.id')
        ->join('users','proposals.buyer_id','users.id')
        ->where('proposals.seller_id',Auth::id())
        ->orderBy('proposals.id','desc')
        ->select('proposals.*')                        
        ->get();
        
        return view('user.seller.home', compact('ongoingJobs','ongoingOrders', 'cancelledOrders', 'cancelledJobs','completedJobs','completedOrders', 'appliedJobs'));
        
    }
    
    public function sellerGigs(){
        
        $categories = Category::where('parent_id',0)->get();
        //$gigs = Gig::where('seller_id',Session::get('seller_id'))->get();
        $gigs = DB::table('gigs')
        ->join('categories','categories.id','=','gigs.cat_id')
        ->select('gigs.*','categories.name')
        ->where('gigs.seller_id',Auth::id())
        ->get();
        
        return view('user.seller.gigs',compact('categories','gigs'));
    }

    public function myGigs(){
        $gigs = DB::table('gigs')
        ->join('categories','categories.id','=','gigs.cat_id')
        ->select('gigs.*','categories.name')
        ->where('gigs.seller_id',Auth::id())
        ->get();

        return view('user.seller.my-gigs',compact('gigs'));
    }
    
    public function gigSubmit(Request $request){
        
        //return $request->all();
        
        $gig = new Gig();

        $gigImage = $request->file('gig_image');
        
        $rand1 = rand(1000,9999);
        $rand2 = rand(1000,9999);
        
        $fileType  = $gigImage->getClientOriginalExtension();
        $imageName = $rand1.$rand2 . '.' . $fileType;
        $directory = 'gig-images/';
        $img       = Image::make($gigImage)->resize(203, 140)->save($directory . $imageName);
        $gig->seller_id = Auth::id();
        $gig->parent_cat_id = $request->parent_cat_id;
        $gig->cat_id = $request->cat_id;
        $gig->gig_title = $request->gig_title;
        $gig->gig_description = $request->gig_description;
        $gig->gig_image     = $directory.$imageName;
        $gig->save();
        
        $user = Auth::user();
        //return $user;
        $user->is_seller = '1';
        $user->save();
        
        $gig = Gig::latest()->first();
        $basic = new BasicPackage();
        $basic->gig_id = $gig->id;
        $basic->title = $request->basic_title;
        $basic->short_description = $request->basic_short_description;
        $basic->delivery = $request->basic_delivery;
        $basic->revision = $request->basic_revision;
        $basic->amount = $request->basic_amount;
        $basic->save();
        
        if($request->standard_title){
            $standard = new StandardPackage();
            $standard->gig_id = $gig->id;
            $standard->title = $request->standard_title;
            $standard->short_description = $request->standard_short_description;
            $standard->delivery = $request->standard_delivery;
            $standard->revision = $request->standard_revision;
            $standard->amount = $request->standard_amount;
            $standard->save();
        }

        if($request->premium_title){
            $premium = new PremiumPackage();
            $premium->gig_id = $gig->id;
            $premium->title = $request->premium_title;
            $premium->short_description = $request->premium_short_description;
            $premium->delivery = $request->premium_delivery;
            $premium->revision = $request->premium_revision;
            $premium->amount = $request->premium_amount;
            $premium->save();
        }
        
        
        return redirect(route('my-gigs'))->with('message','Gig added successfully');
        
    }

    public function editGig($id){
        $gig = Gig::find($id);
        $basic = BasicPackage::where('gig_id',$id)->first();
        $standard = StandardPackage::where('gig_id',$id)->first();
        $premium = PremiumPackage::where('gig_id',$id)->first();
        $categories = Category::where('parent_id',0)->get();
        return view('user.seller.edit-gig', compact('gig','categories','basic','standard','premium'));
    }

    public function updateGig(Request $request){
        
        //return $request->all();
        
        $gig = Gig::find($request->gig_id);

        $gigImage = $request->file('gig_image');

        if($gigImage){
            $rand1 = rand(1000,9999);
            $rand2 = rand(1000,9999);
            
            $fileType  = $gigImage->getClientOriginalExtension();
            $imageName = $rand1.$rand2 . '.' . $fileType;
            $directory = 'gig-images/';
            $img       = Image::make($gigImage)->resize(203, 140)->save($directory . $imageName);
            $gig->parent_cat_id = $request->parent_cat_id;
            $gig->cat_id = $request->cat_id;
            $gig->gig_title = $request->gig_title;
            $gig->gig_description = $request->gig_description;
            $gig->gig_image     = $directory.$imageName;
            $gig->save();
        }

        else{
            $gig->parent_cat_id = $request->parent_cat_id;
            $gig->cat_id = $request->cat_id;
            $gig->gig_title = $request->gig_title;
            $gig->gig_description = $request->gig_description;
            $gig->save();   
        }
        
        
        
        // $user = Auth::user();
        // $user->is_seller = '1';
        // $user->save();
        
        $basic = BasicPackage::where('gig_id', $gig->id)->first();
        $basic->title = $request->basic_title;
        $basic->short_description = $request->basic_short_description;
        $basic->delivery = $request->basic_delivery;
        $basic->revision = $request->basic_revision;
        $basic->amount = $request->basic_amount;
        $basic->save();
        
        if($request->standard_title){
            $standard = StandardPackage::where('gig_id',$gig->id)->first();
            $standard->gig_id = $gig->id;
            $standard->title = $request->standard_title;
            $standard->short_description = $request->standard_short_description;
            $standard->delivery = $request->standard_delivery;
            $standard->revision = $request->standard_revision;
            $standard->amount = $request->standard_amount;
            $standard->save();
        }

        if($request->premium_title){
            $premium = PremiumPackage::where('gig_id', $gig->id)->first();
            $premium->title = $request->premium_title;
            $premium->short_description = $request->premium_short_description;
            $premium->delivery = $request->premium_delivery;
            $premium->revision = $request->premium_revision;
            $premium->amount = $request->premium_amount;
            $premium->save();
        }
        
        
        return redirect(route('my-gigs'))->with('message','Gig updated successfully');
        
    }
    
    public function suggestedJobs(){
        $jobs[] = array();
        
        $gigs = Gig::where('seller_id',Auth::id())->get();
        
        //return $gigs;
        
        foreach($gigs as $gig){
            //$jobs[] = Job::where('cat_id',$cat->cat_id)->get();
            $jobs[] = DB::table('requested_orders')
            ->join('users','requested_orders.buyer_id','=','users.id')
            ->where('requested_orders.category_id',$gig->cat_id)
            // ->where('requested_orders.level','<=',$gig->level)
            ->where('requested_orders.status',"0")
            ->where('requested_orders.buyer_id','!=',Auth::id())
            ->select('requested_orders.*','users.name')
            // ->groupBy('details')
            ->distinct()
            ->get();
        }
        
        //return $jobs;
        //dd($jobs);
        //$jobs = array_unique($jobs);
        //unset($jobs[count($jobs)-1]);
        
        
        // $jobs = DB::table('jobs')
        //     ->join('buyers','jobs.buyer_id','=','buyers.id')
        //     ->join('gigs','gigs.cat_id','=','jobs.cat_id')
        //     ->where('jobs.cat_id','=','gigs.cat_id')
        //     ->where('jobs.level','<=','gig.level')
        //     ->where('jobs.status',0)
        //     ->select('jobs.*','buyers.name')
        //     // ->groupBy('details')
        //     ->get();
        
        //$proposals = Proposal::where('seller_id',Session::get('seller_id'))->get();
        
        
        
        //return $combo;
        
        
        //return $jobs;
        return view('user.seller.suggested-jobs',compact('jobs'));
    }
    
    public function bid($id){
        
        $job = RequestedOrder::find($id);
        
        
        // $permission = Proposal::all();
        // //return $permission;
        // $i=0;
        
        // if (!$permission->isEmpty()) {
            //     // code...
            //     foreach($permission as $row){
                //         if($row->seller_id==Session::get('seller_code') && $row->job_id==$job->id){
                    //             $i++;
                    //             //return redirect()->back()->with('message','You already bid for this job');
                    //         }
                    
                    //     }
                    // }
                    // else{
                        //     return view('seller.bid',compact('job'));
                        
                        // }
                        
                        // if ($i!=0) {
                            //         // code...
                            //     return redirect()->back()->with('message','You already applied for this job');
                            
                            // }
                            
                            // else{
                                //     return view('seller.bid',compact('job'));
                                
                                // }
                                
                                
                                return view('user.seller.bid',compact('job'));
                                
                            }
                            
                            public function bidSubmit(Request $request){
                                
                                $job = RequestedOrder::find($request->job_id);
                                
                                $gig = Gig::where('seller_id',$request->seller_id)->where('cat_id',$job->category_id)->first();
                                
                                $proposal = new Proposal();
                                $proposal->job_id = $request->job_id;
                                $proposal->buyer_id = $request->buyer_id;
                                $proposal->seller_id = $request->seller_id;
                                $proposal->gig_id = $gig->id;
                                $proposal->amount = $request->amount;
                                $proposal->duration = $request->duration;
                                $proposal->description = $request->description;
                                $proposal->save();
                                
                                
                                $job->increment('proposals');
                                $job->save();        
                                return redirect(route('seller-dashboard'))->with('message','Proposal sent successfully');
                            }
                            
                            public function cancelBid($id){
                                $proposal = Proposal::find($id);
                                $proposal->delete();
                                
                                $job = Job::find($proposal->job_id);
                                $job->decrement('proposals');
                                $job->save();
                                return redirect()->back()->with('message','Bid cancelled successfully');
                            }
                            
                            public function appliedJobs(){
                                $appliedJobs = DB::table('requested_orders')
                                ->join('users','requested_orders.buyer_id','users.id')
                                ->join('proposals','proposals.job_id','requested_orders.id')
                                ->where('proposals.seller_id',Auth::id())
                                ->orderBy('proposals.id','desc')
                                ->select('requested_orders.*','proposals.id as proposal_id')                        
                                ->get();
                                
                                //return $appliedJobs;
                                return view('user.seller.jobs.applied-jobs', compact('appliedJobs'));
                            }
                            
                            public function projectCompleted(Request $request){
                                //return $request->all();
                                $project = RequestedOrder::find($request->id);
                                $project->status = "2";
                                $project->save();
                                return redirect(route('seller-dashboard'))->with('message','Request completed successfully');
                            } 

                            public function orderCompleted(Request $request){
                                //return $request->all();
                                $project = Order::find($request->id);
                                $project->status = "1";
                                $project->save();
                                return redirect(route('seller-dashboard'))->with('message','Order completed successfully');
                            } 
                            
                            public function completedJobs(){
                                
                                $jobs = DB::table('requested_orders')
                                ->join('users','requested_orders.buyer_id','users.id')
                                ->where('requested_orders.seller_id', Auth::id())
                                ->where('requested_orders.status',"2")
                                ->orderBy('requested_orders.id','desc')
                                ->select('requested_orders.*','users.name')                        
                                ->get();

                                $orders = DB::table('orders')
                                ->join('users','orders.buyer_id','users.id')
                                ->join('gigs','orders.gig_id','gigs.id')
                                ->where('orders.seller_id', Auth::id())
                                ->where('orders.status',"1")
                                ->orderBy('orders.id','desc')
                                ->select('orders.*','users.name','gigs.gig_title')                        
                                ->get();

                                //return $orders;

                                return view('user.seller.jobs.completed-jobs',compact('jobs','orders'));
                            }
                            
                            public function completedJobDetails($id){
                                $project = RequestedOrder::find($id);
                                $feedback = Feedback::where('project_id',$project->id)->first();
                                $files = File::where('project_id',$project->id)->orderBy('id','desc')->get();
                                $buyer = User::find($project->buyer_id);
                                //return $feedback;
                                return view('user.seller.jobs.completed-job-details',compact('project','files','feedback','buyer'));
                            }

                            public function completedOrderDetails($id){
                                $project = Order::find($id);
                                $gig = Gig::find($project->gig_id);
                                $feedback = Feedback::where('order_id',$project->id)->first();
                                $files = File::where('order_id',$project->id)->orderBy('id','desc')->get();
                                $buyer = User::find($project->buyer_id);
                                //return $feedback;
                                return view('user.seller.jobs.completed-order-details',compact('project','files','feedback','buyer','gig'));
                            }
                            
                            public function conversation(Request $request){
                                
                                $check = Conversation::find($request->convo_id);
                                
                                $c = Conversation::where('user1', $request->user1)
                                ->where('user2', $request->user2)
                                ->first();
                                
                                //new conversation
                                if (!$c) {
                                    
                                    $convo = new Conversation();
                                    $convo->user1 = $request->user1;
                                    $convo->user2 = $request->user2;
                                    $convo->save();
                                    
                                    $convo = Conversation::orderBy('id','desc')->first();
                                    $message = new Message();
                                    $message->convo_id = $convo->id;
                                    $message->sender = $convo->user1;
                                    $message->receiver = $convo->user2;
                                    $message->message = $request->message;
                                    $message->save();
                                    
                                    $message = Message::orderBy('id','desc')->first();
                                    $convo->last_message_id = $message->id;
                                    $convo->last_sender_id = Auth::id();
                                    $convo->save();
                                    
                                    return redirect(route('messages'));
                                    //return response()->json('message');
                                }
                                
                                //old conversation
                                else{
                                    
                                    $message = new Message();
                                    $message->convo_id = $c->id;
                                    $message->sender = Auth::id();
                                    if ($c->user1==$request->user1) {
                                        // code...
                                        $message->receiver = $c->user2;
                                    }
                                    
                                    else{
                                        $message->receiver = $c->user1; 
                                    }
                                    
                                    $message->message = $request->message;
                                    $message->save(); 
                                    
                                    $message = Message::orderBy('id','desc')->first();
                                    $convo = Conversation::find($message->convo_id);
                                    $convo->last_message_id = $message->id;
                                    $convo->last_sender_id = Auth::id();
                                    $convo->seen_by_receiver = 0;
                                    
                                    $convo->save();
                                    
                                    return redirect(route('messages'));
                                    //return response()->json('message');
                                    
                                }
                                
                            }
                            
                            public function message(Request $request){
                                $check = Conversation::find($request->convo_id);
                                
                                $message = new Message();
                                $message->convo_id = $check->id;
                                $message->sender = $request->sender;
                                if ($check->user1==$request->sender) {
                                    // code...
                                    $message->receiver = $check->user2;
                                }
                                
                                else{
                                    $message->receiver = $check->user1; 
                                }
                                
                                $message->message = $request->message;
                                $message->save(); 
                                
                                $message = Message::orderBy('id','desc')->first();
                                $convo = Conversation::find($message->convo_id);
                                $convo->last_message_id = $message->id;
                                $convo->last_sender_id = Auth::id();
                                $convo->seen_by_receiver = 0;
                                
                                $convo->save();
                                
                                //return redirect()->back();
                                return response()->json(array('message'=>$message));
                                
                            }
                            
                            public function messages(){
                                
                                $c = Conversation::where('user1', Auth::id())->first();
                                
                                if($c){
                                    $convos = DB::table('conversations')
                                    ->join('users','users.id','conversations.user2')
                                    ->join('messages','conversations.last_message_id','messages.id')
                                    ->where('conversations.user1', Auth::id())
                                    ->orderBy('conversations.updated_at','desc')
                                    ->select('conversations.*','users.name','messages.message')
                                    ->get();
                                }
                                
                                else{
                                    $convos = DB::table('conversations')
                                    ->join('users','users.id','conversations.user1')
                                    ->join('messages','conversations.last_message_id','messages.id')
                                    ->where('conversations.user2', Auth::id())
                                    ->orderBy('conversations.updated_at','desc')
                                    ->select('conversations.*','users.name','messages.message')
                                    ->get();
                                }
                                
                                
                                
                                
                                //return $convo;
                                return view('user.seller.message.list',compact('convos'));
                            }
                            
                            public function messageDetails($id){
                                // $convos = Conversation::where('user1',Session::get('seller_id'))->orWhere('user2',Session::get('seller_id'))->orderBy('id','desc')->get();
                                //\DB::statement("SET SQL_MODE=''");
                                
                                $convos = DB::table('conversations')
                                ->join('users','users.id','conversations.user1')
                                ->join('messages','conversations.last_message_id','messages.id')
                                ->where('conversations.user1', Auth::id())
                                ->orWhere('conversations.user2', Auth::id())
                                ->orderBy('conversations.updated_at','desc')
                                ->select('conversations.*','users.name','messages.message')
                                ->get();
                                
                                //return $convos;
                                //$messages = Message::where('convo_id',$id)->get();
                                $messages = DB::table('messages')
                                ->join('users','users.id','=','messages.sender')
                                ->where('messages.convo_id', $id)
                                ->select('messages.*', 'users.name')
                                ->get();
                                
                                $message = Message::where('convo_id',$id)->orderBy('id','desc')->first();
                                
                                //return $message;
                                $convo = Conversation::find($message->convo_id);
                                
                                if ($convo->last_sender_id!= Auth::id()) {
                                    // code...
                                    $convo->seen_by_receiver = 1;
                                    $convo->save();
                                    
                                    $message->seen_by_receiver = 1;
                                    $message->save();
                                }
                                
                                //$lastMessage = Message::where('convo_id',$id)->orderBy('id','desc')->first();
                                //return $lastMessage;
                                return response()->json(array(
                                    'convos' => $convos,
                                    'messages' => $messages,    
                                    
                                ));
                                //return view('user.seller.message.details',compact('convos','messages'));
                            }
                        }
                        