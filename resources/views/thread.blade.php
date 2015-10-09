@extends('master')
@section('content')
    <?php
	
    $encrypter = app('Illuminate\Encryption\Encrypter');
    $encrypted_token = $encrypter->encrypt(csrf_token());
 
	
	?>
	<section class="scrollable wrapper">
        <div class="row">
          <div class="col-lg-8">
          
          
          
          <div class="panel-body">
                <div class="panel panel-default">
                  <div class="row">
                    <div class="col-md-1"> <a href="#"><span class="fa fa-smile-o fa-3x"></span></a> </div>
                    <div class="col-md-8">
                      <div id="custom-search-input">
                        <div class="input-group col-md-12">
                          <input type="text" class="form-control input-lg" placeholder="Looking For Something ?">
                          <span class="input-group-btn">
                          <button class="btn btn-default btn-lg" type="button"> <i class="fa fa-search"></i> </button>
                          </span> </div>
                      </div>
                    </div>
                    <div class="col-md-3 pull-right">
                      <input type="button" class="btn btn-default btn-lg" value="Or Say Something">
                    </div>
                  </div>
                </div>
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
                  <div class="col-md-3 page-header">
                   <div class="m-b"> <select id="select2-option" name="mycat" style="width:260px; height:35px" tabindex="-1" class="select2-offscreen">  <option value="1">Jokes</option> <option value="2">Hawaii</option> <option value="CA">California</option> <option value="NV">Nevada</option> <option value="OR">Oregon</option> <option value="WA">Washington</option> <option value="AZ">Arizona</option> <option value="CO">Colorado</option> <option value="ID">Idaho</option> <option value="MT">Montana</option><option value="NE">Nebraska</option> <option value="NM">New Mexico</option> <option value="ND">North Dakota</option> <option value="UT">Utah</option> <option value="WY">Wyoming</option> <option value="AL">Alabama</option> <option value="AR">Arkansas</option> <option value="IL">Illinois</option> <option value="IA">Iowa</option> <option value="KS">Kansas</option> <option value="KY">Kentucky</option> <option value="LA">Louisiana</option> <option value="MN">Minnesota</option> <option value="MS">Mississippi</option> <option value="MO">Missouri</option> <option value="OK">Oklahoma</option> <option value="SD">South Dakota</option> <option value="TX">Texas</option> <option value="TN">Tennessee</option> <option value="WI">Wisconsin</option>  <option value="CT">Connecticut</option> <option value="DE">Delaware</option> <option value="FL">Florida</option> <option value="GA">Georgia</option> <option value="IN">Indiana</option> <option value="ME">Maine</option> <option value="MD">Maryland</option> <option value="MA">Massachusetts</option> <option value="MI">Michigan</option> <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option> <option value="NY">New York</option> <option value="NC">North Carolina</option> <option value="OH">Ohio</option> <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option> <option value="VT">Vermont</option><option value="VA">Virginia</option> <option value="WV">West Virginia</option>	 </select> </div>
                  </div>
                  
                  <!--col-md-3-->
                  <div class="col-sm-12"> <input type="text" id="title" name="title" class="form-control" id="input-id-1" placeholder="What's In your Mind"> </div>
                  <!--col-md-5-->
                </div>
                <!--/row-->
                
                <div class="row">
                                 
                  <!-------------catagories- start here----------->
                  <div style="padding:15px">
                    
                    <div class="panel"> 
                    <div id="collapseOne" class="panel-collapse in"> <div class="panel-body text-sm">
                    
                    <div class="col-sm-12"> <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor"> <div class="btn-group"> <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font"><i class="fa fa-font"></i><b class="caret"></b></a> <ul class="dropdown-menu"> <li><a data-edit="fontName Serif" style="font-family:'Serif'">Serif</a></li><li><a data-edit="fontName Sans" style="font-family:'Sans'">Sans</a></li><li><a data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li><li><a data-edit="fontName Arial Black" style="font-family:'Arial Black'">Arial Black</a></li><li><a data-edit="fontName Courier" style="font-family:'Courier'">Courier</a></li><li><a data-edit="fontName Courier New" style="font-family:'Courier New'">Courier New</a></li><li><a data-edit="fontName Comic Sans MS" style="font-family:'Comic Sans MS'">Comic Sans MS</a></li><li><a data-edit="fontName Helvetica" style="font-family:'Helvetica'">Helvetica</a></li><li><a data-edit="fontName Impact" style="font-family:'Impact'">Impact</a></li><li><a data-edit="fontName Lucida Grande" style="font-family:'Lucida Grande'">Lucida Grande</a></li><li><a data-edit="fontName Lucida Sans" style="font-family:'Lucida Sans'">Lucida Sans</a></li><li><a data-edit="fontName Tahoma" style="font-family:'Tahoma'">Tahoma</a></li><li><a data-edit="fontName Times" style="font-family:'Times'">Times</a></li><li><a data-edit="fontName Times New Roman" style="font-family:'Times New Roman'">Times New Roman</a></li><li><a data-edit="fontName Verdana" style="font-family:'Verdana'">Verdana</a></li></ul> </div> <div class="btn-group"> <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a> <ul class="dropdown-menu"> <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li> <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li> <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li> </ul> </div> <div class="btn-group"> <a class="btn btn-white btn-sm" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a> <a class="btn btn-white btn-sm" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a> <a class="btn btn-white btn-sm" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class="fa fa-strikethrough"></i></a> <a class="btn btn-white btn-sm" data-edit="underline" title="" data-original-title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a> </div> <div class="btn-group"> <a class="btn btn-white btn-sm" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class="fa fa-list-ul"></i></a> <a class="btn btn-white btn-sm" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class="fa fa-list-ol"></i></a> <a class="btn btn-white btn-sm" data-edit="outdent" title="" data-original-title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a> <a class="btn btn-white btn-sm" data-edit="indent" title="" data-original-title="Indent (Tab)"><i class="fa fa-indent"></i></a> </div> <div class="btn-group"> <a class="btn btn-white btn-sm" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a> <a class="btn btn-white btn-sm" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a> <a class="btn btn-white btn-sm" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a> <a class="btn btn-white btn-sm" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a> </div> <div class="btn-group"> <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class="fa fa-link"></i></a> <div class="dropdown-menu"> <div class="input-group m-l-xs m-r-xs"> <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink"> <div class="input-group-btn"> <button class="btn btn-white btn-sm" type="button">Add</button> </div> </div> </div> <a class="btn btn-white btn-sm" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class="fa fa-cut"></i></a> </div> <div class="btn-group"> <a class="btn btn-white btn-sm" title="" id="pictureBtn" data-original-title="Insert picture (or just drag &amp; drop)"><i class="fa fa-picture-o"></i></a> <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" style="opacity: 0; position: absolute; top: 0px; left: 0px; width: 31px; height: 30px;"> </div> <div class="btn-group"> <a class="btn btn-white btn-sm" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a> <a class="btn btn-white btn-sm" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a> </div> <input type="text" class="form-control-trans pull-left" data-edit="inserttext" id="voiceBtn" x-webkit-speech="" style="width: 25px; height: 28px; display: none;"> </div> <div id="editor" class="form-control" style="overflow:scroll;height:150px;max-height:150px" contenteditable="true"> Go ahead… </div> </div>
                    
                    <div class="panel"> 
                   <form class="form-inline" role="form"> <div class="form-group " style="margin-top:15px"> <label >Share Location:</label> <div class="input-group "> <input type="text" class="form-control "> <span class="input-group-btn"><button class="btn btn-white" type="button"><i class="fa fa-map-marker"></i></button> <button class="btn btn-white" type="button"><i class="fa fa-times"></i></button> </span>
                </div> </form></div>
                    
                     </div> 	
                    
                     </div> </div> </div>
                    
                    
                    
                    
                    
                    
                    
                  </div>
                  
                </div>
                <section class="panel"> <header class="panel-heading text-right bg-light" style="border-bottom:15px solid transparent"> <ul class="nav nav-tabs pull-left"> <li class="active"><a href="#messages-2" data-toggle="tab"><i class="fa fa-upload text-default"> Attachment</i></a></li> <li class=""><a href="#profile-2" data-toggle="tab"><i class="fa fa-external-link text-default"></i>URL</a></li>  </ul> </header> <div class="panel-body"> <div class="tab-content"> <div class="tab-pane fade active in" id="messages-2">
            <span class="btn  btn-file">
    Browse <input type="file" id="myimage" name="myimage">
</span>    
                </div> <div class="tab-pane fade" id="profile-2">You can add additional URls that you would like to include in your post.
                <div class="input-group"> <input type="text" class="form-control"> <span class="input-group-btn"> <button class="btn btn-white" type="button"><i class="fa fa-times"></i></button> </span>
                </div>
                <div class="input-group"><button class="btn btn-default" type="button"><i class="fa fa-plus"></i>Add URL</button></div></div>	 </div> </div> </section>	  <div class="row">
                <div class="col-md-6">
                <div class="form-group"> <div class="col-sm-6"> <button type="submit" class="btn btn-danger pull-left">Calcel</button> </div> </div>
                </div>

                <div class="col-md-6">
                <div class="form-group pull-right"> <div class="col-sm-6"> <button type="submit" id="mythread" class="btn btn-success pull-right">Submit</button> </div> </div>		
                </div>
                 </div>
              	</div>
              
           <!--- <section class="panel">
              <form>
                <textarea class="form-control input-lg no-border" rows="2" placeholder="What are you doing..."></textarea>
              </form>
              <footer class="panel-footer bg-light lter">
                <button class="btn btn-info pull-right">POST</button>
                <ul class="nav nav-pills">
                  <li><a href="#"><i class="fa fa-location-arrow"></i></a></li>
                  <li><a href="#"><i class="fa fa-camera"></i></a></li>
                  <li><a href="#"><i class="fa fa-video-camera"></i></a></li>
                  <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                </ul>
              </footer>
            </section>
            <div class="row">
              <div class="col-lg-12 col-sm-12">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">5m ago</small> <a href="#" class="thumb-sm pull-left m-r"> <img src="images/avatar.jpg" class="img-circle"> </a>
                      <div class="clear"> <a href="#"><strong>Jonathan Omish</strong></a> <small class="block text-muted">San Francisco, USA</small> </div>
                    </div>
                    <p>PnAfrik PnAfrik PnAfrik PnAfrik...</p>
                    <small class=""><a href="#"><i class="fa fa-thumbs-o-up"></i>Likes (25)</a> &nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-comment-o"></i> Comments (25)</a> </small> </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" class="form-control no-border input-lg text-sm" placeholder="Write a comment...">
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
              </div> --
            </div>
            <div class="row">
              <div class="col-lg-12 col-sm-12">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">5m ago</small> <a href="#" class="thumb-sm pull-left m-r"> <img src="images/avatar.jpg" class="img-circle"> </a>
                      <div class="clear"> <a href="#"><strong>Jonathan Omish</strong></a> <small class="block text-muted">San Francisco, USA</small> </div>
                    </div>
                    <p><img src="images/thumb_1.jpg" alt="img" height="150" width="200"></p>
                    <small class=""><a href="#"><i class="fa fa-thumbs-o-up"></i>Likes (25)</a> &nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-comment-o"></i> Comments (25)</a> </small> </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" class="form-control no-border input-lg text-sm" placeholder="Write a comment...">
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
              </div> --
            </div>
            <div class="row">
              <div class="col-lg-12 col-sm-12">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">5m ago</small> <a href="#" class="thumb-sm pull-left m-r"> <img src="images/avatar.jpg" class="img-circle"> </a>
                      <div class="clear"> <a href="#"><strong>Jonathan Omish</strong></a> <small class="block text-muted">San Francisco, USA</small> </div>
                    </div>
                    <p>PnAfrik PnAfrik PnAfrik PnAfrik...</p>
                    <small class=""><a href="#"><i class="fa fa-thumbs-o-up"></i>Likes (25)</a> &nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-comment-o"></i> Comments (25)</a> </small> </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" class="form-control no-border input-lg text-sm" placeholder="Write a comment...">
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
              </div> --
            </div>
            <div class="row">
              <div class="col-lg-12 col-sm-12">
                <section class="panel">
                  <div class="panel-body">
                    <div class="clearfix m-b"> <small class="text-muted pull-right">5m ago</small> <a href="#" class="thumb-sm pull-left m-r"> <img src="images/avatar.jpg" class="img-circle"> </a>
                      <div class="clear"> <a href="#"><strong>Jonathan Omish</strong></a> <small class="block text-muted">San Francisco, USA</small> </div>
                    </div>
                    <p>PnAfrik PnAfrik PnAfrik PnAfrik...</p>
                    <small class=""><a href="#"><i class="fa fa-thumbs-o-up"></i>Likes (25)</a> &nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-comment-o"></i> Comments (25)</a> </small> </div>
                  <footer class="panel-footer pos-rlt"> <span class="arrow top"></span>
                    <form class="pull-out">
                      <input type="text" class="form-control no-border input-lg text-sm" placeholder="Write a comment...">
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
              </div> --
            </div>
            <div class="text-center m-b"> <i class="fa fa-spinner fa fa-spin"></i> </div>---->
          </div>
          <div class="col-lg-4">
            <section class="panel bg-info lter no-borders">
              <div class="panel-body"> <a href="#" class="pull-right"><i class="fa fa-map-marker"></i></a> <span class="h4">McLean, VA</span>
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
                  <div data-data="[220,210,200,325,250,320,345,250,250,250,400,380]" data-spot-radius="3" data-highlight-line-color="#fff" data-fill-color="" data-spot-color="#fff" data-line-color="#fff" data-line-width="2" data-width="100%" data-height="65" data-resize="true" data-type="line" class="sparkline">
                    <canvas style="display: inline-block; width: 382px; height: 65px; vertical-align: top;" width="382" height="65"></canvas>
                  </div>
                  <div data-bar-color="#92cf5c" data-bar-spacing="10" data-bar-width="6" data-height="45" data-type="bar" class="sparkline inline">
                    <canvas style="display: inline-block; width: 198px; height: 45px; vertical-align: top;" width="198" height="45"></canvas>
                  </div>
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
                <div data-slice-colors="['#acdb83','#f2f2f2','#fb6b5b']" data-height="150" data-type="pie" class="sparkline inline">
                  <canvas style="display: inline-block; width: 150px; height: 150px; vertical-align: top;" width="150" height="150"></canvas>
                </div>
              </div>
              <ul class="list-group no-radius">
                <li class="list-group-item"> <span class="pull-right">25,000</span> <span class="label bg-success">1</span> .inc company </li>
                <li class="list-group-item"> <span class="pull-right">23,200</span> <span class="label bg-danger">2</span> Gamecorp </li>
                <li class="list-group-item"> <span class="pull-right">15,000</span> <span class="label bg-light">3</span> Neosoft company </li>
              </ul>
            </section>
            <section class="panel clearfix">
              <div class="panel-body"> <a class="thumb pull-left m-r" href="#"> <img class="img-circle" src="images/avatar.jpg"> </a>
                <div class="clear"> <a class="text-info" href="#">@Mike Mcalidek <i class="fa fa-twitter"></i></a> <small class="block text-muted">2,415 followers / 225 tweets</small> <a class="btn btn-xs btn-success m-t-xs" href="#">Follow</a> </div>
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
				},
				processData: false,
                contentType: false
			});
			
			//alert('hi');
			
		    
			
			
			
			$('#mythread').click(function (){
				
				var formData = new FormData();
				var files = $('#myimage').prop('files'); 
                formData.append("image",files[0]);
				formData.append("content",$('#editor').html());
				formData.append("title",$('#title').val());
				
				$.post("<?php echo url();?>/createthread/"+$('#select2-option').val()+"/somea", formData, function(data){
					alert('saldf')
				  window.location = '<?php echo url();?>/showthreads/'+$('#select2-option').val()+'/somea';
				});
				
				
			});
			/*$.post( "<?php echo url();?>/thread/"+'3/somealias', { title: "mypost",content: "this is my first post" }, function( data ) {
			  console.log( data ); 
			  alert(data);
			}, "json");*/
		  
	  });
	  
	  </script>
	   @stop