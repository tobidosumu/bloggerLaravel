@extends('layouts.base')

<!-- Style/title for cart page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/cart.css') }}">
    <title>{{ 'Blogger | Cart' }}</title>
@endsection

@section('content')

<!-- Cart page container/wrapper -->
<section class="blogContents">
            
    <section class="mainContentContainer"> 

        <!-- Logged in user view -->
        <div class="loggedInCartContents d-flex justify-content-between">
            
            <main class="border border-end-0">
                
                <div class="contentTitle d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                    <h3>Shopping Cart</h3>
                    <h5>3 Items</h5>
                </div>

                <table class="table table-borderless">

                    <thead>
                        <tr>
                            <th scope="col">Product Details</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-center">Price</th>
                            <th scope="col" class="text-center">Total</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>

                            <td class="d-flex">
                                <div class="productPhoto me-3">
                                    <img src="{{ ('frontend_assets/assets/images/addidas.webp') }}" alt="product photo">
                                </div>
                                <div class="productInfo d-flex flex-column justify-content-around">
                                    <h6 class="d-inline-block text-truncate">Adidas Vs Pace Lifestyle</h6>
                                    <p><a href="#">Shoes</a></p>
                                    <i class="bi bi-trash3"></i>
                                </div>
                            </td>

                            <td class="productQuantity text-center">
                                <div class="d-flex justify-content-around align-items-center">            
                                    <button>-</button>         
                                    <h2 id="counting">1</h2>
                                    <button>+</button>  
                                </div>
                            </td>
                            <td class="productPrice text-center">₦ 29,978</td>
                            <td class="totalPrice text-center">₦ 29,978</td>

                        </tr>
                        
                    </tbody>

                </table>

            </main>

            <aside class="border">

                <div class="contentTitle d-flex justify-content-between align-items-center border-bottom">
                    <h3>Order Summary</h3>
                </div>

                <div class="orderSummary d-flex justify-content-between">
                    <p>Items 3</p>
                    <p>₦ 29,978</p>
                </div>

                <div class="orderShipping d-flex flex-column pt-3">
                    <p>Shipping</p>
                    <select class="form-select form-select-sm mt-3" aria-label=".form-select-sm example">
                        <option selected>Standard Delivery - ₦500</option>
                        <option value="1500">Express Delivery - ₦2,500</option>
                        <option value="1500">Delivery By Mail - ₦3,500</option>
                    </select>
                </div>

                <div class="promoCode pt-3">
                    <p class="pb-3">Promo code</p>
                    <input type="text" class="rounded-1" placeholder="Enter your code">
                    <button type="submit" class="mt-4 border-0 rounded-1">Apply</button>
                </div>

                <div class="orderFooter pt-4 mt-5 border-top">
                    <div class="totalCost d-flex justify-content-between">
                        <p>Total cost</p>
                        <p>₦ 29,978</p>
                    </div>
                    <button type="submit" class="mt-4 border-0 rounded-1">Checkout</button>
                </div>

            </aside>

        </div>

    </section>

</section>

@endsection