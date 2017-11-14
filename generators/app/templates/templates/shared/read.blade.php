@extends('layout')

<?php use ROH\Util\Inflector; ?>

@section('page.breadcumb.section')
    <li>
        <a href="{{ f('controller.url') }}" >{{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>
            Read
        </span>
    </li>
@stop

@section('fields')

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        @section('caption')
                        <i class="icon-user font-green"></i>
                        <span class="caption-subject font-green bold uppercase"> {{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</span>
                        @show
                        <!-- <span class="caption-helper">demo form...</span> -->
                    </div>
                    
                    <!-- <div class="actions">
                        <div class="btn-group">
                            <a class="btn green btn-sm btn-outline dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-pencil"></i> Edit </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-ban"></i> Ban </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>

                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form id="readform" class="read" class="form-vertiacal">
                        <div class="form-body">
                            <div class="row">
                                <?php $i = 0 ?>
                                @foreach (f('controller')->schema() as $name => $field)
                                    @if (!$field['hidden'])
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format($name, 'readonly') }}
                                                {{ $field->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="btn-set pull-left">
                                <a href="{{ f('controller.url', '/'.$entry['$id'].'/update') }}" class="btn green tooltips">Update</a>
                                <!-- <a href="{{ f('controller.url') }}" class="btn blue"><i class="fa fa-arrow-left"></i> Back </a> -->
                            </div>
                            <div class="pull-right">
                                <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="btn red delete-popup">Delete</a>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green-haze">
                        <i class="icon-settings font-green-haze"></i>
                        <span class="caption-subject bold uppercase"> Horizontal Form</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Regular input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Enter your name">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Input with hint</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Enter your email">
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Some help goes here...</span>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input has-success">
                                <label class="col-md-2 control-label" for="form_control_1">Success Input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Success state">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input has-warning">
                                <label class="col-md-2 control-label" for="form_control_1">Warning Input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Warning state">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input has-error">
                                <label class="col-md-2 control-label" for="form_control_1">Error State</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Error state">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Dropdown Input</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="form_control_1">
                                        <option value=""></option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                        <option value="">Option 3</option>
                                        <option value="">Option 4</option>
                                    </select>
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input has-success">
                                <label class="col-md-2 control-label" for="form_control_1">Textarea</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="3" placeholder="Enter more text"></textarea>
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Disabled</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" disabled id="form_control_1" placeholder="Placeholder...">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Readonly</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" readonly value="Some value" id="form_control_1" placeholder="Placeholder...">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Readonly</label>
                                <div class="col-md-10">
                                    <div class="form-control form-control-static"> email@example.com </div>
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Small</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control input-sm" id="form_control_1" placeholder=".input-sm">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Large</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control input-lg" id="form_control_1" placeholder=".input-lg">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <button type="button" class="btn default">Cancel</button>
                                    <button type="button" class="btn blue">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('quick.nav')
@stop



