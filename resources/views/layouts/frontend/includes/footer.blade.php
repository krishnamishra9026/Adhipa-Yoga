 <footer class="footer bg-primary-2 o-hidden">

   <div class="curved-decoration ">

      <div class="decoration-top top-n1">

         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 43.2" enable-background="new 0 0 800 43.2;" xml:space="preserve">



            <path fill="#f3f5f8" d="M0,43.1v-4.8c0,0,187.9-30,400-3S800,0,800,0v43.1H0z"></path>

            <path fill="#f3f5f8" opacity="0.3" d="M0,43V18.7c0,0,131.8-13.9,269.2,20.9C407.2,60,600.3-13.9,800,27.8V43H0z"></path>

         </svg>

      </div>

   </div>

   <div class="container spacer-one-bottom-lg spacer-xl-top">

      <div class="row text-center">

         <div class="col mb-6 mt-6 mt-lg-0">

            <img src="{{asset('frontend/assets/svg/footer-logo.png')}}" alt="">

         </div>

      </div>

      <div class="row align-items-md-center">

         <div class="col-md-3 mb-4 mb-md-0">

            {{-- <div class="d-flex align-items-center">

               <p class="font-size-13  mb-0 text-light"><span class="text-muted">© 2020 all rights reserved - MutationMedia.

                  <br>A product of</span> mutationthemes.

               </p>

            </div> --}}

         </div>

         <div class="col-md-6 col-sm-6 mb-4 mb-sm-0" id="myDiv">

             @if (\Session::has('success_news'))
              <div class="alert alert-success">
                <p>{{ \Session::get('success_news') }}</p>
              </div><br/>
              @endif
              @if (\Session::has('failure_news'))
              <div class="alert alert-danger">
                <p>{{ \Session::get('success_news') }}</p>
              </div><br/>
              @endif
              <form class="subscribe_form" method="post" action="{{url('newsletter/store')}}">
               @csrf

               <div class="input-group">

                  <input type="email" required name="email" class="form-control @error('email') is-invalid @enderror" class="form-control" name="email" placeholder="Your email address">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                  <div class="input-group-append">

                     <button type="submit" class="btn btn-block btn-primary">Subscribe</button>

                  </div>

               </div>

            </form>

         </div>

      </div>

      <div class="row mt-6 justify-content-center ">

      </div>

   </div>

</footer>

<a class="scroll-to-top  scroll active" href="#wrapper"><span class=" fas fa-arrow-up top-icon "></span></a>