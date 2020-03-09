@extends('frontend')
@section('frontend')
<style type="text/css">
    body{
  overflow-x: hidden;
}
.hidden-thing
{
  position: absolute;
  left: 100%;
  width: 50px;
  height: 50px;
  opacity: 0;
}
    div#carouselExampleIndicators img
    {
     width:100%;
     margin: 0 auto;
     height:500px;
     object-fit:cover;
   }
   div#cool1 a {
    color:white;
  }

  div#cool2 a {
    color:white;
  }

  #conuter
  {
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{asset('clinic_frontend/images/c1.jpg')}}");
    background-size:cover;
    background-position: center;
    background-attachment: fixed;
    padding: 35px;
  }


</style>
  

  <div class="container">

    <h1 class="text-primary my-5" align="center">About Us</h1>


   <hr class="my-5" id="">

   <div class="container my-5">
    <div class="row">
      <div class="col-lg-4 col-md-5 col-sm-12">
        <img src="{{asset('clinic_frontend/images/do9.jpg')}}" class="img-fluid img-thumbnail rounded" style="height: 700px;">
      </div>
      <div class="col-lg-8 col-md-7 col-sm-12">
        <h3 align="center">-Enjoy-</h3>
        <div class="row my-5">

          <div class="col-lg-2 col-md-3 col-sm-6">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x" style="color:red"></i>
              <i class="fas fa-ticket-alt fa-stack-1x fa-inverse"></i>
            </span>
          </div>

          <div class="col-lg-10  col-md-9 col-sm-6">

            <h4 class="text-primary">History</h4>
            <p class="text-secondary">They say the eyes are the windows to the soul. If that’s true, then the mouth is the front door. Our mouths are a gateway for illness, affecting the wellness of our entire body. Dental bacteria has been shown to play a contributing role in many serious health conditions, including heart disease, diabetes, stroke and even Alzheimer’s. The Surgeon General reports that 80% of American adults have gum disease. That’s four out of every five people! It’s because of this direct link between the wellness of the mouth and the wellness of the body that high-quality dental care is so crucial.</p>
          </div>
        </div>

        <div class="row my-5">

          <div class="col-lg-2 col-md-3 col-sm-6">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x" style="color:red"></i>
            <i class="fas fa-history fa-stack-1x fa-inverse"></i>
            </span>
          </div>

          <div class="col-lg-10  col-md-9 col-sm-6">

            <h4 class="text-primary">Our Story</h4>
            <p class="text-secondary">Navidia is one of Myanmar's leading multiplex cinema exihibitors. JCGV brand started offering services since 2009 at the capital city of Myanmar, Naypyitaw. Its expansion to Yangon has brought success in the entertainment industry fulfilling its goal to provide unique cinema experience.

			It is the first cinema with multiplex concept, international standard facilities and Digital 3D technology. It has the most modern state-of-the –art multiplex theater in the country and also set new standards of comfort and convenience with the international standard projection system, comfortable seating and advance computerized ticketing system.

			Through various innovations, impeccable customer services offered and latest technology, JCGV is able to provide the ultimate movie experience to all audiences.
          </div>
        </div>

        <div class="row my-5">

          <div class="col-lg-2 col-md-3 col-sm-6">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x" style="color:red"></i>
              <i class="fas fa-ban fa-stack-1x fa-inverse"></i>
            </span>
          </div>

          <div class="col-lg-10  col-md-9 col-sm-6">

            <h4 class="text-primary">How do I cancle?</h4>
            <p class="text-secondary">Clinic is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.</p>  
          </div>
        </div>

      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
      </div>
    </div>
  </div>

  <hr class="my-5" id="">

  <div class="row">

   <div class="col-ld-12 col-md-12 col sm-12">

    <h4 class="text-primary">Our Values</h4>
    <p>We provide opportunities for smaller restaurants and social businesses to partner with us by giving them an opportunity to showcase their menus and increase their sales through waiving listing fees..</p>

  </div>
</div>
</div>

<div id="conuter">
  <div class="container p-5">
    <div class="row text-white text-center text-light">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <h1>10</h1>
        <p>Doctor</p>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <h1>1,000+</h1>
        <p>Patient</p>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <h1>25+</h1>
        <p>Awards & Certificate</p>
      </div>
    </div>
  </div>
</div>
<div class="faq-stuff">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Faq & Stuff</h2>
                </div>

                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <div class="accordion-wrap type-accordion">
                        <h3 class="entry-title d-flex justify-content-between align-items-center active">Warranty and Customer Satisfaction Guarantee<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p> It’s uncommon to offer a warranty in the dental industry, but at Atlanta Dental Spa we put our money where our mouth is. We stand by our work, offering a five-year warranty on most services. We’d venture to guess that you won’t find many practices who can offer the same. Patient satisfaction is one of our main goals as it pertains to your care. We understand that everyone makes mistakes. We admit that sometimes, that includes us. But rest assured that if something goes wrong, we’re going to do everything in our power to make it right.</p>
                        </div>

                        <h3 class="entry-title d-flex justify-content-between align-items-center">Top Reviewed. Top Rated, but we’re not bragging<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>   What’s the first thing you do when you’re thinking of using a business? You Google them! Your dentist should be no different. Online reviews are honest and straightforward, they’re a great way to get an unfiltered look at what other patients really think of a company. You’ll find Atlanta Dental Spa has hundreds of independent Google reviews for our three locations, with additional reviews on Yelp, Dr Oogle and Kudzu, just to name a few. We let our satisfied patients do the talking.</p>
                        </div>

                        <h3 class="entry-title d-flex justify-content-between align-items-center">Awards and Training<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p> If you want an award-winning smile, you need an award-winning dentist. As you’re considering a dentist, check out their accolades, industry honors and special certifications. If they’re not displayed prominently on the website or in the office, ask about them! Some of the significant industry organizations to look for include the American Dental Association, the Academy of Comprehensive Esthetics, the Academy of General Dentistry and the American Academy of Cosmetic Dentistry, among others.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="professional-box">
                                <h2 class="d-flex align-items-center">Awesome Technology</h2>

                                <img src="{{asset('clinic_frontend/images/cardiogram-2.png')}}" alt="">

                                <p> When it comes to your smile you shouldn’t take shortcuts. Don’t settle for a practice that uses outdated equipment and decades-old technology. </p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="quality-box">
                                <h2 class="d-flex align-items-center"> The Golden Rule</h2>

                                <img src="{{asset('clinic_frontend/images/hospital.png')}}" alt="">

                                <p>   The dedicated staff at Atlanta Dental Spa lives the golden rule every day. We treat patients exactly as we’d treat our own family member.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection