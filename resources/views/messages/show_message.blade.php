@extends('layouts.app')

@section('content')
<!-- START Table layout -->
<div class="table-layout">
    <!-- message list-->
    <div class="col-lg-3 valign-top panel panel-minimal">
        <!-- panel heading -->
        <div class="panel-heading">
            <!-- panel toolbar -->
            <div class="panel-toolbar">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ModalComposeMessage">
                    <i class="ico-pencil5"></i>
                    <span class="semibold">Compose Email</span>
                </button>
            </div>
        </div>
        <!--/ panel heading -->

        <!-- panel body -->
        <div class="panel-body">
            <!-- Browse -->
            <h5 class="semibold">Browse</h5>
            <div class="list-group">
                <a href="page-email-inbox.html" class="list-group-item"><i class="ico-drawer mr5"></i> Inbox <span class="semibold text-muted pull-right">1943</span></a>
                <a href="javascript:void(0);" class="list-group-item"><i class="ico-paper-plane mr5"></i> Sent <span class="semibold text-muted pull-right">51</span></a>
                <a href="javascript:void(0);" class="list-group-item"><i class="ico-pen3 mr5"></i> Draft <span class="semibold text-muted pull-right">11</span></a>
                <a href="javascript:void(0);" class="list-group-item"><i class="ico-remove2 mr5"></i> Trash</a>
            </div>
            <!--/ Browse -->
            <!-- Label -->
            <h5 class="semibold">Label</h5>
            <div class="list-group">
                <a href="javascript:void(0);" class="list-group-item"><i class="ico-square text-danger mr5"></i> Work</a>
                <a href="javascript:void(0);" class="list-group-item"><i class="ico-square text-muted mr5"></i> Design</a>
                <a href="javascript:void(0);" class="list-group-item"><i class="ico-square text-teal mr5"></i> Social</a>
                <a href="javascript:void(0);" class="list-group-item"><i class="ico-square text-success mr5"></i> Magazine</a>
            </div>
            <!--/ Label-->
            <!-- Progress bar -->
            <h5 class="semibold">Space Used</h5>
            <div class="list-group">
                <div class="list-group-item">
                    <ul class="list-table nm">
                        <li class="text-left">Inbox</li>
                        <li>
                            <div class="progress progress-xs nm">
                                <div class="progress-bar" style="width: 40%"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="list-group-item">
                    <ul class="list-table nm">
                        <li class="text-left">Sent</li>
                        <li>
                            <div class="progress progress-xs nm">
                                <div class="progress-bar" style="width: 15%"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="list-group-item">
                    <ul class="list-table nm">
                        <li class="text-left">Draft</li>
                        <li>
                            <div class="progress progress-xs nm">
                                <div class="progress-bar" style="width: 20%"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="list-group-item">
                    <ul class="list-table nm">
                        <li class="text-left">Trash</li>
                        <li>
                            <div class="progress progress-xs nm">
                                <div class="progress-bar progress-bar-danger" style="width: 90%"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/ Progress bar -->

            <hr><!-- horizontal line -->


        </div>
        <!--/ panel body -->
    </div>
    <!--/ message list -->

    <!-- content -->
    <div class="col-lg-8 valign-top panel panel-default">
        <!-- toolbar -->
        <div class="panel-toolbar-wrapper pt10 pb10">
            <div class="panel-toolbar">
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="ico-arrow-left"></i></button>
                    <button type="button" class="btn btn-default"><i class="ico-forward"></i></button>
                    <button type="button" class="btn btn-default"><i class="ico-reply"></i></button>
                    <button type="button" class="btn btn-default"><i class="ico-remove2"></i></button>
                </div>
            </div>
            <div class="panel-toolbar text-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="ico-folder"></i></button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li role="presentation" class="dropdown-header">Move to folder</li>
                        <li><a href="javascript:void(0);">Important</a></li>
                        <li><a href="javascript:void(0);">Misc</a></li>
                        <li><a href="javascript:void(0);">Work</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="ico-tags"></i></button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li role="presentation" class="dropdown-header">Set tags</li>
                        <li><a href="javascript:void(0);"><i class="icon ico-radio-unchecked text-primary"></i> Primary</a></li>
                        <li><a href="javascript:void(0);"><i class="icon ico-radio-unchecked text-danger"></i> Important</a></li>
                        <li><a href="javascript:void(0);"><i class="icon ico-radio-unchecked text-success"></i> Done</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ toolbar -->

        <!-- panel body -->
        <div class="panel-body bgcolor-default">
            <h3 class="semibold mt0 mb5">{{$message->subject}} {{$message->id}}</h3>
        </div>
        <!--/ panel body -->

        <hr class="nm"><!-- horizontal line -->

        <!-- panel body -->
        <div class="panel-body">
            <!-- sender detail -->
            <ul class="list-table">
                <li style="width:70px;">
                    <img class="img-circle" src="/image/avatar/avatar6.jpg" alt="" width="65px" height="65px">
                </li>
                <li class="text-left">
                    <h4 class="semibold ellipsis nm">
                        {{$message->sender->getFullName()}} /
                        <small class="text-muted"><a href="javascript:void(0);">{{$message->sender->email}}</a> to <a href="javascript:void(0);">Me</a></small>
                    </h4>
                </li>
                <li class="text-right">
                    <h5 class="semibold text-muted">Jul 19, 2013</h5>
                </li>
            </ul>
            <!--/ sender detail -->
        </div>
        <!--/ panel body -->

        <!-- panel body -->
        <div class="panel-body slimscroll" style="height:450px;">
            {{$message->body}}

            <address>
                <p class="semibold nm">Best Regard,</p>
                <p class="nm">Arthur Abbott</p>
                <a href="mailto:#">arbb@mail.com</a>
            </address>
        </div>
        <!--/ panel body -->

        <!-- panel body -->
        <div class="panel-body">
            <h5 class="semibold mt0">Attachment</h5>

            <!-- attachment -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped nm">
                    <tbody>
                        <tr>
                            <td>
                                <span class="label label-success">HTML</span> file.html (1.2 MB)
                            </td>
                            <td width="6%"><a href="javascript:void(0);">View</a></td>
                            <td width="6%"><a href="javascript:void(0);">Download</a></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary">CSS</span> file.css (1.2 MB)
                            </td>
                            <td width="6%"><a href="javascript:void(0);">View</a></td>
                            <td width="6%"><a href="javascript:void(0);">Download</a></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-danger">PHP</span> file.php (1.2 MB)
                            </td>
                            <td width="6%"><a href="javascript:void(0);">View</a></td>
                            <td width="6%"><a href="javascript:void(0);">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--/ attachment -->
        </div>
        <!--/ panel body -->

        <!-- reply box -->
        <div class="summernote">
            <i>Click here to <strong>Reply</strong> or <strong>Forward</strong></i>
        </div>
        <!--/ reply box -->
        <pre>{{ print_r($message, 1)}}</pre>
    </div>
    <!--/ content -->
</div>
<!--/ END Table layout -->
@endsection