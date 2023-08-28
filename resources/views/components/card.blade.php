@props(['product'])

<div class="col-xxl-6">
    <div class="card">
        <div class="card-header border-0">
            <h4 class="card-title mb-0">{{$product->productName}}</h4>
        </div><!-- end cardheader -->
        <div class="card-body pt-0">
            
            <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Description:</h6>
            <div class="mini-stats-wid d-flex align-items-center mt-3">
                <div class="flex-shrink-0 avatar-sm">
                    <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                        <img src="{{ asset('assets/images/no-image.jpg')}}" alt="" class="rounded avatar-lg">
                    </span>
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">{{$product->description}}</h6>
                </div>
                <div class="flex-shrink-0">
                    <h6 class="mb-1">Price</h6>
                    <p class="text-muted mb-0">{{$product->price}}<span class="text-uppercase">€</span></p>
                </div>
            </div><!-- end -->
        </div><!-- end cardbody -->
    </div><!-- end card -->
</div><!-- end col -->