@extends('BackEndSection.layout')
@section('maincontent')
    
<div class="container body">
  <div class="main_container">
    @include('BackEndSection.sidebar')

    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
          <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
              <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                <img src="images/img.jpg" alt="">John Doe
              </a>
              <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"  href="javascript:;"> Profile</a>
                  <a class="dropdown-item"  href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
              <a class="dropdown-item"  href="javascript:;">Help</a>
                <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
              </div>
            </li>

            <li role="presentation" class="nav-item dropdown open">
              <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-green">6</span>
              </a>
              <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <div class="text-center">
                    <a class="dropdown-item">
                      <strong>See All Alerts</strong>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Tables <small>Some examples to get you started</small></h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5   form-group pull-right top_search">
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

          <div class="row" style="display: block;">
            <div class="col-md-6 col-sm-6  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Basic Tables <small>basic table subtitle</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>


            <div class="col-md-6 col-sm-6  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Stripped table <small>Stripped table subtitle</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>



            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Table design <small>Custom design</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                  <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action table-bordered">
                      <thead>
                        <tr class="headings">
                          <th>
                            <input type="checkbox" id="check-all" class="flat">
                          </th>
                          <th class="column-title">Invoice </th>
                          <th class="column-title">Invoice Date </th>
                          <th class="column-title">Order </th>
                          <th class="column-title">Bill to Name </th>
                          <th class="column-title">Status </th>
                          <th class="column-title">Amount </th>
                          <th class="column-title no-link last"><span class="nobr">Action</span>
                          </th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000040</td>
                          <td class=" ">May 23, 2014 11:47:56 PM </td>
                          <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$7.45</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000039</td>
                          <td class=" ">May 23, 2014 11:30:12 PM</td>
                          <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                          </td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$741.20</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000038</td>
                          <td class=" ">May 24, 2014 10:55:33 PM</td>
                          <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                          </td>
                          <td class=" ">Mike Smith</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$432.26</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000037</td>
                          <td class=" ">May 24, 2014 10:52:44 PM</td>
                          <td class=" ">121000204</td>
                          <td class=" ">Mike Smith</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$333.21</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000040</td>
                          <td class=" ">May 24, 2014 11:47:56 PM </td>
                          <td class=" ">121000210</td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$7.45</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000039</td>
                          <td class=" ">May 26, 2014 11:30:12 PM</td>
                          <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                          </td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$741.20</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000038</td>
                          <td class=" ">May 26, 2014 10:55:33 PM</td>
                          <td class=" ">121000203</td>
                          <td class=" ">Mike Smith</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$432.26</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000037</td>
                          <td class=" ">May 26, 2014 10:52:44 PM</td>
                          <td class=" ">121000204</td>
                          <td class=" ">Mike Smith</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$333.21</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>

                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000040</td>
                          <td class=" ">May 27, 2014 11:47:56 PM </td>
                          <td class=" ">121000210</td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$7.45</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000039</td>
                          <td class=" ">May 28, 2014 11:30:12 PM</td>
                          <td class=" ">121000208</td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$741.20</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                          
                      
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /top tiles -->

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="dashboard_graph">

            <div class="row x_title">
              <div class="col-md-6">
                <h3>Network Activities <small>Graph title sub-title</small></h3>
              </div>
              <div class="col-md-6">
                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                </div>
              </div>
            </div>

            <div class="col-md-9 col-sm-9 ">
              <div id="chart_plot_01" class="demo-placeholder"></div>
            </div>
            <div class="col-md-3 col-sm-3  bg-white">
              <div class="x_title">
                <h2>Top Campaign Performance</h2>
                <div class="clearfix"></div>
              </div>

              <div class="col-md-12 col-sm-12 ">
                <div>
                  <p>Facebook Campaign</p>
                  <div class="">
                    <div class="progress progress_sm" style="width: 76%;">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                    </div>
                  </div>
                </div>
                <div>
                  <p>Twitter Campaign</p>
                  <div class="">
                    <div class="progress progress_sm" style="width: 76%;">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 ">
                <div>
                  <p>Conventional Media</p>
                  <div class="">
                    <div class="progress progress_sm" style="width: 76%;">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                    </div>
                  </div>
                </div>
                <div>
                  <p>Bill boards</p>
                  <div class="">
                    <div class="progress progress_sm" style="width: 76%;">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="clearfix"></div>
          </div>
        </div>

      </div>
      <br />

      <div class="row">


        <div class="col-md-4 col-sm-4 ">
          <div class="x_panel tile fixed_height_320">
            <div class="x_title">
              <h2>App Versions</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <h4>App Usage across versions</h4>
              <div class="widget_summary">
                <div class="w_left w_25">
                  <span>0.1.5.2</span>
                </div>
                <div class="w_center w_55">
                  <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="w_right w_20">
                  <span>123k</span>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="widget_summary">
                <div class="w_left w_25">
                  <span>0.1.5.3</span>
                </div>
                <div class="w_center w_55">
                  <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="w_right w_20">
                  <span>53k</span>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget_summary">
                <div class="w_left w_25">
                  <span>0.1.5.4</span>
                </div>
                <div class="w_center w_55">
                  <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="w_right w_20">
                  <span>23k</span>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget_summary">
                <div class="w_left w_25">
                  <span>0.1.5.5</span>
                </div>
                <div class="w_center w_55">
                  <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="w_right w_20">
                  <span>3k</span>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget_summary">
                <div class="w_left w_25">
                  <span>0.1.5.6</span>
                </div>
                <div class="w_center w_55">
                  <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="w_right w_20">
                  <span>1k</span>
                </div>
                <div class="clearfix"></div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-4 ">
          <div class="x_panel tile fixed_height_320 overflow_hidden">
            <div class="x_title">
              <h2>Device Usage</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table class="" style="width:100%">
                <tr>
                  <th style="width:37%;">
                    <p>Top 5</p>
                  </th>
                  <th>
                    <div class="col-lg-7 col-md-7 col-sm-7 ">
                      <p class="">Device</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                      <p class="">Progress</p>
                    </div>
                  </th>
                </tr>
                <tr>
                  <td>
                    <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                  </td>
                  <td>
                    <table class="tile_info">
                      <tr>
                        <td>
                          <p><i class="fa fa-square blue"></i>IOS </p>
                        </td>
                        <td>30%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square green"></i>Android </p>
                        </td>
                        <td>10%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square purple"></i>Blackberry </p>
                        </td>
                        <td>20%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square aero"></i>Symbian </p>
                        </td>
                        <td>15%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square red"></i>Others </p>
                        </td>
                        <td>30%</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-sm-4 ">
          <div class="x_panel tile fixed_height_320">
            <div class="x_title">
              <h2>Quick Settings</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="dashboard-widget-content">
                <ul class="quick-list">
                  <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                  </li>
                  <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                  </li>
                  <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                  <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                  </li>
                  <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                  <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                  </li>
                  <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                  </li>
                </ul>

                <div class="sidebar-widget">
                    <h4>Profile Completion</h4>
                    <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                    <div class="goal-wrapper">
                      <span id="gauge-text" class="gauge-value pull-left">0</span>
                      <span class="gauge-value pull-left">%</span>
                      <span id="goal-text" class="goal-value pull-right">100%</span>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="row">
        <div class="col-md-4 col-sm-4 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Recent Activities <small>Sessions</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="dashboard-widget-content">

                <ul class="list-unstyled timeline widget">
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title">
                                          <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                      </h2>
                        <div class="byline">
                          <span>13 hours ago</span> by <a>Jane Smith</a>
                        </div>
                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                        </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title">
                                          <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                      </h2>
                        <div class="byline">
                          <span>13 hours ago</span> by <a>Jane Smith</a>
                        </div>
                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                        </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title">
                                          <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                      </h2>
                        <div class="byline">
                          <span>13 hours ago</span> by <a>Jane Smith</a>
                        </div>
                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                        </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title">
                                          <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                      </h2>
                        <div class="byline">
                          <span>13 hours ago</span> by <a>Jane Smith</a>
                        </div>
                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                        </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-8 col-sm-8 ">



          <div class="row">

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Visitors location <small>geo-presentation</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">
                    <div class="col-md-4 hidden-small">
                      <h2 class="line_30">125.7k Views from 60 countries</h2>

                      <table class="countries_list">
                        <tbody>
                          <tr>
                            <td>United States</td>
                            <td class="fs15 fw700 text-right">33%</td>
                          </tr>
                          <tr>
                            <td>France</td>
                            <td class="fs15 fw700 text-right">27%</td>
                          </tr>
                          <tr>
                            <td>Germany</td>
                            <td class="fs15 fw700 text-right">16%</td>
                          </tr>
                          <tr>
                            <td>Spain</td>
                            <td class="fs15 fw700 text-right">11%</td>
                          </tr>
                          <tr>
                            <td>Britain</td>
                            <td class="fs15 fw700 text-right">10%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div id="world-map-gdp" class="col-md-8 col-sm-12 " style="height:230px;"></div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">


            <!-- Start to do list -->
            <div class="col-md-6 col-sm-6 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>To Do List <small>Sample tasks</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="">
                    <ul class="to_do">
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Create email address for new intern</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Create email address for new intern</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End to do list -->
            
            <!-- start of weather widget -->
            <div class="col-md-6 col-sm-6 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Daily active users <small>Sessions</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="temperature"><b>Monday</b>, 07:30 AM
                        <span>F</span>
                        <span><b>C</b></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="weather-icon">
                        <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="weather-text">
                        <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="weather-text pull-right">
                      <h3 class="degrees">23</h3>
                    </div>
                  </div>

                  <div class="clearfix"></div>

                  <div class="row weather-days">
                    <div class="col-sm-2">
                      <div class="daily-weather">
                        <h2 class="day">Mon</h2>
                        <h3 class="degrees">25</h3>
                        <canvas id="clear-day" width="32" height="32"></canvas>
                        <h5>15 <i>km/h</i></h5>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="daily-weather">
                        <h2 class="day">Tue</h2>
                        <h3 class="degrees">25</h3>
                        <canvas height="32" width="32" id="rain"></canvas>
                        <h5>12 <i>km/h</i></h5>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="daily-weather">
                        <h2 class="day">Wed</h2>
                        <h3 class="degrees">27</h3>
                        <canvas height="32" width="32" id="snow"></canvas>
                        <h5>14 <i>km/h</i></h5>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="daily-weather">
                        <h2 class="day">Thu</h2>
                        <h3 class="degrees">28</h3>
                        <canvas height="32" width="32" id="sleet"></canvas>
                        <h5>15 <i>km/h</i></h5>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="daily-weather">
                        <h2 class="day">Fri</h2>
                        <h3 class="degrees">28</h3>
                        <canvas height="32" width="32" id="wind"></canvas>
                        <h5>11 <i>km/h</i></h5>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="daily-weather">
                        <h2 class="day">Sat</h2>
                        <h3 class="degrees">26</h3>
                        <canvas height="32" width="32" id="cloudy"></canvas>
                        <h5>10 <i>km/h</i></h5>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>

            </div>
            <!-- end of weather widget -->
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>
@endsection