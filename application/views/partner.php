<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Partner</h3>

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
                  <th>Id</th>
                  <th>Name</th>
                  <th>address</th>
                  <th>hp</th>
                  <th>email</th>
                </tr>
         <?php
foreach($partners as $partner) {
                                               echo "<tr>";
                                               echo "<td>".$partner->id."</td>";
                                               echo "<td>".$partner->name."</td>";
                                               echo "<td>".$partner->address."</td>";
                                               echo "<td>".$partner->hp."</td>";
                                               echo "<td>".$partner->email."</td>";

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
