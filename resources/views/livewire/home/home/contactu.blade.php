



<!-- contact section starts -->
<section class="contact" id="contact">

    <h2 class="heading"><i class="fas fa-headset"></i> رزرو نوبت <span>چه زمانی</span></h2>

    <div class="container">
        <div class="content">
            <div class="image-box">
                <img draggable="false" src="{{asset('home/assets/images/contact1.png')}}" alt="">
            </div>
            <form
                wire:submit="categoryform"
                enctype="multipart/form-data" role="form"
                id="contact-form">
                @include('errors.error')


                <div class="form-group">

                    <div class="select-box">


                        <select wire:model.lazy="time"  name="time" name="name" class="form-control">
                            <option value="-1">- انتخاب زمان مراجعه -</option>
                            @foreach(\App\Models\Customer::where('status',0)->get() as $category)

                                <option
                                    value="{{$category->id}}">

                                    {{\App\Models\PerssianNumber::translate(jdate($category->time)->format('Y-m-d H:i:s'))}}

                                </option>

                            @endforeach
                        </select>

                    </div>

                                        <div class="field">
                                            <input type="text" wire:model.lazy="name" name="name" placeholder="نام" required>
                                            <i class='fas fa-user'></i>
                                        </div>
                                        <div class="field">
                                            <input type="text" wire:model.lazy="lname" name="lname" placeholder="نام خانوادگی"
                                                   required>
                                            <i class='fas fa-user'></i>
                                        </div>


                                        <div class="field">
                                            <input type="number" wire:model.lazy="number" placeholder="شماره تماس ">
                                            <i class='fas fa-phone-alt'></i>
                                        </div>




                                        <div class="field">
                                            <input type="number" wire:model.lazy="national_code" placeholder="کدملی ">
                                            <i class='fas fa-phone-alt'></i>
                                        </div>

                                        <div class="form-group" style="padding-left: 4%">
                                            <div class="notificationGroup">
                                                <input id="option4" type="checkbox" wire:model.lazy="for_whom" name="status"
                                                       class="form-control">
                                                <label for="option4">: برای شخص دیگه ای هست وشماره تماس هم مال اون شخصه</label>
                                            </div>
                                        </div>

                    <div class="button-area" style="padding-right: 25%">
                        <button>vc,vc
                        </button>
                    </div>

                @csrf
            </form>
        </div>
    </div>
</section>
<!-- contact section ends -->
