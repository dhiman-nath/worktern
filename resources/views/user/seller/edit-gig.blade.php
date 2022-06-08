@extends('user.master')
<style>
    /* body {font-family: Arial;} */
    
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }
    
    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }
    
    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }
    
    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }
    
    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>
@section('body')
<section class="wt-haslayout wt-dbsectionspace">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 float-left">
            <div class="wt-dashboardbox">
                <div class="wt-dashboardboxtitle">
                    <h2>Update Gig</h2>
                </div>
                <div class="wt-dashboardboxcontent">
                    <form action="{{route('update-gig')}}" method="post" class="wt-formtheme wt-formprojectinfo wt-formcategory" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="gig_id" value="{{$gig->id}}" id="">
                        <fieldset>
                            <div class="form-group">
                                <input required type="text" name="gig_title" class="form-control" placeholder="Gig Title" value="{{$gig->gig_title}}">
                                <!-- <span class="form-group-description">Dolore magna aliqua enim adminim</span> -->
                            </div>
                            <div class="form-group">
                                <label for="">Gig Image</label><br>
                                <img src="{{asset($gig->gig_image)}}" height="100" width="100" alt="">
                                
                            </div>
                            <div class="form-group">
                                <input type="file" name="gig_image" value="{{$gig->gig_image}}">
                            </div>
                            <div class="form-group">
                                <span class="wt-select">
                                    <select required name="parent_cat_id" id="category">
                                        <option value="" selected>Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </span>
                                <!-- <span class="form-group-description">Elit sed do eiusmod tempor incididunt ut labore</span> -->
                            </div>
                            <div class="form-group">
                                <span class="wt-select">
                                    <select required name="cat_id" id="subcategory">
                                        <option value=""></option>
                                    </select>
                                </span>
                                {{-- <span class="form-group-description">Elit sed do eiusmod tempor incididunt ut labore</span> --}}
                            </div>
                            <div class="form-group">
                                <textarea required name="gig_description" class="form-control" placeholder="Gig Description">{{$gig->gig_description}}</textarea>
                                <!-- <span class="form-group-description">Veniam quis nostrud exercitation</span> -->
                            </div>
                            
                            <!-- <div class="form-group wt-btnarea">
                                
                                <input type="submit" name="" class="wt-btn" value="Add Gig">
                            </div> -->
                        </fieldset>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 float-right">
                <div class="wt-dashboardbox wt-categorys">
                    {{-- <div class="wt-dashboardboxtitle wt-titlewithsearch">
                        <h2>My Gigs</h2>
                        
                    </div>
                    <div class="wt-dashboardboxcontent wt-categoriescontentholder">
                        <table class="wt-tablecategories">
                            <thead>
                                <tr>
                                    
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($gigs as $gig)
                                <tr>
                                    
                                    <td>{{$gig->gig_title}}</td>
                                    <td>{{$gig->name}}</td>
                                    <td>{{$gig->level}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div> --}}
                    
                    
                    
                    
                </div>
                
                <h3>Create Package</h3>
                <div class="tab">
                    <input type="button" name="" class="btn btn-danger tablinks" onclick="openCity(event, 'London')" value="Basic">
                    <input type="button" name="" class="btn btn-danger tablinks" onclick="openCity(event, 'Paris')" value="Standard">
                    <input type="button" name="" class="btn btn-danger tablinks" onclick="openCity(event, 'Tokyo')" value="Premium">
                    <!-- <button class="tablinks" onclick="openCity(event, 'Paris')">Standard</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Premium</button> -->
                    </div>
                    
                    
                    <div id="London" class="tabcontent active">
                        <h3>Basic</h3>
                        
                        <div class="form-group mt-4">
                            <label for="">Title</label>
                            <input required type="text" id="" name="basic_title" value="{{$basic->title}}"> 
                        </div>
                        {{-- <br><br> --}}
                        
                        <div class="form-group">
                            <label for="">Short Description</label>
                            <input required type="text" id="" name="basic_short_description" value="{{$basic->short_description}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Delivery Time</label>
                            <input required type="number" name="basic_delivery" id="" value="{{$basic->delivery}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Total Revision</label>
                            <input required type="number" name="basic_revision" id="" value="{{$basic->revision}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input required type="number" name="basic_amount" id="" value="{{$basic->amount}}">
                        </div>
                        {{-- <a href="" class="btn btn-danger">Continue ($100)</a> --}}
                    </div>
                    
                    <div id="Paris" class="tabcontent">
                        <h3>Standard (Not mandatory)</h3>
                        
                        <div class="form-group mt-4">
                            <label for="">Title</label>
                            @if ($standard)
                            <input type="text" id="" name="standard_title" value="{{$standard->title}}">
                            @else
                            <input type="text" id="" name="standard_title">
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="">Short Description</label>
                            @if ($standard)
                            <input type="text" id="" name="standard_short_description" value="{{$standard->short_description}}">
                            
                            @else
                            <input type="text" id="" name="standard_short_description">
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="">Delivery Time</label>
                            @if ($standard)
                            <input type="number" name="standard_delivery" id="" value="{{$standard->delivery}}">
                            @else
                            <input type="number" name="standard_delivery" id="" >
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="">Total Revision</label>
                            @if($standard)
                            <input type="number" name="standard_revision" id="" value="{{$standard->revision}}">
                            @else
                            <input type="number" name="standard_revision" id="">
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="">Amount</label>
                            @if($standard)
                            <input type="number" name="standard_amount" id="" value="{{$standard->amount}}">
                            @else
                            <input type="number" name="standard_amount" id="" >
                            @endif
                        </div>
                    </div>
                    
                    <div id="Tokyo" class="tabcontent">
                        <h3>Premium (Not mandatory)</h3>
                        <div class="form-group mt-4">
                            <label for="">Title</label>
                            @if($premium)
                            <input type="text" id="" name="premium_title" value="{{$premium->title}}">
                            @else
                            <input type="text" id="" name="premium_title">
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="">Short Description</label>
                            @if($premium)
                            <input type="text" id="" name="premium_short_description" value="{{$premium->short_description}}">
                            @else
                            <input type="text" id="" name="premium_short_description" >
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="">Delivery Time</label>
                            @if($premium)
                            <input type="number" name="premium_delivery" id="" value="{{$preimum->delivery}}">
                            @else
                            <input type="number" name="premium_delivery" id="" >
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="">Total Revision</label>
                            @if($premium)
                            <input type="number" name="premium_revision" id="" value="{{$premium->revision}}">
                            @else
                            <input type="number" name="premium_revision" id="">
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="">Amount</label>
                            @if($premium)
                            <input type="number" name="premium_amount" id="" value="{{$premium->amount}}">
                            @else
                            <input type="number" name="premium_amount" id="" >
                            @endif
                        </div>
                    </div>
                    
                    
                    
                </div>
                
                
            </div>
            
            <div class="form-group wt-btnarea">
                
                <input onclick="return confirm('Are you sure to update?')" type="submit" name="" class="wt-btn" value="Update Gig">
            </div>
        </form>
    </section>
    
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {
            $('#category').on('change',function(e) {
                var cat_id = e.target.value;
                $.ajax({
                    url:"{{ route('subcat') }}",
                    type:"POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        cat_id: cat_id
                    },
                    success:function (data) {
                        $('#subcategory').empty();
                        $.each(data.subcategories,function(index,subcategory){
                            $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
                        })
                    }
                })
            });
        });
    </script>
    <script>
        openCity(event, "London");
        function openCity(evt, cityName) {
            
            
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            
            
        }
    </script>
    @endsection
    
    