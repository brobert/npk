@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Messages</div>

                <div class="panel-body">
                	<div class="media-list">
                	@foreach( $messages as $message )
                        <a href="page-message-rich.html" class="media border-dotted">
                            <span class="media-body">
                                <span class="media-heading  pull-right">{{ $message->sender->getFullName()}}</span>
                                <span class="media-text ">{{$message->subject}}</span>
                                <span class="media-text ellipsis nm">{{$message->message}}</span>
                                <!-- meta icon -->
                                <span class="media-meta"><i class="ico-reply"></i></span>
                                <span class="media-meta"><i class="ico-attachment"></i></span>
                                <span class="media-meta pull-right">20m</span>
                                <!--/ meta icon -->
                            </span>
                        </a>
                        <pre>
                    	{{ print_r($message->recipents->first(), true) }}
                    </pre>
                	@endforeach
                	</div>

                </div>
            </div>
        </div>
    </div>

@endsection