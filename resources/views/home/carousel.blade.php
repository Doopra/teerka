
<!------ Include the above in your HEAD tag ---------->


<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">






            @foreach ($image as $images)




            <div class="carousel-item
            @if ($loop->first)

            active

            @endif"

            data-slide-number="0">
              <img src="product/{{$images->image}}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Q1p7bh3SHj8/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>

            @endforeach


          </div>
        </div>

        <!-- Carousel Navigation -->
        <div id="carousel-thumbs" class="carousel slide small-carousel-container" data-ride="carousel">
          <div class="carousel-inner tiny-carousel">
            <div class="carousel-item active ">
              <div class="row mx-0 ">
                @foreach ($image as $images)

                <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected hover-shadow preview" data-target="#myCarousel" data-slide-to="0">
                  <img src="product/{{$images->image}}" class="img-fluid " data-lightbox="" alt="..." style="height: 150px; cursor: pointer;"
                  onclick="openLightbox();"  />
                </div>

                @endforeach
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>









        </div> <!-- /row -->
        </div> <!-- /container -->
</section>




<script defer type="text/javascript">
const lightbox = document.createElement('div')
lightbox.id = 'lightbox'
document.body.appendChild(lightbox)

const images = document.querySelectorAll('img')
images.forEach(image => {
    image.addEventListener('click', e =>{
        lightbox.classList.add('active')
        const img = document.createElement('img')
        img.src = image.src
        while(lightbox.firstChild){
            lightbox.removeChild(lightbox.firstChild)
        }
        lightbox.appendChild(img)
    })
})

lightbox.addEventListener('click', e =>{
    if(e.target !== e.currentTarget) return
    lightbox.classList.remove('active')
})


</script>





@include('home.script')
