<footer class="footer text-right"><small class="block">Copyright &copy; 2024-25. All Rights Reserved.</small></footer>
</div>
</div>
<div class="chat-windows"></div>
<script src="{{ asset('admin_assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('admin_assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('admin_assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- apps -->
<script src="{{ asset('dist/js/app.min.js')}}"></script>
<!-- Theme settings -->
<script src="{{ asset('dist/js/app.init.dark.js')}}"></script>
<script src="{{ asset('dist/js/app-style-switcher.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('admin_assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{ asset('admin_assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('dist/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<!--c3 JavaScript -->
<script src="{{ asset('admin_assets/extra-libs/c3/d3.min.js')}}"></script>
<script src="{{ asset('admin_assets/extra-libs/c3/c3.min.js')}}"></script>
<script src="{{ asset('admin_assets/libs/chart.js/dist/chart.min.js')}}"></script>
<script src="{{ asset('admin_assets/libs/gaugeJS/dist/gauge.min.js')}}"></script>
<script src="{{ asset('admin_assets/libs/flot/excanvas.min.js')}}"></script>
<script src="{{ asset('admin_assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('admin_assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('admin_assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{ asset('admin_assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>


<script src="{{ asset('admin_assets/libs/chartist/dist/chartist.min.js')}}"></script>
<script src="{{ asset('admin_assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>


<script src="{{ asset('admin_assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


<script src="{{ asset('dist/js/pages/datatable/datatable-advanced.init.js')}}"></script>

<script src="{{ asset('admin_assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>

<script src="{{ asset('admin_assets/libs/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('admin_assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{ asset('dist/js/pages/calendar/cal-init.js')}}"></script>
<script src="{{ asset('admin_assets/libs/footable/dist/footable.all.min.js')}}"></script>
<!--chartjs -->
<script src="{{ asset('admin_assets/libs/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('admin_assets/libs/morris.js/morris.min.js')}}"></script>
<script src="{{ asset('dist/js/pages/dashboards/dashboard1.js')}}"></script>
<script src="{{ asset('dist/js/pages/dashboards/dashboard2.js')}}"></script>
<script src="{{ asset('dist/js/pages/dashboards/dashboard3.js')}}"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>	



<script src="{{ asset('admin_assets/libs/tinymce/tinymce.min.js')}}"></script>
    <script>
    
    
    $(document).ready(function() {

        if ($(".mymce").length > 0) {
            tinymce.init({
                selector: "textarea.mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
    </script>

 <script src="{{ asset('admin_assets/libs/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('admin_assets/libs/ckeditor/samples/js/sample.js') }}"></script>
    <script>
    //default
    initSample();

    //inline editor
    // We need to turn off the automatic editor creation first.
    CKEDITOR.disableAutoInline = true;

    CKEDITOR.inline('editor2', {
        extraPlugins: 'sourcedialog',
        removePlugins: 'sourcearea'
    });

    var editor1 = CKEDITOR.replace('editor1', {
        extraAllowedContent: 'div',
        height: 460
    });
    editor1.on('instanceReady', function() {
        // Output self-closing tags the HTML4 way, like <br>.
        this.dataProcessor.writer.selfClosingEnd = '>';

        // Use line breaks for block elements, tables, and lists.
        var dtd = CKEDITOR.dtd;
        for (var e in CKEDITOR.tools.extend({}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent)) {
            this.dataProcessor.writer.setRules(e, {
                indent: true,
                breakBeforeOpen: true,
                breakAfterOpen: true,
                breakBeforeClose: true,
                breakAfterClose: true
            });
        }
        // Start in source mode.
        this.setMode('source');
    });
    </script>
	
	<script src="{{ asset('admin_assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
    // Date Picker
    jQuery('.mydatepicker, #datepicker, .input-group.date').datepicker({
		format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
	</script>
	
  <!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.3.js"></scri-->pt>
	<script>
	
	function readURL(input,show) {
	
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#'+show).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
	function readURLVideo(input,show) {
	
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#'+show).attr('href', e.target.result);
				$('#'+show).css('display','block');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
	
	function trialfunc()
	{
	var val = $('#trial').val();
	//alert(val);
	if(val=='Yes')
	{
	$('#amountdiv').css('display','none');
	$('#amount').val('0');
	}
	else
	{
	$('#amountdiv').css('display','block');
	}
	}
    </script>
	
	 <script src="{{ asset('admin_assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin_assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/forms/select2/select2.init.js') }}"></script>
	
	
<script type="text/javascript">
$(function() {
    $('.multiselect-ui').multiselect({
        includeSelectAllOption: true,
		enableFiltering: true,
		enableCaseInsensitiveFiltering: true
    });
});
</script>
<script src="{{ asset('admin_assets/custom.js') }}" type="text/javascript"></script>

<!--<script src="{{ asset('admin_assets/extra-libs/prism/prism.js') }}"></script>-->

</body>
</html>