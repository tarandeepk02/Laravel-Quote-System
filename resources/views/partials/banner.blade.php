@php
$amount = $width*$height*2.5;
$perimeter = $width+$height;


if($grommets=='Yes')
{
$adonAmount = $qty*$perimeter*0.50;
$addonTitle = 'Grommets';
}
else
{
$adonAmount = 0;
$addonTitle = '';
}


if($hemming=='Yes')
{
$adonAmountH = $qty*$perimeter*1;
$addonTitleH = 'Hemming';
}
else
{
$adonAmountH = 0;
$addonTitleH = '';
}


$banner_amount = (int)$qty*$amount;
$adon_amount = (int)$qty*$adonAmount;

$total = (int)$banner_amount+$adon_amount+$adonAmountH;
@endphp
<div class="card-body" style="padding:15px 10px;">
  <h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Banner</h4>
  <table class="shop_table cart-totals mb-3">
    <tbody>
	
	
		<tr>
        <td><strong class="d-block text-color-dark line-height-1 font-weight-semibold">Size</strong> </td>
        <td class="text-end align-top"><span class="amount font-weight-medium text-color-grey">{{ $width.'x'.$height }}</span> </td>
      </tr>
	  
	  
	<!--<tr>
        <td><strong class="d-block text-color-dark line-height-1 font-weight-semibold">Quantity</strong> </td>
        <td class="text-end align-top"><span class="amount font-weight-medium text-color-grey">{{ $qty }}</span> </td>
      </tr>-->
	  
	  <tr>
        <td><strong class="d-block text-color-dark line-height-1 font-weight-semibold">Banner<span class="product-qty"> x {{ $qty }}</span></strong> </td>
        <td class="text-end align-top"><span class="amount font-weight-medium text-color-grey">${{ $banner_amount }}</span> </td>
      </tr>
	 
	  
	  
	
	  
	  @if(!empty($addonTitle))
	  <tr>
        <td><strong class="d-block text-color-dark line-height-1 font-weight-semibold">{{ $addonTitle }}<span class="product-qty"> x {{ $qty }}</span></strong> </td>
        <td class="text-end align-top"><span class="amount font-weight-medium text-color-grey">${{ $adonAmount }}</span> </td>
      </tr>
	  @endif
	  
	  @if(!empty($addonTitleH))
	  <tr>
        <td><strong class="d-block text-color-dark line-height-1 font-weight-semibold">{{ $addonTitleH }}<span class="product-qty"> x {{ $qty }}</span></strong> </td>
        <td class="text-end align-top"><span class="amount font-weight-medium text-color-grey">${{ $adonAmountH }}</span> </td>
      </tr>
	  @endif
	  
	  
	  
	  
	  
	  
      <tr class="total">
        <td><strong class="text-color-dark text-3-5">Total</strong> </td>
        <td class="text-end"><strong class="text-color-dark"><span class="amount text-color-dark text-5">${{$total }}</span></strong> 
		</td>
      </tr>
	  <input type="hidden" name="amount" value="{{ $total }}"/>
	  
      
    </tbody>
  </table>
  <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Checkout <i class="fas fa-arrow-right ms-2"></i></button>
</div>
