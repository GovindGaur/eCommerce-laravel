@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-10">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>${{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>

                </tr>
                <tr>
                    <td>Delevery Charges</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total +10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="user_name" class="form-control" placeholder="Enter The Name"><br>
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control" placeholder="Enter The Address"></textarea>
                </div>
                <div class="form-group">
                    <label for="Payment_method">Payment Method</label><br><br>
                    <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>Emi Payment</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>Cash On Delevery</span>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>
    </div>

</div>
@endsection