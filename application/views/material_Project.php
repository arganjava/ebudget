<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">expense</h3>

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
                  <th>material_Id</th>
                  <th>project_Id</th>
                  <th>Qyt</th>


                </tr>
         <?php
foreach(material_projects as material_project) {
                                               echo "<tr>";
                                               echo "<td>".material_project->Id."</td>";
                                               echo "<td>".material_project->material_Id."</td>";
                                               echo "<td>".material_project->project_Id."</td>";
                                               echo "<td>".material_project->Qyt."</td>";
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
