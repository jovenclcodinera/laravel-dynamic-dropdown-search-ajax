<!DOCTYPE html>
<html>
<head>
    <title>Laravel Dependent Dropdown Example with demo</title>
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>
<body>


<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Select State and get bellow Related City</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="title">Select State:</label>
                <select name="country" class="form-control" style="width:350px">
                    <option value="">--- Select State ---</option>
                    @foreach ($countries as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Select City:</label>
                <select name="state" class="form-control" style="width:350px">
                </select>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="country"]').on('change', function() {
            var countryID = $(this).val();
            if(countryID) {
                $.ajax({
                    url: '/myform/ajax/'+countryID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="state"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="state"]').empty();
            }
        });
    });
</script>


</body>
</html>
