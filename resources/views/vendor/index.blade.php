@extends('layouts.app')

@section("content")
    <div class="card">
        <div class="card-header bg-primary">
            <h2 class="text-center text-white">Multi Dropdown</h2>
        </div>
        <div class="card-body text-center">
            <div class="row">
                <div class="col-3">
                    <select name="country" id="country"  class="form-control">
                        <option selected>Country</option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <select name="state" class="form-control" id="state">
                        <option selected>State</option>
                    </select>
                </div>
                <div class="col-3">
                    <button class="btn btn-primary rounded" type="submit" id="search" name="search">
                        Search
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('select[name="country"]').on('change', function() {
                var countryID = $(this).val();
                if(countryID) {
                    $.ajax({
                        url: '/myform/ajax/'+countryID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            jQuery('select[name="state"]').empty();
                            $.each(data, function(key, value) {
                                jQuery('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }else{
                    $('select[name="state"]').empty();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $("#search").on("click", function () {
            var link = document.getElementById("state").value;
            $.ajax({
                url: window.location.href="getData/" + link
            })
        })
    </script>
@endsection
