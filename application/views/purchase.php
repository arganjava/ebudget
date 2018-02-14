<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">user</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>type</th>
                  <th>budget id</th>
                  <th>supplier id</th>
                  <th>purchase id</th>

                </tr>
         <?php
foreach(suppliers as supplier) {
                                               echo "<tr>";
                                               echo "<td>".supplier->type."</td>";
                                               echo "<td>".supplier->budget_id."</td>";
                                               echo "<td>".supplier->supplier_id."</td>";
                                               echo "<td>".supplier->purchase_id."</td>";
                                               echo "<tr>";
                                            }

         ?>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</div>
<?php $this->view('footer'); ?>
