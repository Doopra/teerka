<div class="body-container">
<div class="row ">
    <div class="col-6 tab-body" >
  <ul class="nav nav-tabs ">
    <li class="nav-item" role="presentation">
        <button class="nav-link" data-bs-toggle="tab" id="home-tab" type="button" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true" style="color:#00BFFF">FACILITIES</button>
    </li>

    


</ul>

<div class="tab-content" id="myTabControl">
    <div class="tab-pane fade show active" role="tabpanel" id="home" aria-labelledby="home-tab">
        <h3 class="product-heading">{{$product->title}}</h3>
        <h5><i class="fa-solid fa-location-pin"></i>  {{$product->city}} -  {{$product->state}} </h5>


        <div class="row">
            <div class="col-14">
                <h3 class="description">Description</h3>
                <p class="sub-heading">{{$product->description}}</p>
            </div>
        </div>


        <div class="row">
            <div class="col-14 special-features">
                <h3 class="description">Special features</h3>


                <div class="row">
                    <div class="col-4 sub-heading">
                        <i class="fa-solid fa-dumpster-fire"></i>
                        Washing machine


                    </div>
                    <div class="col-4 sub-heading">

                        <i class="fa-solid fa-wifi"></i>  Internet

                    </div>
                </div>

                <div class="row">
                    <div class="col-4 sub-heading">
                        <i class="fa-solid fa-dumpster-fire  "></i>
                        Washing machine


                    </div>
                    <div class="col-4 sub-heading">

                        <i class="fa-solid fa-wifi"></i>  Internet

                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-14">
                    <h3 class="description">Bedroom(s)</h3>
                    <p class="sub-heading">
                        4 King size beds
                        </p>
                </div>
            </div>

            







        </div>
    </div>


  




</div>
