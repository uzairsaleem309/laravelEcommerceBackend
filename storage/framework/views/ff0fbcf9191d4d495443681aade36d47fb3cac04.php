
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>  <?php echo e(trans('labels.Countries')); ?> <small><?php echo e(trans('labels.ListingCountries')); ?>...</small> </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
                <li class="active"> <?php echo e(trans('labels.Countries')); ?></li>
            </ol>
        </section>

        <!--  content -->
        <section class="content">
            <!-- Info boxes -->

            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="col-lg-6 form-inline" id="contact-form">
                                <form  name='registration' id="registration" class="registration" method="get" action="<?php echo e(url('admin/countries/filter')); ?>">
                                    <input type="hidden"  value="<?php echo e(csrf_token()); ?>">
                                    <div class="input-group-form search-panel ">
                                        <select type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown" name="FilterBy" id="FilterBy"  >
                                            <option value="" selected disabled hidden><?php echo e(trans('labels.Filter By')); ?></option>
                                            <option value="CountryName"  <?php if(isset($name)): ?> <?php if($name == "CountryName"): ?> <?php echo e('selected'); ?> <?php endif; ?> <?php endif; ?>><?php echo e(trans('labels.Name')); ?></option>
                                            <option value="ISOCode2" <?php if(isset($name)): ?> <?php if($name == "ISOCode2"): ?> <?php echo e('selected'); ?><?php endif; ?> <?php endif; ?>><?php echo e(trans('labels.ISOCode2')); ?></option>
                                            <option value="ISOCode3" <?php if(isset($name)): ?> <?php if($name == "ISOCode3"): ?> <?php echo e('selected'); ?><?php endif; ?> <?php endif; ?>><?php echo e(trans('labels.ISOCode3')); ?></option>
                                        </select>
                                        <input type="text" class="form-control input-group-form " name="parameter" placeholder="Search term..." id="parameter" <?php if(isset($param)): ?> value="<?php echo e($param); ?>" <?php endif; ?> >
                                        <button class="btn btn-primary " id="submit" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                        <?php if(isset($param,$name)): ?>  <a class="btn btn-danger " href="<?php echo e(url('admin/countries/display')); ?>"><i class="fa fa-ban" aria-hidden="true"></i> </a><?php endif; ?>
                                    </div>
                                </form>
                                <div class="col-lg-4 form-inline" id="contact-form12"></div>
                            </div>
                            <div class="box-tools pull-right">
                                <a href="<?php echo e(url('admin/countries/add')); ?>" type="button" class="btn btn-block btn-primary"><?php echo e(trans('labels.AddNew')); ?></a>
                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?php if(count($errors) > 0): ?>
                                        <?php if($errors->any()): ?>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <?php echo e($errors->first()); ?>

                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('countries_id', trans('labels.ID')));?></th>
                                            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('countries_name', trans('labels.CountryName')));?></th>
                                            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('countries_iso_code_2', trans('labels.ISOCode2')));?></th>
                                            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('countries_iso_code_3', trans('labels.ISOCode3')));?></th>
                                            <th><?php echo e(trans('labels.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(count($countryData['countries'])>0): ?>
                                            <?php $__currentLoopData = $countryData['countries']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$countries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($countries->countries_id); ?></td>
                                                    <td><?php echo e($countries->countries_name); ?></td>
                                                    <td><?php echo e($countries->countries_iso_code_2); ?></td>
                                                    <td><?php echo e($countries->countries_iso_code_3); ?></td>
                                                    <?php $id =$countries->countries_id;   ?>
                                                    <td><a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.Edit')); ?>" href="<?php echo e(url('admin/countries/edit',$id)); ?>" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a  data-toggle="tooltip" data-placement="bottom" title=" <?php echo e(trans('labels.Delete')); ?>" id="deleteCountryId" countries_id ="<?php echo e($countries->countries_id); ?>" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="5"><?php echo e(trans('labels.NoRecordFound')); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <?php if($countryData['countries'] != null): ?>
                                      <div class="col-xs-12 text-right">
                                          <?php echo e($countryData['countries']->links()); ?>

                                      </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- deleteCountryModal -->
            <div class="modal fade" id="deleteCountryModal" tabindex="-1" role="dialog" aria-labelledby="deleteCountryModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="deleteCountryModalLabel"><?php echo e(trans('labels.DeleteCountry')); ?></h4>
                        </div>
                        <?php echo Form::open(array('url' =>'admin/countries/delete', 'name'=>'deleteCountry', 'id'=>'deleteCountry', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

                        <?php echo Form::hidden('action',  'delete', array('class'=>'form-control')); ?>

                        <?php echo Form::hidden('id',  '', array('class'=>'form-control', 'id'=>'countries_id')); ?>

                        <div class="modal-body">
                            <p><?php echo e(trans('labels.DeleteCountryText')); ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Close')); ?></button>
                            <button type="submit" class="btn btn-primary" id="deleteCountry"><?php echo e(trans('labels.DeleteCountry')); ?></button>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>

            <!--  row -->

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qhmarket/public_html/resources/views/admin/countries/index.blade.php ENDPATH**/ ?>