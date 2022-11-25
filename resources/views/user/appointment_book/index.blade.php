@extends('user.global.master')
@section('content')
    <input type="hidden" value="{{@csrf_token()}}" name="_token">
    @if(isset($books->id))
        <form action="{{route('book.update',['category'=>$books->id])}}"
              method="POST"
              enctype="multipart/form-data">
            @method('PATCH')
            @else
                <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @endif
                    @csrf
                    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
                        <div
                                class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white
        rounded-lg shadow-xl dark:bg-gray-800">
                            <div class="flex flex-col overflow-y-auto md:flex-row">
                                <div class="h-32 md:h-auto md:w-1/2">
                                    <img
                                            aria-hidden="true"
                                            class="object-center w-full h-full dark:hidden"
                                            src="images/appointment.jpg"
                                            alt="Office"
                                    />
                                    <img
                                            aria-hidden="true"
                                            class="hidden object-cover w-full h-full dark:block"
                                            src="images/Royal.jpg"
                                            alt="Office"
                                    />
                                </div>

                                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                                    <div class="w-full">
                                        <h1
                                                class="mb-4 text-xl font-semibold text-gray-700
                dark:text-gray-200">
                                            Book Appointment
                                        </h1>

                                        <div class="relative">
                                            <select name="brand"
                                                    class="block appearance-none w-full bg-gray-200 border mb-3 border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                    id="brand">
                                                <option>Select Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach
                                                {{--                                <option value="9">Maruti Suzuki</option>--}}
                                                {{--                                <option value="7">Hyundai</option>--}}
                                                {{--                                <option value="6">Honda</option>--}}
                                                {{--                                <option value="14">Tata</option>--}}
                                                {{--                                <option value="5">Ford</option>--}}
                                                {{--                                <option value="16">Volkswagen</option>--}}
                                            </select>
                                        </div>
                                        <div class="relative">
                                            <select name='model' class="block appearance-none
                    w-full bg-gray-200 border mb-3
                    border-gray-200 text-gray-700 py-3
                    px-4 pr-8 rounded leading-tight
                    focus:outline-none focus:bg-white
                    focus:border-gray-500"
                                                    id="Model">
                                                <option value="">Select Model</option>

                                            </select>
                                        </div>
                                        <div class="w-full md:w-1/3 mb-3 md:mb-0">
                                            <input class="appearance-none block w-full
                    bg-gray-200 text-gray-700 border
                    border-gray-200 rounded py-3 px-4
                    leading-tight focus:outline-none
                    focus:bg-white focus:border-gray-500"
                                                   id="grid-city" type="text" name="kilometers"
                                                   placeholder="Kiometer Driven">
                                        </div>
                                        <div class="w-full md:w-1/3  mb-3 md:mb-0">
                                            <input class="appearance-none block w-full
                    bg-gray-200 text-gray-700 border
                    border-gray-200 rounded py-3 px-4
                    leading-tight focus:outline-none
                    focus:bg-white focus:border-gray-500"
                                                   id="grid-city" type="text" name="car_number"
                                                   placeholder="Car Number">
                                        </div>
                                        <div class="w-full md:w-1/3 mb-3 md:mb-0">

                                            <input class="appearance-none block w-full
                    bg-gray-200 text-gray-700 border
                    border-gray-200 rounded py-3 px-4
                    leading-tight focus:outline-none
                    focus:bg-white focus:border-gray-500"
                                                   id="grid-city" type="date" name="appointment_date"
                                                   placeholder="Select Date">
                                        </div>
                                        <div class="relative">
                                            <select class="block appearance-none
                    w-full bg-gray-200 border mb-3
                    border-gray-200 text-gray-700 py-3
                    px-4 pr-8 rounded leading-tight
                    focus:outline-none focus:bg-white
                    focus:border-gray-500" name="appointment_time"
                                                    id="grid-state">
                                                <option value="">Select Time Solt</option>
                                                <option value="09:00 AM">09:00 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="12:00 AM">12:00 AM</option>
                                                <option value="02:00 PM">02:00 PM</option>
                                                <option value="05:00 PM">05:00 PM</option>
                                                <option value="06:00 PM">06:00 PM</option>
                                                <option value="08:00 PM">08:00 PM</option>
                                                <option value="09:00 PM">09:00 PM</option>
                                                <option value="10:00 PM">10:00 PM</option>

                                            </select>
                                        </div>

                                        <!-- You should use a button here, as the anchor is only used for the example  -->
                                        <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5
                text-center text-white transition-colors duration-150
                bg-red-600 border border-transparent rounded-lg
                active:bg-red-600 hover:bg-red-700 focus:outline-none
                focus:shadow-outline-red">

                                            Book Now
                                        </button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </form>
        </form>
@stop
@section('customJs')
    <script type="application/javascript">
        $(function () {
            $("#brand").change(function () {
                var brand = $(this).val();
                var base_url = window.location.origin;
                $.ajax({
                    type: 'POST',
                    data: {
                        _token: $("[name='_token']").val()
                        , id: brand
                    },
                    url: base_url + "/get-model",
                    success: function (data) {
                        $('#Model').empty();
                        $('#Model').append(data.html);
                    }
                });
            });
        });
    </script>
@stop
