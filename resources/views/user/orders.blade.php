@extends('user.master')

@section('body')

<main id="wt-main" class="wt-main wt-haslayout">
    
    <section class="wt-haslayout wt-dbsectionspace">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Seller</th>
                            <th scope="col">Title</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Revision</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->seller_name}}</td>
                            <td>{{$order->gig_title}}</td>
                            <td>{{$order->delivery}}</td>
                            <td>{{$order->revision}}</td>
                            <td>{{$order->amount}}</td>
                            <td>
                                @if($order->status == 0)
                                Processing
                                @elseif($order->status == 1)
                                Completed
                                @elseif($order->status == 2)
                                Cancelled                                
                                @endif
                            </td>
                            <td>
                               <a href="{{route('order-details',['id'=>$order->id])}}">Details</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

@endsection