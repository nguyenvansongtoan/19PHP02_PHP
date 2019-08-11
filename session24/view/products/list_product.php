<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Product list</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered">
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        <?php
    			while ($product = $listProduct->fetch_assoc()) {
       	  $id = $product['id'];
        ?>
          <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $product['name'];?></td>
            <td><?php echo $product['price'];?></td>
            <td>
              <img src="webroot/uploads/products/<?php echo $product['image'];?>" class = 'img_default'>
            </td>
            <td><span class="badge bg-red">55%</span></td>
          </tr>
          <?php }?>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>