@extends('layouts.frontend.app')

@section('head')

@endsection

@section('content')

<section class="gradient-overlay gradient-overlay-dark video-container">
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{asset('frontend/assets/video/main_video.mp4')}}" type="video/mp4">
  </video>
</section>
<section id="about">

    <div class="container spacer-double-lg border-bottom">

        <div class="row justify-content-between align-items-center">

            <div class="col-md-5 mb-5 mb-lg-0 text-center">

                <img class="mb-4 max-width-9" src="{{asset('frontend/assets/svg/logo-pink.svg')}}" alt="">

                <div class="mb-4">

                    <span class="text-uppercase text-secondary font-secondary font-size-12 text-503592">{{ $cms->name }}</span>

                    <h1 class="mb-0 text-D9008F">{{ $cms->title }}</h1>

                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">

                </div>

                <p class="mb-4">{{ $cms->description }}</p>


            </div>

            <div class="col-md-6">

                <div class="position-relative" >

                    <div class="w-100 shape-centered-nvh">

                        <figure class="random-shape" >

                            <svg version="1.1" width="100%"

                            xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 921.6 655.9"

                            enable-background="new 0 0 921.6 655.9" xml:space="preserve">

                            <path fill="none" stroke="#503592" stroke-width="15" stroke-miterlimit="10" d="M792.4,64.1c17.4,14.7,33.2,31.2,47.4,49c2.2,2.7,4.3,5.5,6.4,8.3c1.3,1.7,2.5,3.4,3.7,5.1

                            c0.8,1.1,1.6,2.2,2.4,3.3c57.1,82.2,75.8,185.1,51.3,282.1c-4,15.7-9.1,31.2-15.2,46.2c-0.9,2.3-1.9,4.6-2.9,6.8l0,0

                            c-13.5,31-31.6,59.9-53.5,85.7c-3.1,3.7-6.3,7.3-9.5,10.7c-8.7,9.4-18,18.1-27.9,26.3c-121.4,99.7-286.4,58.9-449.2,2.5

                            c-4-1.4-8-2.8-12-4.2c-1-0.3-1.9-0.7-2.9-1C-112,427.2-80,217.8,305.8,103.7C488.6,49.6,647.1-59.3,792.4,64.1z"/>

                            </svg>

                        </figure>

                    </div>

                    <div class="row gap" data-jarallax-element="-60 0">

                        <div class="col-12 align-self-end  mb-2">

                            <img class="img-fluid w-100" src="{{asset('uploads/cms/'.$cms->image)}}" alt="">

                        </div>
{{-- 
                        <div class="col-7  mb-2">

                            <img class="img-fluid w-100" src="{{asset('uploads/cms/'.$cms->image2)}}" alt="">

                        </div>

                        <div class="col-5 offset-1  mb-2 mb-lg-0">

                            <img class="img-fluid w-100" src="{{asset('uploads/cms/'.$cms->image3)}}" alt="">

                        </div>

                        <div class="col-5 mb-2">

                            <img class="img-fluid w-100" src="{{asset('uploads/cms/'.$cms->image4)}}" alt="">

                        </div> --}}

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section id="services">

    <div class="container spacer-double-lg border-bottom">

        <div class="row">

            <div class="col">

                <div class="mb-5 pb-5 text-center">

                    <span class="text-uppercase text-secondary font-secondary font-size-12 text-503592">what we do</span>       

                    <h1 class="mb-0 text-D9008F">Our Main Services</h1>

                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">

                </div>

            </div>

        </div>

        <div class="row  justify-content-center">

            <div class="col-md-9">

                <div  class="services-steps nav  mx-auto mb-9 " role="tablist">

                    <div class="service-step-item active show" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">

                        <div class="service-step-icon-container text-muted">

                            <div class="service-step-icon ">

                                <div class="service-step-icon-inner">

                                    <img class=" disabled d-none" src="{{asset('frontend/assets/svg/Begginers.png')}}" alt="">

                                    <img class="  d-none enabled" src="{{asset('frontend/assets/svg/Begginers.png')}}" alt="">

                                </div>

                            </div>

                        </div>

                        <h5 class="service-step-title mb-4 mb-lg-0 text-muted">Beginer Classes</h5>

                    </div>

                    <div class="service-step-item " data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">

                        <div class="service-step-icon-container text-muted">

                            <div class="service-step-icon ">

                                <div class="service-step-icon-inner">

                                    <img class=" disabled d-none" src="{{asset('frontend/assets/svg/Advanced.png')}}" alt="">

                                    <img class="  d-none enabled" src="{{asset('frontend/assets/svg/Advanced.png')}}" alt="">

                                </div>

                            </div>

                        </div>

                        <h5 class="service-step-title mb-0 text-muted">Advanced Classes</h5>

                    </div>

                    <div class="service-step-item" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">

                        <div class="service-step-icon-container text-muted">

                            <div class="service-step-icon ">

                                <div class="service-step-icon-inner">

                                    <img class="  disabled d-none" src="{{asset('frontend/assets/svg/Private.png')}}" alt="">

                                    <img class="  d-none enabled" src="{{asset('frontend/assets/svg/Private.png')}}" alt="">

                                </div>

                            </div>

                        </div>

                        <h5 class="service-step-title mb-0 text-muted">Private Classes</h5>

                    </div>

                </div>

            </div>

        </div>

        <div class="tab-content mt-5 pt-5">

            @foreach($mainservices as $mainservices)

            <div id="tab-{{$mainservices->id}}" class="row align-items-lg-center tab-pane fade @if($mainservices->id == 1)active show @endif " role="tabpanel">

                <div class="col-md-6 mb-4 mb-md-0">

                    <img class="img-fluid w-100" src="{{asset('uploads/services/'.$mainservices->img)}}" alt="">

                </div>

                <div class="col-md-6 pl-lg-6">

                    <h2 class="text-lh-xs mb-4">{{ $mainservices->heading }}</h2>

                    <p class="mb-5">{{ $mainservices->desc }}</p>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<section id="benefits">

    <div class="container spacer-double-lg border-bottom">

        <div class="row">

            <div class="col">

                <div class="mb-5 pb-5 text-center">

                    <span class="text-uppercase text-secondary font-secondary font-size-12 text-503592">free your soul</span>       

                    <h1 class="mb-0 ext-D9008F">Yoga Benefits</h1>

                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">

                </div>

            </div>

        </div>

        <div class="row justify-content-lg-between align-items-center">

            <div class="col-md-7 mb-5 mb-lg-0">

                <div class="position-relative">

                    <div  class="w-95 shape-centered-ncr">

                        <figure class="random-shape">

                            <svg version="1.1"

                            xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 970.4 617.3"

                            enable-background= "new 0 0 970.4 617.3;" xml:space="preserve">

                            <path fill="none" stroke="#351eb4" stroke-width="15" stroke-miterlimit="10"  d="M569.9,75.8c353.7,20.6,677.8,68.1-15.4,459.4c-156.3,88.2-336.8,115.7-459.4-15.4S-20.6,183,110.5,60.4

                            S390.7,65.3,569.9,75.8z"/>

                            </svg>

                        </figure>

                    </div>

                    <div class="row gap mb-9 mb-md-0" data-jarallax-element="-60 0">

                        <div class="col-6 mb-2" >

                            <img class="img-fluid" src="{{asset('frontend/assets/img/offset/5.jpg')}}" alt="">

                        </div>

                        <div class="col-4 align-self-end mb-2" >

                            <img class="img-fluid" src="{{asset('frontend/assets/img/offset/6.jpg')}}" alt="">

                        </div>

                        <div class="col-10 offset-2" >

                            <img class="img-fluid" src="{{asset('frontend/assets/img/offset/7.jpg')}}" alt="">

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-5 col-lg-4">

                <div class="mr-n w-100">

                    <div class="media align-items-center mb-4 bg-media p-1 radius-3 min-height-70" >

                        <span class="p-2 mr-3 ml-3">

                            <img class="img-fluid max-width-2" src="{{asset('frontend/assets/svg/simple-sentiayoga.svg')}}" alt="">

                        </span>

                        <div class="media-body">

                            <span class="font-secondary font-size-17 text-white">Increased flexibility.</span>

                        </div>

                    </div>

                </div>

                <div class="media align-items-center mb-4 bg-media p-1 radius-3 min-height-70" >

                    <span class=" p-2 mr-3 ml-3">

                        <img class="img-fluid max-width-2" src="{{asset('frontend/assets/svg/simple-sentiayoga.svg')}}" alt="">

                    </span>

                    <div class="media-body">

                        <span class="font-secondary font-size-17 text-white">Increased muscle strength</span>

                    </div>

                </div>

                <div class="mr-n w-100">

                    <div class="media align-items-center mb-4 bg-media p-1 radius-3 min-height-70" >

                        <span class=" p-2 mr-3 ml-3">

                            <img class="img-fluid max-width-2" src="{{asset('frontend/assets/svg/simple-sentiayoga.svg')}}" alt="">

                        </span>

                        <div class="media-body">

                            <span class="font-secondary font-size-17 text-white">Cardio and circulatory health</span>

                        </div>

                    </div>

                </div>

                <div class="media align-items-center mb-4 bg-media p-1 radius-3 min-height-70" >

                    <span class=" p-2 mr-3 ml-3">

                        <img class="img-fluid max-width-2" src="{{asset('frontend/assets/svg/simple-sentiayoga.svg')}}" alt="">

                    </span>

                    <div class="media-body">

                        <span class="font-secondary font-size-17 text-white">Increased muscle strength</span>

                    </div>

                </div>

                <div class="mr-n w-100">

                    <div class="media align-items-center bg-media p-1 radius-3 min-height-70" >

                        <span class=" p-2 mr-3 ml-3">

                            <img class="img-fluid max-width-2" src="{{asset('frontend/assets/svg/simple-sentiayoga.svg')}}" alt="">

                        </span>

                        <div class="media-body">

                            <span class="font-secondary font-size-17 text-white">Protection from injury</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section id="poses">
            <div class="container spacer-double-lg border-bottom">
               <div class="row">
                  <div class="col">
                     <div class="mb-5 pb-5 text-center">
                        <span class="text-uppercase text-secondary font-secondary font-size-12">Basic yoga poses</span>       
                        <h1 class="mb-0">Yoga Positions</h1>
                        <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                     </div>
                  </div>
               </div>
               <div class="row align-items-center justify-content-center">
                  <div class="col-lg-2 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">
                         <div class="yoga-pose-item ">
                            <div class="yoga-pose-icon-container text-muted">
                               <div class="yoga-pose-icon ">
                                  <div class="yoga-pose-icon-inner">
                                     <img class="" src="{{asset('frontend/assets/svg/yoga-pose-7.svg')}}" alt="">
                                  </div>
                               </div>
                            </div>
                            <h5 class="yoga-pose-title  mb-0">Trikonasana </h5>
                         </div>
                     </a>
                  </div>
                  <div class="col-lg-2 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">
                         <div class="yoga-pose-item ">
                            <div class="yoga-pose-icon-container text-muted">
                               <div class="yoga-pose-icon ">
                                  <div class="yoga-pose-icon-inner">
                                     <img class="" src="{{asset('frontend/assets/svg/yoga-pose-8.svg')}}" alt="">
                                  </div>
                               </div>
                            </div>
                            <h5 class="yoga-pose-title  mb-0">Vrksasana</h5>
                         </div>
                     </a>
                  </div>
                  <div class="col-lg-2 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">
                         <div class="yoga-pose-item " >
                            <div class="yoga-pose-icon-container text-muted">
                               <div class="yoga-pose-icon ">
                                  <div class="yoga-pose-icon-inner">
                                     <img class="" src="{{asset('frontend/assets/svg/yoga-pose-9.svg')}}" alt="">
                                  </div>
                               </div>
                            </div>
                            <h5 class="yoga-pose-title  mb-0">Savasana</h5>
                         </div>
                     </a>
                  </div>
                  <div class="col-lg-2 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">
                         <div class="yoga-pose-item " >
                            <div class="yoga-pose-icon-container text-muted">
                               <div class="yoga-pose-icon ">
                                  <div class="yoga-pose-icon-inner">
                                     <img class="" src="{{asset('frontend/assets/svg/yoga-pose-10.sv')}}g" alt="">
                                  </div>
                               </div>
                            </div>
                            <h5 class="yoga-pose-title mb-0">Kursiasana</h5>
                         </div>
                     </a>
                  </div>
               </div>
            </div>
         </section>

<section id="schedule">

    <div class="container spacer-double-lg">

        <div class="row">

            <div class="col-lg-12 clearfix mb-5 mb-lg-0">

                <div class="p-6 p-3 shadow radius-2">

                    <h6 class="h5 text-B42997 mb-5 text-center">2021 Schedule</h6>


                    <table style="max-height: 500px; overflow-y: scroll;" class="table table-borderless">

                        <thead class="text-center">

                            <tr>

                                <th width="1%" class=" text-dark font-size-14 text-uppercase">Time</th>

                                @foreach($weekDays as $day)
                                <th  width="1%" class="border-left  border-right border-bottom text-dark font-size-14 text-uppercase">{{ $day }}</th>
                            @endforeach


                            </tr>

                        </thead>

                        <tbody>
                             @foreach($calendarData as $time => $days)
                            <tr>

                                @php
                                $am_pm=date('a',strtotime(explode('-', $time)[1]));
                                $time1=date('h:i',strtotime(explode('-', $time)[0]));
                                $time2=date('h:i',strtotime(explode('-', $time)[1]));
                                @endphp

                                <th class="font-size-13 text-dark  text-center border-bottom">{{ $time1.' - '.$time2 }} <br> {{ $am_pm }}</th>
                                    @foreach($days as $value)
                                        @if (is_array($value))
                                            <td rowspan="{{ $value['rowspan'] }}" class="align-middle text-center border-right border-left border-bottom">
                                                {{ $value['class_name'] }}<br>
                                                {{-- Trainer: --}} {{ $value['teacher_name'] }}
                                            </td>
                                        @elseif ($value === 1)
                                            <td class="text-center  border-right border-left border-bottom"> - </td>
                                        @endif
                                    @endforeach                             
                            </tr>
                        @endforeach

                        </tbody>

                    </table>  

                  

                </div>

            </div>

        </div>

    </div>

</section>

<section id="stats" class="bg-stats spacer-double-sm">

    <div class="container">

        <div class="row">

            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">

                <div class="media align-items-center">

                    <span class="p-2 mr-4">

                        <img class="max-width-3" src="{{asset('frontend/assets/svg/simple-sentiayoga.svg')}}" alt="">

                    </span>

                    <div class="media-body">

                        <h2 class="text-white">560</h2>

                        <h6 class="mb-0 text-white">Happy Customers</h6>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">

                <div class="media align-items-center">

                    <span class="p-2 mr-4">

                        <img class="max-width-3" src="{{asset('frontend/assets/svg/simple-sentiayoga.svg')}}" alt="">

                    </span>

                    <div class="media-body">

                        <h2 class="text-white">30</h2>

                        <h6 class="mb-0 text-white">Experienced Trainer</h6>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">

                <div class="media align-items-center">

                    <span class="p-2 mr-4">

                        <img class="max-width-3" src="{{asset('frontend/assets/svg/simple-sentiayoga.svg')}}" alt="">

                    </span>

                    <div class="media-body">

                        <h2 class="text-white">20</h2>

                        <h6 class="mb-0 text-white">Years of Experience</h6>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 ">

                <div class="media align-items-center">

                    <span class="p-2 mr-4">

                        <img class="max-width-3" src="{{asset('frontend/assets/svg/simple-sentiayoga.svg')}}" alt="">

                    </span>

                    <div class="media-body">

                        <h2 class="text-white">40</h2>

                        <h6 class="mb-0 text-white">Classes of Yoga</h6>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<section id="testtimonials">

    <div class="container spacer-double-lg border-bottom">

        <div class="row">

            <div class="col">

                <div class="mb-5 pb-5 text-center">

                    <span class="text-uppercase text-503592 font-secondary font-size-12">Testimonials</span>       

                    <h1 class="mb-0 text-D9008F">What They Say</h1>

                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">

                </div>

            </div>

        </div>

        <div class="row  align-items-center">

            <div class="testimonial-carousel">

                @php $count = 1; @endphp
                @foreach($testimonials as $testimonial)

                <div class="px-3  w-100 pt-5">

                    <div class="card border-0    bg-light">

                        <div class="card-body pr-5 pl-5 p5-3 pt-0 shadow radius-2">

                            <div class="testimonial-image">

                                <div class="testimonial-image-border">

                                    <img class="rounded-circle" src="{{asset('uploads/testimonial/'.$testimonial->image)}}" alt="/">

                                </div>

                            </div>

                            <p class=" mb-0 mt-2">
                                {{ \Illuminate\Support\Str::limit($testimonial->description, 120, '...') }}
                           </p>

                        </div>

                        <div class="card-footer border-0  pt-0 px-5 pb-3 mt-3">

                            <span class="h6 font-base font-weight-600 mb-0 text-D9008F"> {{ $testimonial->name }}</span>

                            <small class="d-block text-503592"> {{ $testimonial->title }}</small>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</section>

<section id="pricing">

    <div class="container spacer-double-lg">

        <div class="row">

            <div class="col">

                <div class="mb-5 pb-5 text-center">

                    <span class="text-uppercase text-503592 font-secondary font-size-12">Choose a plan</span>       

                    <h1 class="mb-0 text-D9008F">Pricing Plans</h1>

                     @if(Session::has('paypal_success'))
                    <div class="alert alert-success">
                      {{ Session::get('paypal_success') }}
                  </div>
                  @endif

                   @if(Session::has('paypal_failure'))
                    <div class="alert alert-danger">
                      {{ Session::get('paypal_failure') }}
                  </div>
                  @endif

                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">

                    <p class=" mb-0 pt-3 lead w-md-60 mx-auto">Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like “simply standing,” but there is a ton going on

                    </p>

                </div>

            </div>

        </div>

        <div class="row justify-content-center align-items-center">
            @php $i = 0; @endphp
            @foreach($packages as $package)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">

                    <div class="card text-center">

                        <img class="card-img-top" src="{{asset('uploads/packages/'.$package->image)}}" alt="Card image cap">

                        <div class="card-body">

                            <h5 class="card-title">{{ $package->name }}</h5>

                            <p class="card-text">{{ $package->no_of_classes }} CLASSES </p>
                            @php
                                $days = explode(',', $package->workout_days );
                                $week = array("1"=>"Sunday", "2"=>"Monday", "3"=>"Tuesday", "4"=>"Wednesday", "5"=>"Thursday", "6"=>"Friday", "7"=>"Saturday");

                            @endphp   
                            <p class="card-text text-351EB4 font-size-12">
                            @foreach($days as $key => $day)
                             {{ $week[$day] }}
                            @if($key != count($days)-1)
                                {{ "," }}
                            @endif  

                            @endforeach
                            </p>
                            <ul class="list-unstyled">
                                @foreach($package->packageTimings as $key => $packageTiming)
                                <li>
                                    {{  date('g:ia', strtotime($packageTiming->startTime)) }} -  {{ date('g:ia', strtotime($packageTiming->endTime)) }}
                                </li> 
                                @endforeach

                            </ul>

                            {{-- <button type="button" class="btn w-50 btn-primary">$ {{ $package->price }}</button> --}}

                             <a href="{{ route('booking.show',$package->id) }}" class="btn w-50 btn-primary" >Pay ${{ $package->price }}</a>

                        </div>

                    </div>

                </div>

            @php $i++; @endphp
            @endforeach   

        </div>

    </div>

</section>

<section id="gallery">

    <div class="container spacer-double-lg">

        <div class="row">

            <div class="col">

                <div class="mb-5 pb-5 text-center">

                    <span class="text-uppercase text-503592 font-secondary font-size-12">best moments</span>       

                    <h1 class="mb-0 text-D9008F">Yoga Gallery</h1>

                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">

                    <p class=" mb-0 pt-3 lead w-md-60 mx-auto">Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may

                    </p>

                </div>

            </div>

        </div>

        <div class="row gap">

        <?php 
        // query the user media
        $fields = "id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username";
        $token = "IGQVJYb3dYTG1kWkhTVXJmbTBLMHBoWnBBMVR6SmJ4R3RmQ2JQVWo4VnNUZA0x6SjloVmdsMG9Vb2NTdDBIUndzcTJDZAmwtSDB4YVpTczhuT2Ixa0tPRndtTTVOdkNNNWVMUFZAPU3M1WWgtVmRHVE5xawZDZD";
        $limit = 6;
         
        $json_feed_url="https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";        
        

        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $json_feed_url);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        $contents = curl_exec($ch);
        if (curl_errno($ch)) {
          echo curl_error($ch);
          echo "\n<br />";
          $contents = '';
        } else {
          curl_close($ch);
        }



        if (!is_string($contents) || !strlen($contents)) {
        echo "Failed to get contents.";
        $contents = '';
        }


         $contents = json_decode($contents, true, 512, JSON_BIGINT_AS_STRING);
        if(empty($contents["error"])){
            foreach($contents["data"] as $post){
                 
                $username = isset($post["username"]) ? $post["username"] : "";
                $caption = isset($post["caption"]) ? $post["caption"] : "";
                $media_url = isset($post["media_url"]) ? $post["media_url"] : "";
                $permalink = isset($post["permalink"]) ? $post["permalink"] : "";
                $media_type = isset($post["media_type"]) ? $post["media_type"] : "";

                if($media_type=="VIDEO"){

                }
                else{
                    echo ' <div class="col-md-4 col-md  mb-2">';
                    echo " <a href='{$permalink}' target='_blank'><img src='{$media_url}' class='img-fluid img-thumbnail'/></a>";
                    echo '</div>';
                }

            }
        }

        ?>
         

        </div>

    </div>

</section>

<section id="news">

    <div class="container spacer-double-lg border-bottom">

        <div class="row">

            <div class="col">

                <div class="mb-5 pb-5 text-center">

                    <span class="text-uppercase text-503592 font-secondary font-size-12">from the blog</span>       

                    <h1 class="mb-0 text-D9008F">Latest Posts &amp; Articles</h1>

                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">

                    <p class=" mb-0 pt-3 lead w-md-60 mx-auto">Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like “simply standing,” but there is a ton going on

                    </p>

                </div>

            </div>

        </div>

        <div class="row">
            <div class="owl-carousel owl-theme card-group col" id="blogSlider">

            @php $i = 0; @endphp
      @foreach($blogs as $blog)

                <div class="card bg-blog border-0 h-100 text-left mb-5 mb-lg-0 ml-lg-4 ml-1">

                    <a href="{{ url('/blog/'.$blog->id) }}"><img class="card-img-top" src="{{asset('uploads/blogs/'.$blog->image)}}" alt="Card image cap"></a>

                    <div class="card-body pt-3">

                        <div class="d-flex justify-content-between mb-3">

                            <div class="small d-flex">

                                <div class="mr-2 text-primary">Posted On : </div>

                                <span class="text-muted ">{{ \Carbon\Carbon::parse($blog->created_at)->format('d F') }}</span>

                            </div>


                        </div>

                        <h2 class="h5 ">

                            <a href="{{ url('/blog/'.$blog->id) }}">{{ $blog->title }}</a>

                        </h2>

                        <p> 
                            {{ \Illuminate\Support\Str::limit($blog->description, 120, '...') }} </p>

                    </div>

                </div>


            @php $i++; @endphp
      @endforeach   
            </div>

        </div>

    </div>

</section>



<section id="contact">

    <div class="container spacer-double-lg">

        <div class="row justify-content-lg-between align-items-center">

            <div class="col-lg-6  mb-7 mb-lg-0">

                <div class="mb-3 pb-3">

                    <span class="text-uppercase text-secondary font-secondary font-size-12">{{ $contactus->title }}</span>       

                    <h1 class="mb-0">{{ $contactus->name }}</h1>

                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">

                    <p class=" mb-0 pt-3 lead ">{{ $contactus->desc }}

                    </p>

                </div>

                <div class="media align-items-center mb-5">

                    <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">

                        <img class="max-width-1 " src="{{asset('frontend/assets/svg/simple-sentiayoga.png')}}" alt="">

                    </span>

                    <div class="media-body">

                        <h4 class="h6 mb-0">Address</h4>

                        <span class="d-block font-size-14">{{ $contactus->address }}</span>

                    </div>

                </div>

                <div class="media align-items-center mb-5">

                    <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">

                        <img class="max-width-1 " src="{{asset('frontend/assets/svg/simple-sentiayoga.png')}}" alt="">

                    </span>

                    <div class="media-body">

                        <h4 class="h6 mb-0">Phone Number</h4>

                        <span class="d-block font-size-14">{{ $contactus->phone_no }}</span>

                    </div>

                </div>

                <div class="media align-items-center mb-5">

                    <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">

                        <img class="max-width-1 " src="{{asset('frontend/assets/svg/simple-sentiayoga.png')}}" alt="">

                    </span>

                    <div class="media-body">

                        <h4 class="h6 mb-0">Say Hello</h4>

                        <span class="d-block font-size-14">{{ $contactus->say_hello }}</span>

                    </div>

                </div>

                <div class="media align-items-center mb-5">

                    <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">

                        <img class="max-width-1 " src="{{asset('frontend/assets/svg/simple-sentiayoga.png')}}" alt="">

                    </span>

                    <div class="media-body">

                        <h4 class="h6 mb-0">We are Open</h4>

                        <span class="d-block font-size-14">{{ $contactus->open_timting}}</span>

                    </div>

                </div>

            </div>

            <div class="col-lg-5 mt-5 mt-lg-0">

                <ul class="instafeed-list list-inline" id="instafeed">

                    <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('uploads/contactus/'.$contactus->image)}}" /></a></li>



                    <li><a class="hover-effect" target="_blank" href="{{ $contactus->twitter}}"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-2.jpg')}}" /></a></li>



                    <li><a class="hover-effect" target="_blank" href="{{ $contactus->facebook}}"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-6.jpg')}}" /></a></li>



                    <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('uploads/contactus/'.$contactus->image2)}}" /></a></li>



                    <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('uploads/contactus/'.$contactus->image3)}}" /></a></li>



                    <li><a class="hover-effect" target="_blank" href="{{ $contactus->insta}}"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-6.jpg')}}" /></a></li>

                </ul>

            </div>

        </div>

    </div>

</section>

 <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  

@endsection

@push('scripts')
<script type="text/javascript">
    @if (\Session::has('success'))
        $(window).scrollTop($('#myDivAppointment').offset().top);
    @endif
    @if (\Session::has('paypal_success'))
        $(window).scrollTop($('#pricing').offset().top);
    @endif
    @if (\Session::has('paypal_failure'))
        $(window).scrollTop($('#pricing').offset().top);
    @endif
    @error('email') 
        $(window).scrollTop($('#myDivAppointment').offset().top);
    @enderror
     @if (\Session::has('success_news'))
      $(window).scrollTop($('#myDiv').offset().top);
    @endif
    @if (\Session::has('success'))
      $(window).scrollTop($('#myDivContact').offset().top);
    @endif
</script>

<script>
$('#blogSlider').owlCarousel({
        stagePadding: 80,
        loop:false,
        dots:false,
        margin:20,
        nav:true,
        navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
        navContainer: '.owl-container .custom-nav',
        navClass: ["owl-prev rounded-circle","owl-next rounded-circle"],
        items:3,
        autoWidth:false,
        center:true,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
        responsive:{
            0:{
                items:1,
                stagePadding:0
            },
            768:{
                items:1,
                stagePadding:0
            },
            992:{
                items:2,
                stagePadding:60
            },
            1200:{
                items:3
            }
        }
})
    </script>


@endpush
