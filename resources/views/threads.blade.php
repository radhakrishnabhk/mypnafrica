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
                    <div class="col-md-2"> <a href="#"><span class="fa fa-smile-o fa-3x"></span></a>
                      <!--<i class="fa fa-smile-o fa-4x"></i> -->
                    </div>
                    <div class="col-md-7">
                      <div id="custom-search-input">
                        <div class="input-group col-md-12">
                          <input type="text" class="form-control input-lg" placeholder="Looking For Something ?" />
                          <span class="input-group-btn">
                          <button class="btn btn-default btn-lg" type="button"> <i class="fa fa-search"></i> </button>
                          </span> </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="button" class="btn btn-default btn-lg" id="saysomething" value="Or Say Something">
                    </div>
                  </div>
                </div>
              </div>
              <!--panel heading-->
              <div class="panel-body">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-11"> <a href="#" title="Discussions"><span class="fa fa-list"></span></a> </div>
                      <div class="col-md-11"> <a href="#" title="Categories"><span class="fa fa-folder"></span></a> </div>
                      <div class="col-md-11 pull-right"> <a href="#" title="Notifications"><span class="fa fa-globe"></span></a> </div>
                      <div class="col-md-11 pull-right"> <a href="#" title="Conversation"><span class="fa fa-comment"></span></a> </div>
                    </div>
                    <!--/row-->
                  </div>
                  <!--panel-body-->
                </div>
                <div class="row">
                  <div class="col-md-6"><span style="font-size:15px;font-weight:bold">{{ $category->title }}</span></div>
                  <div class="col-md-6 pull-right"><a href="#"><i class="fa fa-envelope pull-right"></i></a> </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-3">
                    <p>Total Posts : 5</p>
                  </div>
                  <!--col-md-3-->
                  <div class="col-md-3 pull-right"> <a href="addnewpost.html"
                    <button type="button" class="btn bg-dark" id="adpst"><i class="fa fa-plus-square"></i> ADD NEW POST</button>
                    </a> </div>
                </div>
                <hr>
			    @foreach ($category->threadsPaginated as $thread)
                <div class="row" id="two">
                  <div class="col-lg-12 col-sm-12">
                    <section class="panel" style="border-left: 2px solid #fb6b5b;">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
                           <a href="adsinside.html" class="thumbnail"> <img src="images/avatar.jpg" alt="..."> </a>
                            <div align="center"><strong> {{ $thread->authorName }}</strong></div>
                            <div class="text-center "><i class="fa fa-circle text-danger"></i>offline</div>
                            <div class="text-center"><a href="#" class="btn  bg-dark"><i class="fa fa-envelope-o"></i>PM</a></div>
                          </div>
                          <div class="col-xs-12 col-sm-5 col-md-7 col-lg-7">
                            <h4><a href="/thread/{{$category->threadsPaginated}}/somea">{{ $thread->title }}</a></h4>
                            <br>
                            <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                              <!--<small class=""><a href="#"><i class="fa fa-thumbs-o-up"></i>Likes (25)</a> &nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-comment-o"></i> Comments (25)</a> </small>  -->
                              <span><i class="fa fa-inbox"></i>Posted in {{ $category->title }}</span> </footer>
                          </div>
                          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <ul class="list-group no-radius" style="margin-top:5px;">
                              <li class="list-group-item text-center  bg-success"></i> Replies ({{ $thread->replyCount }}) </li>
                              <li class="list-group-item text-center  bg-warning">Views ({{ $thread->viewCount }}) </li>
                              <li class="list-group-item text-center  bg-danger">Votes (10) </li>
                              <li class="list-group-item text-center  bg-gradient">Likes (10) </li>
                            </ul>
                          </div>
                          <span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> ({{ $thread->posted }}) </span> </div>
                      </div>
                    </section>
                  </div>
                </div>
                @endforeach
                
                <br>
                <!--/row-->
              </div>
              <!--panel-body-->
            </div>
          </div>
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
			
			$('#saysomething').click(function (){
				
				window.location = '<?php echo url();?>/createthread/1/somea';
				
			});
		  
	  });
	  
	  </script>
	   @stop