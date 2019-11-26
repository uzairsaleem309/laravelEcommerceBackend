@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> {{ trans('labels.Theme Setting') }}
          @if($data['section_id'] == 1)
          <small>Home Page...</small>
          @elseif($data['section_id'] == 2)
          <small>Cart Page Settings...</small>
          @elseif($data['section_id'] == 3)
          <small>Blog Page Settings...</small>
          @elseif($data['section_id'] == 4)
          <small>Detail Page Settings...</small>
          @elseif($data['section_id'] == 5)
          <small>Shop Page Settings...</small>
          @else
          <small>Contact Page Settings...</small>
          @endif

          </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
            <li >{{ trans('labels.link_site_settings') }}</li>
            <li >{{ trans('labels.Theme Setting') }}</li>
            @if($data['section_id'] == 1)
            <li class="active">Home Page</li>
            @elseif($data['section_id'] == 2)
            <li class="active">Cart Page Settings</li>
            @elseif($data['section_id'] == 3)
            <li class="active">Blog Page Settings</li>
            @elseif($data['section_id'] == 4)
            <li class="active">Detail Page Settings</li>
            @elseif($data['section_id'] == 5)
            <li class="active">Shop Page Settings</li>
            @elseif($data['section_id'] == 6)
            <li class="active">Contact Page Settings</li>
            @else
            <li class="active">Colors Settings</li>
            @endif


        </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="box-shadow:none;">

        <div class="row">
          <div class="col-md-2">
          </div>
            <div class="col-md-8">
                    <div class="box-header">
                        @if($data['section_id'] == 1)
                        <h3 class="box-title">Home Page Settings </h3>
                        @elseif($data['section_id'] == 2)
                        <h3 class="box-title">Cart Page Settings </h3>
                        @elseif($data['section_id'] == 3)
                        <h3 class="box-title">Blog Page Settings </h3>
                        @elseif($data['section_id'] == 4)
                        <h3 class="box-title">Detail Page Settings </h3>
                        @elseif($data['section_id'] == 5)
                        <h3 class="box-title">Shop Page Settings </h3>
                        @elseif($data['section_id'] == 6)
                        <h3 class="box-title">Contact Page Settings</h3>
                        @else
                        <h3 class="box-title">Colors Settings</h3>
                        @endif
                    </div>

                    <!-- /.box-header -->
                    <div id="app">
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="box-shadow: 2px 4px 21px lightgrey"class="box box-info">
                                    @if($data['section_id'] == 1)
                                    <?php  $dataa = json_encode(array('data' =>$data,'current_theme' => $current_theme)); ?>
                                    <theme-component :data="{{$dataa}}"></theme-component>
                                    @endif
                                    <!-- /.box-header -->
                                    <!-- form start -->
                                    <div class="box-body">
                                        @if( count($errors) > 0)
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-success" role="alert">
                                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                    <span class="sr-only">{{ trans('labels.Error') }}:</span>
                                                    {{ $error }}
                                                </div>
                                            @endforeach
                                        @endif
                                        {!! Form::open(array('url' =>'admin/theme/setting/setPages', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')) !!}
                                        <input type="hidden" name="page" value="{{$data['section_id']}}" />

                                   @if($data['section_id'] == 2)
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.cart') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                <select class="form-control field-validate" onchange="showCartImage();" id="cart_id" name="cart_id">
                                                  @foreach($data['cart'] as $cart)
                                                    <?php  if($cart['id'] == $current_theme->cart){ ?>
                                                      <option selected value="{{$cart['id']}}">{{$cart['name']}}</option>
                                                    <?php }else{ ?>
                                                      <option value="{{$cart['id']}}">{{$cart['name']}}</option>
                                                    <?php } ?>
                                                  @endforeach
                                                </select>
                                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.cart') }}</span>
                                                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                                <img id="cart_image1" style="display: none" width="350px;" src="{{asset('images/prototypes/cart1.png')}}" />
                                                <img id="cart_image2"  style="display: none" width="350px;" src="{{asset('images/prototypes/cart2.png')}}" />

                                            </div>
                                        </div>

                                   @endif
                                      @if($data['section_id'] == 3)
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.news') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                <select class="form-control field-validate" name="news_id">
                                                  @foreach($data['blog'] as $news)
                                                    <?php  if($news['id'] == $current_theme->news){ ?>
                                                      <option selected value="{{$news['id']}}">{{$news['name']}}</option>
                                                    <?php }else{ ?>
                                                      <option value="{{$news['id']}}">{{$news['name']}}</option>
                                                    <?php } ?>
                                                  @endforeach
                                                </select>
                                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.news') }}</span>
                                                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                            </div>
                                        </div>
                                      @endif
                                        @if($data['section_id'] == 4)
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.detail') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                <select class="form-control field-validate" onchange="showDetailImage();" id="detail_id" name="detail_id">
                                                  @foreach($data['detail'] as $detail)
                                                    <?php  if($detail['id'] == $current_theme->detail){ ?>
                                                      <option selected value="{{$detail['id']}}">{{$detail['name']}}</option>
                                                    <?php }else{ ?>
                                                      <option value="{{$detail['id']}}">{{$detail['name']}}</option>
                                                    <?php } ?>
                                                  @endforeach
                                                </select>
                                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.detail') }}</span>
                                                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                                <img id="detail_image1" style="display: none" width="350px;" src="{{asset('images/prototypes/detail1.png')}}" />
                                                <img id="detail_image2" style="display: none" width="350px;" src="{{asset('images/prototypes/detail2.png')}}" />
                                                <img id="detail_image3" style="display: none" width="350px;" src="{{asset('images/prototypes/detail3.png')}}" />
                                                <img id="detail_image4" style="display: none" width="350px;" src="{{asset('images/prototypes/detail4.png')}}" />
                                                <img id="detail_image5" style="display: none" width="350px;" src="{{asset('images/prototypes/detail5.png')}}" />
                                                <img id="detail_image6" style="display: none" width="350px;" src="{{asset('images/prototypes/detail6.png')}}" />

                                            </div>
                                        </div>
                                        @endif
                                        @if($data['section_id'] == 5)
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.shop') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                <select class="form-control field-validate" onchange="showShopImage();" id="shop_id" name="shop_id">
                                                  @foreach($data['shop'] as $shop)
                                                    <?php  if($shop['id'] == $current_theme->shop){ ?>
                                                      <option selected value="{{$shop['id']}}">{{$shop['name']}}</option>
                                                    <?php }else{ ?>
                                                      <option value="{{$shop['id']}}">{{$shop['name']}}</option>
                                                    <?php } ?>
                                                  @endforeach
                                                </select>
                                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.shop') }}</span>
                                                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                                <img id="shop_image1" style="display: none" width="350px;" src="{{asset('images/prototypes/shop1.png')}}" />
                                                <img id="shop_image2" style="display: none" width="350px;" src="{{asset('images/prototypes/shop2.png')}}" />
                                                <img id="shop_image3" style="display: none" width="350px;" src="{{asset('images/prototypes/shop3.png')}}" />
                                                <img id="shop_image4" style="display: none" width="350px;" src="{{asset('images/prototypes/shop4.png')}}" />
                                                <img id="shop_image5" style="display: none" width="350px;" src="{{asset('images/prototypes/shop5.png')}}" />

                                            </div>
                                        </div>
                                        @endif
                                          @if($data['section_id'] == 6)
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.contact') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                <select  class="form-control field-validate"  onchange="showContactImage();" id="contact_id" name="contact_id">
                                                  @foreach($data['contact'] as $contact)
                                                    <?php  if($contact['id'] == $current_theme->contact){ ?>
                                                      <option selected value="{{$contact['id']}}">{{$contact['name']}}</option>
                                                    <?php }else{ ?>
                                                      <option value="{{$contact['id']}}">{{$contact['name']}}</option>
                                                    <?php } ?>
                                                  @endforeach
                                                </select>
                                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.contact') }}</span>
                                                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                                <img id="contact_image1" style="display: none" width="350px;" src="{{asset('images/prototypes/contact1.png')}}" />
                                                <img id="contact_image2"  style="display: none" width="350px;" src="{{asset('images/prototypes/contact2.png')}}" />
                                            </div>
                                        </div>
                                        @endif
                                        @if($data['section_id'] == 7)
                                      <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">Colors</label>
                                          <div class="col-sm-10 col-md-4">
                                            <select name="web_color_style" class="form-control">
                                                <option @if($data['settings'][81]->value == 'app')
                                                        selected
                                                        @endif
                                                        value="app">Default</option>
                                                <option @if($data['settings'][81]->value == 'app.theme.1')
                                                        selected
                                                        @endif
                                                        value="app.theme.1"> Greenish Zinc</option>
                                                <option @if($data['settings'][81]->value == 'app.theme.2')
                                                        selected
                                                        @endif
                                                        value="app.theme.2"> Brownish Red</option>
                                                <option @if($data['settings'][81]->value == 'app.theme.3')
                                                        selected
                                                        @endif
                                                        value="app.theme.3"> Black</option>
                                                <option @if($data['settings'][81]->value == 'app.theme.4')
                                                        selected
                                                        @endif
                                                        value="app.theme.4"> Purple</option>
                                                <option @if($data['settings'][81]->value == 'app.theme.5')
                                                        selected
                                                        @endif
                                                        value="app.theme.5"> Brownish Black</option>
                                                <option @if($data['settings'][81]->value == 'app.theme.6')
                                                        selected
                                                        @endif
                                                        value="app.theme.6"> Pink On Black</option>
                                                <option @if($data['settings'][81]->value == 'app.theme.7')
                                                        selected
                                                        @endif
                                                        value="app.theme.7"> Green On Black</option>
                                                <option @if($data['settings'][81]->value == 'app.theme.8')
                                                        selected
                                                        @endif
                                                        value="app.theme.8"> Blue</option>
                                                <option @if($data['settings'][81]->value == 'app.theme.9')
                                                        selected
                                                        @endif
                                                        value="app.theme.9"> Navy On Parot</option>
                                            </select>
                                          </div>
                                      </div>
                                      @endif
<!--
                                        <!-- /.box-body -->
                                        @if($data['section_id'] != 1)
                                        <div class=" text-center">
                                            <button type="submit" class="btn btn-primary">{{ trans('labels.Apply') }} </button>
                                        </div>
                                        @endif
                                        @if($data['section_id'] == 1)
                                        <div class=" text-center">
                                            <a href="{{url('/')}}" class="btn btn-default">Back </a>
                                        </div>
                                        @endif
                                        <!-- /.box-footer -->
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->

        <!-- /.row -->
    </section>
</div>
<script src="{{asset('js/app.js')}}"></script>
@endsection
