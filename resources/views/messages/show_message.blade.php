@extends('layouts.app')

@section('content')
<!-- START Table layout -->
<div class="table-layout">
    <!-- message list-->
    <div class="col-lg-3 valign-top panel panel-minimal">
    @include('messages.navigation_panel')
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
                    <h5 class="semibold text-muted">{{$message->created_at->toDateTimeString()}}</h5>
                </li>
            </ul>
            <!--/ sender detail -->
        </div>
        <!--/ panel body -->

        <!-- panel body -->
        <div class="panel-body slimscroll" style="max-height:450px;">
            {{$message->body}}

            <address>
                <p class="semibold nm">Best Regard,</p>
                <p class="nm">Arthur Abbott</p>
                <a href="mailto:#">arbb@mail.com</a>
            </address>
        </div>
        <!--/ panel body -->

        <!-- panel body -->
<!--         <div class="panel-body"> -->
<!--             <h5 class="semibold mt0">Attachment</h5> -->

            <!-- attachment -->
<!--             <div class="table-responsive"> -->
<!--                 <table class="table table-bordered table-striped nm"> -->
<!--                     <tbody> -->
<!--                         <tr> -->
<!--                             <td> -->
<!--                                 <span class="label label-success">HTML</span> file.html (1.2 MB) -->
<!--                             </td> -->
<!--                             <td width="6%"><a href="javascript:void(0);">View</a></td> -->
<!--                             <td width="6%"><a href="javascript:void(0);">Download</a></td> -->
<!--                         </tr> -->
<!--                         <tr> -->
<!--                             <td> -->
<!--                                 <span class="label label-primary">CSS</span> file.css (1.2 MB) -->
<!--                             </td> -->
<!--                             <td width="6%"><a href="javascript:void(0);">View</a></td> -->
<!--                             <td width="6%"><a href="javascript:void(0);">Download</a></td> -->
<!--                         </tr> -->
<!--                         <tr> -->
<!--                             <td> -->
<!--                                 <span class="label label-danger">PHP</span> file.php (1.2 MB) -->
<!--                             </td> -->
<!--                             <td width="6%"><a href="javascript:void(0);">View</a></td> -->
<!--                             <td width="6%"><a href="javascript:void(0);">Download</a></td> -->
<!--                         </tr> -->
<!--                     </tbody> -->
<!--                 </table> -->
<!--             </div> -->
            <!--/ attachment -->
<!--         </div> -->
        <!--/ panel body -->

        <!-- reply box -->
        <div class="summernote">
            <i>Click here to <strong>Reply</strong> or <strong>Forward</strong></i>
        </div>
        <!--/ reply box -->
        <script type="text/javascript" src="/plugins/summernote/js/summernote.js"></script>
        <script type="text/javascript" src="/javascript/backend/pages/email.js"></script>
    </div>
    <!--/ content -->
</div>
<!--/ END Table layout -->
@endsection