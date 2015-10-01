@extends('master')
@section('content')

	<section class="scrollable wrapper">
        <div class="row">
          <div class="col-lg-8">
            <div class="panel panel-default">
  <div class="panel-heading">
 
      <div class="container">
	<div class="row">
    <div class="col-md-11">
    <a href="#"><span class="fa fa-smile-o fa-3x"></span></a><!--<i class="fa fa-smile-o fa-4x"></i> -->

    </div>
        <div class="col-md-6">
    		
            <div id="custom-search-input">
            
                <div class="input-group col-md-12">
                
                    <input type="text" class="form-control input-lg" placeholder="Looking For Something ?" />
                    <span class="input-group-btn">
                        <button class="btn btn-default btn-lg" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
           <input type="button" class="btn btn-default btn-lg" value="Or Say Something">
        </div>
	</div>
</div>
 
  </div><!--panel heading-->
  <div class="panel-body">
   <div class="panel panel-default">
  <div class="panel-body">
  <div class="row">
    <div class="col-md-11">
    <a href="#" title="Discussions"><span class="fa fa-list"></span></a>
    </div>
<div class="col-md-11">
    <a href="#" title="Categories"><span class="fa fa-folder"></span></a>
    </div>
   
   
  
    <div class="col-md-11 pull-right">
    <a href="#" title="Notifications"><span class="fa fa-globe"></span></a>
    </div>
<div class="col-md-11 pull-right">
    <a href="#" title="Conversation"><span class="fa fa-comment"></span></a>
    </div>

    
  </div><!--/row-->
  </div><!--panel-body-->
</div>
 <h2>Jokes</h2>
  <hr><div class="row">
  <div class="col-md-3">
  <p>Total Posts : 5</p>
  </div><!--col-md-3-->
  <div class="col-md-3 pull-right">
  <button type="button" class="btn btn-info" id="adpst"><i class="fa fa-plus-square"></i> ADD NEW POST</button>
   
  </div><!--col-md-5-->
  </div><!--/row-->
  <br>
  <!--<div class="row">
  <div class="col-md-12">
   <ul class="nav nav-pills">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>
</div> --><!--/col-md-12-->
  </div><!--/row-->
  <br>
  <!--<div class="row">
  <div class="col-md-1">
  <img src="images/default_category.png" class="img-responsive" alt="jokes" style="background:#fbfbfb none repeat scroll 0 0;border:1px solid #dfdfdf;border-radius:50%;">
  
  </div><!--/col-md-11--
  <div class="col-md-6">
   <a href="#"><h4>Jokes</h4></a>
   <p>5 Discussions</p>
   </div><!--/col-md-3--
   </div> --><!--/row-->
    <br>
   <!--<div class="row">
  <div class="col-md-1">
  <img src="images/default_category.png" class="img-responsive" alt="jokes" style="background:#fbfbfb none repeat scroll 0 0;border:1px solid #dfdfdf;border-radius:50%;">
  
  </div><!--/col-md-11--
  <div class="col-md-6">
   <a href="#"><h4>Health</h4></a>
   <p>0 Discussions</p>
   </div><!--/col-md-3--
   </div> --><!--/row-->
    <br>
  <!-- <div class="row">
  <div class="col-md-1">
  <img src="images/default_category.png" class="img-responsive" alt="jokes" style="background:#fbfbfb none repeat scroll 0 0;border:1px solid #dfdfdf;border-radius:50%;">
  
  </div><!--/col-md-11--
  <div class="col-md-6">
   <a href="#"><h4>Politics</h4></a>
   <p>2 Discussions</p>
   </div><!--/col-md-3--
   </div><--/row-->
    <br>
   <div class="row">
  <div class="col-md-1">
  <img src="images/default_category.png" class="img-responsive" alt="jokes" style="background:#fbfbfb none repeat scroll 0 0;border:1px solid #dfdfdf;border-radius:50%;">
  
  </div><!--/col-md-11-->
  @foreach ($category->subcategories as $subcategory)
  <div class="col-md-6">
   <a href="#"><h4>{{ $subcategory->subtitle }}</h4></a>
   <p>2 Discussions</p>
   </div><!--/col-md-3-->
   </div><!--/row-->
    <br>
   <div class="row">
  <div class="col-md-1">
  <img src="images/default_category.png" class="img-responsive" alt="jokes" style="background:#fbfbfb none repeat scroll 0 0;border:1px solid #dfdfdf;border-radius:50%;">
  
  </div><!--/col-md-11-->
  
  
  @endforeach
  <div class="col-md-6">
   <a href="#"><h4>Entertainment</h4></a>
   <p>2 Discussions</p>
   </div><!--/col-md-3-->
   </div><!--/row-->
    <br>
   <div class="row">
  <div class="col-md-1">
  <img src="images/default_category.png" class="img-responsive" alt="jokes" style="background:#fbfbfb none repeat scroll 0 0;border:1px solid #dfdfdf;border-radius:50%;">
  
  </div><!--/col-md-11-->
  <div class="col-md-6">
   <a href="#"><h4>Cities & Places</h4></a>
   <p>0 Discussions</p>
   </div><!--/col-md-3-->
   </div><!--/row-->
    <br>
   <div class="row">
  <div class="col-md-1">
  <img src="images/default_category.png" class="img-responsive" alt="jokes" style="background:#fbfbfb none repeat scroll 0 0;border:1px solid #dfdfdf;border-radius:50%;">
  
  </div><!--/col-md-11-->
  <div class="col-md-6">
   <a href="#"><h4>Events,Hotels & Night Clubs</h4></a>
   <p>0 Discussions</p>
   </div><!--/col-md-3-->
   </div><!--/row-->
   <br>
   <div class="row">
  <div class="col-md-1">
  <img src="images/default_category.png" class="img-responsive" alt="jokes" style="background:#fbfbfb none repeat scroll 0 0;border:1px solid #dfdfdf;border-radius:50%;">
  
  </div><!--/col-md-11-->
  <div class="col-md-6">
   <a href="#"><h4>Development & Technology in Africa</h4></a>
   <p>1 Discussions</p>
   </div><!--/col-md-3-->
   </div><!--/row-->
   
   
  </div><!--panel-body-->
 
  
 
</div>
            <div class="row">
              <div class="col-lg-12 col-sm-12">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">5m ago</small> <a class="thumb-sm pull-left m-r" href="#"> <img class="img-circle" src="images/avatar.jpg"> </a>
                      <div class="clear"> <a href="#"><strong>Jonathan Omish</strong></a> <small class="block text-muted">San Francisco, USA</small> </div>
                    </div>
                    <p>PnAfrik PnAfrik PnAfrik PnAfrik...</p>
                    <small class=""><a href="#"><i class="fa fa-thumbs-o-up"></i>Likes (25)</a> &nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-comment-o"></i> Comments (25)</a> </small> </div>

                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" placeholder="Write a comment..." class="form-control no-border input-lg text-sm">
                    </form>
                  </footer>
                </section>
              </div>
              <!--<div class="col-lg-6 col-sm-6">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">1hr ago</small> <a href="#" class="thumb-sm pull-left m-r"> <img src="images/avatar_default.jpg" class="img-circle"> </a>
                      <div class="clear"> <a href="#"><strong>Mike Mcalidek</strong></a> <small class="block text-muted">Newyork, USA</small> </div>
                    </div>
                    <div class="pull-in bg-light clearfix m-b-n">
                      <p class="m-t-sm m-b text-center animated bounceInDown"> <i class="fa fa-map-marker text-danger fa fa-4x" data-toggle="tooltip" title="checked in at Newyork"></i> </p>
                    </div>
                  </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" class="form-control no-border input-lg text-sm" placeholder="Write a comment...">
                    </form>
                  </footer>
                </section>
              </div> -->
            </div>
            <div class="row">
              <div class="col-lg-12 col-sm-12">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">5m ago</small> <a class="thumb-sm pull-left m-r" href="#"> <img class="img-circle" src="images/avatar.jpg"> </a>
                      <div class="clear"> <a href="#"><strong>Jonathan Omish</strong></a> <small class="block text-muted">San Francisco, USA</small> </div>
                    </div>
                    <p><img width="200" height="150" alt="img" src="images/thumb_1.jpg"></p>
                    <small class=""><a href="#"><i class="fa fa-thumbs-o-up"></i>Likes (25)</a> &nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-comment-o"></i> Comments (25)</a> </small> </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" placeholder="Write a comment..." class="form-control no-border input-lg text-sm">
                    </form>
                  </footer>
                </section>
              </div>
              <!--<div class="col-lg-6 col-sm-6">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">1hr ago</small> <a href="#" class="thumb-sm pull-left m-r"> <img src="images/avatar_default.jpg" class="img-circle"> </a>
                      <div class="clear"> <a href="#"><strong>Mike Mcalidek</strong></a> <small class="block text-muted">Newyork, USA</small> </div>
                    </div>
                    <div class="pull-in bg-light clearfix m-b-n">
                      <p class="m-t-sm m-b text-center animated bounceInDown"> <i class="fa fa-map-marker text-danger fa fa-4x" data-toggle="tooltip" title="checked in at Newyork"></i> </p>
                    </div>
                  </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" class="form-control no-border input-lg text-sm" placeholder="Write a comment...">
                    </form>
                  </footer>
                </section>
              </div> -->
            </div>
            <div class="row">
              <div class="col-lg-12 col-sm-12">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">5m ago</small> <a class="thumb-sm pull-left m-r" href="#"> <img class="img-circle" src="images/avatar.jpg"> </a>
                      <div class="clear"> <a href="#"><strong>Jonathan Omish</strong></a> <small class="block text-muted">San Francisco, USA</small> </div>
                    </div>
                    <p>PnAfrik PnAfrik PnAfrik PnAfrik...</p>
                    <small class=""><a href="#"><i class="fa fa-thumbs-o-up"></i>Likes (25)</a> &nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-comment-o"></i> Comments (25)</a> </small> </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" placeholder="Write a comment..." class="form-control no-border input-lg text-sm">
                    </form>
                  </footer>
                </section>
              </div>
              <!--<div class="col-lg-6 col-sm-6">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">1hr ago</small> <a href="#" class="thumb-sm pull-left m-r"> <img src="images/avatar_default.jpg" class="img-circle"> </a>
                      <div class="clear"> <a href="#"><strong>Mike Mcalidek</strong></a> <small class="block text-muted">Newyork, USA</small> </div>
                    </div>
                    <div class="pull-in bg-light clearfix m-b-n">
                      <p class="m-t-sm m-b text-center animated bounceInDown"> <i class="fa fa-map-marker text-danger fa fa-4x" data-toggle="tooltip" title="checked in at Newyork"></i> </p>
                    </div>
                  </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" class="form-control no-border input-lg text-sm" placeholder="Write a comment...">
                    </form>
                  </footer>
                </section>
              </div> -->
            </div>
            <div class="row">
              <div class="col-lg-12 col-sm-12">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">5m ago</small> <a class="thumb-sm pull-left m-r" href="#"> <img class="img-circle" src="images/avatar.jpg"> </a>
                      <div class="clear"> <a href="#"><strong>Jonathan Omish</strong></a> <small class="block text-muted">San Francisco, USA</small> </div>
                    </div>
                    <p>PnAfrik PnAfrik PnAfrik PnAfrik...</p>
                    <small class=""><a href="#"><i class="fa fa-thumbs-o-up"></i>Likes (25)</a> &nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-comment-o"></i> Comments (25)</a> </small> </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" placeholder="Write a comment..." class="form-control no-border input-lg text-sm">
                    </form>
                  </footer>
                </section>
              </div>
              <!--<div class="col-lg-6 col-sm-6">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">1hr ago</small> <a href="#" class="thumb-sm pull-left m-r"> <img src="images/avatar_default.jpg" class="img-circle"> </a>
                      <div class="clear"> <a href="#"><strong>Mike Mcalidek</strong></a> <small class="block text-muted">Newyork, USA</small> </div>
                    </div>
                    <div class="pull-in bg-light clearfix m-b-n">
                      <p class="m-t-sm m-b text-center animated bounceInDown"> <i class="fa fa-map-marker text-danger fa fa-4x" data-toggle="tooltip" title="checked in at Newyork"></i> </p>
                    </div>
                  </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" class="form-control no-border input-lg text-sm" placeholder="Write a comment...">
                    </form>
                  </footer>
                </section>
              </div> -->
            </div>
            <div class="text-center m-b"> <i class="fa fa-spinner fa fa-spin"></i> </div>
          </div>
          <div class="col-lg-4">
            <section class="panel bg-info lter no-borders">
              <div class="panel-body"> <a class="pull-right" href="#"><i class="fa fa-map-marker"></i></a> <span class="h4">McLean, VA</span>
                <div class="text-center padder m-t"> <span class="h1"><i class="fa fa-cloud text-muted"></i> 68°</span> </div>
              </div>
              <footer class="panel-footer lt">
                <div class="row">
                  <div class="col-xs-4"> <small class="text-muted block">Humidity</small> <span>56 %</span> </div>
                  <div class="col-xs-4"> <small class="text-muted block">Precip.</small> <span>0.00 in</span> </div>
                  <div class="col-xs-4"> <small class="text-muted block">Winds</small> <span>7 mp</span> </div>
                </div>
              </footer>
            </section>
            <section class="panel no-borders">
              <header class="panel-heading bg-success lter"> <span class="pull-right">Friday</span> <span class="h4">$540<br>
                <small class="text-muted">+1.05(2.15%)</small> </span>
                <div class="text-center padder m-b-n-sm m-t-sm">
                  <div class="sparkline" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="2" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-data="[220,210,200,325,250,320,345,250,250,250,400,380]"><canvas style="display: inline-block; width: 360px; height: 65px; vertical-align: top;" width="360" height="65"></canvas></div>
                  <div class="sparkline inline" data-type="bar" data-height="45" data-bar-width="6" data-bar-spacing="10" data-bar-color="#92cf5c"><canvas style="display: inline-block; width: 6px; height: 45px; vertical-align: top;" width="6" height="45"></canvas></div>
                </div>
              </header>
              <div class="panel-body">
                <div> <span class="text-muted">Sales in June:</span> <span class="h3 block">$2500.00</span> </div>
                <div class="row m-t-sm">
                  <div class="col-xs-4"> <small class="text-muted block">From market</small> <span>$1500.00</span> </div>
                  <div class="col-xs-4"> <small class="text-muted block">Referal</small> <span>$600.00</span> </div>
                  <div class="col-xs-4"> <small class="text-muted block">Affiliate</small> <span>$400.00</span> </div>
                </div>
              </div>
            </section>
            <section class="panel">
              <div class="text-center wrapper">
                <div class="sparkline inline" data-type="pie" data-height="150" data-slice-colors="['#acdb83','#f2f2f2','#fb6b5b']"><canvas style="display: inline-block; width: 150px; height: 150px; vertical-align: top;" width="150" height="150"></canvas></div>
              </div>
              <ul class="list-group no-radius">
                <li class="list-group-item"> <span class="pull-right">25,000</span> <span class="label bg-success">1</span> .inc company </li>
                <li class="list-group-item"> <span class="pull-right">23,200</span> <span class="label bg-danger">2</span> Gamecorp </li>
                <li class="list-group-item"> <span class="pull-right">15,000</span> <span class="label bg-light">3</span> Neosoft company </li>
              </ul>
            </section>
            <section class="panel clearfix">
              <div class="panel-body"> <a href="#" class="thumb pull-left m-r"> <img src="images/avatar.jpg" class="img-circle"> </a>
                <div class="clear"> <a href="#" class="text-info">@Mike Mcalidek <i class="fa fa-twitter"></i></a> <small class="block text-muted">2,415 followers / 225 tweets</small> <a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a> </div>
              </div>
            </section>
          </div>
        </div>
      </section>
	   @stop