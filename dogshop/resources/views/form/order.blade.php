@extends('master')

@section('content')
<!-- Page title -->
<div class="page-title">
    <div class="container">
        <h2><i class="fa fa-paw color"> </i> {{$title}} </h2>
        <hr />
  </div>
</div>
     <div class="checkout">
         <div class="container">
            <h4>Shipping & Billing Details</h4>
            <br />
            <form class="form-horizontal" role="form" method="POST" action="">
              <div class="form-group">
                <label for="name" class="col-md-2 control-label">Name</label>
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>            
              <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email</label>
                <div class="col-md-4">
                    <input type="text" name="email" class="form-control" id="inputEmail1" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-md-2 control-label">Phone Number</label>
                <div class="col-md-4">
                    <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Phone">
                </div>
              </div>
              <div class="form-group">
                <label for="country" class="col-md-2 control-label">Country</label>
                <div class="col-md-4">
                    <select name="country" class="form-control">
                    <option>Select Country</option>
                    <option>USA</option>
                    <option>India</option>
                    <option>Canada</option>
                    <option>UK</option>
                  </select>
                </div>
              </div>              
              <div class="form-group">
                  <label for="address" class="col-md-2 control-label">Address</label>
                  <div class="col-md-4">
                      <textarea name="address" class="form-control" rows="3" placeholder="Address"></textarea>
                  </div>
              </div>
              <div class="form-group">
                <label for="zip_code" class="col-md-2 control-label">Zip Code</label>
                <div class="col-md-4">
                  <input type="text" name="zip_code" class="form-control" id="inputZip" placeholder="Zip Code">
                </div>
              </div>
              
              <hr />
              <h4>Payment Details</h4>
              
              <div class="form-group">
                <label for="payment" class="col-md-2 control-label">Payment Method</label>
                <div class="col-md-4">
                    <select name="payment" class="form-control">
                    <option>Payment Method</option>
                    <option>Credit Card</option>
                    <option>Debit Card</option>
                    <option>Internet Banking</option>
                    <option>Check</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-offset-2 col-md-4">
                  <div class="checkbox">
                    <label>
                        <input type="checkbox" name="accept"> Accept Terms & Conditions
                    </label>
                  </div>
                </div>
              </div>
              <hr />
              <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                  <input type="submit" class="btn btn-danger" value="Confirm Order">
                  <button type="reset" class="btn btn-default">Reset</button>
                </div>
              </div>
            </form>
            
         </div>
      </div>
     




@endsection