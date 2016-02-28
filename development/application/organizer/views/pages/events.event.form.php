<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
<!-- start: PAGE CONTENT -->
<div class="row" id="main-content-container">
	<div class="col-lg-3">
		<!-- start: quick modlebuttons -->
		
		<!-- end: end modle buttons -->
	</div>
	<div class="col-lg-3">
		<!-- start: quick modlebuttons -->
		<div class="panel panel-white">
			<div class="panel-body">
				<center>
					<a class="btn btn-social btn-facebook" data-toggle="modal" data-target="#facebookImport"><i class="fa fa-facebook"></i> Import with Facebook</a>
				</center>
			</div>
		</div>

		<!-- end: end modle buttons -->
	</div>
	<div class="col-lg-3">
		<!-- start: quick modlebuttons -->
		<div class="panel panel-white">
			<div class="panel-body">
				<center>
					<a class="btn btn-social btn-google-plus"><i
						class="fa fa-google-plus"></i> Import with Google</a>
				</center>
			</div>
		</div>

		<!-- end: end modle buttons -->
	</div>
	<div class="col-lg-3">
		<!-- start: quick modlebuttons -->
		

		<!-- end: end modle buttons -->
	</div>
		
	<div class="col-sm-12">
		<!-- start: FORM WIZARD PANEL -->
		<div class="panel panel-white">
			<div class="panel-heading">
				<h4 class="panel-title">
					Event <span class="text-bold">Wizard</span>
				</h4>
				<div class="panel-tools">
					<div class="dropdown">
						<a data-toggle="dropdown"
							class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i
							class="fa fa-cog"></i>
						</a>
						<ul class="dropdown-menu dropdown-light pull-right" role="menu">
							<li><a class="panel-collapse collapses" href="#"><i
									class="fa fa-angle-up"></i> <span>Collapse</span> </a></li>
							<li><a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i>
									<span>Refresh</span>
							</a></li>
							<li><a class="panel-config" href="#panel-config"
								data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span>
							</a></li>
							<li><a class="panel-expand" href="#"> <i class="fa fa-expand"></i>
									<span>Fullscreen</span>
							</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<form action="<?php echo base_url('','page'); ?>events/save<?php if(isset($event_data)) echo "/" . $event_data->event_id; ?>" method="post" enctype="multipart/form-data" role="form" class="smart-wizard form-horizontal" id="form" autocomplete="off">
					<input type="hidden" name="eventInput_eventId" id="eventInput_eventId" value="<?php echo (isset($event_data)) ? $event_data->event_id : md5(time()*rand()*rand()); ?>" />
					<div  class="swMain">
						
						
						</div>
						<div class="row">
								<div class="form-group">
								<label class="col-sm-3 control-label"> Event Name <span
									class="symbol required"></span>
								</label>
								<div class="col-sm-7">
									<input type="eventname" class="form-control" id="eventname" name="eventInput_name" placeholder="Name of the Event" value="<?php if(isset($event_data)) echo $event_data->title; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label"> Event Location <span
									class="symbol required"></span>
								</label>
								<div class="col-sm-7">
									<input type="eventlocation" class="form-control" id="eventlocation" name="eventInput_location" placeholder="Location of the Event"  value="<?php if(isset($event_data)) echo $event_data->location; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Date</label>
								<div class="col-sm-7">
									<div class="input-group input-append">
										<input type="text" class="form-control"
											id="eventCreate_datepicker2" name="eventInput_date" value="<?php if(isset($event_data)) echo date("d/m/Y", strtotime($event_data->date)); ?>" /> <span
											class="input-group-addon add-on"> <i class="fa fa-calendar"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Start Time</label>
								<div class="col-sm-7">
									<div class="input-group input-append bootstrap-timepicker">
										<input type="text" class="form-control"
											id="eventCreate_timepickerstart2" name="eventInput_startTime" value="<?php if(isset($event_data)) echo date("H:i", strtotime($event_data->start_time)); ?>"> 
										<span class="input-group-addon add-on"><i
											class="fa fa-clock-o"></i></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">End Time</label>
								<div class="col-sm-7">
									<div class="input-group input-append bootstrap-timepicker">
										<input type="text" class="form-control"
											id="eventCreate_timepickerend2" name="eventInput_endTime" value="<?php if(isset($event_data)) echo date("H:i", strtotime($event_data->end_time)); ?>"> <span
											class="input-group-addon add-on"><i class="fa fa-clock-o"></i></span>
									</div>
								</div>
							</div>
													</div>
						<div class="row">
								<div class="form-group">
								<label class="col-sm-3 control-label">Media</label>
								<div class="col-sm-7">
									<div class="fileupload fileupload-new"
										data-provides="fileupload">
										<div class="fileupload-new thumbnail">
											<img src="<?php echo (isset($event_data) && file_exists("media/events/$event_data->event_id/event_image.jpg")) ? base_url() . "media/events/$event_data->event_id/event_image.jpg" : "http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image"; ?>" style="max-width:200px; max-height:150px;" alt="" id="eventImage" />
										</div>
										<div>
											<i id="uploadLoader" style="float: left; font-size: 18px; margin-right: 8px; margin-top: 4px; display:none;" class="fa fa-spinner fa-spin"></i> <input type="file" class="fom-control" id="eventImageUpload" />
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Description</label>
									<div class="col-sm-7">
										<textarea class="summernote form-control" cols="10" rows="10" id="eventInput_description" name="eventInput_description"><?php if(isset($event_data)) echo $event_data->description; ?></textarea>
									</div>
								</div>

											</div>
						</div>
						
						<div class="row">
						<div class="form-group">
								<div class="col-sm-3 control-label">
									<label for="form-field-select-3"> Organic or Private Event? </label>
								</div>
								<div class="col-sm-7">
									<select id="form-field-select-3" class="form-control"
										name="eventInput_type">
										<option value="">Select Organic or Private</option>
										<option <?php if(isset($event_data) && $event_data->type == "organic") echo "selected=\"selected\""; ?> value="organic">Organic</option>
										<option <?php if(isset($event_data) && $event_data->type == "private") echo "selected=\"selected\""; ?> value="private">Private</option>
									</select>
								</div>
							</div>
							<div class="form-group">
                                <div class="col-sm-3 control-label">
                                    <label for="form-field-select-3"> Interest </label>
                                </div>
								<div class="col-sm-7">
									<select id="form-field-select-3"
										class="form-control" name="eventInput_category">
										<option value="">Select Interest</option>
										<option <?php if(isset($event_data) && $event_data->category == "automotive") echo "selected=\"selected\""; ?> value="automotive">Automotive</option>
										<option <?php if(isset($event_data) && $event_data->category == "business") echo "selected=\"selected\""; ?> value="business">Business</option>
										<option <?php if(isset($event_data) && $event_data->category == "health") echo "selected=\"selected\""; ?> value="health">Health</option>
										<option <?php if(isset($event_data) && $event_data->category == "technology") echo "selected=\"selected\""; ?> value="technology">Technology</option>
										<option <?php if(isset($event_data) && $event_data->category == "science") echo "selected=\"selected\""; ?> value="science">Science</option>
										<option <?php if(isset($event_data) && $event_data->category == "other") echo "selected=\"selected\""; ?> value="other">Other</option>
										<option <?php if(isset($event_data) && $event_data->category == "food") echo "selected=\"selected\""; ?> value="food">Food and Drink</option>
										<option <?php if(isset($event_data) && $event_data->category == "fashion") echo "selected=\"selected\""; ?> value="fashion">Fashion</option>
										<option <?php if(isset($event_data) && $event_data->category == "community") echo "selected=\"selected\""; ?> value="community">Community</option>
										<option <?php if(isset($event_data) && $event_data->category == "music") echo "selected=\"selected\""; ?> value="music">Music</option>
										<option <?php if(isset($event_data) && $event_data->category == "sports") echo "selected=\"selected\""; ?> value="sports">Sports</option>
										<option <?php if(isset($event_data) && $event_data->category == "travel") echo "selected=\"selected\""; ?> value="travel">Travel</option>
										<option <?php if(isset($event_data) && $event_data->category == "outdoor") echo "selected=\"selected\""; ?> value="outdoor">Outdoor</option>
										<option <?php if(isset($event_data) && $event_data->category == "hobbies") echo "selected=\"selected\""; ?> value="hobbies">Hobbies</option>
										<option value="meeting">Meeting</option>
									</select>
								</div>
							</div>
                            
                            <div class="form-group">
                                <div class="col-sm-3 control-label">
                                    <label for="form-field-select-3"> Publish </label>
                                </div>
								<div class="col-sm-7">
									<select id="form-field-select-3"
										class="form-control" name="eventInput_published">
										<option <?php if(isset($event_data) && $event_data->published == 0) echo "selected=\"selected\""; ?> value="0">Not Published</option>
										<option <?php if(isset($event_data) && $event_data->published == 1) echo "selected=\"selected\""; ?> value="1">Published</option>
							
									</select>
								</div>
							</div>
							


							<div class="form-group" style="margin-top:70px;">
                           			<div class="col-sm-10 col-sm-offset-1">
									<button class="btn btn-success btn-lg finish-step btn-block">Save</button>
								</div>
                                </div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- end: FORM WIZARD PANEL -->
	</div>
</div>
<!-- end: PAGE CONTENT-->

<div class="modal fade" tabindex="-1" role="dialog" id="facebookImport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Import from Facebook</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="form-group">
						<div class="col-sm-4 control-label">
							<label for="form-field-select-3" style="line-height: 34px; font-weight: bold;"> Facebook Link </label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="facebookImport_link" />
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" onclick="importFromFacebook()"><i id="facebookImport_importing" style="display:none;" class="fa fa-spinner fa-spin"></i> Import</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>