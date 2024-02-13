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


          <div class="clearfix"></div>

          <div class="row" style="display: block;">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Product Category</h2>
                  
                  <div class="title_right" >
                    <div class="form-group pull-left top_search">
                      <div class="input-group">
                        <button type="button" class="btn btn-round btn-secondary" style="background: rgba(52,73,94,0.94);color:#ECF0F1;margin:0px 30px 0px 10px;" data-toggle="modal" data-target="#CategoryModalCenter">
                          Add <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                          <button class="btn btn-default" style="background: rgba(52,73,94,0.94);color:#ECF0F1" type="button">Go!</button>
                        </span>
                        <p id="successMessage">The alert will show here.</p>
                      </div>
                    </div>
                  </div>
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
                {{-- Add Category Modal  --}}
                  <div class="modal fade" id="CategoryModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id="Categoryadd">
                            @csrf
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Category Name:</label>
                              <input type="text" class="form-control" id="Categoryname">
                              
                              <p id="errormessage" class="text-danger"></p>
                            </div>
                            
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" id="saveCategoryItem">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action table-bordered">
                      <thead>
                        <tr class="headings">
                          {{-- <th>
                            <input type="checkbox" id="check-all" class="flat">
                          </th> --}}
                          <th>#</th>
                          <th class="column-title">Invoice </th>
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
                        @php
                            $i=1;
                        @endphp
                        @foreach ($categoryitem as $item)
                        <tr class="odd pointer">
                          {{-- <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td> --}}
                          <td>{{$i++}}</td>
                          <td class=" ">{{$item->categoryname}}</td>
                          <td class=" ">{{$item->status}}</td>
                          <td class="a-right a-right ">{{$item->createby}}</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>                            
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                          
                  {{ $categoryitem->links() }}   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /top tiles -->

    




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

{{-- Ajax And Javascript Code Here --}}

<script>
  $(document).ready(function(){
    $("#saveCategoryItem").on("click", function(e){
      e.preventDefault();
      let _token= $("input[name=_token]").val();
      var catename = $("#Categoryname").val();
      
      if (catename == null|| catename == undefined || catename == "") {
        $( "#errormessage" ).text( "Please Enter Category Name" );
        // $("#errormessage").focus();
      } else {
          // console.log("Input data is avail avail");
          $.ajax({
              type: "POST",
              url: "/addCategory",
              data: {
                catename,_token
              },
              // dataType: 'json',
              success: function(response){
                  // console.log(response);
                  swal("Success!", " Category Item Store CategoryModalCenter!", "success")   
                   $("#Categoryadd")[0].reset();
                   $("#CategoryModalCenter").modal('hide');
                   $(".table").load(location.href+' .table');
              },
  
              error :  function(data1){
                  let error=data1.responseJSON;
                 // let all_errors = response.errors;
                  //console.log('all_errors',all_errors);
                  $.each(error.errors,function(key,value){
                      $('#errormessage').text(value);
                  });
              }
          });
      }
    });
  });
  </script>

@endsection
