@extends('layouts.app')

@section('title', 'Banners')

@push('styles')
<link rel="stylesheet" href="{{ asset('web_assets/css/theme-elements.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/theme-blog.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/theme-shop.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/custom.css') }}">
@endpush

@section('content')
<div class="shop">
  <section class="page-header page-header-modern page-header-background page-header-background-pattern page-header-background-md" style="background-image: url('{{ asset('web_assets/img/banners-breadcrumb.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center p-static order-2">
          <h1 class="font-weight-bold text-dark"><strong>Banners</strong></h1>
        </div>
        <div class="col-md-12 align-self-center order-1">
          <ul class="breadcrumb d-block">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Banners</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="container py-2">
    <form enctype="multipart/form-data" method="post" class="cart" action="{{ url('banners') }}">
      {{csrf_field()}}
      <div class="row mb-2">
        <div class="col-md-4"> <img src="{{ asset('web_assets/img/main4.jpg') }}" width="100%"/> </div>
        <div class="col-md-5">
          <div class="post-block post-leave-comment">
            <h4 class="mb-3">Calculator</h4>
            <div class="p-2">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label class="form-label required font-weight-bold text-dark">Width (in feet)</label>
                  <input type="text" class="form-control" name="width" id="width" autocomplete="off"/>
                </div>
                <div class="form-group col-lg-6">
                  <label class="form-label required font-weight-bold text-dark">Height (in feet)</label>
                  <input type="text" class="form-control" name="height" id="height" autocomplete="off"/>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <label class="form-label required font-weight-bold text-dark">Quantity</label>
                  <br />
                  <div class="quantity quantity-lg mb-0">
                    <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                    <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                    <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                  </div>
                </div>
                <div class="form-group col-lg-6"> </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <label class="form-label required font-weight-bold text-dark">Printed sides</label>
                  <input type="text" class="form-control" name="print_side" value="Single Side" readonly="readonly" disabled="disabled" />
                </div>
                <div class="form-group col-lg-6">
                  <label class="form-label required font-weight-bold text-dark">Printed on</label>
                  <input type="text" class="form-control" name="print_on" value="Banner" readonly="readonly" disabled="disabled" />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <label class="form-label required font-weight-bold text-dark">Grommets</label>
                  <select class="form-control select-grommets" name="grommets">
                    <option value="" selected="selected">PLEASE CHOOSE</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                  <span class="grommets-note" style="display:none;">Grommets on every 2 feet!</span> </div>
                <div class="form-group col-lg-6">
                  <label class="form-label required font-weight-bold text-dark">Hemming</label>
                  <select class="form-control select-hemming" name="hemming">
                    <option value="" selected="selected">PLEASE CHOOSE</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
              </div>
              <!--<div class="row">
                <div class="form-group col mb-0">
                  <input type="submit" value="Checkout" class="btn btn-primary btn-modern" data-loading-text="Loading..." fdprocessedid="oztof">
                </div>
              </div>-->
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="banner-order-div d-none">
            <div class="card border-width-3 border-radius-0 border-color-hover-dark banner-order"> </div>
          </div>
        </div>
      </div>
    </form>
    <div class="row mb-2">
      <div class="col">
        <div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2 mt-2">
          <ul class="nav nav-tabs justify-content-start" role="tablist">
            <li class="nav-item active" role="presentation"><a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3 active" href="#productDescription" data-bs-toggle="tab" aria-selected="true" role="tab">Description</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3" href="#productInfo" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">FAQ</a></li>
          </ul>
          <div class="tab-content p-0">
            <div class="tab-pane px-0 py-3 active show" id="productDescription" role="tabpanel">
              <h4>Banner Printing upto 10ft wide - $2.50 per sq/ft</h4>
              <ul class="list list-icons list-icons-style-3 list-icons-sm">
                <li><i class="fas fa-check"></i> High-quality printing for indoor and outdoor banners</li>
                <li><i class="fas fa-check"></i> Ideal for trade shows, storefront displays, and events</li>
                <li><i class="fas fa-check"></i> Customize your message and elevate your brand visibility</li>
              </ul>
            </div>
            <div class="tab-pane px-0 py-3" id="productInfo" role="tabpanel">
              <div class="accordion accordion-modern" id="accordion"> @if(!empty($faqs))
                @foreach($faqs as $k => $faq)
                <div class="card card-default">
                  <div class="card-header">
                    <h4 class="card-title m-0"> <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse{{ $k }}" aria-expanded="false"> <i class="icons icon-diamond text-color-primary"></i> {{ $faq->question }}</a> </h4>
                  </div>
                  <div id="collapse{{ $k }}" class="collapse" style="">
                    <div class="card-body text-2"> {!! $faq->answer !!} </div>
                  </div>
                </div>
                @endforeach
                @endif </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('web_assets/vendor/plugins/js/plugins.min.js') }}"></script>
<script src="{{ asset('web_assets/vendor/bootstrap-star-rating/js/star-rating.min.js') }}"></script>
<script src="{{ asset('web_assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js') }}"></script>
<script src="{{ asset('web_assets/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('web_assets/vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
<!-- Current Page Vendor and Views -->
<script src="{{ asset('web_assets/js/views/view.shop.js') }}"></script>
<!-- Examples -->
<script src="{{ asset('web_assets/js/examples/examples.gallery.js') }}"></script>
<script>
function calculatePrice()
{
var width = $('input[name="width"]').val(); 
var height = $('input[name="height"]').val();
var qty = $('input[name="quantity"]').val();
var grommets = $('select[name="grommets"]').val();
var hemming = $('select[name="hemming"]').val();
//alert(hemming);

console.log("width="+width+"===Height=="+height);


if(width!='' && height!='')
{

				$.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              	});
			  
  				$.ajax({
                  url: '{{ url("banner") }}',
                  method: 'POST',   				  
				  data: {'width':width,'height':height,'qty':qty,'grommets': grommets,'hemming': hemming},
                  success: function(result){
                  	//alert(result);
					$('.banner-order').html(result);
					//alert('yes');
                  },
				  error: function(err){
				  alert(JSON.stringify(err));
				  }  
				  });
				  $('.banner-order-div').removeClass('d-none');

}
else
{
$('.banner-order-div').addClass('d-none');
}


}



$(document).ready(function()
{
$(document).on('change','.select-grommets',function()
{
var val = $('.select-grommets').val();
if(val=='Yes')
{
$('.grommets-note').css('display','block');
}
else
{
$('.grommets-note').css('display','none');
}

calculatePrice();

});

$(document).on('change','.select-hemming',function()
{

calculatePrice();

});



$('#width').on('input', function() {
            var width = $(this).val();
            if (width > 150) {
                $(this).val(''); // Clear the input field
                $(this).addClass('is-invalid'); // Add bootstrap class for invalid input
                $(this).after('<div class="invalid-feedback">Width should not be greater than 150 feet.</div>'); // Display error message
            } else {
                $(this).removeClass('is-invalid'); // Remove bootstrap class for invalid input
                $(this).next('.invalid-feedback').remove(); // Remove error message if width is within limits
            }
			calculatePrice();
        });
		
		
$('#height').on('input', function() {

			var height = $(this).val();
            if (height > 10) {
                $(this).val(''); // Clear the input field
                $(this).addClass('is-invalid'); // Add bootstrap class for invalid input
                $(this).after('<div class="invalid-feedback">Height should not be greater than 10 feet.</div>'); // Display error message
            } else {
                $(this).removeClass('is-invalid'); // Remove bootstrap class for invalid input
                $(this).next('.invalid-feedback').remove(); // Remove error message if width is within limits
            }



			calculatePrice();
        });		
		
});
</script>
<script>
  // jQuery code to increment and decrement the input value by the step attribute value
  $(document).ready(function(){
    $('.plus').click(function(){
      var input = $(this).closest('.quantity').find('.qty');
      var step = parseInt(input.attr('step'));
      var value = parseInt(input.val());
      value += step;
      input.val(value);
	  calculatePrice();
    });

    $('.minus').click(function(){
      var input = $(this).closest('.quantity').find('.qty');
      var step = parseInt(input.attr('step'));
      var value = parseInt(input.val());
      if (value > parseInt(input.attr('min'))) {
        value -= step;
        input.val(value);
		calculatePrice();
      }
    });
  });
</script>
@endpush