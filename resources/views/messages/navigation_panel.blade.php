<!-- panel heading -->
<div class="panel-heading">
    <!-- panel toolbar -->
    <div class="panel-toolbar">
        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ModalComposeMessage">
            <i class="ico-pencil5"></i>
            <span class="semibold">@lang('messages.compose_email')</span>
        </button>
    </div>
</div>
<!--/ panel heading -->

<!-- panel body -->
<div class="panel-body">
    <!-- Browse -->
    <h5 class="semibold">@lang('messages.browse')</h5>
    <div class="list-group">
        <a href="{{route('messages.inbox')}}" class="list-group-item">
            <i class="icon ico-download22 mr5"></i>
            @lang('messages.inbox')
            <span class="semibold text-muted pull-right">{{$aggregates['inbox'] or -1}}</span>
        </a>
        <a href="{{route('messages.outbox')}}" class="list-group-item">
            <i class="icon ico-upload22 mr5"></i>
            @lang('messages.outbox')
            <span class="semibold text-muted pull-right">{{$aggregates['outbox'] or -1}}</span>
        </a>
        <a href="{{route('messages.draft')}}" class="list-group-item">
            <i class="ico-pen3 mr5"></i>
            @lang('messages.draft')
            <span class="semibold text-muted pull-right">{{$aggregates['draft'] or -1}}</span>
        </a>
        <a href="{{route('messages.deleted')}}" class="list-group-item">
            <i class="icon ico-remove4 mr5"></i>
            @lang('messages.deleted')
            <span class="semibold text-muted pull-right">{{$aggregates['trash'] or -1}}</span>
        </a>
    </div>
    <!--/ Browse -->
    <hr><!-- horizontal line -->
</div>
<!--/ panel body -->