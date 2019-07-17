@extends('backend.layouts.master')

    @section('content')
<div class="app-title" style="margin-bottom: 2px;">
        <div>
          <h1><i class="fa fa-edit"></i> Buy Order</h1>
          <p>DCASH এর সম্মানিত সদস্যগন Helpline = 01918375215 @ DCASH এর সম্মানিত সদস্যগন SKRILL / NETELLER 30 $ এর কম BUY করলে ট্রনজেকশন ফি 1$ বাদ যাবে। 30 $ বা তার বেশি BUY ক্ষেত্রে কোন ফি কাটা হবে না ।</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="tile">
              <!-- <h3 class="tile-title">Register</h3> -->
            <div class="tile-body">
              <form class="form-horizontal">
                    <div class="form-group row">
                      <label class="control-label col-md-4">Send Method</label>
                      <div class="col-md-8">
                        <select class="form-control col-md-8" id="sendMathod" required>
                          <option></option>
                          @foreach (App\model\paymentmethod::where('type', '1')->get() as $pm)
                            <option id="{{$pm->address}}">{{$pm->name}}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-4">Recieve Method</label>
                       <div class="col-md-8">
                        <select class="form-control col-md-8" id="paymentMathod"  required>
                          <option></option>
                          @foreach (App\model\currency::where('type', '1')->get() as $cur)
                            <option value="{{$cur->rate}}" id="{{$cur->minValue}}">{{$cur->name}}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-4">Send Amount</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" id="total" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-4" >Recieve Amount <sup id="apendmin" style="font-size: 13px; color: red;"></sup></label>
                      <div class="col-md-8">
                        <input class="form-control" type="number" value="1" id="recieveAmount"  required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-4"><span class="paymentBy"> </span> Number</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" name="trns_number" minlength="11" required>
                      </div>
                    </div>
                    <div class="form-group row" id="hidetranx">
                      <label class="control-label col-md-4"><span class="paymentBy"> </span> Transaction ID</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" minlength="11" id="Transaction_id" placeholder="Transaction_id" required>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label class="control-label col-md-4"> <mark id="apendPaymentMethod"></mark> Email </label>
                      
                      <div class="col-md-8">
                        <input class="form-control" type="email" placeholder="Enter Email" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-8 col-md-offset-3">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" required>I accept the terms and conditions
                          </label>
                        </div>
                      </div>
                    </div>
                  <div class="tile-notify">
                    <div class="row">
                      <div class="col-md-12 bg-warning">
                        <p class="text-center" style="padding: 10px; font-size: 15px;">নিচের <span class="paymentBy"> Bkash </span> নাম্বারে টাকা পাঠানোর পর Submit Button-এ ক্লিক করুন ।<br> <br>
                                  <b class="bg-success" style="padding: 5px;">Cash Out From :
                                   017501488547
                                  (Agent Number)</b>
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
      <script type="text/javascript">
           
      $(document).ready(function(){
        $('#sendMathod').change(function(){
          var smethodText=$('#sendMathod option:selected').text();
          var smethodNumber=$('#sendMathod option:selected').attr('id');
           $('.paymentBy').text(smethodText);
           if (smethodText=="Coinbase (Perfect Money 2") {
            $('b').text(smethodNumber);
           } else{
            $('b').text('Cash Out From : '+smethodNumber+' Agent Number');
           }
           if (smethodText=="Brac Bank") {
            $('#hidetranx').hide();
            $('#Transaction_id').prop("disabled", true);
            $('b').text(smethodNumber);
           }else{
            $('#hidetranx').show();
             $('#Transaction_id').prop("disabled", false);
           }
        });
       
        
          $('#paymentMathod').change(function(){
           var pmethodText=$('#paymentMathod option:selected').text();
           var pmethodmin=$('#paymentMathod option:selected').attr('id');
           pmethodmin=parseInt(pmethodmin);
            
           $('#apendPaymentMethod').text(pmethodText);
            
            
              $('#recieveAmount').attr('min', pmethodmin);
              $('#apendmin').text( '*minimum '+pmethodmin);

            pmethod=$(this).val();
            pmethod=parseFloat(pmethod);
            recieveAmount= $('#recieveAmount').val();
            recieveAmount=parseFloat(recieveAmount);
            t=pmethod*recieveAmount;
            $('#total').val(t);
            $('#recieveAmount').change(function(){
                recieveAmount= $(this).val();
                recieveAmount=parseFloat(recieveAmount);
                t=pmethod*recieveAmount;
                $('#total').val(t);
                 
              });
            
            });
          
        });

    </script>
    @endsection
 
      
    