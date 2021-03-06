@extends('web.layout.techhub')

@section('pageTitle', __('Our Team | ' . config('app.name')))

@section('content')
@include('web.includes.banner', ['bannerTitle' => "our team", 'bannerMaster' => "about"])
<div class="mentor-details-area pt-120">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="mentor-about-img">
          <img src="{{ asset('assets/web') }}/img/team/member3.jpg" alt="about us">
          <div class="mentor-about-hover">
            <h3>Md. Rabiul Siddikee</h3>
            <h5>HasTech</h5>
            <ul>
              <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
              <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
              <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
              <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-md-offset-1 col-sm-8">
        <div class="mentor-about-content">
          <h3>about us</h3>
          <div class="mentor-address">
            <p><b>Phone : </b>+00 111 222 333</p>
            <p><b>Email : </b>admin@gmail.com</p>
            <p><b>Skype : </b>YourSkype</p>  
          </div>
          <p class="detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dololl magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa.</p> 

          <p class="detail">qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mentor-area details pt-113 pb-50 text-center">
  <div class="container">
     <div class="row">
       <div class="col-md-6 col-md-offset-3 col-xs-12">
         <div class="mentor section-title">
           <h2>our mentors</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiust tempor incidi ut labore et dolore magna aliqua. Ut enim ad mini veniam quis </p>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-3 col-sm-4 col-xs-12">
         <div class="single-mentor">
           <div class="mentor-img">
               <a href="#"><img src="{{ asset('assets/web') }}/img/team/member1.jpg" alt="member"></a>
               <div class="mentor-hover">
                 <h5>Jackline Milorina</h5>
                 <h6>HasTech</h6>
                 <ul>
                   <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                   <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                   <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                   <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                 </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 col-sm-4 col-xs-12">
         <div class="single-mentor">
           <div class="mentor-img">
             <a href="#"><img src="{{ asset('assets/web') }}/img/team/member2.jpg" alt="member"></a>
             <div class="mentor-hover">
               <h5>Jackline Milorina</h5>
               <h6>HasTech</h6>
               <ul>
                 <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                 <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                 <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                 <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 col-sm-4 col-xs-12">
         <div class="single-mentor">
           <div class="mentor-img">
             <a href="#"><img src="{{ asset('assets/web') }}/img/team/member3.jpg" alt="member"></a>
             <div class="mentor-hover">
               <h5>Jackline Milorina</h5>
               <h6>HasTech</h6>
               <ul>
                 <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                 <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                 <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                 <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 hidden-sm col-xs-12">
         <div class="single-mentor">
           <div class="mentor-img">
             <a href="#"><img src="{{ asset('assets/web') }}/img/team/member4.jpg" alt="member"></a>
             <div class="mentor-hover">
               <h5>Jackline Milorina</h5>
               <h6>HasTech</h6>
               <ul>
                 <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                 <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                 <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                 <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </div>
  </div>
</div>
<div class="mentor-area details pt-10 pb-110 text-center">
  <div class="container">
     <div class="row">
       <div class="col-md-6 col-md-offset-3 col-xs-12">
         <div class="mentor section-title">
           <h2>our alumni</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiust tempor incidi ut labore et dolore magna aliqua. Ut enim ad mini veniam quis </p>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-3 col-sm-4 col-xs-12">
         <div class="single-mentor">
           <div class="mentor-img">
               <a href="#"><img src="{{ asset('assets/web') }}/img/team/member1.jpg" alt="member"></a>
               <div class="mentor-hover">
                 <h5>Jackline Milorina</h5>
                 <h6>HasTech</h6>
                 <ul>
                   <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                   <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                   <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                   <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                 </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 col-sm-4 col-xs-12">
         <div class="single-mentor">
           <div class="mentor-img">
             <a href="#"><img src="{{ asset('assets/web') }}/img/team/member2.jpg" alt="member"></a>
             <div class="mentor-hover">
               <h5>Jackline Milorina</h5>
               <h6>HasTech</h6>
               <ul>
                 <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                 <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                 <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                 <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 col-sm-4 col-xs-12">
         <div class="single-mentor">
           <div class="mentor-img">
             <a href="#"><img src="{{ asset('assets/web') }}/img/team/member3.jpg" alt="member"></a>
             <div class="mentor-hover">
               <h5>Jackline Milorina</h5>
               <h6>HasTech</h6>
               <ul>
                 <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                 <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                 <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                 <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 hidden-sm col-xs-12">
         <div class="single-mentor">
           <div class="mentor-img">
             <a href="#"><img src="{{ asset('assets/web') }}/img/team/member4.jpg" alt="member"></a>
             <div class="mentor-hover">
               <h5>Jackline Milorina</h5>
               <h6>HasTech</h6>
               <ul>
                 <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                 <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                 <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                 <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </div>
  </div>
</div>
@endsection