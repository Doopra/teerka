
@extends('layouts.layout')
@section('content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4">ADD CATEGORIES / PARTNER</h4>

              @if (session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session()->get('message') }}
                  
              </div>
              @endif
              
              <div class="row">
                <!-- Basic -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">ADD CATEGORY</h5>
                    <form action="{{url('/add_category')}}" method="POST">
                      @csrf
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">name</span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Category"
                          aria-label="name" name="category"
                          aria-describedby="basic-addon11" />
                      </div>

                      
                     
                      
                        <div class="col-sm-6 justify-content-end">
                          <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        
                      </div>

                    </form>
                    </div>
                  </div>
                </div>
             

                <!-- Merged -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">ADD PARTNER</h5>
                    <form action="" method="">
                      
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">name</span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Group of companies"
                          aria-label="name" name="category"
                          aria-describedby="basic-addon11" />
                      </div>

                      
                     
                      
                        <div class="col-sm-6 justify-content-end">
                          <button type="submit"name="category" class="btn btn-primary">Save</button>
                        
                      </div>

              
                    </div>
                  </form>
                        
                      </div>
                    </div>
                  </div>
                </div>

              
              <!-- Custom file input -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <h5 class="card-header">ALL CATEGORIES</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      

                      <div class="card">
                        <h5 class="card-header">List of categories</h5>
                        <div class="table-responsive text-nowrap">
                          <table class="table table-dark">
                            <thead>
                              <tr>
                                <th>Category Name</th>
                                <th>Partner</th>
                                <th>Assign To</th>
                                <th>Status</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              @foreach ($data as $data )
                              <tr>
                                <td>
                                  <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                  <span class="fw-medium">{{$data->category_name }}</span>
                                </td>
                                <td>
                                <span class="fw-medium">N/A</span>
                              </td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller">
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
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
                                      <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="{{url('delete_category', $data->id)}}"  onclick="return confirm('Are you sure?')"
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

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

   @endsection