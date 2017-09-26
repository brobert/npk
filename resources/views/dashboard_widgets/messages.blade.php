<div class="col-md-6">
    <!-- START panel -->
    <div class="panel panel-primary">
        <!-- panel heading/header -->
        <div class="panel-heading">
            <h3 class="panel-title"><a href="{{route('messages.inbox')}}">@lang('messages.title')</a></h3>
            <!-- panel toolbar -->
            <div class="panel-toolbar text-right">
                <!-- option -->
<!--                 <div class="option"> -->
<!--                     <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button> -->
<!--                     <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button> -->
<!--                     <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button> -->
<!--                 </div> -->
                <!--/ option -->
            </div>
            <!--/ panel toolbar -->
        </div>
        <!--/ panel heading/header -->

        <!-- panel body with collapse capable -->
        <div class="panel-collapse pull out">
            <div class="panel-body">
                <div class="media-list">
                    @foreach( $data as $message )
                    <a href="{{route('messages.view', [$message->id])}}" class="media border-dotted ">
                        <span class="media-body">
                            <span class="media-heading">{{ $message->sender->getFullName()}}</span>
                            <span class="media-text ellipsis nm">{{ $message->subject}}</span>
                            <!-- meta icon -->
                            <span class="media-meta pull-right">{{ $message->created_at->diffForHumans() }}</span>
                            <!--/ meta icon -->
                        </span>
                    </a>
                    @endforeach
                </div>
                <pre>{{ print_r($data, 1) }}</pre>
            <!--/ Message list -->
            </div>
        </div>
        <!--/ panel body with collapse capabale -->

        <!-- Loading indicator -->
        <div class="indicator"><span class="spinner"></span></div>
        <!--/ Loading indicator -->
    </div>
    <!--/ END panel -->
</div>