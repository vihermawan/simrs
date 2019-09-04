@extends('layouts.home')
@section('wrapper')
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Pendaftaran
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float text-default"><i
                            class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i>
                        <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i>
                        <span>Schedule</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Pendaftaran</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Main charts -->
        <div class="row">
        </div>
        <!-- /main charts -->


        <!-- Dashboard content -->
        <div class="row">
            <div class="col-xl-8">
                <!-- Quick stats boxes -->
                <div class="row">
                    <div class="col-lg-4">

                        <!-- Members online -->
                        <div class="card bg-teal-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">3,450</h3>
                                    <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
                                </div>

                                <div>
                                    Members online
                                    <div class="font-size-sm opacity-75">489 avg</div>
                                </div>
                            </div>

                            <div class="container-fluid">
                                <div id="members-online"></div>
                            </div>
                        </div>
                        <!-- /members online -->

                    </div>

                    <div class="col-lg-4">

                        <!-- Current server load -->
                        <div class="card bg-pink-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">49.4%</h3>
                                    <div class="list-icons ml-auto">
                                        <div class="list-icons-item dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update
                                                    data</a>
                                                <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i>
                                                    Detailed log</a>
                                                <a href="#" class="dropdown-item"><i class="icon-pie5"></i>
                                                    Statistics</a>
                                                <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear
                                                    list</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    Current server load
                                    <div class="font-size-sm opacity-75">34.6% avg</div>
                                </div>
                            </div>

                            <div id="server-load"></div>
                        </div>
                        <!-- /current server load -->

                    </div>

                    <div class="col-lg-4">

                        <!-- Today's revenue -->
                        <div class="card bg-blue-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">$18,390</h3>
                                    <div class="list-icons ml-auto">
                                        <a class="list-icons-item" data-action="reload"></a>
                                    </div>
                                </div>

                                <div>
                                    Today's revenue
                                    <div class="font-size-sm opacity-75">$37,578 avg</div>
                                </div>
                            </div>

                            <div id="today-revenue"></div>
                        </div>
                        <!-- /today's revenue -->

                    </div>
                </div>
                <!-- /quick stats boxes -->

                <!--- Pie Chart -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Pie chart timeline</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="chart-container">
                            <div class="chart has-fixed-height" id="pie_timeline" _echarts_instance_="ec_1567600729313" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; overflow: hidden; width: 804px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="1005" height="500" style="position: absolute; left: 0px; top: 0px; width: 804px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                        </div>
                    </div>
                </div>
                <!--- /Pie Chart -->
                <!-- Line Chart -->
                <div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Zoom option</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body" style="">
						<div class="chart-container">
							<div class="chart has-fixed-height" id="line_zoom" _echarts_instance_="ec_1567599913169" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; overflow: hidden; width: 1655px; height: 400px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="2068" height="500" style="position: absolute; left: 0px; top: 0px; width: 1655px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(0, 0, 0, 0.75); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 13px/20px Roboto, sans-serif; padding: 10px 15px; left: 1045px; top: 151px;">2017/2/9<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#424956;"></span>Software: 688<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#d74e67;"></span>Hardware: 374<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#0092ff;"></span>Accessories: 547</div></div>
						</div>
					</div>
				</div>
                <!-- /support tickets -->

                <!---Calendar Agenda-->
                <div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Basic view</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
					
					<div class="card-body">
						<p class="mb-3">FullCalendar is a jQuery plugin that provides a full-sized, drag &amp; drop event calendar like the one below. It uses AJAX to fetch events on-the-fly and is easily configured to use your own feed format. It is visually customizable with a rich API. Example below demonstrates a default view of the calendar with a basic setup: draggable and editable events, and starting date.</p>

						<div class="fullcalendar-basic fc fc-ltr fc-unthemed" style=""><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-button-primary" aria-label="prev"><span class="fc-icon fc-icon-chevron-left"></span></button><button type="button" class="fc-next-button fc-button fc-button-primary" aria-label="next"><span class="fc-icon fc-icon-chevron-right"></span></button></div><button type="button" class="fc-today-button fc-button fc-button-primary">today</button></div><div class="fc-center"><h2>November 2014</h2></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active">month</button><button type="button" class="fc-dayGridWeek-button fc-button fc-button-primary">week</button><button type="button" class="fc-dayGridDay-button fc-button fc-button-primary">day</button></div></div></div><div class="fc-view-container"><div class="fc-view fc-dayGridMonth-view fc-dayGrid-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 1194px;"><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 198.5px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2014-10-26"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2014-10-27"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2014-10-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2014-10-29"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2014-10-30"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2014-10-31"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2014-10-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2014-10-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2014-10-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2014-10-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2014-10-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2014-10-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-sat fc-past" data-date="2014-11-01"><span class="fc-day-number">1</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">All Day Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 198.5px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-02"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-03"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-04"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-05"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-06"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-07"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2014-11-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-mon fc-past" data-date="2014-11-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-tue fc-past" data-date="2014-11-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-wed fc-past" data-date="2014-11-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-thu fc-past" data-date="2014-11-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-fri fc-past" data-date="2014-11-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-sat fc-past" data-date="2014-11-08"><span class="fc-day-number">8</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end fc-draggable"><div class="fc-content"> <span class="fc-title">Long Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 198.5px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-09"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-10"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-11"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-12"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-13"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-14"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2014-11-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-mon fc-past" data-date="2014-11-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-tue fc-past" data-date="2014-11-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-wed fc-past" data-date="2014-11-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-thu fc-past" data-date="2014-11-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-fri fc-past" data-date="2014-11-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-sat fc-past" data-date="2014-11-15"><span class="fc-day-number">15</span></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">Long Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td rowspan="6"></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">Conference</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td class="fc-event-container" rowspan="6"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="6"></td><td rowspan="6"></td></tr><tr><td class="fc-event-container" rowspan="5"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td rowspan="5"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr class=""><td class="fc-event-container fc-limited"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div></a></td><td class="fc-more-cell" rowspan="1"><div><a class="fc-more">+2 more</a></div></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">8p</span> <span class="fc-title">Dinner</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 199.5px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-16"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-17"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-18"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-19"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-20"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-21"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-22"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2014-11-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-mon fc-past" data-date="2014-11-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-tue fc-past" data-date="2014-11-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-wed fc-past" data-date="2014-11-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-thu fc-past" data-date="2014-11-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-fri fc-past" data-date="2014-11-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-sat fc-past" data-date="2014-11-22"><span class="fc-day-number">22</span></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 198.5px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-23"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-24"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-25"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-26"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-27"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-28"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-29"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2014-11-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-mon fc-past" data-date="2014-11-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-tue fc-past" data-date="2014-11-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-wed fc-past" data-date="2014-11-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-thu fc-past" data-date="2014-11-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-fri fc-past" data-date="2014-11-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-sat fc-past" data-date="2014-11-29"><span class="fc-day-number">29</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" href="http://google.com/"><div class="fc-content"> <span class="fc-title">Click for Google</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 198.5px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-30"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2014-12-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2014-12-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2014-12-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2014-12-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2014-12-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-past" data-date="2014-12-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2014-11-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2014-12-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2014-12-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2014-12-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2014-12-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2014-12-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-sat fc-other-month fc-past" data-date="2014-12-06"><span class="fc-day-number">6</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
					</div>
                </div>
                <!---/Calendar Agenda-->
                

            </div>

            <div class="col-xl-4">
                <!-- Latest posts -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Latest posts</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="media flex-column flex-sm-row mt-0 mb-3">
                                    <div class="mr-sm-3 mb-2 mb-sm-0">
                                        <div class="card-img-actions">
                                            <a href="#">
                                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                                    class="img-fluid img-preview rounded" alt="">
                                                <span class="card-img-actions-overlay card-img"><i
                                                        class="icon-play3 icon-2x"></i></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="media-body">
                                        <h6 class="media-title"><a href="#">Up unpacked friendly</a></h6>
                                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                                            <li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video
                                                tutorials</li>
                                        </ul>
                                        The him father parish looked has sooner. Attachment frequently terminated son
                                        hello...
                                    </div>
                                </div>

                                <div class="media flex-column flex-sm-row mt-0 mb-3">
                                    <div class="mr-sm-3 mb-2 mb-sm-0">
                                        <div class="card-img-actions">
                                            <a href="#">
                                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                                    class="img-fluid img-preview rounded" alt="">
                                                <span class="card-img-actions-overlay card-img"><i
                                                        class="icon-play3 icon-2x"></i></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="media-body">
                                        <h6 class="media-title"><a href="#">It allowance prevailed</a></h6>
                                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                                            <li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video
                                                tutorials</li>
                                        </ul>
                                        Alteration literature to or an sympathize mr imprudence. Of is ferrars subject
                                        enjoyed...
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="media flex-column flex-sm-row mt-0 mb-3">
                                    <div class="mr-sm-3 mb-2 mb-sm-0">
                                        <div class="card-img-actions">
                                            <a href="#">
                                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                                    class="img-fluid img-preview rounded" alt="">
                                                <span class="card-img-actions-overlay card-img"><i
                                                        class="icon-play3 icon-2x"></i></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="media-body">
                                        <h6 class="media-title"><a href="#">Case read they must</a></h6>
                                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                                            <li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video
                                                tutorials</li>
                                        </ul>
                                        On it differed repeated wandered required in. Then girl neat why yet knew rose
                                        spot...
                                    </div>
                                </div>

                                <div class="media flex-column flex-sm-row mt-0 mb-3">
                                    <div class="mr-sm-3 mb-2 mb-sm-0">
                                        <div class="card-img-actions">
                                            <a href="#">
                                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                                    class="img-fluid img-preview rounded" alt="">
                                                <span class="card-img-actions-overlay card-img"><i
                                                        class="icon-play3 icon-2x"></i></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="media-body">
                                        <h6 class="media-title"><a href="#">Too carriage attended</a></h6>
                                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                                            <li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section
                                            </li>
                                        </ul>
                                        Marianne or husbands if at stronger ye. Considered is as middletons
                                        uncommonly...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /latest posts -->
                <!-- Daily sales -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Daily sales stats</h6>
                        <div class="header-elements">
                            <span class="font-weight-bold text-danger-600 ml-2">$4,378</span>
                            <div class="list-icons ml-3">
                                <div class="list-icons-item dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon-cog3"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                        <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed
                                            log</a>
                                        <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="chart" id="sales-heatmap"></div>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="w-100">Application</th>
                                    <th>Time</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-primary-400 rounded-round btn-icon btn-sm">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="text-default font-weight-semibold letter-icon-title">Sigma
                                                    application</a>
                                                <div class="text-muted font-size-sm"><i
                                                        class="icon-checkmark3 font-size-sm mr-1"></i> New order</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">06:28 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">$49.90</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="text-default font-weight-semibold letter-icon-title">Alpha
                                                    application</a>
                                                <div class="text-muted font-size-sm"><i
                                                        class="icon-spinner11 font-size-sm mr-1"></i> Renewal</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">04:52 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">$90.50</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-indigo-400 rounded-round btn-icon btn-sm">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="text-default font-weight-semibold letter-icon-title">Delta
                                                    application</a>
                                                <div class="text-muted font-size-sm"><i
                                                        class="icon-lifebuoy font-size-sm mr-1"></i> Support</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">01:26 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">$60.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="text-default font-weight-semibold letter-icon-title">Omega
                                                    application</a>
                                                <div class="text-muted font-size-sm"><i
                                                        class="icon-lifebuoy font-size-sm mr-1"></i> Support</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">11:46 am</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">$55.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="text-default font-weight-semibold letter-icon-title">Alpha
                                                    application</a>
                                                <div class="text-muted font-size-sm"><i
                                                        class="icon-spinner11 font-size-sm mr-2"></i> Renewal</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">10:29 am</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">$90.50</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /daily sales -->


                <!-- My messages -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">My messages</h6>
                        <div class="header-elements">
                            <span><i class="icon-history text-warning mr-2"></i> Jul 7, 10:30</span>
                            <span class="badge bg-success align-self-start ml-3">Online</span>
                        </div>
                    </div>

                    <!-- Numbers -->
                    <div class="card-body py-0">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="font-weight-semibold mb-0">2,345</h5>
                                    <span class="text-muted font-size-sm">this week</span>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="font-weight-semibold mb-0">3,568</h5>
                                    <span class="text-muted font-size-sm">this month</span>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="font-weight-semibold mb-0">32,693</h5>
                                    <span class="text-muted font-size-sm">all messages</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /numbers -->


                    <!-- Area chart -->
                    <div id="messages-stats"></div>
                    <!-- /area chart -->


                    <!-- Tabs -->
                    <ul
                        class="nav nav-tabs nav-tabs-solid nav-justified bg-indigo-400 border-x-0 border-bottom-0 border-top-indigo-300 mb-0">
                        <li class="nav-item">
                            <a href="#messages-tue" class="nav-link font-size-sm text-uppercase active"
                                data-toggle="tab">
                                Tuesday
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#messages-mon" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
                                Monday
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#messages-fri" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
                                Friday
                            </a>
                        </li>
                    </ul>
                    <!-- /tabs -->


                    <!-- Tabs content -->
                    <div class="tab-content card-body">
                        <div class="tab-pane active fade show" id="messages-tue">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                        <span
                                            class="badge bg-danger-400 badge-pill badge-float border-2 border-white">8</span>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">James Alexander</a>
                                            <span class="font-size-sm text-muted">14:58</span>
                                        </div>

                                        The constitutionally inventoried precariously...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                        <span
                                            class="badge bg-danger-400 badge-pill badge-float border-2 border-white">6</span>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Margo Baker</a>
                                            <span class="font-size-sm text-muted">12:16</span>
                                        </div>

                                        Pinched a well more moral chose goodness...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Jeremy Victorino</a>
                                            <span class="font-size-sm text-muted">09:48</span>
                                        </div>

                                        Pert thickly mischievous clung frowned well...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Beatrix Diaz</a>
                                            <span class="font-size-sm text-muted">05:54</span>
                                        </div>

                                        Nightingale taped hello bucolic fussily cardinal...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Richard Vango</a>
                                            <span class="font-size-sm text-muted">01:43</span>
                                        </div>

                                        Amidst roadrunner distantly pompously where...
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="messages-mon">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Isak Temes</a>
                                            <span class="font-size-sm text-muted">Tue, 19:58</span>
                                        </div>

                                        Reasonable palpably rankly expressly grimy...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Vittorio Cosgrove</a>
                                            <span class="font-size-sm text-muted">Tue, 16:35</span>
                                        </div>

                                        Arguably therefore more unexplainable fumed...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Hilary Talaugon</a>
                                            <span class="font-size-sm text-muted">Tue, 12:16</span>
                                        </div>

                                        Nicely unlike porpoise a kookaburra past more...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Bobbie Seber</a>
                                            <span class="font-size-sm text-muted">Tue, 09:20</span>
                                        </div>

                                        Before visual vigilantly fortuitous tortoise...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Walther Laws</a>
                                            <span class="font-size-sm text-muted">Tue, 03:29</span>
                                        </div>

                                        Far affecting more leered unerringly dishonest...
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="messages-fri">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Owen Stretch</a>
                                            <span class="font-size-sm text-muted">Mon, 18:12</span>
                                        </div>

                                        Tardy rattlesnake seal raptly earthworm...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Jenilee Mcnair</a>
                                            <span class="font-size-sm text-muted">Mon, 14:03</span>
                                        </div>

                                        Since hello dear pushed amid darn trite...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Alaster Jain</a>
                                            <span class="font-size-sm text-muted">Mon, 13:59</span>
                                        </div>

                                        Dachshund cardinal dear next jeepers well...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Sigfrid Thisted</a>
                                            <span class="font-size-sm text-muted">Mon, 09:26</span>
                                        </div>

                                        Lighted wolf yikes less lemur crud grunted...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Sherilyn Mckee</a>
                                            <span class="font-size-sm text-muted">Mon, 06:38</span>
                                        </div>

                                        Less unicorn a however careless husky...
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /tabs content -->

                </div>
                <!-- /my messages -->


                <!-- Daily financials -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Daily financials</h6>
                        <div class="header-elements">
                            <div
                                class="form-check form-check-inline form-check-right form-check-switchery form-check-switchery-sm">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-input-switchery" id="realtime" checked data-fouc>
                                    Realtime
                                </label>
                            </div>
                            <span class="badge bg-danger-400 badge-pill">+86</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="chart mb-3" id="bullets"></div>

                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#"
                                        class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i
                                            class="icon-statistics"></i></a>
                                </div>

                                <div class="media-body">
                                    Stats for July, 6: <span class="font-weight-semibold">1938</span> orders, <span
                                        class="font-weight-semibold text-danger">$4220</span> revenue
                                    <div class="text-muted">2 hours ago</div>
                                </div>

                                <div class="ml-3 align-self-center">
                                    <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#"
                                        class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i
                                            class="icon-checkmark3"></i></a>
                                </div>

                                <div class="media-body">
                                    Invoices <a href="#">#4732</a> and <a href="#">#4734</a> have been paid
                                    <div class="text-muted">Dec 18, 18:36</div>
                                </div>

                                <div class="ml-3 align-self-center">
                                    <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#"
                                        class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i
                                            class="icon-alignment-unalign"></i></a>
                                </div>

                                <div class="media-body">
                                    Affiliate commission for June has been paid
                                    <div class="text-muted">36 minutes ago</div>
                                </div>

                                <div class="ml-3 align-self-center">
                                    <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#"
                                        class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon"><i
                                            class="icon-spinner11"></i></a>
                                </div>

                                <div class="media-body">
                                    Order <a href="#">#37745</a> from July, 1st has been refunded
                                    <div class="text-muted">4 minutes ago</div>
                                </div>

                                <div class="ml-3 align-self-center">
                                    <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#"
                                        class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i
                                            class="icon-redo2"></i></a>
                                </div>

                                <div class="media-body">
                                    Invoice <a href="#">#4769</a> has been sent to <a href="#">Robert Smith</a>
                                    <div class="text-muted">Dec 12, 05:46</div>
                                </div>

                                <div class="ml-3 align-self-center">
                                    <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /daily financials -->

            </div>
        </div>
        <!-- /dashboard content -->

    </div>
    <!-- /content area -->
    @endsection
