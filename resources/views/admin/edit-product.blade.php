@extends('layouts.layout')
@section('content')
              <h4 class="py-3 mb-4"> EDIT PRODUCT</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Edit Single Product</h5>
                      
                      @if (session()->has('message'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session()->get('message') }}
                          
                      </div>
                      @endif
                    </div>
                    <div class="card-body">
                      <form action="{{url('/edit_product', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                          <div class="col-sm-10">
                            <input type="text" value="{{ $product->title }}" class="form-control" name="title" id="basic-default-name" placeholder="John Doe" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label"  for="basic-default-message">Description</label>
                          <div class="col-sm-10">
                            <textarea
                              id="basic-default-message"
                              class="form-control" name="description" 
                              placeholder="Description"
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2">{{ $product->description }}</textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">State</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $product->state }}" name="state" id="basic-default-name" placeholder="State" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">City</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $product->city }}" name="city" id="basic-default-name" placeholder="city" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Address</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $product->address }}" name="address" id="basic-default-name" placeholder="Address" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Phone</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $product->phone }}" name="phone" id="basic-default-name" placeholder="Phone Numbers" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Capacity</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              class="form-control" name="quantity"
                              id="basic-default-company" value="{{ $product->quantity }}"
                              placeholder="what is the capacity" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Price</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              class="form-control" name="price"
                              id="basic-default-company" value="{{ $product->price }}"
                              placeholder="price" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Discount</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              class="form-control" name="discount_price"
                              id="basic-default-company" value="{{ $product->discount_price }}"
                              placeholder="discounted price" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Category</label>
                          <div class="col-sm-10">
                            <select
                            class="form-select" aria-label="Default select example"
                            id="category" name="category"
                          >
                          <option selected>{{$product->category}}</option>
                          @foreach ($category as $category )
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                          @endforeach

                        </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Status</label>
                          <div class="col-sm-10">
                            <input class="form-check-input" type="checkbox" name="status" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                Active
                              </label>

                        </select>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Images</label>
                          <div class="col-sm-10">
                            <input
                              type="file"
                             
                              class="form-control phone-mask"
                              name="image[]" accept="image/*"
                              multiple
                               />
                               @if ($product->images->count() > 0)
                               <div class="d-flex">
                                   <h6>Current Images:</h6>
                                   @foreach ($product->images as $image)
                                       <div class="mb-2">
                                           <img
                                               src="{{ asset('product/' . $image->image) }}"
                                               alt="Current Image"
                                               style="max-width: 50px; height: 50px; margin-right: 10px;"
                                           >
                                           <input
                                               type="checkbox"
                                               name="delete_images[]"
                                               value="{{ $image->id }}"
                                           >
                                           <label for="delete_images[]">Delete</label>
                                       </div>
                                   @endforeach
                               </div>
                           @endif
                           
                           
                           
                          </div>
                        </div>
                        
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn lg btn-primary">Edit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
                
              </div>
            </div>
            <!-- / Content -->

@endsection