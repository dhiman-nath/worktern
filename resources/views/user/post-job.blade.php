@extends('user.master')

@section('body')
<section style="" class="wt-haslayout wt-dbsectionspace">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="wt-dashboardbox">
                <div class="wt-dashboardboxtitle">
                    <h2>Request an Order</h2>
                </div>
                <div class="wt-dashboardboxcontent">
                    <div class="wt-jobdescription wt-tabsinfo">
                        <div class="wt-tabscontenttitle">
                            <h2>Description</h2>
                        </div>
                        <div class="wt-formtheme wt-userform wt-userformvtwo">
                            <form action="{{route('post-job')}}" method="post">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input type="hidden" name="buyer_id" value="{{Auth::id()}}">
                                        <input type="text" required name="title" class="form-control" placeholder="Job Title">
                                    </div>
                                    <div class="form-group form-group-half wt-formwithlabel">
                                        <span class="wt-select">
                                            <label for="selectoption">Category:</label>
                                            <select required id="category">
                                                <option value="" selected>Select</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </span>
                                    </div>
                                    {{-- <div class="form-group form-group-half wt-formwithlabel">
                                        <span class="wt-select">
                                            <label for="selectoption">Level:</label>
                                            <select required name="level">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </span>
                                    </div> --}}
                                    <div class="form-group form-group-half wt-formwithlabel">
                                        <input type="number" required name="duration" class="form-control" placeholder="Job Duration (Days):">
                                    </div>
                                    <div class="form-group form-group-half wt-formwithlabel">
                                        <span class="wt-select">
                                            <label for="selectoption">:</label>
                                            <select required name="cat_id" id="subcategory">
                                                
                                            </select>
                                        </span>
                                    </div>
                                    
                                    
                                    <div class="form-group form-group-half wt-formwithlabel">
                                        <input type="number" required name="amount" class="form-control" placeholder="Amount (Taka):">
                                    </div>
                                    <!-- <div class="form-group form-group-half wt-formwithlabel">
                                        <span class="wt-select">
                                            <label for="selectoption">Job Duration:</label>
                                            <select>
                                                <option value="">02 Weeks</option>
                                                <option value="">03 Weeks</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="form-group form-group-half wt-formwithlabel">
                                        <span class="wt-select">
                                            <label for="selectoption">Featured Job:</label>
                                            <select id="selectoption">
                                                <option value="">Yes</option>
                                                <option value="">No</option>
                                            </select>
                                        </span>
                                    </div> -->
                                </fieldset>
                            </div>
                        </div>
                        <div class="wt-jobdetails wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Job Details</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        <textarea required name="details" style="width: 50%; height: 200px" id="" class="" placeholder="Add Job Detail Here"></textarea>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <!-- <div class="wt-jobskills wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Skills Required</h2>
                            </div>
                            <form class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        <select class="chosen-select Skills" data-placeholder="Skills" name="Skills" multiple>
                                            <option value="Website Design">Website Design</option>
                                            <option value="PHP">PHP</option>
                                            <option value="HTML 5">HTML 5</option>
                                            <option value="Graphic Design">Graphic Design</option>
                                            <option value="SEO">SEO</option>
                                            <option value="Bootstrap">Bootstrap</option>
                                        </select>
                                    </div>
                                    <div class="form-group wt-btnarea">
                                        <a href="javascript:void(0);" class="wt-btn">Add Skills</a>
                                    </div>
                                    <div class="form-group wt-myskills">
                                        <ul class="">
                                            <li>
                                                <div class="wt-dragdroptool">
                                                    <a href="javascript:void(0)" class="lnr lnr-menu"></a>
                                                </div>
                                                <span class="skill-dynamic-html">PHP (<em class="skill-val">90</em>%)</span>
                                                <span class="skill-dynamic-field">
                                                    <input type="text" name="skills[1][percentage]" value="90">
                                                </span>
                                                <div class="wt-rightarea">
                                                    <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="wt-dragdroptool"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                                <span class="skill-dynamic-html">Website Design (<em class="skill-val">90</em>%)</span>
                                                <span class="skill-dynamic-field">
                                                    <input type="text" name="skills[1][percentage]" value="90">
                                                </span>
                                                <div class="wt-rightarea">
                                                    <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                                <span class="skill-dynamic-html">HTML 5 (<em class="skill-val">90</em>%)</span>
                                                <span class="skill-dynamic-field">
                                                    <input type="text" name="skills[1][percentage]" value="90">
                                                </span>
                                                <div class="wt-rightarea">
                                                    <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                                <span class="skill-dynamic-html">Graphic Design (<em class="skill-val">80</em>%)</span>
                                                <span class="skill-dynamic-field">
                                                    <input type="text" name="skills[1][percentage]" value="90">
                                                </span>
                                                <div class="wt-rightarea">
                                                    <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                                <span class="skill-dynamic-html">Rate Your Skill (<em class="skill-val">10</em>%)</span>
                                                <span class="skill-dynamic-field">
                                                    <input type="text" name="skills[1][percentage]" value="90">
                                                </span>
                                                <div class="wt-rightarea">
                                                    <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                                <span class="skill-dynamic-html">SEO (<em class="skill-val">35</em>%)</span>
                                                <span class="skill-dynamic-field">
                                                    <input type="text" name="skills[1][percentage]" value="90">
                                                </span>
                                                <div class="wt-rightarea">
                                                    <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="wt-attachmentsholder">
                            <div class="wt-tabscontenttitle">
                                <h2>Attachments</h2>
                                <div class="wt-rightarea">
                                    <span>Show “Attachments” after hiring</span>
                                    <div class="wt-on-off float-right">
                                        <input type="checkbox" id="hide-on" name="contact_form">
                                        <label for="hide-on"><i></i></label>
                                    </div>
                                </div>
                            </div>
                            <form class="wt-formtheme wt-formprojectinfo wt-formcategory">
                                <fieldset>
                                    <div class="form-group form-group-label">
                                        <div class="wt-labelgroup">
                                            <label for="file">
                                                <span class="wt-btn">Select Files</span>
                                                <input type="file" name="file" id="file">
                                            </label>
                                            <span>Drop files here to upload</span>
                                            <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <ul class="wt-attachfile">
                                            <li class="wt-uploading">
                                                <span class="uploadprogressbar"></span>
                                                <span>Wireframe Document.doc</span>
                                                <em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                            </li>
                                            <li>
                                                <span class="uploadprogressbar"></span>
                                                <span>Requirments.pdf</span>
                                                <em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                            </li>
                                            <li class="wt-uploaded">
                                                <span class="uploadprogressbar"></span>
                                                <span>Company Intro.docx</span>
                                                <em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                            </li>
                                        </ul>
                                    </div>
                                </fieldset>
                            </form>
                        </div> -->
                    </div>
                </div>
                <div class="wt-updatall">
                    <i class="ti-announcement"></i>
                    <span>Post job by just clicking on “Post Job Now” button.</span>
                    <!-- <a class="wt-btn" href="javascript:void(0);">Post Job Now</a> -->
                    <input type="submit" onclick="return confirm('Are you sure to submit?')" class="wt-btn" name="" value="Post Job Now">
                </form>
            </div>
        </div>
    </div>
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
@endsection