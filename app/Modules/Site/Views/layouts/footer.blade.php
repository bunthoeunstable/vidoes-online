<section class="cid-qwcsE0gn1m" id="footer1-j" data-rv-view="35" style="padding-top: 30px;">

    <div class="container">
        <div class="media-container-row content text-white">  

           <div class="col-12 col-md-4 mbr-fonts-style display-7">
                <h5 class="pb-3" style="padding-left: 38px;font-size: 20px;">
                    About Us
                </h5>
                <p class="mbr-text"> 
                <ul style="list-style: none; margin-bottom: 0rem;">  
                 <li>
                   <a href="{{url('category/contact')}}">
                  <span class="mbri-help mbr-iconfont mbr-iconfont-btn"></span>
                   {{ trans('common.contact_us') }}
                  </a>
                 </li> 
                <li>
                <a href="{{url('customer/login')}}">
                 <span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>
                   {{ trans('common.login') }}
                </a>
                </li>
                <li>
                 <a href="{{url('customer/register')}}">
                 <span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span> {{ trans('common.register') }}</a>
                 </li>
                  <li>
                 <a href="{{url('page/policy')}}">
                 <span class="mbri-lock mbr-iconfont mbr-iconfont-btn"></span> 
                 {{ trans('Policy') }}
                 </a>
                 </li>
                </ul>            
              </p>
            </div>

            <div class="col-12 col-md-4 mbr-fonts-style display-7">
                 @include('Site::inc.facebooklikepage')   
            </div>

             <div class="col-12 col-md-4 mbr-fonts-style display-7">
                 @include('Site::inc.social')   
            </div>
            
        </div>
        <div class="footer-lower">            
            <div class="media-container-row mbr-black">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2017 <a href="{{url('')}}"> {{ $footer->copy_right }}</a> - All Rights Reserved 
                    </p>
                </div>
                <div class="col-sm-6" style="text-align: right;">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Develop By {{ $footer->develop_by }}
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>