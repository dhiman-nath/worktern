<aside id="wt-sidebar" class="wt-sidebar wt-dashboardsave wt-dbsectionspace">
    <div class="wt-proposalsr wt-box-shadow">
        <div class="wt-proposalsrcontent  wt-freelancelike">
            <a href="{{route('pending-jobs')}}">
                <figure>
                    <img src="{{asset('/')}}assets/images/thumbnail/img-15.png" alt="image">
                </figure>
                <div class="wt-title">
                    <h3>{{$pendingJobs}}</h3>
                    <span style="color: black;">Total Pending Jobs</span>
                </div>
            </a>
        </div> 
    </div>
    <div class="wt-proposalsr wt-box-shadow">
        <div class="wt-proposalsrcontent">
            <a href="{{route('buyer-ongoing-jobs')}}">
                <figure>
                    <img src="{{asset('/')}}assets/images/thumbnail/img-17.png" alt="image">
                </figure>
                <div class="wt-title">
                    <h3>{{$ongoingJobs}}</h3>
                    <span style="color: black;">Total Ongoing Jobs</span>
                </div>
            </a>
        </div> 
    </div>
    <div class="wt-proposalsr wt-box-shadow">
        <div class="wt-proposalsrcontent wt-componyfolow">
            <a href="{{route('completed-jobs')}}">
                <figure>
                    <img src="{{asset('/')}}assets/images/thumbnail/img-16.png" alt="image">
                </figure>
                <div class="wt-title">
                    <h3>{{$completedJobs}}</h3>
                    <span style="color: black;">Total Completed Jobs</span>
                </div>
            </a>
        </div> 
    </div>								
    
    <div class="wt-proposalsr wt-box-shadow">
        <div class="wt-proposalsrcontent  wt-repostjob">
            <a href="#">
                <figure>
                    <img src="{{asset('/')}}assets/images/thumbnail/img-15.png" alt="image">
                </figure>
                <div class="wt-title">
                    <h3>{{$cancelledJobs}}</h3>
                    <span style="color: black;">Total Cancelled Jobs</span>
                </div>
            </a>
        </div> 
    </div>
    <!-- <div class="wt-proposalsr wt-box-shadow">
        <div class="wt-proposalsrcontent wt-repostjob">
            <figure>
                <img src="{{asset('/')}}assets/images/thumbnail/img-18.png" alt="image">
            </figure>
            <div class="wt-title">
                <h3>334</h3>
                <span>Total Repost Jobs</span>
            </div>
        </div> 
    </div> -->								
</aside>