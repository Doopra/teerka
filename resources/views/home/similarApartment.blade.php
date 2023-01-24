<style>


.carousel-item{

}
    @media (max-width: 768px) {
        .carousel-inner .carousel-item > div {
            display: none;
        }
        .carousel-inner .carousel-item > div:first-child {
            display: block;
        }
    }

    .test-container{
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: center;
        gap: 30px;
        overflow-x: scroll;
    }
    .item{
        width: 450px;
        height: 450px;
        display: flex;
        flex-direction: column;
    }
    .card-image img{

        max-width: 250px;
        max-height: 250px;
    }
    .trending{
        display: grid;
        grid-template-columns: 50px auto 50px;
        gap: 20px;
        align-items: center;
        padding: 0 20px;

    }
    .trending-container{
        width: 100%;
        height: 100%;
        overflow-x: scroll;
        display: flex;
        justify-content: space-between;
        gap: 20px;
        padding: 10px;
    }
    .hide-scrollbar::-webkit-scrollbar {
    display: none;
    }

    .hide-scrollbar {
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
    }
    </style>



<section class="pt-5 pb-5 containerApartment" >
    <h3>Similar Property</h3>
    <div class="trending ">

        <button class="btn btn-primary mb-3 mr-1 leftArrow"   >
            <i class="fa fa-arrow-left">

            </i>
        </button>

        <div class="trending-container hide-scrollbar" id="trending-container">

            @foreach ($properties as $property)
                <div class="item">
                    <div class="card-image">
                        <img src="product/{{$property->images[0]->image}}" class="img-fluid" alt="" style="width: 350px; height:300px">
                    </div>

                    <div class="thumb-content">
                        <h4>{{$property->title}}</h4>
                        <p class="item-price"><strike>{{$property->discount_price}}</strike> <span>{{$property->price}}</span></p>
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                        <a href="{{url('/property',$property->id)}}" class="btn btn-primary">Book Now</a>
                    </div>

                </div>
            @endforeach

        </div>


        <button class="btn btn-primary mb-3 mr-1 rightArrow"  >
            <i class="fa fa-arrow-right " ></i>
        </button>
    </div>
</section>
</div>


<script>



        $(".leftArrow").click(function () {
    var leftPos = $('.trending-container').scrollLeft();
    $(".trending-container").animate({scrollLeft: leftPos - 500}, 500);
    });

    $(".rightArrow").click(function () {
    var leftPos = $('.trending-container').scrollLeft();
    $(".trending-container").animate({scrollLeft: leftPos + 500}, 500);
    });


</script>
