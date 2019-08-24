<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Comment list</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered">
          <tr>
            <th style="width: 10px">#</th>
            <th>Product</th>
            <th>Content</th>
            <th>Created</th>
            <th>Action</th>
          </tr>
        <?php
    			while ($comment = $listComment->fetch_assoc()) {
       	  $id = $comment['id'];
        ?>
          <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $comment['name'];?></td>
            <td><?php echo $comment['content'];?></td>
            <td><?php echo $comment['created'];?></td>
            <td>
              <?php if ($comment['status'] == 0) {?>
                Đã approve 
              <?php } else {?>
                <a href="admin.php?controller=comments&action=approve&id=<?php echo $id?>">Chưa approve</a>
              <?php }?>
            </td>
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