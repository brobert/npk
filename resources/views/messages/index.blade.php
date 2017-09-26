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
        <!-- panel toolbar wrapper -->
        <div class="panel-toolbar-wrapper pl0 pt5 pb5">
            <!-- panel toolbar -->
            <div class="panel-toolbar pl10">
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="ico-loop4"></i></button>
                    <button type="button" class="btn btn-default"><i class="ico-remove3"></i></button>
                </div>
            </div>
            <div class="panel-toolbar text-right">
                {{$messages->links()}}
            </div>
            <!--/ panel toolbar -->
        </div>
        <!--/ panel toolbar wrapper -->

        <!-- email list -->
        <div class="table-responsive nm">
            <table class="table table-hover table-email" id="table-email">
                <tbody>

                    @foreach( $messages as $message )
                    <tr>
                        <td width="2%">
                            <div class="checkbox custom-checkbox nm">
                                <input type="checkbox" id="msg_checkbox_{{$message->id}}" value="{{$message->id}}" data-toggle="selectrow" data-target="tr">
                                <label for="msg_checkbox_{{$message->id}}"></label>
                            </div>
                        </td>
                        <td class="meta">
                            <h5 class="sender">{{ $message->sender->getFullName()}}</h5>
                            <p class="date">{{ $message->created_at->diffForHumans() }}</p>
                        </td>
                        <td class="message">
                            <h5 class="heading">
                                <i class="ico-square text-danger mr5"></i>
                                <i class="ico-attachment text-muted mr5"></i>
                                <a href="{{route('messages.view', [$message->id])}}">{{$message->subject}}</a>
                            </h5>
                            <p class="text">{{ strip_tags(str_limit($message->message, 100, '...'))}}</p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--/ email list -->
    </div>
    <!--/ content -->
</div>
<!--/ END Table layout -->



@endsection