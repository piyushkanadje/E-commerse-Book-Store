@extends('user.user-layout')


@section('content')
<style>
::placeholder{
    color: white;
}

</style>

    <div class="container">
        <h3 class="mt-5 mb-3 titleu">Profile</h3>
        <div class="row bg-3 ">
            <div class="user-form widtht">
                <form action="{{ route('update.password')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group my-3 ">
                                <label for="Username" class="white raise-label">USERNAME</label>
                                <div class="mt-2">
                                    <input type="text" value="{{$data->name}}" name="name" class="profile-input white" placeholder="USERNAME">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group my-3 " >
                                <label for="email"  class="white raise-label">EMAIL ID</label>
                                <div class="mt-2">
                                    <input type="email" value="{{$data->email}}" name="email" class="profile-input white" placeholder="EMAIL ADDRESS">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group my-3 ">
                                <label for="current-password" class="white raise-label" >CURRENT PASSWORD</label>
                                <div class="mt-2">
                                    <input type="password" name="currentpassword" value="{{ $data->password }}" class="profile-input white" placeholder="******">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-3 ">
                                <label for="password" class="white raise-label">NEW PASSWORD</label>
                                <div class="mt-2">
                                    <input type="password" name="password" class="profile-input white" placeholder="******">
                                </div>
                                {{-- @error('newpassword')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-3 ">
                                <label for="confirm-password" class="white raise-label">CONFIRM PASSWORD</label>
                                <div class="mt-2">
                                    <input type="password" name="confirmpassword" class="profile-input white" placeholder="******">
                                </div>
                                {{-- @error('confirmpassword')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-3">
                        {{-- <button class="btn-p btn-nc color-3" style="width: 30%;" type="submit"><b>Save Changes</b></button> --}}
                         <button class="btn color-3" type="submit" style="width:20%; background:white; padding:15px; "><b>Save Changes</b></button>
                    </div>

                </form>
            </div>
        </div>
        <div class="row mt-5 ">
            <h3 class="titleu">Manage Payment Options</h3>
        </div>
    </div>


@stop
