<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href=""></a>
    <div class="profile__info border cursor-pointer text-center">
        <div class="avatar__img">
            @if(auth()->user()->img)
                <img src="{{asset(auth()->user()->img)}}" class="avatar___img">
            @else
                <img src="{{asset('img/pro.jpg')}}" class="avatar___img">
            @endif

            <input type="file" accept="image/*" class="hidden avatar-img__input">
            <div class="v-dialog__container" style="display: block;"></div>
            <div class="box__camera default__avatar"></div>
        </div>
        <span class="profile__name">کاربر :
        {{auth()->user()->name}}
        </span></div>

    <ul>
        <li class="item-li i-dashboard {{Request::routeIs('admin.index') ? 'is-active': '' }} "><a
                href="/admin">پیشخوان</a></li>
        <li class="item-li i-categories {{Request::routeIs('category.index') ? 'is-active': '' }}"><a
                href="/admin/category">تعریف نوبت</a></li>

        <li class="item-li i-articles {{Request::routeIs('log.index') ? 'is-active': '' }}"><a href="/admin/log">گزارشات
                سیستم</a></li>


    </ul>

</div>
