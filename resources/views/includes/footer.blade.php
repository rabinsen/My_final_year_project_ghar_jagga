<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{ asset('js/slick.j') }}s"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{ asset('js/nouislider.js') }}"></script>

<script type="text/javascript" src="{{ asset('jqueryui/jquery-ui.min.js') }}"></script>


<!-- Custom js -->
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    $(function(){
        $("#term").autocomplete({
            source: "{{ route('properties.autocomplete') }}",
            minLength: 3,
            select: function(event, ui){
                $("#term").val(ui.item.value);
            }
            });
        });
</script>
<!-- jQuery -->
<script src="{{ asset('js/jquery1.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
{{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>