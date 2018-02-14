<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Project Edit Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('project/update');?>" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                  <input required name="project_id" value="<?php echo $project->project_id?>" class="form-control" id="inputEmail3" placeholder="Name" type="hidden">
                  <div class="col-sm-10">
                    <input required name="project_name" value="<?php echo $project->project_name?>" class="form-control" id="inputEmail3" placeholder="Name" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Term</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $project->term?>" name="term" class="form-control" id="inputPassword3" placeholder="Type" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Propose Value</label>

                  <div class="col-sm-10">
                    <textarea name="propose_value" class="form-control"><?php echo $project->propose_value?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Est. Duration</label>

                  <div class="col-sm-10">
                    <input name="est_duration" value="<?php echo $project->est_duration?>" class="form-control" id="inputPassword3" placeholder="Unit" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Est. Profit</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $project->est_profit?>" name="est_profit" class="form-control" id="inputPassword3" placeholder="Type" type="text">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('material');?>" class="btn btn-danger"> Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</div>
<?php $this->view('footer'); ?>
