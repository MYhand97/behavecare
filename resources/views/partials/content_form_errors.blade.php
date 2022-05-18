@if($errors->any())
<div id="divFormErrors" class="col-md-12 text-center" style="color: #fff; background: #d0312d; opacity: 1;">
    <h5>{{ $errors->first() }}</h5>
</div>
<script>
    setTimeout(function() {
        $("#divFormErrors").remove();
    }, 5000);
</script>
@endif