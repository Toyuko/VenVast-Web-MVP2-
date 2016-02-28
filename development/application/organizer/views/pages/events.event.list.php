<!-- start: MAIN CONTAINER -->
	<div class="main-container inner">
		<!-- start: PAGE -->
		<div class="main-content" id="main-content-container">
					
						<!-- start: PAGE CONTENT -->
						<div class="row">
                        	<div class="col-sm-12">
                          <!-- start: PANLEL TABS -->
								<div class="panel panel-white panel-tabs">
									<div class="panel-heading">
										<h4 class="panel-title">.</span></h4>
									</div>
									<div class="panel-body">
										<div class="tabbable">
											<ul class="nav nav-tabs">
												<li class="active">
													<a data-toggle="tab" href="#panel_tab_example1">
														My Events 
													</a>
												</li>
												<?php /* ?>
												<li>
													<a data-toggle="tab" href="#panel_tab_example2">
														My Bookings 
													</a>
												</li>
												<li>
													<a data-toggle="tab" href="#panel_tab_example3">
														Other Events 
													</a>
												</li>
												*/ ?>
											</ul>
											<div class="tab-content">
												<div id="panel_tab_example1" class="tab-pane fade in active">
                                                <!-- start: event list table -->
												<table class="table table-striped table-hover" id="sample-table-2">
											<thead>
												<tr>
													<?php /*?><th class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey selectall">
														</label>
													</div></th> */ ?>
													<th class="center">.</th>
													<th>Event Name</th>
													<th class="hidden-xs">Organizer</th>
													<th class="hidden-xs">Type</th>
													<th class="hidden-xs">Category</th>
													<th class="hidden-xs">Published</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<?php 
													foreach($events as $event)
													{
												?>
													<tr>
													<?php /* ?><td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td> */ ?>
													<td class="center"><img src="http://placehold.it/50x50" alt="image"/></td>
													<td><?php echo $event->title; ?></td>
													<td class="hidden-xs">Admin</td>
													<td class="hidden-xs"><?php echo ucwords($event->type); ?></td>
													<td class="hidden-xs"><?php echo ucwords($event->category); ?></td>
													<td class="hidden-xs"><?php echo ($event->published == 1) ? "Yes" : "No"; ?></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="<?php echo base_url('','page'); ?>events/edit/<?php echo $event->event_id; ?>" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<?php /* ?><a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a> */ ?>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<?php } ?>
												
											</tbody>
										</table>
                                        <!-- end event list table -->
                                        </div>
												<div id="panel_tab_example2" class="tab-pane fade">
													 <!-- start: event list table -->
												<table class="table table-striped table-hover" id="sample-table-2">
											<thead>
												<tr>
													<th class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey selectall">
														</label>
													</div></th>
													<th class="center">.</th>
													<th>Event Name</th>
													<th class="hidden-xs">Organizer</th>
													<th class="hidden-xs">View</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td>
													<td class="center"><img src="<?php echo base_url(); ?>assets-organizers/images/avatar-1.jpg" alt="image"/></td>
													<td>MOM Event</td>
													<td class="hidden-xs">Techgrind</td>
													<td class="hidden-xs">
													<button type="button" class="btn btn-dark-blue">
												View
											</button>
                                                    </td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td>
													<td class="center"><img src="<?php echo base_url(); ?>assets-organizers/images/event-2.png" alt="image"/></td>
													<td>Event Name</td>
													<td class="hidden-xs">Event Organizer Name</td>
													<td class="hidden-xs">
                                                    <button type="button" class="btn btn-dark-blue">
												View
											</button>
													</td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td>
													<td class="center"><img src="<?php echo base_url(); ?>assets-organizers/images/event-3.png" alt="image"/></td>
													<td>Event Name</td>
													<td class="hidden-xs">Event Organizer Name</td>
													<td class="hidden-xs">
                                                    <button type="button" class="btn btn-dark-blue">
												View
											</button>
													</td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td>
													<td class="center"><img src="<?php echo base_url(); ?>assets-organizers/images/event-4.png" alt="image"/></td>
													<td>Event Name</td>
													<td class="hidden-xs">Event Organizer Name</td>
													<td class="hidden-xs">
                                                    <button type="button" class="btn btn-dark-blue">
												View
											</button>
													</td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td>
													<td class="center"><img src="<?php echo base_url(); ?>assets-organizers/images/event-5.png" alt="image"/></td>
													<td>Event Name </td>
													<td class="hidden-xs">Event Organizer Name</td>
													<td class="hidden-xs">
                                                    <button type="button" class="btn btn-dark-blue">
												View
											</button>
													</td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
											</tbody>
										</table>
                                        <!-- end event list table -->
												</div>
												<div id="panel_tab_example3" class="tab-pane fade">
													 <!-- start: event list table -->
												<table class="table table-striped table-hover" id="sample-table-2">
											<thead>
												<tr>
													<th class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey selectall">
														</label>
													</div></th>
													<th class="center">.</th>
													<th>Event Name</th>
													<th class="hidden-xs">Organizer</th>
													<th class="hidden-xs">View</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td>
													<td class="center"><img src="<?php echo base_url(); ?>assets-organizers/images/avatar-1.jpg" alt="image"/></td>
													<td>MOM Event</td>
													<td class="hidden-xs">Techgrind</td>
													<td class="hidden-xs">
													<button type="button" class="btn btn-dark-blue">
												View
											</button>
                                                    </td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td>
													<td class="center"><img src="<?php echo base_url(); ?>assets-organizers/images/event-2.png" alt="image"/></td>
													<td>Event Name</td>
													<td class="hidden-xs">Event Organizer Name</td>
													<td class="hidden-xs">
                                                    <button type="button" class="btn btn-dark-blue">
												View
											</button>
													</td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td>
													<td class="center"><img src="<?php echo base_url(); ?>assets-organizers/images/event-3.png" alt="image"/></td>
													<td>Event Name</td>
													<td class="hidden-xs">Event Organizer Name</td>
													<td class="hidden-xs">
                                                    <button type="button" class="btn btn-dark-blue">
												View
											</button>
													</td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td>
													<td class="center"><img src="<?php echo base_url(); ?>assets-organizers/images/event-4.png" alt="image"/></td>
													<td>Event Name</td>
													<td class="hidden-xs">Event Organizer Name</td>
													<td class="hidden-xs">
                                                    <button type="button" class="btn btn-dark-blue">
												View
											</button>
													</td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey foocheck">
														</label>
													</div></td>
													<td class="center"><img src="<?php echo base_url(); ?>assets-organizers/images/event-5.png" alt="image"/></td>
													<td>Event Name </td>
													<td class="hidden-xs">Event Organizer Name</td>
													<td class="hidden-xs">
                                                    <button type="button" class="btn btn-dark-blue">
												View
											</button>
													</td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
											</tbody>
										</table>
                                        <!-- end event list table -->
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end: PANLEL TABS -->			
							</div>
						</div>
						<!-- end: PAGE CONTENT-->
					</div>
					<div class="subviews">
						<div class="subviews-container"></div>
					</div>
				</div>
				<!-- end: PAGE -->