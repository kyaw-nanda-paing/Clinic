@extends('frontend')

@section('frontend')

  <div class="homepage-boxes">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="opening-hours">
            <h2 class="d-flex align-items-center">Opening Hours</h2>

            <ul class="p-0 m-0">
              <li>Monday - Thursday <span>6am to 6pm</span></li>
              <li>Friday <span>12pm to 6pm</span></li>
              <li>Saturday <span>6am to 6pm</span></li>
              <li>Sunday <span>6am to 6pm</span></li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6">
          <div class="opening-hours">
            <h2 class="d-flex align-items-center">We Hope For You</h2>

            <ul class="p-0 m-0">
              <li>For Whitest Teeth of You</li>
              <li>For Brightest Smile of You</li>
              <li>For Real Smile of You </li>
              <li>For Beautiful Teeth of You</li>
            </ul>
          </div>
        </div>


      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6 ">
        <img src="{{asset('clinic_frontend/images/wp3.jpg')}}" style="height: 400px;" class="img-fluid">
        <h4>Treatment of Dental Carie </h4>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6 ">
        <img src="{{asset('clinic_frontend/images/wp2.jpg')}}" style="height: 400px;" class="img-fluid">
        <h4> Served with Experienced Specialist</h4>
      </div>
    </div>
  </div> 
<br><br>  
<div class="our-departments">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="our-departments-wrap">
          <h2>Our Departments</h2>

          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="our-departments-cont">
                <header class="entry-header d-flex flex-wrap align-items-center">
                  <img src="{{asset('clinic_frontend/images/cardiogram-2.png')}}" alt="">

                  <h3 >Cardioology</h3>
                </header>

                <div class="entry-content">
                  <p style="font-size: 20px">

                    Teeth cleaning is part of oral hygiene and involves the removal of dental plaque from teeth (dental caries)
                  </p>
                </div>

              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="our-departments-cont">
                <header class="entry-header d-flex flex-wrap align-items-center">
                  <img src="{{asset('clinic_frontend/images/stomach-2.png')}}" alt="">

                  <h3>Gastroenterology</h3>
                </header>

                <div class="entry-content">
                  <p style="font-size: 20px">Cleaning of Teeth

                  Teeth cleaning is part of oral hygiene and involves the removal of dental plaque from</p>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="our-departments-cont">
                <header class="entry-header d-flex flex-wrap align-items-center">
                  <img src="{{asset('clinic_frontend/images/cardiogram.png')}}" alt="">

                  <h3>Cardioology</h3>
                </header>

                <div class="entry-content">
                  <p style="font-size: 20px">
                    Dental anesthesia is a field of anesthesia that includes not only local but sedation and general anesthesia.

                  </p>
                </div>


              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="testimonial-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Pacient’s Testimonials</h2>
      </div>
    </div>
  </div>

  <!-- Swiper -->
  <div class="testimonial-slider">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-9">
          <div class="testimonial-bg-shape">
            <div class="swiper-container testimonial-slider-wrap">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="entry-content">
                    <p>
                    I found this dentist office on Yelp after I found it impossible to get my usual office on the phone to make an appointment, and I must say that I’m soooo glad that they were unavailable because I’ve found a new dental home!! They open really early! I had a 7:30a appointment. Everyone was friendly, thorough, informative, and professional and made me feel right at home!</p>
                  </div>

                  <div class="entry-footer">
                    <figure class="user-avatar">
                      <img src="{{asset('clinic_frontend/images/user-1.jpg')}}" alt="">
                    </figure>
                    <h3 class="testimonial-user">Russell Stephens <span>University in UK</span></h3>
                  </div>
                </div>                      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<div class="the-news">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2><i>Latest News</i></h2>

        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="the-news-wrap">
              <figure class="post-thumbnail">
                <a href="#"><img src="{{asset('clinic_frontend/images/news-1.png')}}" alt=""></a>
              </figure>

              <header class="entry-header">
                <h3><i>The latest in Medicine</i></h3>
<!-- 
                                <div class="post-metas d-flex flex-wrap align-items-center">
                                    <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                    <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                    <div class="post-comments"><a href="#">2 Comments</a></div>
                                  </div> -->
                                </header>

                                <div class="entry-content">
                                  <p style="font-size: 20px">Health news updates from countries in the global south. Latest analysis on health and development in the global south. User Friendly Site. Original News & Analysis. Worldwide Network. Types: Fisheries, Food security, Farming, Livestock, Forestry, GM.</p>
                                </div>
                              </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                              <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                  <a href="#"><img src="{{asset('clinic_frontend/images/news-2.png')}}" alt=""></a>
                                </figure>


                                <header class="entry-header">
                                  <h3><i>The Pills about You need to Know</i></h3>

                                </header>

                                <div class="entry-content">
                                 <p style="font-size: 20px">It is important to be educated on the subject, not only because it’s something you’re putting in your body, but because of what can happen if you don’t use it correctly. (Out of unintended pregnancies in the U.S., 41% )</p>
                               </div>
                             </div>
                           </div>

                           <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                              <figure class="post-thumbnail">
                                <a href="#"><img src="{{asset('clinic_frontend/images/news-3.png')}}" alt=""></a>
                              </figure>

                              <header class="entry-header">
                                <h3><i>Marketing and Medicine</i></h3>


                              </header>

                              <div class="entry-content">
                               <p style="font-size: 20px">The medical professions tend to present a picture of themselves as being above the vulgarities of commercial life because of the nature of their work. In reality though, their members have to earn a living, and to earn a good one. </p>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="subscribe-banner">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                      <h2>Subscribe to our newsletter</h2>

                      <form>
                        <input type="email" placeholder="E-mail address">
                        <input class="button gradient-bg" type="submit" value="Subscribe">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
@endsection