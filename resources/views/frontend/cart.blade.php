@extends("frontend.layout")
@section("content")

    <div class="environment-subheader">
        <span class="subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Shopping cart</h1>
                </div>
                <div class="col-md-12">
                    <ul class="environment-breadcrumb">
                        <li><a href="/">Homepage</a></li>
                        <li class="active">Shopping cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-align: center ; margin-top: 20px">Shopping Cart</h2>
                </div>
                <div class="col-lg-12" style="margin-bottom: 30px;margin-top: 30px;}">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                            <tr >
                                <th style="text-align: left">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $p)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{$p->getImage()}}" style="width: 100px ; height: 100px" alt="">
                                        <h5>{{$p->__get("product_name")}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{$p->getPrice()}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{$p->cart_qty}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        ${{$p->cart_qty * $p->__get("price")}}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="/shop" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading">
                            </span>
                            Upadate Cart
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>${{$grandTotal}}</span></li>
                            <li>Total <span>${{$grandTotal}}</span></li>
                        </ul>
                        <a href="{{url("/checkout")}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
