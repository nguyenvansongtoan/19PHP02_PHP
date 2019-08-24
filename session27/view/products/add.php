<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Quick Example</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="admin.php?controller=products&action=add" method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <input type="file" id="exampleInputFile" name="image">
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary" name="add">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>