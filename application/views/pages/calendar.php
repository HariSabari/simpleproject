
        <div class="right_col" role="main" ng-app="calendar" ng-controller="calendarcontroller">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Calendar Page <small>Click to add/edit events 123</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div id='monthviewscalendar'></div>
                    <!-- calendar modal -->
				    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				      <div class="modal-dialog">
				        <div class="modal-content">

				          <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				            <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
				          </div>
				          <div class="modal-body">
				            <div id="testmodal" style="padding: 5px 20px;">
				              <form id="antoform" class="form-horizontal calender" role="form">
				                <div class="form-group">
				                  <label class="col-sm-3 control-label">Title</label>
				                  <div class="col-sm-9">
				                    <input type="text" class="form-control" id="title" name="title">
				                  </div>
				                </div>
				                <div class="form-group">
				                  <label class="col-sm-3 control-label">Description</label>
				                  <div class="col-sm-9">
				                    <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
				                  </div>
				                </div>
				              </form>
				            </div>
				          </div>
				          <div class="modal-footer">
				            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
				            <button type="button" class="btn btn-primary antosubmit">Save changes</button>
				          </div>
				        </div>
				      </div>
				    </div>
				    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				      <div class="modal-dialog">
				        <div class="modal-content">

				          <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				            <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
				          </div>
				          <div class="modal-body">

				            <div id="testmodal2" style="padding: 5px 20px;">
				              <form id="antoform2" class="form-horizontal calender" role="form">
				                <div class="form-group">
				                  <label class="col-sm-3 control-label">Title</label>
				                  <div class="col-sm-9">
				                    <input type="text" class="form-control" id="title2" name="title2">
				                  </div>
				                </div>
				                <div class="form-group">
				                  <label class="col-sm-3 control-label">Description</label>
				                  <div class="col-sm-9">
				                    <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
				                  </div>
				                </div>

				              </form>
				            </div>
				          </div>
				          <div class="modal-footer">
				            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
				            <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
				          </div>
				        </div>
				      </div>
				    </div>
				    <div id="description" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				      <div class="modal-dialog">
				        <div class="modal-content">

				          <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				            <h4 class="modal-title" id="myModalLabel2">Description</h4>
				          </div>
				          <div class="modal-body">
							Waffor Holiday				          
				          </div>
				          <div class="modal-footer">
				            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
				            <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
				          </div>
				        </div>
				      </div>
				    </div>	
				    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
				    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
				    <!-- /calendar modal -->	
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script src="<?php print base_url();?>js/controllerjs/calendar.js"></script>
