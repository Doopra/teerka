<style>

    .container-fluid{
        padding-left: 10px;

    }
    .card{
        width: 100% !important
    }

</style>

<div class="col-6 ">



    <div class="container-fluid px-1 py-5 mx-auto">

        <div class="row d-flex justify-content-center booking-form ">
            <div class=" col-11 text-center  ">
                <div class="text-area">
                <h3>Request  {{$product->title}} </h3>
                <p class="blue-text">Fill in your details so an agent would contact you immediately.</p>
            </div>
                <div class="card infoContainer">

                    <form class="form-card" onsubmit="event.preventDefault()">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Business email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" onblur="validate(3)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Job title<span class="text-danger"> *</span></label> <input type="text" id="job" name="job" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">What would you be using Flinks for?<span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder="" onblur="validate(6)"> </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-12" > <button type="submit" class="btn-block btn-primary" style="height: 50px">Request Property</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
