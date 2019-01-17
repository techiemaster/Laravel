@extends('theme.default')



@section('content')

<div class="row">

    
        <div class="input-group custom-search-form">

                    <input type="text" class="form-control" placeholder="Search...">

                    <span class="input-group-btn">

                    <button class="btn btn-default" type="button">

                        <i class="fa fa-search"></i>

                    </button>

                </span>

                </div>

    

                

    <div class="row topbox">
        <div class="col-lg-6">
            <p class="page-header">Users</p>
        </div>
        <div class="col-lg-6 text-right">
            <div class="btns">
                <p class="btn btn-new" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i> New</p>
                <p class="btn btn-export" data-toggle="modal" data-target="#myModal"><i class="fas fa-file-export"></i> Export</p>
            </div>
            
        </div> 

    </div>       
    

</div>

<!-- /.row -->


<div class="container">
    <div class="row">

        <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Create new customer</h4>
            </div>
            <div class="modal-body create-customer-modal">
              <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
              <label class="control-label col-sm-2 text-left" for="email">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2 text-left" for="desc">Description</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="pwd" name="desc">
              </div>
            </div>
            
            
        </form>
            </div>
            <div class="modal-footer">
                <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="button" class="btn btn-default btn-cancel" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-default btn-create">Create Customer</button>
              </div>
            </div>
              
            </div>
          </div>
          
        </div>
      </div>
        
    </div>
</div>


<div class="row">
<table class="table table-striped table-bordered table-hover">

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

            <td>1</td>

            <td>Hardik</td>

            <td>Savani</td>

            <td>@mdo</td>

        </tr>

        <tr>

            <td>2</td>

            <td>Kashiyani</td>

            <td>Vimal</td>

            <td>@fat</td>

        </tr>

        <tr>

            <td>3</td>

            <td>Harshad</td>

            <td>Pathak</td>

            <td>@twitter</td>

        </tr>

    </tbody>

</table>

</div>

@endsection