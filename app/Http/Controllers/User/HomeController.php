<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Job;
use App\Proposal;
use App\Project;
use App\Payment;
use App\File;
use App\User;
use App\Gig;
use App\Feedback;
use App\Conversation;
use App\Message;
use App\RequestedOrder;
use App\Order;
use DB;
use Session;
use Stripe;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    
    public function jobPost(){
        $categories = Category::where('parent_id',0)->where('status',1)->get();
        return view('user.post-job',compact('categories'));
    } 
    
    public function postingJob(Request $request)
    {
        $order = new RequestedOrder();
        $order->buyer_id = Auth::id();
        $order->category_id = $request->cat_id;
        $order->title = $request->title;
        $order->description = $request->details;
        //$job->level = $request->level;
        $order->duration = $request->duration;
        $order->amount = $request->amount;
        //$job->status = 0;
        $order->save();
        return redirect(route('requests'))->with('message','Request submitted successfully. Interested sellers will contact you soon..');
    } 
    
    public function pendingJobs(){
        $jobs = Job::where('buyer_id',Auth::id())->where('status',0)->orderBy('id','desc')->get();
        return view('user.manage-jobs.pending',compact('jobs'));
    }
    
    public function completedJobs(){
        
        $jobs = DB::table('requested_orders')
        ->join('users','requested_orders.seller_id','users.id')
        ->where('requested_orders.buyer_id',Auth::id())
        ->where('requested_orders.status',"2")
        ->orderBy('requested_orders.id','desc')
        ->select('requested_orders.*','users.name')                        
        ->get();
        
        
        return view('user.manage-jobs.completed',compact('jobs'));
    }
    
    public function completedJobDetails($id){
        $project = Project::find($id);
        $seller = User::find($project->seller_id);
        
        $feedback = Feedback::where('project_id',$project->id)->first();
        if ($feedback) {
            // code...
            $gig = Gig::find($feedback->gig_id);
        }
        //
        //return $gig;
        $files = File::where('project_id',$project->id)->orderBy('id','desc')->get();
        return view('user.manage-jobs.completed-job-details',compact('project','files','feedback','seller','gig'));
    }
    
    public function proposals($id){
        
        //\DB::statement("SET SQL_MODE=''");
        $proposals = DB::table('proposals')
        ->join('users','proposals.seller_id','users.id')
        ->join('gigs','proposals.gig_id','gigs.id')
        ->where('proposals.job_id',$id)
        ->orderBy('proposals.id','desc')
        // ->groupBy('seller_code')
        ->select('proposals.*','users.name','gigs.level')
        
        ->get();
        return view('user.manage-jobs.proposals',compact('proposals'));
    }
    
    public function hireSeller($id){
        
        //return redirect('stripe');
        
        $id = $id;
        $proposal = Proposal::find($id);
        //return $proposal;
        
        // $job = Job::find($proposal->job_id);
        // $job->status = 1;
        // $job->save();
        
        // $project = new Project();
        // $project->buyer_id = $proposal->buyer_id;
        // $project->seller_id = $proposal->seller_id;
        // $project->category_id = $job->cat_id;
        // $project->project_name = $job->title;
        // $project->amount = $proposal->amount;
        // $project->duration = $proposal->duration;
        // $project->status = 0;
        // $project->save();
        $amount = $proposal->amount;
        
        //return $amount;
        
        // $project = Project::orderBy('id','desc')->first();
        // $project_id = $project->id;
        
        //return redirect(route('payment'))->with('amount',$proposal->amount);
        return view('user.make-payment',compact('id','amount'));
        //return "hi";
    }
    
    public function payment()
    {
        //return $amount;
        return view('user.make-payment');
    }
    
    public function order(Request $request){
        //return $request->all();
        $formData = $request->all();
        //return $formData;
        return view('user.order-payment',compact('formData'));
    }
    
    public function orderPayment(Request $request)
    {
        //return $request->all();
        if($request->name_on_card){
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            
            Stripe\Charge::create ([
                
                "amount" => 100 * $request->amount,
                
                "currency" => "usd",
                
                "source" => $request->stripeToken,
                
                "description" => "Easy Bd Freelancing Payment" 
                
            ]);
        }
        
        
        
        
        //$project_id = $project->id;
        $order = new Order();
        $order->buyer_id = $request->buyer_id;
        $order->seller_id = $request->seller_id;
        $order->gig_id = $request->gig_id;
        $order->delivery = $request->delivery;
        $order->revision = $request->revision;
        $order->amount = $request->amount;
        $order->save();
        
        $order = Order::latest()->first();
        
        if($request->name_on_card){
            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->name_on_card = $request->name_on_card;
            $payment->card_number = $request->card_number;
            $payment->cvc = $request->cvc;
            $payment->expiration_month = $request->expiration_month;
            $payment->expiration_year = $request->expiration_year;
            $payment->save();
        }
        
        
        
        Session::flash('success', 'Payment successful!');
        Session::flash('dashboard', 'Successful!');
        
        return redirect(route('/'));
        
    }
    
    
    public function paymentPost(Request $request)
    {
        //return $request->all();
        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
        Stripe\Charge::create ([
            
            "amount" => 100 * $request->amount,
            
            "currency" => "bdt",
            
            "source" => $request->stripeToken,
            
            "description" => "Easy Bd Freelancing Payment" 
            
        ]);
        
        $proposal = Proposal::find($request->id);
        
        $job = RequestedOrder::find($proposal->job_id);
        $job->status = "1";
        $job->seller_id = $proposal->seller_id;
        $job->gig_id = $proposal->gig_id;
        $job->amount = $proposal->amount;
        $job->duration = $proposal->duration;
        $job->save();
        
        // $project = new Project();
        // $project->buyer_id = $proposal->buyer_id;
        // $project->seller_id = $proposal->seller_id;
        // $project->category_id = $job->cat_id;
        // $project->gig_id = $proposal->gig_id;
        // $project->project_name = $job->title;
        // $project->amount = $proposal->amount;
        // $project->duration = $proposal->duration;
        // $project->status = 0;
        // $project->save();
        $amount = $proposal->amount;
        
        $project = RequestedOrder::orderBy('id','desc')->first();
        //$project_id = $project->id;
        
        $payment = new Payment();
        $payment->project_id = $project->id;
        $payment->name_on_card = $request->name_on_card;
        $payment->card_number = $request->card_number;
        $payment->cvc = $request->cvc;
        $payment->expiration_month = $request->expiration_month;
        $payment->expiration_year = $request->expiration_year;
        $payment->save();
        
        // $proposal = Proposal::find($id);
        
        // $job = Job::find($proposal->job_id);
        // $job->status = 1;
        // $job->save();
        
        // $project = new Project();
        // $project->buyer_id = $proposal->buyer_id;
        // $project->seller_id = $proposal->seller_id;
        // $project->category_id = $job->cat_id;
        // $project->project_name = $job->title;
        // $project->amount = $proposal->amount;
        // $project->duration = $proposal->duration;
        // $project->status = 0;
        // $project->save();
        // $amount = $proposal->amount;
        
        // $project = Project::orderBy('id','desc')->first();
        // $project_id = $project->id;
        
        Session::flash('success', 'Payment successful!');
        Session::flash('dashboard', 'Successful!');
        
        return redirect(route('requests'));
        
    }
    
    public function ongoingJobs(){
        
        \DB::statement("SET SQL_MODE=''");
        $jobs = DB::table('projects')
        ->join('users','projects.seller_id','users.id')
        ->where('projects.buyer_id',Auth::id())
        ->where('projects.status',0)
        ->orderBy('projects.id','desc')
        ->select('projects.*','users.name')                        
        ->get();
        return view('user.manage-jobs.ongoing',compact('jobs'));
    }
    
    public function ongoingJobDetails($id){
        $project = Project::find($id);
        $files = File::where('project_id',$project->id)->orderBy('id','desc')->get();
        return view('user.manage-jobs.ongoing-job-details',compact('project','files'));
    }
    
    public function sendFile(Request $request){
        //return $request->all();
        $this->validate($request, [
            'filenames.*' => 'mimes:doc,pdf,docx,zip,xls,xlsx,pptx,exe,rar'
        ]);
        
        // $file->move(public_path().'/project-files/', $name);
        
        if ($request->file) {
            // code...
            $rand = rand(1000,9999);
            $rand2 = rand(1000,9999);
            $name = $rand.$rand2.time().'.'.$request->file->extension();
            
            $request->file->move(public_path('/project-files/'), $name);
            
            $file = new File();
            
            if($request->project_id){
                $file->project_id = $request->project_id;
            }
            else{
                $file->order_id = $request->order_id;
            }
            $file->sender_id = Auth::id();
            $file->message = $request->message;
            $file->file = $name;
        }  
        
        else{
            $file = new File();
            if($request->project_id){
                $file->project_id = $request->project_id;
            }
            else{
                $file->order_id = $request->order_id;
            }
            $file->sender_id = Auth::id();
            $file->message = $request->message;
        }
        
        $file->save();
        
        return redirect()->back();
        
        
    }
    
    public function cancelRequest(Request $request){
        //return $request->all();
        $project = RequestedOrder::find($request->id);
        $project->status = "3";
        $project->save();
        return redirect(route('requests'))->with('message','Request cancelled successfully');
    } 
    
    public function feedbackSubmit(Request $request){
        //return $request->all();
        
        if($request->project_id){
            $project = RequestedOrder::find($request->project_id);
            $project->is_reviewed = "1";
            $project->save();
            
            $feedback = new Feedback();
            $feedback->project_id = $request->project_id;
            $feedback->buyer_id = $request->buyer_id;
            $feedback->gig_id = $project->gig_id;
            $feedback->feedback = $request->feedback;
            $feedback->star = $request->star;
            $feedback->status = 1;
            $feedback->save();
        }
        
        else{
            $project = Order::find($request->order_id);
            $project->is_reviewed = "1";
            $project->save();
            
            $feedback = new Feedback();
            $feedback->order_id = $request->order_id;
            $feedback->buyer_id = $request->buyer_id;
            $feedback->gig_id = $project->gig_id;
            $feedback->feedback = $request->feedback;
            $feedback->star = $request->star;
            $feedback->status = 1;
            $feedback->save();
        }
        
        
        $seller = User::find($project->seller_id);
        //$gig = Gig::where('seller_id',$seller->id)->where('cat_id',$project->category_id)->first();
        $gig = Gig::find($project->gig_id);
        $score=$gig->score;
        if($feedback->star==1){
            $score = $score+1;
        }
        elseif($feedback->star==2){
            $score = $score+5;
        }
        elseif($feedback->star==3){
            $score = $score+20;
        }
        elseif($feedback->star==4){
            $score = $score+35;
        }
        elseif($feedback->star==5){
            $score = $score+50;
        }
        $gig->score = $score;
        if ($gig->score>=100) {
            // code...
            $gig->level=2;
        }
        elseif($gig->score>=200){
            $gig->level=3;
        }
        
        
        $gig->save();
        return redirect(route('/'))->with('message','Thanks for your feedback!');
    }
    
    public function conversation(Request $request){
        
        //return $request->all();
        $check = Conversation::find($request->convo_id);
        
        if (!$check) {
            // code...
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
            $convo->last_sender_id = Session::get('buyer_id');
            $convo->save();
            
            return redirect(route('messages'));
            
        }
        
        else{
            $message = new Message();
            $message->convo_id = $request->convo_id;
            $message->sender = Auth::id();
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
            $convo->last_sender_id = Session::get('buyer_id');
            $convo->seen_by_receiver = 0;
            $convo->save();
            
            //return redirect()->back();
            return response()->json('message');
        }
    }
    
    public function messages(){
        // $convos = Conversation::where('user1',Session::get('buyer_id'))->orWhere('user2',Session::get('buyer_id'))->orderBy('id','desc')->get();
        
        $convos = DB::table('conversations')
        ->join('users','users.id','conversations.user2')
        ->join('messages','conversations.last_message_id','messages.id')
        ->where('conversations.user1', Auth::id())
        ->orWhere('conversations.user2', Auth::id())
        ->orderBy('conversations.updated_at','desc')
        ->select('conversations.*','users.name','messages.message')
        ->get();
        
        //return $convo;
        return view('user.message.list',compact('convos'));
    }
    
    public function messageDetails($id){
        // $convos = Conversation::where('user1',Session::get('buyer_id'))->orWhere('user2',Session::get('buyer_id'))->orderBy('id','desc')->get();
        
        $convos = DB::table('conversations')
        ->join('users','users.id','conversations.user2')
        ->join('messages','conversations.last_message_id','messages.id')
        ->where('conversations.user1', Auth::id())
        ->orWhere('conversations.user2', Auth::id())
        ->orderBy('conversations.updated_at','desc')
        ->select('conversations.*','users.name','messages.message')
        ->get();
        
        //return $convos;
        $messages = Message::where('convo_id',$id)->get();
        $message = Message::where('convo_id',$id)->orderBy('id','desc')->first();
        
        //return $message;
        
        $convo = Conversation::find($message->convo_id);
        //return $convo;
        if ($convo->last_sender_id!=Session::get('buyer_id')) {
            // code...
            $convo->seen_by_receiver = 1;
            $convo->save();
            
            $message->seen_by_receiver = 1;
            $message->save();
        }
        
        //return $messages;
        //return view('user.message.details',compact('convos','messages'));
        $sender = Auth::user()->name;
        $receiver = User::find($convo->user2);
        
        return response()->json(array(
            'convos' => $convos,
            'messages' => $messages,
            'sender' => $sender,
            'receiver' => $receiver,
            
        ));
        
    }
    
    public function messageSend(Request $request){
        $message = Message::where('convo_id',$request->convo_id)
        ->where('sender', Auth::id())
        ->orderBy('id','desc')->first();
        return $message;
    }
    
    public function requests(){
        
        $requests = RequestedOrder::where('buyer_id', Auth::id())->orderBy('id','desc')->get();
        return view('user.requests', compact('requests'));
    }
    
    public function orders(){
        
        //$orders = Order::where('buyer_id', Auth::id())->orderBy('id','desc')->get();
        $orders = DB::table('orders')
        ->join('users','users.id','orders.seller_id')
        ->join('gigs','gigs.id','orders.gig_id')
        ->where('orders.buyer_id',Auth::id())
        ->select('orders.*','users.name as seller_name','gigs.gig_title')
        ->orderBy('id','desc')
        ->get();
        return view('user.orders', compact('orders'));
    }
    
    public function requestDetails($id){
        
        //$project = Project::find($id);
        
        //return view('user.manage-jobs.ongoing-job-details',compact('project','files'));
        
        $requestOrder = RequestedOrder::find($id);
        $files = File::where('project_id',$requestOrder->id)->orderBy('id','desc')->get();
        
        
        //$project = Project::find($id);
        $feedback = Feedback::where('project_id',$requestOrder->id)->first();
        //$files = File::where('project_id',$project->id)->orderBy('id','desc')->get();
        $buyer = User::find($requestOrder->buyer_id);
        
        
        if($requestOrder->buyer_id != Auth::id()){
            return view('user.seller.requests.request-details', compact('requestOrder','files','feedback', 'buyer'));
        }
        
        else{
            return view('user.request-details', compact('requestOrder','files', 'feedback', 'buyer'));
        }
        
    }
    
    public function orderDetails($id){
        
        //$project = Project::find($id);
        
        //return view('user.manage-jobs.ongoing-job-details',compact('project','files'));
        
        $order = Order::find($id);
        //return $order;
        $gig = Gig::find($order->gig_id);
        $files = File::where('order_id',$order->id)->orderBy('id','desc')->get();
        
        
        //$project = Project::find($id);
        $feedback = Feedback::where('order_id',$order->id)->first();
        //return $feedback;
        //$files = File::where('project_id',$project->id)->orderBy('id','desc')->get();
        $buyer = User::find($order->buyer_id);
        
        
        if($order->buyer_id != Auth::id()){
            return view('user.seller.orders.order-details', compact('order','files','feedback', 'buyer','gig'));
        }
        
        else{
            return view('user.order-details', compact('order','files', 'feedback', 'buyer','gig'));
        }
        
    }
    
    
    public function cancelOrder(Request $request){
        //return $request->all();
        $order = Order::find($request->id);
        $order->status = "2";
        $order->save();
        return redirect(route('orders'))->with('message','Order cancelled successfully');
    } 
    
    
}
