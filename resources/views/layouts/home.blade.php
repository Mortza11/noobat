<!DOCTYPE html>
<html lang="en">
@include('livewire.home.home.head')
@include('livewire.home.home.header')


<body oncontextmenu="return false">

<!-- pre loader -->
<!-- <div class="loader-container">
  <img draggable="false" src="./assets/images/preloader.gif" alt="">
</div> -->


{{$slot}}


@include('livewire.home.home.footer')

@include('livewire.home.home.foot')


</body>
</html>

