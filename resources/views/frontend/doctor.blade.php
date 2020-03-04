@extends('frontend')

@section('dmryay')


  <div class="container-fluid">
<div class="row-fluid">
<div class="span12">

    <div class="page-header">
        <h3>Bootstrap Moving Box Carousel</h3>
        <p>Responsive Moving Box Carousel Demo</p>
    </div>
        
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?girl"></a>
                            </div>
                            <div class="caption">
                                <h4>Beautiful Girl</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?bikni"></a>
                            </div>
                            <div class="caption">
                                <h4>Bikni Girl</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?cat"></a>
                            </div>
                            <div class="caption">
                                <h4>Cat</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?beauty"></a>
                            </div>
                            <div class="caption">
                                <h4>World Beauty</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide1 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?insurance"></a>
                            </div>
                            <div class="caption">
                                <h4>Insurance Polichy</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?loan"></a>
                            </div>
                            <div class="caption">
                                <h4>Bank Loan</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?digital"></a>
                            </div>
                            <div class="caption">
                                <h4>Digital Banking</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?banking"></a>
                            </div>
                            <div class="caption">
                                <h4>Online Banking</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide2 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?girl"></a>
                            </div>
                            <div class="caption">
                                <h4>Codehim.com</h4>
                				<p>Free Web Design Code and Scripts</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?bikni"></a>
                            </div>
                            <div class="caption">
                                <h4>Free jQuery Plugins</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?baby"></a>
                            </div>
                            <div class="caption">
                                <h4>Web Development</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="https://source.unsplash.com/360x240/?stylish"></a>
                            </div>
                            <div class="caption">
                                <h4>Bootstrap</h4>
                				<p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini btn-primary" href="#">&raquo; Read More</a>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide3 --> 
        </div>
        
        <div class="control-box">                            
            <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
            <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
        </div><!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->
        
</div><!-- /.span12 -->          
</div><!-- /.row --> 
</div><!-- /.container -->
  



@endsection