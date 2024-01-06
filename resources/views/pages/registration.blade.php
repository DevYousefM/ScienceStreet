@extends('layouts.main')
@section('content')
    <section class="container-fluid margin1 ">
        <div class="section-heading wow  animated fadeInUp res-margin" data-wow-delay="0.1s">
            <h2 style="font-size: 30px;" class=" margin1">SCIENCE STREET ONLINE COURSES</h2>
            <h2 class="text-secondary" style="font-size: 24px;">Registration</h2>
            <div class="hr"></div>
        </div>
        <div class="container">
            <div class="row center wow animated fadeInDown" data-wow-delay="0.3s">
                <div style="width: 100%;display: flex;justify-content: center">
                    <form class="col-lg-7 col-md-10 col-sm-12" style="width: 100%" data-toggle="validator" role="form"
                        id="myForm" method="post" action="{{ route('register.process') }}">
                        @method('post')
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="course" value="{{ $name }}">

                            <label for="studentName">Full Student Name</label>
                            <input type="text" name="studentName" id="studentName" value="{{ old('studentName') }}"
                                class="form-control">
                            @error('studentName')
                                <span class="text-danger" style="font-size: 17px">{{ $message }}</span>
                            @enderror

                            <label for="parentName">Full Parent Name</label>
                            <input type="text" name="parentName" id="parentName" value="{{ old('parentName') }}"
                                class="form-control">
                            @error('parentName')
                                <span class="text-danger" style="font-size: 17px">{{ $message }}</span>
                            @enderror

                            <label for="parentNumber">Parent WhatsApp Number</label>
                            <input type="text" name="parentNumber" id="parentNumber"
                                placeholder="Example: +2 012 345 6789" value="{{ old('parentNumber') }}"
                                class="form-control">
                            @error('parentNumber')
                                <span class="text-danger" style="font-size: 17px">{{ $message }}</span>
                            @enderror

                            <label for="time">Time slot</label>
                            <select class="form-control" name="time"
                                style="margin-top: 0; border-color: #64d0e4; border-width: 2px;">
                                <option selected disabled>
                                    Select Time Slot
                                </option>
                                <option
                                    {{ old('time') === 'Sec-01: Saturday and Tuesday 3:00-5:00 pm - السكشن-01 : السبت والثلاثاء' ? 'selected' : null }}
                                    value="Sec-01: Saturday and Tuesday 3:00-5:00 pm - السكشن-01 : السبت والثلاثاء">
                                    Sec-01: Saturday and Tuesday 3:00-5:00 pm - السكشن-01 : السبت والثلاثاء
                                </option>
                                <option
                                    {{ old('time') === 'Sec-02: Saturday and Tuesday 5:00-7:00 pm - السكشن-02 : السبت والثلاثاء' ? 'selected' : null }}
                                    value="Sec-02: Saturday and Tuesday 5:00-7:00 pm - السكشن-02 : السبت والثلاثاء">
                                    Sec-02: Saturday and Tuesday 5:00-7:00 pm - السكشن-02 : السبت والثلاثاء
                                </option>
                                <option
                                    {{ old('time') === 'Sec-03: Saturday and Tuesday 7:00-9:00 pm - السكشن-03 : السبت والثلاثاء' ? 'selected' : null }}
                                    value="Sec-03: Saturday and Tuesday 7:00-9:00 pm - السكشن-03 : السبت والثلاثاء">
                                    Sec-03: Saturday and Tuesday 7:00-9:00 pm - السكشن-03 : السبت والثلاثاء
                                </option>
                            </select>
                            @error('time')
                                <span class="text-danger" style="font-size: 17px">{{ $message }}</span>
                            @enderror
                            <label for="email">Parent Email Address</label>
                            <input type="email" value="{{ old('email') }}" class="form-control" name="email"
                                id="email" placeholder="Email" data-error="that email address is invalid">
                            @error('email')
                                <span class="text-danger" style="font-size: 17px">{{ $message }}</span>
                            @enderror

                            <label for="schoolName">School Name</label>
                            <input type="text" name="schoolName" id="schoolName" value="{{ old('schoolName') }}"
                                class="form-control">
                            @error('schoolName')
                                <span class="text-danger" style="font-size: 17px">{{ $message }}</span>
                            @enderror

                            <label for="age">Age</label>
                            <input type="number" min="7" max="13" id="age" name="age"
                                value="{{ old('age') }}" class="form-control">
                            @error('age')
                                <span class="text-danger" style="font-size: 17px;">{{ $message }}</span>
                            @enderror

                            <label for="promo">Promo Code</label>
                            <input type="text" id="promo" name="promo" class="form-control">
                            @error('promo')
                                <span class="text-danger" style="font-size: 17px;">{{ $message }}</span>
                            @enderror

                            <div class="form-group" style="margin-top: 10px">
                                <button type="submit" class="btn">Submit</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
@section('script')
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            new WOW().init();
        });
    </script>
@endsection
