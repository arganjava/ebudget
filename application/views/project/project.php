<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Project</h3>

                  <div class="input-group-btn">
                                       <a href="<?php echo site_url('project/new');?>" class="btn btn-success"> <i class="fa fa-plus"></i> New</a>
                                   </div>

                  <!-- <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">

                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="table_project">
                    <tbody><tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Term</th>
                      <th>Propose Value</th>
                      <th>Est. Duration</th>
                      <th>Est. Profit</th>
                      <th>Action</th>
                    </tr>
                   <?php $no =1; foreach($projects as $project) {
                                                         echo "<tr>";
                                                         echo "<td>".$no++."</td>";
                                                         echo "<td>".$project->project_name."</td>";
                                                         echo "<td>".$project->term."</td>";
                                                         echo "<td>".$project->propose_value."</td>";
                                                         echo "<td>".$project->est_duration."</td>";
                                                         echo "<td>".$project->est_profit."</td>";
                                                         echo "<td><a class='label label-primary' href = '".base_url()."customer/edit/"
                                                                           .$project->project_id."'>Edit</a> ";
                                                                        echo "<a class='label label-danger' href = '".base_url()."customer/delete/"
                                                                           .$project->project_id."'>Delete</a></td>";

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
  </section>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#table_project').DataTable();
} );
</script>
<?php $this->view('footer'); ?>
