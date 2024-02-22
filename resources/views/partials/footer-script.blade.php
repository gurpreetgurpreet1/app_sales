<script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
</script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/pending.js')}}"></script>