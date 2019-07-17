@extends('backend.layouts.master')
@section('content')
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
              <form class="form-horizontal" action="kasf" method="post">
                <div class="form-group row">
                  <label class="control-label col-md-4">Send Method<sup id="apendRate" style="font-size: 12px; color: red;"></sup></label>
                   <div class="col-md-8">
                    <select class="form-control col-md-8" id="paymentMathod">
                      <option >Select Send Method</option>
                      <option value="83">Perfect Money</option>
                      <option value="84">Coinbase</option>
                      <option value="86">LiteCoin</option>
                      <option value="87">Ethereum</option>
                      <option value="80">BCH USD</option>
                      <option value="82.7">ETH USD</option>
                      <option value="85">0x(ZRX)</option>                  <option value="88">BSV USD</option>
                      <option value="88">XRP Wallet</option>
                  </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4">Recieve Method</label>
                  <div class="col-md-8">
                    <select class="form-control col-md-8" id="sendMathod">
                      <option value="83">Perfect Money</option>
                      <option value="84">Coinbase</option>
                      <option value="86">LiteCoin</option>
                      <option value="87">Ethereum</option>
                      <option value="80">BCH USD</option>
                      <option value="82.7">ETH USD</option>
                      <option value="88">XRP Wallet</option>
                  </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4">Send Amount<sup id="apendmin" style="font-size: 12px; color: red;"></sup></label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" id="recieveAmount"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4" >Recieve Amount </label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" id="total" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4"> <mark id="apendPaymentMethod"></mark> Email </label>
                  
                  <div class="col-md-8">
                    <input class="form-control" type="email" placeholder="Enter Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4"><span class="SendBy"> </span> Email/Id</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="trns_number" id="test">
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
                                <b class="bg-success text-light" >Skrill Email :
                                 Skrill@Email.Com
                                </b>
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
           $('.SendBy').text(smethodText);
          });
       
          $('#paymentMathod').change(function(){
           var pmethodText=$('#paymentMathod option:selected').text();
           var pmethodValue=$('#paymentMathod option:selected').val();
           $('.paymentBy').text(pmethodText);
           $('#apendRate').text('*1$ = '+pmethodValue+ 'TK');
           console.log(pmethodValue);
            
           $('#apendPaymentMethod').text(pmethodText);

           switch (pmethodText){
              case 'Coinbase':
                $('#recieveAmount').attr('min', 2);
                  $('#apendmin').text( '*minimum 2');
                  $('b').text('Coinbase Email : Coinbase@email.com');
                  break;
              case 'Perfect Money':
                $('#recieveAmount').attr('min', 2);
                  $('#apendmin').text( '*minimum 2 $/doge');
                  $('b').text('Perfect Money Id: U234235');
                  break;
              case 'LiteCoin':
                $('#recieveAmount').attr('min', 2);
                  $('#apendmin').text( '*minimum 2');
                  $('b').text('LiteCoin Email : LiteCoin@email.com');
                break;
              case 'Ethereum':
                $('#recieveAmount').attr('min', 2);
                  $('#apendmin').text( '*minimum 2');
                  $('b').text('Ethereum Email : Ethereum@email.com');
                  break;
              
        case 'BCH USD':
                $('#recieveAmount').attr('min', 2);
                  $('#apendmin').text( '*minimum 2');
                  $('b').text('BCH USD Email/ID: qqekmuf7eyu7us206cguyvtrgn5j85qadqkevq97ar (coinbase mail ) rahman196412@gmail.com');
                  break;
               case 'ETH USD':
                $('#recieveAmount').attr('min', 2);
                  $('#apendmin').text( '*minimum 2');
                  $('b').text('ETC USD Email/ID: 0x16cEed58EbBE76f5F952bb99fCb84f969020C69B (coinbasemail) rahman196412@gmail.com');
                  break;

                  case '0x(ZRX)':
                $('#recieveAmount').attr('min', 2);
                  $('#apendmin').text( '*minimum 2');
                  $('b').text('0x (ZRX) Email/ID: 0x057A42e7E9D11c7F09F2692D7c671E8BCF2dBBfd (coinbase mail ) rahman196412@gmail.com');
                  break;
                  case 'BSV USD':
                $('#recieveAmount').attr('min', 1);
                  
                  $('b').text('BSV USD Email/ID: rahman196412@gmail.com ( coinbase mail )');
                  break;
                  case 'XRP Wallet':
                $('#recieveAmount').attr('min', 2);
                  $('#apendmin').text( '*minimum 2');
                  $('b').text('XRP Wallet Email/ID: rw2ciyaNshpHe7bCHo4bRWq6pqqynnWKQg (XRP Tag:1294144053) (coinbase mail) rahman196412@gmail.com');
                  break;


              default:
                $('#recieveAmount').attr('min', 1);
                  $('#apendmin').text( '');
           }
            
            pmethod=$(this).val();
            pmethod=parseFloat(pmethod);
            recieveAmount= $('#recieveAmount').val();
            recieveAmount=parseFloat(recieveAmount);
           t=recieveAmount*(1-.12);
            $('#total').val(t);
            $('#recieveAmount').change(function(){
                recieveAmount= $(this).val();
                recieveAmount=parseFloat(recieveAmount);
                t=recieveAmount*(1-.12);
                $('#total').val(t);
                 
              });
            
            });
          
        });

    </script>
      @endsection