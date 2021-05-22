@extends('admin.admin-layout')



@section('content')
    <div class="container mt-5">
        <div class=" justify-content-center text-center">
            <h4>EDIT FAQ's</h4>        </div>

        <div class="row justify-content-center">

            <form method="post" action="/faqupdate" >
                @csrf
                <div class="form-group">
                    <label for="title"></label>
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <input type="text"  style="width:500px"  class="form-control"  value="{{$data->faqtitle}}" name="title" placeholder="Enter Faq Title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description"></label>
                    <input type="text"  style="width:500px" class="form-control" value="{{$data->faqdescription}}" name="description" placeholder="Enter Faq Description">
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="justify-content-center text-center">
                    <button type="submit" id="form-id" class="btn btn-p btn-c">Submit</button>
                   
                </div>            </form>

        </div>
    </div>
{{-- <script>
     $('#form_id').submit(function (e, params) {
        var localParams = params || {};

        if (!localParams.send) {
            e.preventDefault();
        }

           //additional input validations can be done hear

    swal({
                title: "Confirm Entry",
                text: "Are you sure all entries are correct",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#6A9944",
                confirmButtonText: "Confirm",
                cancelButtonText: "Cancel",
                closeOnConfirm: true
            }, function (isConfirm) {
                if (isConfirm) {
                    $(e.currentTarget).trigger(e.type, { 'send': true });
                } else {

              //additional run on cancel  functions can be done hear

            }
        });
});
</script> --}}
    @stop
