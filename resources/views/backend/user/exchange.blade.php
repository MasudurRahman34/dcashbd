@extends('backend.layouts.master')
@section('content')
<style type="text/css">
    img.flag {
    background: #ccc;
    height: 37px;
    width: 48px;
    padding: 2px;
    margin-bottom: 4px; }
    </style>
<div class="app-title" style="margin-bottom: 2px;">
  <div>
    <h1 class="text-primary"><i class="fa fa-edit text-danger"></i> Exchange Order</h1>
    <p>  Welcome to <span class="bg-warning"> DCASH</span> Exhange page</p>
    <ul>
       <li>1.Exchange করার পূর্বে ভালো করে নিয়ম যেনে নেওয়া উচিত।</li>

      <li>2.সকল ডলার Exchange এ 2% to 8% চার্জ প্রযোজ্য হবে।</li>

      <li>3.Amount (2$-9$) exchange এর মাধ্যমে sell দিতে পারবেন । </li>

      <li>4.শুধু  মাত্র Coinbase  মেইল দিয়ে Exchange order সাবমিট করুন।</li>

      <li>5.Neteller এবং Skrill একচেঞ্জ করতে চাইলে helpline এ কথা বলুন । </li>

      <li>বি.দ্র: একজন গ্রাহক একদিনে 50$ এর বেশি Exchange করতে পারবে না,50$ এর বেশী exchange করতে চাইলে হেল্প লাইনে কল দিন, Minimum order 2$ .</li>
      <li><mark>Helpline: +8801871139097</mark></li>
    </ul>
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
                  <label class="control-label col-md-4">Send Method<!-- <sup id="apendRate" style="font-size: 12px; color: red;"></sup> --></label>
                   <div class="col-md-8">
                    <select class="form-control col-md-8" id="paymentMathod" required>
                      <option ></option>
                      @foreach (App\model\currency::where('type', '3')->orderBy('id', 'desc')->get() as $cur)
                            <option value="{{$cur->name}}" data-id="{{$cur->rate}}" id="{{$cur->minValue}}" class="{{$cur->address}}" selected><span id="{{$cur->rate}}"></span> {{$cur->name}}</option>
                          @endforeach
                  </select>
                  </div>
                </div>
                <input type="text" name="sendMethod" value="sdfg"  id="snMethod" hidden>
                <input type="text" name="recieveMethod" value="asd"  id="rcMethod" hidden>
                <input type="text" name="type" value="Exchange" hidden>
                <div class="form-group row">
                  <label class="control-label col-md-4">Recieve Method <sup id="apendRate" style="font-size: 12px; color: red;"></sup></label>
                  <div class="col-md-8">
                    <select class="form-control col-md-8" id="sendMathod" required>
                      <option ></option>
                      @foreach (App\model\currency::where('type', '3')->orderBy('id', 'asc')->get() as $cur)
                            <option value="{{$cur->name}}" data-id="{{$cur->rate}}" id="{{$cur->minValue}}" class="{{$cur->commission}}" selected>{{$cur->name}}</option>
                          @endforeach
                  </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4">Send Amount<sup id="apendmin" style="font-size: 12px; color: red;"></sup></label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" name="sendAmount" value="1" id="recieveAmount" step="any" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4" >Recieve Amount </label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" name="recieveAmount" id="total" value="" step="any" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4"> <mark id="apendPaymentMethod"></mark> Email/ID </label>
                  
                  <div class="col-md-8">
                    <input class="form-control" name="sendAccount" type="email" placeholder="Enter Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4"><span class="SendBy"> </span> Email/ID</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="recieveAccount" id="test" required>
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
                <div class="tile-notify">
                  <div class="row">
                    <div class="col-md-12 bg-warning">
                      <p class="text-center" style="padding: 10px; font-size: 15px; ">নিচের <span class="paymentBy"> </span> আইডি তে  টাকা পাঠানোর পর Submit Button-এ ক্লিক করুন ।<br> <br>
                                <strong class="bg-success text-light" >Skrill Email :
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
        //end select2
        //while page load
          var smethodText=$('#sendMathod option:selected').text();
          var smethodVal=$('#sendMathod option:selected').attr('data-id');
          $('#rcMethod').attr('value', smethodText);
           var commission=parseFloat($('#sendMathod option:selected').attr('class'));
           $('#apendRate').text('*1$ = '+smethodVal+ 'TK');
           $('.SendBy').text(smethodText);
           recieveAmount= $('#recieveAmount').val();
            recieveAmount=parseFloat(recieveAmount);
           t=recieveAmount*(1-commission);
            $('#total').val(t);

            $('#recieveAmount').keyup(function(){
                recieveAmount= $(this).val();
                recieveAmount=parseFloat(recieveAmount);
                t=(recieveAmount*(1-commission)).toFixed(2);
                $('#total').val(t);
              });

            $('#recieveAmount').change(function(){
                recieveAmount= $(this).val();
                recieveAmount=parseFloat(recieveAmount);
                t=(recieveAmount*(1-commission)).toFixed(2);
                $('#total').val(t);
              });

            //paymentment=sendmethod changing data
            var pmethodText=$('#paymentMathod option:selected').text();
           $('#snMethod').attr('value', pmethodText);
           /*var pmethodValue=$('#paymentMathod option:selected').val();*/
          var minValue=parseInt($('#paymentMathod option:selected').attr('id'));
           var address=$('#paymentMathod option:selected').attr('class');
           $('.paymentBy').text(pmethodText);
          /* $('#apendRate').text('*1$ = '+smethodVal+ 'TK');*/
           $('#apendPaymentMethod').text(pmethodText);
           $('#recieveAmount').attr('min', minValue);
                  $('#apendmin').text( '*minimum '+ minValue);
                  $('strong').text(pmethodText +' Email/ID : '+address);
        //end page load

        //whild changing select function

      $(document).ready(function(){
        $('#sendMathod').change(function(){
          var smethodText=$('#sendMathod option:selected').text();
          var smethodVal=$('#sendMathod option:selected').attr('data-id');
          $('#rcMethod').attr('value', smethodText);
           var commission=parseFloat($('#sendMathod option:selected').attr('class'));
           $('#apendRate').text('*1$ = '+smethodVal+ 'TK');
           $('.SendBy').text(smethodText);
           recieveAmount= $('#recieveAmount').val();
            recieveAmount=parseFloat(recieveAmount);
           t=recieveAmount*(1-commission);
            $('#total').val(t);

            $('#recieveAmount').keyup(function(){
                recieveAmount= $(this).val();
                recieveAmount=parseFloat(recieveAmount);
                t=(recieveAmount*(1-commission)).toFixed(2);
                $('#total').val(t);
              });

            $('#recieveAmount').change(function(){
                recieveAmount= $(this).val();
                recieveAmount=parseFloat(recieveAmount);
                t=(recieveAmount*(1-commission)).toFixed(2);
                $('#total').val(t);
              });
          });
       
          $('#paymentMathod').change(function(){
           var pmethodText=$('#paymentMathod option:selected').text();
           $('#snMethod').attr('value', pmethodText);
           /*var pmethodValue=$('#paymentMathod option:selected').val();*/
          var minValue=parseInt($('#paymentMathod option:selected').attr('id'));
           var address=$('#paymentMathod option:selected').attr('class');
           $('.paymentBy').text(pmethodText);
          /* $('#apendRate').text('*1$ = '+smethodVal+ 'TK');*/
           $('#apendPaymentMethod').text(pmethodText);
           $('#recieveAmount').attr('min', minValue);
                  $('#apendmin').text( '*minimum '+ minValue);
                  $('strong').text(pmethodText +' Email/ID : '+address);

            });
          
        });

    </script>
 @endsection