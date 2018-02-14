<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Budget</h3>

              <div class="input-group-btn">
                                   <a href="<?php echo site_url('budget/new');?>" class="btn btn-success"> <i class="fa fa-plus"></i> New</a>
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
                  <th>budget_id</th>
                  <th>budget_name</th>
                  <th>invoice_name</th>
                  <th>payment</th>
                  <th>funding</th>
                  <th>note</th>
                  <th>project_Id</th>
                  <th>payment_date</th>

                </tr>
         <?php foreach($budgets as $budget) {
                                               echo "<tr>";
                                               echo "<td>".$budget->budget_id."</td>";
                                               echo "<td>".$budget->budget_name."</td>";
                                               echo "<td>".$budget->invoice_name."</td>";
                                               echo "<td>".$budget->payment."</td>";
                                               echo "<td>".$budget->funding."</td>";
                                               echo "<td>".$budget->note."</td>";
                                               echo "<td>".$budget->project_Id."</td>";
                                               echo "<td>".$budget->payment_date."</td>";
                                               echo "<td><a class='label label-primary' href = '".base_url()."budget/edit/"
                                                                 .$budget->id."'>Edit</a> ";
                                                              echo "<a class='label label-danger' href = '".base_url()."budget/delete/"
                                                                 .$budget->id."'>Delete</a></td>";
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
