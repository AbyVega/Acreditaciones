<!DOCTYPE html>
<html>
<form action="submitdata" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <span>Name</span><input id="name_id" name="testname"><br><br>
    <button type="submit">Submit</button>
</form>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latestr/js/toastr.min.js"></script>
<script>
    @if (Session::has('message'))
        var type="{{Session::get('alert-type', 'info')}}"
    switch (type) {
        case 'info':
            toastr.info("{{Session::get('message')}}");
            break;

        case 'error':
            toastr.error("{{Session::get('message')}}");
            break;

    }
    @endif
</script>
</html>