 <!-- <div  class="row" style="margin-right: 0px; margin-left: 0px; position: fixed; top: 0px; z-index:99; background-color: #fff;"> -->
<div  class="row" style="margin-right: 0px; margin-left: 0px;">
   <div class="col-12 col-lg-1">
    <span style="display: flex;">
     <a style="margin-right: 2px;"  href="{{url('locale?locale=kh')}}"><img style="max-height: 17px;" src="{{ asset('public/uploads/flags/kh.png') }}"> </a> <a  href="{{url('locale?locale=en')}}"><img style="max-height: 17px;" src="{{ asset('public/uploads/flags/gb.png') }}"> </a> </span>
        </div>

<div class="col-12 col-sm-6 col-lg-4" style="padding-left: 5px;">
<span>{{ trans('common.contact_us')}} :  {{$top->client_phone}} </span>
</div>
<div class="col-12 col-sm-6 col-lg-5" style="padding-left: 5px;">         
         <span> {{trans('common.email')}} : {{$top->client_email}}</span>
</div>
<div class="col-12 col-lg-2">
   @include('Site::inc.search')  
</div>

 </div>


   <div class="row" style="margin-right: 0px; margin-left: 0px; ">
   <div class="col-12 text-right"> 
 <a href="{{url('category/contact')}}">
   <span class="mbri-help mbr-iconfont mbr-iconfont-btn"></span>
 {{ trans('common.contact_us') }}
  </a>

 @if(Session::has('customer'))
<a style="text-decoration: underline;" title="View Profile" href="{{url('customer/profile')}}"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span> <b>{{Session::get('customer')->username}}</a> : </b><a href="{{url('customer/logout')}}"> <span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span> Log out</a>
 @else
   <a href="{{url('customer/login')}}">
   <span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>
 {{ trans('common.login') }}
  </a>
   <a href="{{url('customer/register')}}">
<span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span> {{ trans('common.register') }}</a>
    @endif  

    
</div>  


</div>