@extends('layouts.main')

@section('content')
<main>

    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>Apply Loan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <!-- Apply Area Start -->
    <div class="apply-area pt-150 pb-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="apply-wrapper">
                        <!-- Form -->
                        <form action="{{url('applyform')}} " name='add-apply-form-post' id='form' method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="col-lg-8">
                                        <div class="single-form">
                                             <label>* LOAN AMOUNT ($) </label>
                                             <input type="text" name="loana" placeholder="loan....">
                                             @error('loana')
                                                 <small class="text-danger">{{$message}}</small>
                                             @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-8 border-black">
                                        <div class="single-form ">
                                             <label>TYPE OF LOAN</label>
                                             <input type="text" name="loant" placeholder="type of....">
                                                @error('loant')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                        </div>
                                    </div>


                                    <div class="col-lg-8">
                                        <div class="single-form">
                                             <label>Last NAME</label>
                                             <input type="text" name="last_name" placeholder="Enter last name">
                                             @error('last_name')
                                                <small class="text-danger">{{$message}}</small>
                                             @enderror
                                        </div>
                                     </div>

                                    <div class="col-lg-8">
                                        <div class="single-form">
                                             <label>FIRST NAME</label>
                                             <input type="text" name="first_name" placeholder="Enter name">
                                             @error('first_name')
                                                <small class="text-danger">{{$message}}</small>
                                             @enderror
                                        </div>
                                     </div>

                                </div>

                                <div class="col-lg-6">

                                  

                                     <div class="col-lg-8">
                                        <div class="single-form">
                                            <label> Email Adderess</label>
                                            <input type="email" name="email" placeholder="Enter email">
                                            @error('email')
                                                <small class="text-danger">{{$message}}</small>
                                             @enderror
                                        </div>
                                    </div>


                                    <div class="col-lg-8">
                                        <div class="single-form">
                                            <label>Gender</label>
                                            <input type="text" name="gender" placeholder="Gender" >
                                             @error('gender')
                                                 <small class="text-danger">{{$message}}</small>
                                             @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="single-form">
                                            <label> Phone Number</label>
                                            <input type="tel" name="phone_number" placeholder="Enter Number">
                                            @error('phone_number')
                                                 <small class="text-danger">{{$message}}</small>
                                             @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="single-form">
                                            <label> MARITAL STATUS</label>
                                            <input type="text" name="status" placeholder="Maritial status">
                                            @error('status')
                                            <small class="text-danger">{{$message}}</small>
                                             @enderror
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="col-lg-8">
                                        <div class="single-form">
                                            <label>* TOWN/CITY</label>
                                            <input type="text" name="city" placeholder="Enter city">
                                            @error('city')
                                                 <small class="text-danger">{{$message}}</small>
                                             @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-8 border-black">
                                       <div class="single-form">
                                            <label>* STREET</label>
                                            <input type="text" name="street" placeholder="Enter Street Address">
                                            @error('street')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                         <div class="single-form">
                                            <label>* HOUSE NAME/NUMBER</label>
                                            <input type="text" name="house_name" placeholder="Enter House Name">
                                            @error('house_name')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>  

                                </div>

                                <div class="col-lg-6">
                                     <div class="col-lg-8">
                                        <div class="single-form">
                                            <label>* MONTHLY INCOME ($)</label>
                                            <input type="text" name="monthly_income" placeholder="Enter your monthly....">
                                            @error('monthly_income')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                       <button type="submit" class="btn apply-btn mt-30">APPLY NOW</button>
                                    </div>

                                </div>
                                
                            </div>
                            
                        </form >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Apply Area End -->

</main>
@endsection