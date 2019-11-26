<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <?php echo e(trans('labels.AddProduct')); ?> <small><?php echo e(trans('labels.AddProduct')); ?>...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
            <li><a href="<?php echo e(URL::to('admin/products/display')); ?>"><i class="fa fa-database"></i> <?php echo e(trans('labels.ListingAllProducts')); ?></a></li>
            <li class="active"><?php echo e(trans('labels.AddProduct')); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?php echo e(trans('labels.AddNewProduct')); ?> </h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-info">
                                    <!-- form start -->
                                    <div class="box-body">
                                        <?php if( count($errors) > 0): ?>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="alert alert-danger" role="alert">
                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(trans('labels.Error')); ?>:</span>
                                            <?php echo e($error); ?>

                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>

                                        <?php echo Form::open(array('url' =>'admin/products/add', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>


                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Product Type')); ?> </label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <select class="form-control field-validate prodcust-type" name="products_type" onChange="prodcust_type();">
                                                            <option value=""><?php echo e(trans('labels.Choose Type')); ?></option>
                                                            <option value="0"><?php echo e(trans('labels.Simple')); ?></option>
                                                            <option value="1"><?php echo e(trans('labels.Variable')); ?></option>
                                                            <option value="2"><?php echo e(trans('labels.External')); ?></option>
                                                        </select><span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.Product Type Text')); ?>.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Manufacturers')); ?> </label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <select class="form-control" name="manufacturers_id">
                                                            <option value=""><?php echo e(trans('labels.ChooseManufacturers')); ?></option>
                                                            <?php $__currentLoopData = $result['manufacturer']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select><span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.ChooseManufacturerText')); ?>.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-2 control-label"><?php echo e(trans('labels.Category')); ?></label>
                                                    <div class="col-sm-10 col-md-9">
                                                        <?php print_r($result['categories']); ?>
                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.ChooseCatgoryText')); ?>.</span>
                                                        <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.IsFeature')); ?> </label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <select class="form-control" name="is_feature">
                                                            <option value="0"><?php echo e(trans('labels.No')); ?></option>
                                                            <option value="1"><?php echo e(trans('labels.Yes')); ?></option>
                                                        </select>
                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.IsFeatureProuctsText')); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Status')); ?> </label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <select class="form-control" name="products_status">
                                                            <option value="1"><?php echo e(trans('labels.Active')); ?></option>
                                                            <option value="0"><?php echo e(trans('labels.Inactive')); ?></option>
                                                        </select>
                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.SelectStatus')); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ProductsPrice')); ?></label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <?php echo Form::text('products_price', '', array('class'=>'form-control number-validate', 'id'=>'products_price')); ?>

                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.ProductPriceText')); ?>

                                                        </span>
                                                        <span class="help-block hidden"><?php echo e(trans('labels.ProductPriceText')); ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group" id="tax-class">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.TaxClass')); ?> </label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <select class="form-control field-validate" name="tax_class_id">
                                                            <option selected><?php echo e(trans('labels.SelectTaxClass')); ?></option>
                                                            <?php $__currentLoopData = $result['taxClass']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxClass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($taxClass->tax_class_id); ?>"><?php echo e($taxClass->tax_class_title); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.ChooseTaxClassForProductText')); ?>

                                                        </span>
                                                        <span class="help-block hidden"><?php echo e(trans('labels.SelectProductTaxClass')); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Min Order Limit')); ?></label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <?php echo Form::text('products_min_order', '1', array('class'=>'form-control field-validate number-validate', 'id'=>'products_min_order')); ?>

                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.Min Order Limit Text')); ?>

                                                        </span>
                                                        <span class="help-block hidden"><?php echo e(trans('labels.Min Order Limit Text')); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Max Order Limit')); ?></label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <?php echo Form::text('products_max_stock', '', array('class'=>'form-control ', 'id'=>'products_max_stock')); ?>

                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.Max Order Limit Text')); ?>

                                                        </span>
                                                        <span class="help-block hidden"><?php echo e(trans('labels.Max Order Limit Text')); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ProductsWeight')); ?></label>
                                                    <div class="col-sm-10 col-md-4">
                                                        <?php echo Form::text('products_weight', '', array('class'=>'form-control number-validate', 'id'=>'products_weight')); ?>

                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.RequiredTextForWeight')); ?>

                                                        </span>
                                                    </div>
                                                    <div class="col-sm-10 col-md-4" style="padding-left: 0;">
                                                        <select class="form-control" name="products_weight_unit">
                                                            <?php if($result['units'] !== null): ?>
                                                            <?php $__currentLoopData = $result['units']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($unit->units_name); ?>"><?php echo e($unit->units_name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ProductsModel')); ?></label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <?php echo Form::text('products_model', '', array('class'=>'form-control', 'id'=>'products_model')); ?>

                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.ProductsModelText')); ?>

                                                        </span>
                                                        <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-md-6 ">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Image')); ?></label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="Modalmanufactured" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" id="closemodal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                        <h3 class="modal-title text-primary" id="myModalLabel"><?php echo e(trans('labels.Choose Image')); ?></h3>
                                                                    </div>
                                                                    <div class="modal-body manufacturer-image-embed">
                                                                        <?php if(isset($allimage)): ?>
                                                                        <select class="image-picker show-html " name="image_id" id="select_img">
                                                                            <option value=""></option>
                                                                            <?php $__currentLoopData = $allimage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option data-img-src="<?php echo e(asset($image->path)); ?>" class="imagedetail" data-img-alt="<?php echo e($key); ?>" value="<?php echo e($image->id); ?>"> <?php echo e($image->id); ?> </option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <a href="<?php echo e(url('admin/media/add')); ?>" target="_blank" class="btn btn-primary pull-left"><?php echo e(trans('labels.Add Image')); ?></a>
                                                                        <button type="button" class="btn btn-default refresh-image"><i class="fa fa-refresh"></i></button>
                                                                        <button type="button" class="btn btn-primary" id="selected" data-dismiss="modal">Done</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div id="imageselected">
                                                          <?php echo Form::button( trans('labels.Add Image'), array('id'=>'newImage','class'=>"btn btn-primary field-validate", 'data-toggle'=>"modal", 'data-target'=>"#Modalmanufactured" )); ?>

                                                          <br>
                                                          <div id="selectedthumbnail" class="selectedthumbnail col-md-5"> </div>
                                                          <div class="closimage">
                                                              <button type="button" class="close pull-left image-close " id="image-close"
                                                                style="display: none; position: absolute;left: 105px; top: 54px; background-color: black; color: white; opacity: 2.2; " aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                          </div>
                                                        </div>
                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.UploadProductImageText')); ?></span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>


                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group flash-sale-link">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.FlashSale')); ?></label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <select class="form-control" onChange="showFlash();" name="isFlash" id="isFlash">
                                                            <option value="no"><?php echo e(trans('labels.No')); ?></option>
                                                            <option value="yes"><?php echo e(trans('labels.Yes')); ?></option>
                                                        </select>
                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.FlashSaleText')); ?></span>
                                                    </div>
                                                </div>

                                                <div class="flash-container" style="display: none;">
                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.FlashSalePrice')); ?></label>
                                                        <div class="col-sm-10 col-md-8">
                                                            <input class="form-control" type="text" name="flash_sale_products_price" id="flash_sale_products_price" value="">
                                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                                <?php echo e(trans('labels.FlashSalePriceText')); ?></span>
                                                            <span class="help-block hidden"><?php echo e(trans('labels.FlashSalePriceText')); ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.FlashSaleDate')); ?></label>
                                                        <div class="col-sm-10 col-md-4">
                                                            <input class="form-control datepicker" readonly type="text" name="flash_start_date" id="flash_start_date" readonly value="">
                                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                                <?php echo e(trans('labels.FlashSaleDateText')); ?></span>
                                                            <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                                        </div>
                                                        <div class="col-sm-10 col-md-4 bootstrap-timepicker">
                                                            <input type="text" class="form-control timepicker" name="flash_start_time" readonly id="flash_start_time" value="">
                                                            <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.FlashExpireDate')); ?></label>
                                                        <div class="col-sm-10 col-md-4">
                                                            <input class="form-control datepicker" readonly type="text" readonly name="flash_expires_date" id="flash_expires_date" value="">
                                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                                <?php echo e(trans('labels.FlashExpireDateText')); ?></span>
                                                            <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                                        </div>
                                                        <div class="col-sm-10 col-md-4 bootstrap-timepicker">
                                                            <input type="text" class="form-control timepicker" readonly name="flash_end_time" id="flash_end_time" value="">
                                                            <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Status')); ?></label>
                                                        <div class="col-sm-10 col-md-8">
                                                            <select class="form-control" name="flash_status">
                                                                <option value="1"><?php echo e(trans('labels.Active')); ?></option>
                                                                <option value="0"><?php echo e(trans('labels.Inactive')); ?></option>
                                                            </select>
                                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                                <?php echo e(trans('labels.ActiveFlashSaleProductText')); ?></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group special-link">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Special')); ?></label>
                                                    <div class="col-sm-10 col-md-8">
                                                        <select class="form-control" onChange="showSpecial();" name="isSpecial" id="isSpecial">
                                                            <option value="no"><?php echo e(trans('labels.No')); ?></option>
                                                            <option value="yes"><?php echo e(trans('labels.Yes')); ?></option>
                                                        </select>
                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                            <?php echo e(trans('labels.SpecialProductText')); ?>.</span>
                                                    </div>
                                                </div>

                                                <div class="special-container" style="display: none;">
                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.SpecialPrice')); ?></label>
                                                        <div class="col-sm-10 col-md-8">
                                                            <input class="form-control" type="text" name="specials_new_products_price" id="special-price" value="">
                                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                                <?php echo e(trans('labels.SpecialPriceTxt')); ?>.</span>
                                                            <span class="help-block hidden"><?php echo e(trans('labels.SpecialPriceNote')); ?>.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ExpiryDate')); ?></label>
                                                        <div class="col-sm-10 col-md-8">
                                                            <input class="form-control datepicker" readonly readonly type="text" name="expires_date" id="expiry-date" value="">
                                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                                <?php echo e(trans('labels.SpecialExpiryDateTxt')); ?>

                                                            </span>
                                                            <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Status')); ?></label>
                                                        <div class="col-sm-10 col-md-8">
                                                            <select class="form-control" name="status">
                                                                <option value="1"><?php echo e(trans('labels.Active')); ?></option>
                                                                <option value="0"><?php echo e(trans('labels.Inactive')); ?></option>
                                                            </select>
                                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                                <?php echo e(trans('labels.ActiveSpecialProductText')); ?>.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="tabbable tabs-left">
                                                    <ul class="nav nav-tabs">
                                                        <?php $__currentLoopData = $result['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$languages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="<?php if($key==0): ?> active <?php endif; ?>"><a href="#product_<?=$languages->languages_id?>" data-toggle="tab"><?=$languages->name?></a></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <?php $__currentLoopData = $result['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$languages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <div style="margin-top: 15px;" class="tab-pane <?php if($key==0): ?> active <?php endif; ?>" id="product_<?=$languages->languages_id?>">
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ProductName')); ?> (<?php echo e($languages->name); ?>)</label>
                                                                    <div class="col-sm-10 col-md-8">
                                                                        <input type="text" name="products_name_<?=$languages->languages_id?>" class="form-control field-validate">
                                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                                            <?php echo e(trans('labels.EnterProductNameIn')); ?> <?php echo e($languages->name); ?> </span>
                                                                        <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group external_link" style="display: none">
                                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.External URL')); ?> (<?php echo e($languages->name); ?>)</label>
                                                                    <div class="col-sm-10 col-md-8">
                                                                        <input type="text" name="products_url_<?=$languages->languages_id?>" class="form-control products_url">
                                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                                            <?php echo e(trans('labels.External URL Text')); ?> <?php echo e($languages->name); ?> </span>
                                                                        <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Description')); ?> (<?php echo e($languages->name); ?>)</label>
                                                                    <div class="col-sm-10 col-md-8">
                                                                        <textarea id="editor<?=$languages->languages_id?>" name="products_description_<?=$languages->languages_id?>" class="form-control" rows="5"></textarea>
                                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                                            <?php echo e(trans('labels.EnterProductDetailIn')); ?> <?php echo e($languages->name); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.box-body -->
                                        <div class="box-footer text-center">
                                            <button type="submit" class="btn btn-primary pull-right">
                                                <span><?php echo e(trans('labels.Save_And_Continue')); ?></span>
                                                <i class="fa fa-angle-right 2x"></i>
                                            </button>
                                        </div>

                                        <!-- /.box-footer -->
                                        <?php echo Form::close(); ?>

                                    </div>
                                </div>
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

        <!-- Main row -->

        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script src="<?php echo asset('admin/plugins/jQuery/jQuery-2.2.0.min.js'); ?>"></script>
<script type="text/javascript">
    $(function() {

        //for multiple languages
        <?php $__currentLoopData = $result['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor<?php echo e($languages->languages_id); ?>');

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();

    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qhmarket/public_html/resources/views/admin/products/add.blade.php ENDPATH**/ ?>