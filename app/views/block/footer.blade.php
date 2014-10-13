@if (!isset($no_visible_elements) || !$no_visible_elements)
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
@endif
</div><!--/fluid-row-->
@if (!isset($no_visible_elements) || !$no_visible_elements)

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="{{Config::get('define.site_url')}}" target="_blank">
                {{Config::get('define.site_domain')}}</a> 2012 - {{ date('Y') }}</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="{{Config::get('define.site_url')}}">{{Config::get('define.site_domain')}}</a></p>
    </footer>
@endif

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="{{Config::get('define.static_url')}}/bower/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="{{Config::get('define.static_url')}}/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='{{Config::get('define.static_url')}}/bower/moment/min/moment.min.js'></script>
<script src='{{Config::get('define.static_url')}}/bower/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='{{Config::get('define.static_url')}}/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="{{Config::get('define.static_url')}}/bower/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="{{Config::get('define.static_url')}}/bower/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="{{Config::get('define.static_url')}}/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="{{Config::get('define.static_url')}}/bower/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="{{Config::get('define.static_url')}}/bower/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="{{Config::get('define.static_url')}}/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="{{Config::get('define.static_url')}}/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="{{Config::get('define.static_url')}}/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="{{Config::get('define.static_url')}}/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="{{Config::get('define.static_url')}}/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="{{Config::get('define.static_url')}}/js/charisma.js"></script>
</body>
</html>
