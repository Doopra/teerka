<style>

    .container-fluid{
        padding-left: 10px;

    }
    .card{
        width: 100% !important
    }

</style>

<div class="col-5 ">



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
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First Name</label> <input type="text" id="email" name="first-name" placeholder="Your First Name" onblur="validate(2)" style="border: 1px solid #ced4da !important"> </div>

                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last Name</label> <input type="text" id="mob" name="last-name" placeholder="Last name" onblur="validate(4)" style="border: 1px solid #ced4da !important"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email</label> <input type="text" id="email" name="email" placeholder="Your email" onblur="validate(3)" style="border: 1px solid #ced4da !important"> </div>

                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number</label> <input type="number" id="mob" name="phone" placeholder="" onblur="validate(4)" style="border: 1px solid #ced4da !important"> </div>
                        </div>
                       
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Additional Information</label> 
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-12" > <button type="submit" class="btn-block btn-primary" style="height: 50px; background-color: rgb(11, 94, 215) !important">Request Property</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
