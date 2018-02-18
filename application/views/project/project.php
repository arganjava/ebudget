<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Project</h3>
 <div class="input-group-btn">
                      <a href="<?php echo site_url('project/new');?>" class="btn btn-success"> <i class="fa fa-plus"></i> New</a>
                  </div>
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
                  <th>No</th>
                  <th>Project Id</th>
                  <th></th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Value</th>
                  <th>Term</th>
                  <th>Est Budget</th>
                  <th>Pic</th>
                  <th>Confirm</th>
                </tr>
         <?php
         $index = 1;
foreach($projects as $material) {
                                               echo "<tr>";
                                               echo "<td>".$index++."</td>";
                                               echo "<td>"."PR-".$material->project_id."</td>";
                                               echo "<td><a href='/project/detail'>....</a></td>";
                                               echo "<td>".$material->project_name."</td>";
                                               echo "<td>".$material->date."</td>";
                                               echo "<td>".number_format($material->propose_value)."</td>";
                                               echo "<td>".$material->term."</td>";
                                               echo "<td>".number_format($material->total)."</td>";
                                               echo "<td>".$material->pic."</td>";
                                               echo "<td>".$material->confirm."</td>";
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
