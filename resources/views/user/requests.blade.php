@extends('user.master')

@section('body')

<main id="wt-main" class="wt-main wt-haslayout">
    
    <section class="wt-haslayout wt-dbsectionspace">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Details</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Proposals</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($requests as $request)
                        <tr>
                            <td>{{$request->title}}</td>
                            <td>{{$request->description}}</td>
                            <td>{{$request->duration}}</td>
                            <td>{{$request->amount}}</td>
                            <td><a href="{{route('proposals',['id'=>$request->id])}}">{{$request->proposals}}</a></td>
                            <td>
                                @if($request->status == 0)
                                Pending
                                @elseif($request->status == 1)
                                Processing
                                @elseif($request->status == 2)
                                Completed
                                @elseif($request->status == 3)
                                Cancelled
                                @endif

                            </td>
                            <td>
                                @if($request->status != 0)
                                <a href="{{route('request-details',['id'=>$request->id])}}">Details</a>
                                @endif
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