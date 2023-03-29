@include('header')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($products as $product)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img style="aspect-ratio: 4/3;object-fit: cover;" class="card-img-top" src="{{$product['image']}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$product['title']}}</h5>
                                <!-- Product price-->
                                CHF {{$product['price']}}
                                <br>
                                <small class="text-muted">{{$product['short_description']}}</small>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><button style="width: 80%;" class="btn btn-outline-dark mt-auto" onclick="addToCart('{{$product['sku']}}')"><i class="bi-cart-fill me-1"></i> </button></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('footer')
