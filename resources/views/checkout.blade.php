@extends('layouts.default')
@section('title','Checkout')

@section('content')
    <main class="container" style="max-width: 900px">
        <section>
            <h2>Checkout</h2>

            @if (@session()->has("success"))
            <div class="alert alert-success">
                {{session()->get("success")}}
            </div>
            @endif
    
            @if (@session("error"))
            <div class="alert alert-danger">
                {{session("error")}}
            </div>
            @endif

            <form action="{{route('checkout.post')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="address" class="form-label">
                        Address
                    </label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">
                        Phone number
                    </label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="pincode" class="form-label">
                        Pincode
                    </label>
                    <input type="text" name="pincode" id="pincode" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Proceed to Payment
                </button>
            </form>
        </section>
    </main>
@endsection
