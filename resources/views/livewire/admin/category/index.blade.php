@section('title','تعریف نوبت')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="/admin/category">
                    تعریف نوبت</a>


                |
                <a class="tab__item">جستجو: </a>

                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input wire:model.debounce.1000="search"
                               type="text" class="text" placeholder="جستجوی بیمار ...">
                    </form>
                </a>

            </div>
        </div>
        <div class="row">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">

                <div class="table__box">
                    <table class="table">

                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>آیدی</th>

                            <th>نام مشتری</th>
                            <th>فامیلی مشتری</th>
                            <th>شماره تماس</th>
                            <th>کدملی</th>
                            <th>زمان نوبت</th>
                            <th>وضعیت</th>

                        </tr>
                        </thead>

                        @if($readyToLoad)
                            <tbody>
                            @foreach($customerss as $category)
                                <tr role="row">
                                    <td><a href="">{{$category->id}}</a></td>

                                    <td><a href="">{{$category->name}}</a></td>
                                    <td>
                                        @if($category->lname != null)
                                            <a href="">
                                                {{$category->lname}}</a>

                                        @else
                                            <a href="">
                                                رزرو نشده</a>
                                        @endif
                                    </td>

                                    <td>
                                        @if($category->number != null)
                                            <a href="">
                                                {{$category->number}}</a>

                                        @else
                                            <a href="">
                                                رزرو نشده</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($category->nobat_code != null)
                                            <a href="">
                                                {{$category->nobat_code}}</a>

                                        @else
                                            <a href="">
                                                رزرو نشده</a>
                                        @endif
                                    </td>
                                    <td><a href="">{{$category->time}}</a></td>
                                    <td>
                                        @if($category->status == 1)
                                            <button
                                                type="submit" class="badge-success badge"
                                                style="background-color: green">رزرو شده
                                            </button>
                                        @else
                                            <button
                                                type="submit" class="badge-danger badge"
                                                style="background-color: red">
                                                رزرو نشده
                                            </button>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                            {{$customerss->render()}}
                        @else



                            <div class="alert-warning alert">
                                در حال خواندن اطلاعات از دیتابیس ...
                            </div>


                        @endif


                    </table>
                </div>


            </div>
            <div class="col-4 bg-white">
                <p class="box__title">تعریف نوبت </p>
                <form wire:submit.prevent="categoryForm"
                      enctype="multipart/form-data" role="form"
                      class="padding-10 categoryForm">

                    @include('errors.error')
                    <div class="form-group">
                        <span>تاریخ شروع نوبت دهی</span>
                        <input type="datetime-local" wire:model.lazy="category.start"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <span>تاریخ پایان نوبت دهی</span>
                        <input type="datetime-local" wire:model.lazy="category.end"
                               class="form-control">
                    </div>


                    <button class="btn btn-brand">افزودن دسته</button>
                </form>
            </div>
        </div>


    </div>


</div>
