<div class="body-container">
<div class="row ">
    <div class="col-6 tab-body" >
  <ul class="nav nav-tabs ">
    <li class="nav-item" role="presentation">
        <button class="nav-link" data-bs-toggle="tab" id="home-tab" type="button" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">Home</button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link" data-bs-toggle="tab" id="furnitures-tab" type="button" data-bs-target="#furnitures" role="tab" aria-controls="furnitures" aria-selected="true">Furnitures</button>
    </li>


</ul>

<div class="tab-content" id="myTabControl">
    <div class="tab-pane fade show active" role="tabpanel" id="home" aria-labelledby="home-tab">
        <h3>{{$product->title}}</h3>
        <h5><i class="fa-solid fa-location-pin"></i>  {{$product->city}} -  {{$product->state}} </h5>


        <div class="row">
            <div class="col-14">
                <h3 class="description">Description</h3>
                <p>{{$product->description}}</p>
            </div>
        </div>


        <div class="row">
            <div class="col-14 special-features">
                <h3 class="description">Special features</h3>


                <div class="row">
                    <div class="col-4">
                        <i class="fa-solid fa-dumpster-fire"></i>
                        Washing machine


                    </div>
                    <div class="col-4">

                        <i class="fa-solid fa-wifi"></i>  Internet

                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <i class="fa-solid fa-dumpster-fire"></i>
                        Washing machine


                    </div>
                    <div class="col-4">

                        <i class="fa-solid fa-wifi"></i>  Internet

                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-14">
                    <h3 class="description">Bedroom(s)</h3>
                    <p>
                        4 King size beds
                        </p>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <h3 class="description">Facilities</h3>


                    <div class="row">
                        <div class="col-4">
                            <i class="fa-solid fa-fan"></i>
                            10 Fans


                        </div>
                        <div class="col-4">

                            <i class="fa-solid fa-cabinet-filing"></i>  4 Cabinets

                        </div>
                    </div>
                </div>
            </div>







        </div>
    </div>


    <div class="tab-pane fade show" role="tabpanel" id="furnitures" aria-labelledby="furnitures-tab">




        <div class="row">
            <div class="col-14 special-features">
                <h3 class="description">Special features</h3>


                <div class="row">
                    <div class="col-4">
                        <i class="fa-solid fa-dumpster-fire"></i>
                        Washing machine


                    </div>
                    <div class="col-4">

                        <i class="fa-solid fa-wifi"></i>  Internet

                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <i class="fa-solid fa-dumpster-fire"></i>
                        Washing machine


                    </div>
                    <div class="col-4">

                        <i class="fa-solid fa-wifi"></i>  Internet

                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-14">
                    <h3 class="description">Bedroom(s)</h3>
                    <p>
                        4 King size beds
                        </p>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <h3 class="description">Facilities</h3>


                    <div class="row">
                        <div class="col-4">
                            <i class="fa-solid fa-fan"></i>
                            10 Fans


                        </div>
                        <div class="col-4">

                            <i class="fa-solid fa-cabinet-filing"></i>  4 Cabinets

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>





</div>
