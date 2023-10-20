<style>
    .container-fluid {
        padding-left: 10px;
    }

    .card {
        width: 100% !important;
    }

    /* Set the same height for select and text input and remove the background color */
    select, input[type="text"] {
        height: 38px; /* Adjust the height as needed */
        background-color: transparent;
    }
    .product-title{
        color:#00BFFF;
    }
</style>

<div class="col-6">
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center booking-form">
            <div class="col-11 text-center">
                <div class="text-area">
                    <h4 class="product-title"> {{$product->title}} - ₦{{ number_format($product->price, 2) }}</h4>
                    <p class="blue-text">Complete your information to enable a prompt agent contact</p>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
                <div class="card infoContainer">
                    <form class="form-card" action="{{  route('admin.all_bookings') }}" method="post">
                        @csrf
                        <div class="row justify-content-between text-left">


                                              
                            
                            
                            <div class="form-group col-4 flex-column d-flex">
                                <label class="form-control-label px-3">Title</label>
                                <select name="title" style="border: 1px solid #ced4da !important">
                                    <option value="Mr" selected>Mr.</option>
                                    <option value="Mrs">Mrs.</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Chief">Chief</option>
                                    <option value="Dr">Dr.</option>
                                    <option value="Engr">Engr</option>
                                    <option value="Dr Mrs">Dr. Mrs</option>
                                    <option value="HRH">HRH</option>
                                    <option value="Senator">Senator</option>
                                    <option value="Arch">Arch.</option>
                                    <option value="Barr">Barr</option>
                                    <option value="Prof">Prof</option>
                                    <option value="Pastor">Pastor</option>
                                    <option value="Rev">Rev.</option>
                                    <option value="Hon">Hon.</option>
                                    <option value="Amb">Amb.</option>
                                    
                                </select>
                                
                            </div>
                            <div class="form-group col-8 flex-column d-flex">
                                <label class="form-control-label px-3">First Name</label>
                                <input type="text" name="first_name" placeholder="First Name*" onblur="validate(2)" style="border: 1px solid #ced4da !important" required>
                                @error('first_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label ">Last Name</label>
                                <input type="text" name="last_name" placeholder="Last Name*" onblur="validate(2)" style="border: 1px solid #ced4da !important" required>
                                @error('last_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Email</label>
                                <input type="email" name="email" placeholder="Email*" onblur="validate(3)" style="border: 1px solid #ced4da !important" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Event Date</label>
                                <input type="date" name="event_date" style="border: 1px solid #ced4da !important" value="{{ \Carbon\Carbon::today()->toDateString() }}" min="{{ \Carbon\Carbon::today()->toDateString() }}">
                            </div>
                            
                                     

                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Phone number</label>
                                <input type="text" name="phone" placeholder="phone number*" onblur="validate(4)" style="border: 1px solid #ced4da !important" required>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                          

                            <input type="hidden" name="product_title" value="{{ $product->title }}">
                            <input type="hidden" name="product_price" value="{{ $product->price }}">
                            <input type="hidden" name="product_city" value="{{ $product->city }}">
                            
                            
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Additional Information</label>
                                <textarea class="form-control" rows="5" name="comment"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-12">
                                <button type="submit"  class="btn-block btn-primary" style="height: 50px; background-color: #00BFFF; border-color:#00BFFF !important">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
