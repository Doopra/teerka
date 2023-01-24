<div class="container-sm availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">

            <form action="{{url('/search')}}" method="get" >
                @csrf
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none" style="height: 50px" >
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label class="form-label" style="font-weight: 500;">Search</label>
                        <input type="text" class="form-control shadow-none" name="searchText" placeholder="Search for a particular city or lodge" style="height: 50px">
                    </div>

                    <div class="col-lg-2 mb-3">
                        <input type="submit" value="Search" class="search-btn" style="top: 40px !important">
                    </div>



                </div>
            </form>
        </div>
    </div>
</div>
