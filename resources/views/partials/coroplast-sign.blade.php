@php
if($val=='Single Side')
{
$sheet_cost = '45';
}
else if($val=='Double Side')
{
$sheet_cost = '80';
}


$no_of_sheets = $qty/$step;


$amount = $no_of_sheets*$sheet_cost;


if($adon=='Simple Hole')
{
$adonAmount = $adon_val/2;
}
else if($adon=='Grommet')
{
$adonAmount = $adon_val;
}
else if($adon=='Yard Stick')
{
$adonAmount = '2';
}
else
{
$adonAmount = '0';
}

if($cut=="Yes")
{
$cuttingCost = $sheet_count*10;
}
else
{
$cuttingCost = 0;
}

$sign_amount = $amount;
$adon_amount = $qty*$adonAmount;

$total = $sign_amount+$adon_amount+$cuttingCost;
@endphp
<div class="card-body" style="padding:15px 10px;">
  <h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Sign</h4>
  <table class="shop_table cart-totals mb-3">
    <tbody>
      <tr>
        <td><strong class="d-block text-color-dark line-height-1 font-weight-semibold">{{ $val }}<span class="product-qty"> x {{ $qty }}</span></strong> </td>
        <td class="text-end align-top"><span class="amount font-weight-medium text-color-grey">${{ $sign_amount }}</span> </td>
      </tr>
    @if(!empty($adon))
    <tr>
      <td><strong class="d-block text-color-dark line-height-1 font-weight-semibold">{{ $adon }}<span class="product-qty"> x {{ $qty }}</span></strong> </td>
      <td class="text-end align-top"><span class="amount font-weight-medium text-color-grey">${{ $adon_amount }}</span> </td>
    </tr>
    @endif
    <tr>
      <td><strong class="d-block text-color-dark line-height-1 font-weight-semibold">Cutting<span class="product-qty"> x {{ $sheet_count }}</span></strong> </td>
      <td class="text-end align-top"><span class="amount font-weight-medium text-color-grey">${{ $cuttingCost }}</span> </td>
    </tr>
    <tr class="total">
      <td><strong class="text-color-dark text-3-5">Total</strong> </td>
      <td class="text-end"><strong class="text-color-dark"><span class="amount text-color-dark text-5">${{$total}}</span></strong>
        <!--<span>Exclusive taxes</span>-->
      </td>
    </tr>
    <input type="hidden" name="amount" value="{{ $total }}"/>
    </tbody>
    
  </table>
  <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Checkout <i class="fas fa-arrow-right ms-2"></i></button>
</div>
