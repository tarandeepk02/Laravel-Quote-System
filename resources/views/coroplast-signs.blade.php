@extends('layouts.app')

@section('title', 'Coroplast Signs')

@push('styles')
<style>
label
{
color:#222;
}
.asterrisk
{
color:red;
}
#us2
{
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.adon-div img
{
border:1px solid #000;
padding:2px;
border-radius:10px;
}
.adon-div p
{
margin-bottom:0px;
line-height:15px;
}
.font-10
{
font-size:10px;
}
.radio-container {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}

/*.radio-container input {
  position: absolute;
  opacity: 0;
}*/

.checkmark {
  position: absolute;
  left: -30px; /* Adjust this value to position the radio button */
  top: 50%;
  transform: translateY(-50%);
  height: 20px;
  width: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 50%;
}

.content {
  display: inline-block;
  vertical-align: middle;
  margin-left: 20px; /* Adjust as needed for space between the radio button and content */
}
.custom-table thead
{
background:#b6b8ba;
}
.custom-table thead span
{
font-size:10px;
}
.custom-table tbody
{
background:#e4e5e6;
}
.wid100
{
width:100%;
}
.price
{
font-size:30px;
}

</style>
<link rel="stylesheet" href="{{ asset('web_assets/css/theme-elements.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/theme-blog.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/theme-shop.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/custom.css') }}">
@endpush

@section('content')
<div class="shop">
  <section class="page-header page-header-modern page-header-background page-header-background-pattern page-header-background-md" style="background-image: url('{{ asset('web_assets/img/coroplast-signs.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center p-static order-2">
          <h1 class="font-weight-bold text-dark">Coroplast <strong>Signs</strong></h1>
        </div>
        <div class="col-md-12 align-self-center order-1">
          <ul class="breadcrumb d-block">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Coroplast Signs</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="container py-2">
    <form enctype="multipart/form-data" method="post" class="cart" action="{{ url('coroplast-signs') }}">
      {{csrf_field()}}
      <div class="">
        <div class="row mb-3">
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="thumb-gallery-wrapper">
              <div class="mb-3">
                <div> <img alt="" class="img-fluid custom-img" src="{{ asset('web_assets/coroplast/main.jpg') }}" data-zoom-image="img/products/product-grey-7.jpg"> </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="summary entry-summary position-relative">
              <h1 class="mb-0 font-weight-bold text-7">Coroplast Signs</h1>
              <div class="divider divider-small">
                <hr class="bg-color-grey-scale-4">
              </div>
              <table class="table table-borderless" style="max-width: 300px;">
                <tbody>
                  <tr>
                    <td class="align-middle text-2 px-0 py-2">SIZE:</td>
                    <td class="px-0 py-2"><div class="custom-select-1">
                        <select name="size" class="form-control form-select text-1 h-auto py-2 select-size" required>
                          <option value="">PLEASE CHOOSE</option>
                          <option value="12x12" data-step="32" data-grommet="2">12" x 12"</option>
                          <option value="16x12" data-step="24" data-grommet="2">16" x 12"</option>
                          <option value="24x16" data-step="12" data-grommet="2">24" x 16"</option>
                          <option value="24x18" data-step="10" data-grommet="2">24" x 18"</option>
                          <option value="32x24" data-step="6" data-grommet="2">32" x 24"</option>
                          <option value="32x48" data-step="3" data-grommet="3">32" x 48"</option>
                          <option value="48x48" data-step="2" data-grommet="4">48" x 48"</option>
                          <option value="48x96" data-step="1" data-grommet="6">48" x 96"</option>
                        </select>
                        <input type="hidden" name="sheet_count" id="sheetCount" value="1" />
                      </div></td>
                  </tr>
                  <tr class="quantityTr" style="display:none;">
                    <td class="align-middle text-2 px-0 py-1">QUANTITY:</td>
                    <td class="px-0 py-1"><div class="quantity quantity-lg">
                        <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                        <input type="text" class="input-text qty text" title="Qty" value="32" name="quantity" min="32" step="32" stepp="32">
                        <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                      </div></td>
                  </tr>
                  <tr>
                    <td class="align-middle text-2 px-0 py-2">SIDE:</td>
                    <td class="px-0 py-2"><div class="custom-select-1">
                        <select name="side" class="form-control form-select text-1 h-auto py-2 select-side" required>
                          <option value="">PLEASE CHOOSE</option>
                          <option value="Single Side" data-price="55">4mm Coroplast Printed 1 Sided (4/0)</option>
                          <option value="Double Side" data-price="89">4mm Coroplast Printed 2 Sided (4/4)</option>
                        </select>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="align-middle text-2 px-0 py-2"></td>
                    <td class="px-0 py-2"><label for="cut">
                      <input type="checkbox" id="cut" name="cut" value="1" />
                      Cut to Size</label></td>
                  </tr>
                </tbody>
              </table>
              <!--<h1 class="mb-3 font-weight-bold text-7">Adon</h1>-->
              <div class="row adon-div mb-3">
                <div class="col-6 col-md-4 mb-3">
                  <article class="post">
				  <label for="option1">
                    <div class="row">
                      <div class="col-auto pe-0">
                        <input type="radio" name="adon" value="Simple Hole" id="option1" required/>
                      </div>
                      <div class="col ps-1">
                        <h5 class="line-height-3 mb-0">Simple Holes</h5>
                        <p class="mb-1 font-10">on each corner</p>
                        <!--<p class="mb-2"><strong class="text-color-dark">$0.99</strong></p>-->
                      </div>
                    </div>
                    <img src="{{ asset('web_assets/coroplast/hole.png') }}" width="150" height="100"/>
					
					</label> </article>
                </div>
                <div class="col-6 col-md-4 grommet-div mb-3">
                  <article class="post">
				  <label for="option2">
                    <div class="row">
                      <div class="col-auto pe-0">
                        <input type="radio" name="adon" value="Grommet" id="option2" required/>
                      </div>
                      <div class="col ps-1">
                        <h5 class="line-height-3 mb-0">Grommet</h5>
                        <p class="mb-1 font-10">on each corner</p>
                        <!--<p class="mb-2"><strong class="text-color-dark">$1.99</strong></p>-->
                      </div>
                    </div>
                    <img src="{{ asset('web_assets/coroplast/grommet.png') }}" width="150" height="100"/></label> </article>
                </div>
                <div class="col-6 col-md-4 mb-3">
                  <article class="post">
				  <label for="option3">
                    <div class="row">
                      <div class="col-auto pe-0">
                        <input type="radio" name="adon" value="Yard Stick" id="option3" required/>
                      </div>
                      <div class="col ps-1">
                        <h5 class="line-height-3 mb-0">Yard Stick</h5>
                        <p class="mb-1 font-10">&nbsp;</p>
                        <!--<p class="mb-2"><strong class="text-color-dark">$1.99</strong></p>-->
                      </div>
                    </div>
                    <img src="{{ asset('web_assets/coroplast/Yard-Stick.png') }}" width="150" height="100"/></label> </article>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <table class="table table-bordered table-stripped custom-table">
              <thead>
                <tr>
                  <th>Size</th>
                  <th>Side</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>4'x8'</td>
                  <td>Single Side</td>
                  <td>$45</td>
                </tr>
                <tr>
                  <td>4'x8'</td>
                  <td>Double Side</td>
                  <td>$80</td>
                </tr>
                <tr>
                  <td colspan="2">Cut to Size (per sheet)</td>
                  <td>$10</td>
                </tr>
              </tbody>
            </table>
            <div class="coroplast-order-div d-none">
              <div class="card border-width-3 border-radius-0 border-color-hover-dark coroplast-order"> </div>
            </div>
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
              <h4>4'x8' Coroplast Sheets - $45 each</h4>
              <ul class="list list-icons list-icons-style-3 list-icons-sm">
                <li><i class="fas fa-check"></i> Perfect for outdoor signage, events, and promotions</li>
                <li><i class="fas fa-check"></i> Durable, weather-resistant, and customizable</li>
                <li><i class="fas fa-check"></i> Make a big impact without breaking the bank</li>
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
var qty = $('.qty').val(); 
var val = $('.select-side').val();
var adon = $('input[name="adon"]:checked').val();

var adon_val = $('select[name="size"]').find(":selected").attr('data-grommet');

var step = $('select[name="size"]').find(":selected").attr('data-step');

var cut = ($("#cut").is(':checked')) ? 'Yes' : 'No';
var sheet_count = $('#sheetCount').val();
if(val!='' && qty!='')
{
				$.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              	});
			  
  				$.ajax({
                  url: '{{ url("coroplast-sign") }}',
                  method: 'POST',   				  
				  data: {'qty':qty,'side':val,'adon':adon,'adon_val': adon_val,'step': step,'cut': cut,'sheet_count': sheet_count},
                  success: function(result){
                  	//alert('yes');
					$('.coroplast-order').html(result);
					//alert('yes');
                  },
				  error: function(err){
				  //alert(JSON.stringify(err));
				  }  
				  });

}


$('.coroplast-order-div').removeClass('d-none');
}

function getImage(side,radio)
{

if(side!='' && radio!='')
{

if(side=='Single Side')
{

var imgSrc = '{{ url('/') }}/'+'public/web_assets/coroplast/single-'+radio.replace(/\s+/g, '-')+'.png';

//alert(imgSrc);
}
else
{
var imgSrc = '{{ url('/') }}/'+'public/web_assets/coroplast/double-'+radio.replace(/\s+/g, '-')+'.png';
}
$('.custom-img').attr('src',imgSrc);

}

}


$(document).ready(function()
{

$(document).on('change','.select-size',function()
{


var val = $('.select-size').find(':selected').val();
var step = $('.select-size').find(':selected').attr('data-step');

//alert(step);

$('input[name="quantity"]').attr('min',step);
$('input[name="quantity"]').attr('step',step);
$('input[name="quantity"]').attr('stepp',step);

$('.quantityTr .qty').val(step);
$('.quantityTr').css('display','contents');




var sheetCount = 1;
$('#sheetCount').val(sheetCount);	  
calculatePrice();

});


$(document).on('change','.select-side',function()
{
calculatePrice();

var val = $('.select-side').find(':selected').val();

/*if(val=='Single Side')
{
$('.grommet-div').css('display','block');
}
else
{
$('.grommet-div').css('display','none');
}*/
//$('.qty').val('12');
var adon = $('input[name="adon"]:checked').val();
getImage(val,adon);

});


$(document).on('click','input[name="adon"]',function()
{
var adon = $('input[name="adon"]:checked').val();
var side = $('.select-side').find(':selected').val();

getImage(side,adon);
calculatePrice();
});

$(document).on('click','input[name="cut"]',function()
{
var cut = $('input[name="cut"]').val();
//alert("cut="+cut);
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
	  
	  //Sheet Count
	  var sheetCount = parseInt($('#sheetCount').val())+1;
	  $('#sheetCount').val(sheetCount);	
	  
	  calculatePrice();  
    });

    $('.minus').click(function(){
      var input = $(this).closest('.quantity').find('.qty');
      var step = parseInt(input.attr('step'));
      var value = parseInt(input.val());
      if (value > parseInt(input.attr('min'))) {
        value -= step;
        input.val(value);
				
		//Sheet Count
		  var sheetCount = parseInt($('#sheetCount').val())-1;
		  $('#sheetCount').val(sheetCount);	 
		  calculatePrice();
      }
    });
  });
</script>
@endpush