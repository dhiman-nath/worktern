<!DOCTYPE html>

<html>

<head>
    
    <title>Worktern</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <style type="text/css">
        
        .panel-title {
            
            display: inline;
            
            font-weight: bold;
            
        }
        
        .display-table {
            
            display: table;
            
        }
        
        .display-tr {
            
            display: table-row;
            
        }
        
        .display-td {
            
            display: table-cell;
            
            vertical-align: middle;
            
            width: 61%;
            
        }
        
    </style>
    
</head>

<body>
    
    
    
    <div class="container">
        
        
        <div class="row">
            
            <div class="col-md-6 col-md-offset-3">
                
                <div class="panel panel-default credit-card-box">
                    
                    <div class="panel-heading display-table" >
                        
                        <div class="row display-tr" >
                            <h2>Make Payment</h2>
                            @if (Session::has('dashboard'))
                            <a href="{{route('/')}}"><h3 class="panel-title display-td" >Go back to Dashboard</h3></a>
                            
                            <!-- <div class="display-td" >                            
                                
                                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                
                            </div> -->
                            @endif
                            
                        </div>                    
                        
                    </div>
                    
                    <div class="panel-body">
                        
                        @if (Session::has('success'))
                        
                        <div class="alert alert-success text-center">
                            
                            <!--                             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            --> 
                            <p>{{ Session::get('success') }}</p>
                            
                        </div>
                        
                        @endif
                        
                        <form role="form" action="{{ route('order-payment') }}" method="post" class="require-validation"
                        
                        data-cc-on-file="false"
                        
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                        
                        id="payment-form">
                        
                        @csrf
                        
                        
                        
                        <div class='form-row row'>
                            
                            <div class='col-xs-12 form-group required'>
                                
                                <label class='control-label'>Name on Card</label> <input
                                
                                name="name_on_card"  class='form-control' size='4' type='text'>
                                
                            </div>
                            
                        </div>
                        
                        
                        
                        <div class='form-row row'>
                            
                            <div class='col-xs-12 form-group card required'>
                                
                                <label class='control-label'>Card Number</label> <input
                                
                                name="card_number"    autocomplete='off' class='form-control card-number' size='20'
                                
                                type='number'>
                                
                            </div>
                            
                        </div>
                        
                        
                        
                        <div class='form-row row'>
                            
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                
                                name="cvc"   class='form-control card-cvc' placeholder='ex. 311' size='4'
                                
                                type='number'>
                                
                            </div>
                            
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                
                                <label class='control-label'>Expiration Month</label> <input
                                
                                name="expiration_month"  class='form-control card-expiry-month' placeholder='MM' size='2'
                                
                                type='number'>
                                
                            </div>
                            
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                
                                <label class='control-label'>Expiration Year</label> <input
                                
                                name="expiration_year"  class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                
                                type='number'>
                                
                            </div>
                            
                        </div>
                        
                        
                        
                        <div class='form-row row'>
                            
                            <div class='col-md-12 error form-group hide'>
                                
                                <div class='alert-danger alert'>Please correct the errors and try
                                    
                                    again.</div>
                                    
                                </div>
                                
                            </div>
                            
                            
                            
                            <div class="row">
                                
                                <div class="col-xs-12">
                                    
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">{{$formData['amount']}} + {{$formData['amount']*.1}}(Service Charge) BDT</button>
                                    
                                </div>
                                
                            </div>
                            
                            <input type="hidden" name="buyer_id" value="{{$formData['buyer_id']}}">
                            <input type="hidden" name="seller_id" value="{{$formData['seller_id']}}">
                            <input type="hidden" name="gig_id" value="{{$formData['gig_id']}}">
                            <input type="hidden" name="delivery" value="{{$formData['delivery']}}">
                            <input type="hidden" name="revision" value="{{$formData['revision']}}">
                            <input type="hidden" name="amount" value="{{$formData['amount']}}">
                            
                        </form>
                        
                    </div>
                    
                </div>        
                
            </div>
            
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-md-6 col-md-offset-3 mt-3">
            <form action="{{ route('order-payment') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile Banking</label>
                  <select name="mobile_banking" id="" class="form-control">
                      <option value="">Select</option>
                      <option value="1">Bkash</option>
                      <option value="2">Nagad</option>
                      <option value="3">Rocket</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Number</label>
                    <input name="number" class="form-control" type="number">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pin</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button class="btn btn-primary btn-lg btn-block" type="submit">{{$formData['amount']}} + {{$formData['amount']*.1}}(Service Charge) BDT</button>

                {{-- <button type="submit" class="btn btn-primary">Pay Now ({{$formData['amount']}} BDT)</button> --}}

                <input type="hidden" name="buyer_id" value="{{$formData['buyer_id']}}">
                            <input type="hidden" name="seller_id" value="{{$formData['seller_id']}}">
                            <input type="hidden" name="gig_id" value="{{$formData['gig_id']}}">
                            <input type="hidden" name="delivery" value="{{$formData['delivery']}}">
                            <input type="hidden" name="revision" value="{{$formData['revision']}}">
                            <input type="hidden" name="amount" value="{{$formData['amount']}}">
              </form>
        </div>
        </div>
        
    </div>
    
    
    
</body>



<script type="text/javascript" src="https://js.stripe.com/v2/"></script>



<script type="text/javascript">
    
    $(function() {
        
        var $form         = $(".require-validation");
        
        $('form.require-validation').bind('submit', function(e) {
            
            var $form         = $(".require-validation"),
            
            inputSelector = ['input[type=email]', 'input[type=password]',
            
            'input[type=text]', 'input[type=file]',
            
            'textarea'].join(', '),
            
            $inputs       = $form.find('.required').find(inputSelector),
            
            $errorMessage = $form.find('div.error'),
            
            valid         = true;
            
            $errorMessage.addClass('hide');
            
            
            
            $('.has-error').removeClass('has-error');
            
            $inputs.each(function(i, el) {
                
                var $input = $(el);
                
                if ($input.val() === '') {
                    
                    $input.parent().addClass('has-error');
                    
                    $errorMessage.removeClass('hide');
                    
                    e.preventDefault();
                    
                }
                
            });
            
            
            
            if (!$form.data('cc-on-file')) {
                
                e.preventDefault();
                
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                
                Stripe.createToken({
                    
                    number: $('.card-number').val(),
                    
                    cvc: $('.card-cvc').val(),
                    
                    exp_month: $('.card-expiry-month').val(),
                    
                    exp_year: $('.card-expiry-year').val()
                    
                }, stripeResponseHandler);
                
            }
            
            
            
        });
        
        
        
        function stripeResponseHandler(status, response) {
            
            if (response.error) {
                
                $('.error')
                
                .removeClass('hide')
                
                .find('.alert')
                
                .text(response.error.message);
                
            } else {
                
                var token = response['id'];
                
                $form.find('input[type=text]').empty();
                
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                
                $form.get(0).submit();
                
            }
            
        }
        
        
        
    });
    
</script>

</html>