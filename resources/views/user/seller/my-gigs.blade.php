@extends('user.seller.master')
@section('body')
<main id="wt-main" class="wt-main wt-haslayout">
    
    <section class="wt-haslayout wt-dbsectionspace">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <a href="{{route('seller-gigs')}}" class="btn btn-success mb-3">Create new gig</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($gigs as $gig)
                        <tr>
                            <td>{{$gig->gig_title}}</td>
                            <td>{{$gig->name}}</td>
                            <td><img src="{{asset($gig->gig_image)}}" height="80" width="80" alt=""></td>
                            <td>{{$gig->level}}</td>
                            <td><a href="{{route('edit-gig',['id'=>$gig->id])}}" class="btn btn-warning">Edit</a></td>
                           
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

@endsection