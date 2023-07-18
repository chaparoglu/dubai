<li style="display: block;" class="lang-item" >
    <a @if(Request::segment(1)!='en' && Request::segment(1)!='ru') style="color:#AE280B;font-weight: 700;font-size: 21px;" @else style="color:orange;font-weight: 700;font-size: 21px;" @endif href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">
        AZ
    </a>
</li>
<span style="font-size: 20px;
font-weight: 700;">/</span>

<li style="display: block;" class="lang-item">
    <a @if(Request::segment(1)=='en') style="color:#AE280B;font-weight: 700;font-size: 21px;" @else style="color:orange;font-weight: 700;font-size: 21px;" @endif href="{{ route(str_replace(app()->getLocale(), 'en', $current)) }}">
        EN
    </a>
</li>
<span style="font-size: 20px;
font-weight: 700;">/</span>
<li  style="display: block;" class="lang-item">
    <a @if(Request::segment(1)=='ru') style="color:#AE280B;font-weight: 700;font-size: 21px;" @else style="color:orange;font-weight: 700;font-size: 21px;" @endif href="{{ route(str_replace(app()->getLocale(), 'ru', $current)) }}">
        RU
    </a>
</li> 

