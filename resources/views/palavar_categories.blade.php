@extends('master')
@section('content')
    <?php
	
    $encrypter = app('Illuminate\Encryption\Encrypter');
    $encrypted_token = $encrypter->encrypt(csrf_token());
 
	
	?>
	<section class="scrollable wrapper">
        <div class="row">
          <div class="col-lg-8">
            <div class="panel panel-default">
  <div class="panel-heading">
 
      <div class="">
	<div class="row">
    <div class="col-md-2">
    <a href="#"><span class="fa fa-smile-o fa-3x"></span></a><!--<i class="fa fa-smile-o fa-4x"></i> -->

    </div>
        <div class="col-md-7">
    		
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
        <div class="col-md-3 pull-right">
           <input type="button" class="btn btn-default btn-lg" id="saysomehing" value="Or Say Something">
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
  <a href="addnewpost.html"><button type="button" class="btn btn-info" id="adpst"><i class="fa fa-plus-square"></i> ADD NEW POST</button></a>
   
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
</div><!--/col-md-12--
  </div> --><!--/row-->
  
  @foreach ($category->subcategories as $subcategory)
  <div class="row">
  <div class="col-md-1 col-xs-2 col-sm-1 col-lg-1">
  <img src="images/default_category.png" class="img-responsive" alt="jokes" style="background:#fbfbfb none repeat scroll 0 0;*border:1px solid #dfdfdf;">
  
  </div><!--/col-md-11-->
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
   <a href="palaver-categories.html"><h4>{{ $subcategory->title }}</h4></a>
   <p>{{ $subcategory->threadCount }} Discussions</p>
   <p>{{ $subcategory->postCount }} Posts</p>
   </div><!--/col-md-3-->
   </div><!--/row-->
    <br>
	@endforeach
   
  </div><!--panel-body-->
 
  
 
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
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	  <script type="text/javascript">
	  
	  $(document).ready(function(){
		  
		    $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN':'{{csrf_token()}}'
				}
			});
			
			//alert('hi');
		    ////////////////////imp code//////////////////
			/*$.post( "<?php echo url();?>/thread/"+'3/somealias', { title: "mypost",content: "this is my first post" }, function( data ) {
			  console.log( data ); // John
			  alert(data);
			}, "json");*/
			
			////////////////////imp code end//////////////////
			
			$('#saysomehing').click(function (){
				
				window.location = '<?php echo url();?>/createthread/1/somea';
				
			});
		  
	  });
	  
	  </script>
	   @stop