@extends('layouts.layout')
@section('content')
          
          <h4 class="py-3 mb-4"><span class="text-muted fw-light">All Products</h4>

             

              <hr class="my-5" />

              <!-- Bootstrap Dark Table -->
              <div class="card">
                <h5 class="card-header">Products</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($product as $product)
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i>
                          <span class="fw-medium">{{$product->title}}</span>
                        </td>
                        <td class="text-wrap">{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller">
                              <img src="/product/{{$product->image}}" alt="Avatar" class="rounded-circle" />
                            </li>
                           
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item"  href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="{{url('delete_product', $product->id)}}"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Bootstrap Dark Table -->

             

              <hr class="my-5" />

             
            

          

              

        @endsection