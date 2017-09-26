<div class="col-md-2">
    <!-- START panel -->
    <div class="panel panel-primary">
        <!-- panel heading/header -->
        <div class="panel-heading">
            <h3 class="panel-title">@lang('payments.title')</h3>
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
                @lang('payments.current'): <a href="">
                    <span class="label label-primary">{{$data['cost']}} PLN</span>
                </a>
            </div>
        </div>
        <!--/ panel body with collapse capabale -->

        <!-- Loading indicator -->
        <div class="indicator"><span class="spinner"></span></div>
        <!--/ Loading indicator -->
    </div>
    <!--/ END panel -->
</div>