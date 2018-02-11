<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Material</h3>
 <div class="input-group-btn">
                      <a href="<?php echo site_url('material/new');?>" class="btn btn-success"> <i class="fa fa-plus"></i> New</a>
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
                  <th>Id</th>
                  <th>Name</th>
                  <th>Buying Price</th>
                  <th>Unit</th>
                  <th>Type</th>
                                    <th>Action</th>
                </tr>
         <?php
foreach($materials as $material) {
                                               echo "<tr>";
                                               echo "<td>".$material->id."</td>";
                                               echo "<td>".$material->name."</td>";
                                               echo "<td>".$material->buying_price."</td>";
                                               echo "<td>".$material->unit."</td>";
                                               echo "<td>".$material->type."</td>";
                                               echo "<td><a class='label label-primary' href = '".base_url()."material/edit/"
                                                                 .$material->id."'>Edit</a> ";
                                                              echo "<a class='label label-danger' href = '".base_url()."material/delete/"
                                                                 .$material->id."'>Delete</a></td>";
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
