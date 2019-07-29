@extends('backend.layouts.master')
@section('content')
  <style type="text/css">
    img.flag {
    background: #ccc;
    height: 37px;
    width: 48px;
    padding: 2px;
    margin-bottom: 4px;}
    </style>
<div class="app-title" style="margin-bottom: 2px;">
        <div>
          <h1 class="text-primary" style="background-color:#f5f5f5; padding: 5px;"><i class="fa fa-shopping-bag text-danger"></i> Sell Order</h1>
          <p style="border-left: 3px solid #FF9000; padding: 15px;" > <span class="bg-warning"> DCASH</span> এর সম্মানিত সদস্যগন SKRILL / NETELLER 40$ বা তার বেশি SELL করতে চাইলে 01767227271 এই নাম্বারে অবশ্যই কল দিবেন ।
			<span class="bg-warning"> DCASH</span> এর সম্মানিত সদস্যগণ SKrill / Neteller বিক্রয় করার ক্ষেত্রে মেইল না থাকলে  01767227271 এই নাম্বারে কল দিন । আমরা আপনার Skrill / Neteller উচ্চ মুল্যে ক্রয় করব। SKRILL / NETELLER 40$ বা তার বেশি বিক্রয় করার ক্ষেত্রে অবশ্যই কল দেবেন ।

			Coinbase BTC SELL করার ক্ষেত্রে এই মেইলে পাঠাতে পারবেন   <span class="bg-warning">dcash@gmail.com</span>এবং address এ sell  করার ক্ষেত্রে pending active হওয়ার পর প্রেমেন্ট দেওয়া হয় । BTC Sell করার ক্ষেত্রে নোট অফশনে আপনার বিকাশ / রকেট নাম্বার অবশ্যই দেবেন।</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->
            <div class="tile-body">
              <form class="form-horizontal" action="{{ route('transaction.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                  <label class="control-label col-md-4">Send Method</label>
                   <div class="col-md-8">
                    <select class="form-control col-md-8" name="sendMethod" id="paymentMathod" required>
                      <option></option>
                      @foreach (App\model\currency::where('type', '2')->orderBy('id', 'desc')->get() as $cur)
                            <option value="{{$cur->name}}" data-id="{{$cur->rate}}" id="{{$cur->minValue}}" class="{{$cur->address}}" selected>{{$cur->name}}</option>
                          @endforeach
                  </select>
                  </div>
                </div>
                <input type="text" name="type" value="Sell" hidden>
                 <div class="form-group row">
                  <label class="control-label col-md-4">Recieve Method</label>
                  <div class="col-md-8">
                    <select class="form-control col-md-8" name="recieveMethod" id="sendMathod" required>
                      <option></option>
                       @foreach (App\model\paymentmethod::where('type', '2')->orderBy('id', 'desc')->get() as $pm)
                            <option id="{{$pm->address}}" value="{{$pm->name}}" selected>{{$pm->name}}</option>
                          @endforeach
                  </select>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="control-label col-md-4">Send Amount  <sup id="apendmin" style="font-size: 13px; color: red;"></sup></label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" name="sendAmount" id="recieveAmount" value="1" step="any" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4" >Recieve Amount </label>
                  <div class="col-md-8">
                    <input class="form-control" name="recieveAmount" type="number" id="total" step="any" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4"><span class="SendBy"> </span> Number</label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" minlength="11" name="recieveAccount"  required>
                  </div>
                </div>
                 <div class="form-group row">
                  <label class="control-label col-md-4"> <mark id="apendPaymentMethod"></mark> Email/ID </label>
                  
                  <div class="col-md-8">
                    <input class="form-control" name="sendAccount" type="text" placeholder="Enter Email/ID" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-3">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">I accept the terms and conditions
                      </label>
                    </div>
                  </div>
                </div>
            </div>
            <div class="tile-notify">
              <div class="row">
                <div class="col-md-12 bg-warning">
                  <p class="text-center" style="padding: 10px; font-size: 15px;">নিচের <span class="paymentBy"> </span> আইডি তে  টাকা পাঠানোর পর Submit Button-এ ক্লিক করুন ।<br> <br>
                            <strong class="bg-success text-light" style="padding:10px;">Skrill Email :
                             Skrill@Email.Com
                            </strong>
                        </p>
                </div>
              </div>
            </div>
            <div class="tile-footer">
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-primary" type="submit" style="float: right;"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                      </div>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      @endsection
      @section('script')
      <script src="{{ asset('admin/js/plugins//select2.min.js') }}" ></script>
      <script type="text/javascript">
       //select2 image
        function formatState (state) {
          if (!state.id) {
            return state.text;
          }
          var baseUrl = "{{ asset('img/currency') }}";
          var $state = $(
            '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.jpg" class="flag" /> ' + state.text + '</span>'
            );
          return $state;
        };
        $("#sendMathod, #paymentMathod").select2({
          width: '100%',
          templateSelection: formatState   
        });

      //End select2 image

      //while page load
      var smethodText=$('#sendMathod option:selected').text();
           $('.SendBy').text(smethodText);
      //end page loade

      //while changing select
      $(document).ready(function(){
        $('#sendMathod').change(function(){
          var smethodText=$('#sendMathod option:selected').text();
           $('.SendBy').text(smethodText);
          });
          var pmethodText=$('#paymentMathod option:selected').text();
           var minValue=parseInt($('#paymentMathod option:selected').attr('id'));
           var address=$('#paymentMathod option:selected').attr('class');
           var pmethod=$('#paymentMathod option:selected').attr('data-id');
  
           var recieveAmount= $('#recieveAmount').val();

           $('.paymentBy').text(pmethodText);
            
           $('#apendPaymentMethod').text(pmethodText);

           $('#recieveAmount').prop('min', minValue);
                  $('#apendmin').text( '*minimum' + minValue);
                  $('strong').text('Email/id : '+ address);
            
            pmethod=parseFloat(pmethod);
            recieveAmount=parseFloat(recieveAmount);
            t=pmethod*recieveAmount;
            $('#total').val(t);

            $('#recieveAmount').keyup(function(){
              recieveAmount= $(this).val();
              var sendVal=parseFloat($('#paymentMathod option:selected').attr('data-id'));
              recieveAmount=parseFloat(recieveAmount);
              t=sendVal*recieveAmount;
              $('#total').val(t);
            });
       
          $('#paymentMathod').change(function(){
           var pmethodText=$('#paymentMathod option:selected').text();
           var minValue=parseInt($('#paymentMathod option:selected').attr('id'));
           var address=$('#paymentMathod option:selected').attr('class');
           var pmethod=$('#paymentMathod option:selected').attr('data-id');
  
           var recieveAmount= $('#recieveAmount').val();

           $('.paymentBy').text(pmethodText);
            
           $('#apendPaymentMethod').text(pmethodText);

           $('#recieveAmount').prop('min', minValue);
                  $('#apendmin').text( '*minimum' + minValue);
                  $('strong').text('Email/id : '+ address);
            
            pmethod=parseFloat(pmethod);
            recieveAmount=parseFloat(recieveAmount);
            t=pmethod*recieveAmount;
            $('#total').val(t);

            $('#recieveAmount').keyup(function(){
              recieveAmount= $(this).val();
              var sendVal=parseFloat($('#paymentMathod option:selected').attr('data-id'));
              recieveAmount=parseFloat(recieveAmount);
              t=sendVal*recieveAmount;
              $('#total').val(t);
            });
            $('#recieveAmount').change(function(){
                var recieveAmount= $(this).val();
                recieveAmount=parseFloat(recieveAmount);
                t=pmethod*recieveAmount;
                $('#total').val(t);
                 
              });
            
            });
          
        });

    </script>
      @endsection