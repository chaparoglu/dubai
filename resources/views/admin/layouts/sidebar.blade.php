<nav class="sidebar dark_sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
    <a href="{{ route('admin.slider.index') }}"><img src="{{asset('front')}}/img/jedlogo.svg" alt=""></a>
    <div class="sidebar_close_icon d-lg-none">
    <i class="ti-close"></i>
    </div>
    </div>
    <ul id="sidebar_menu">

    <li >
        <a  href="{{ route('admin.slider.index') }}" aria-expanded="false">
            <div class="icon_menu">
                <i class="ti-layers-alt"></i>
            </div>
            <span>Slayder</span>
        </a>
    </li>

    <li >
        <a  href="{{ route('admin.about.index') }}" aria-expanded="false">
            <div class="icon_menu">
                <i class="ti-info"></i>
            </div>
            <span>Haqqımızda</span>
        </a>
    </li>

    <li >
        <a  href="{{ route('admin.car.index') }}" aria-expanded="false">
            <div class="icon_menu">
                <i class="ti-car"></i>
            </div>
            <span>Maşınlar</span>
        </a>
    </li>


    <li >
        <a  href="{{ route('admin.galery.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-gallery"></i>
        </div>
        <span>Qalereya</span>
        </a>
    </li>

    <li >
        <a  href="{{ route('admin.question.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-image"></i>
        </div>
        <span>Sual  Cavab</span>
        </a>
    </li>

    <li>
        <a  href="{{ route('admin.setting.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-settings"></i>
        </div>
        <span>Ayarlar</span>
        </a>
        <ul class="mm-collapse">
        </ul>
    </li>

    <li>
        <a  href="{{ route('admin.message.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-email"></i>
        </div>
        <span>Mesajlar</span>
        </a>    
        <ul class="mm-collapse">
        </ul>
    </li>

    </ul>
    </nav>
</ul>