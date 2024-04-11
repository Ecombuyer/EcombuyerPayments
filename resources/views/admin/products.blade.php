@extends('layouts.adminlayout')
@section('content')
<div class="container-fluid py-4">
    <a href="{{route('admin.home')}}" class="btn btn-primary" style="border: 1px solid #fff;"><i class="fa-solid fa-arrow-left" style="margin-right: 7px;" ></i>HOME</a>
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-3 font-weight-bold d-flex justify-content-between">
            <div >
              <span style="color: #0054A6;">PRODUCT</span> DETAILS
              </div>
              <button
          class="btn btn-primary px-4"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseExample"
          
          aria-controls="collapseExample"
        >
          <i class="fa-solid fa-filter" style="margin-right: 5px"></i>
          Filter
        </button>
        <!-- filter content -->
          </div>
          
          <div class="collapse card-body" id="collapseExample">
            <div class="">
              <form class="row g-3">
                
                <div class="col-md-4">
                  <label for="userid" class="form-label">User ID</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputEmail4"
                    placeholder="Enter User ID"
                  />
                </div>
                <div class="col-md-4">
                  <label for="payment id" class="form-label"
                    >Payment ID</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="inputPassword4"
                    placeholder="Enter Payment ID"
                  />
                </div>
                <div class="col-md-4">
                  <label for="city" class="form-label">City</label>
                  <select id="inputState" class="form-select">
                    <option selected disabled>Select State...</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">
                      Arunachal Pradesh
                    </option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">
                      Himachal Pradesh
                    </option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Andaman and Nicobar Islands">
                      Andaman and Nicobar Islands
                    </option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option
                      value="Dadra and Nagar Haveli and Daman and Diu"
                    >
                      Dadra and Nagar Haveli and Daman and Diu
                    </option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected disabled>Select State...</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">
                      Arunachal Pradesh
                    </option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">
                      Himachal Pradesh
                    </option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Andaman and Nicobar Islands">
                      Andaman and Nicobar Islands
                    </option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option
                      value="Dadra and Nagar Haveli and Daman and Diu"
                    >
                      Dadra and Nagar Haveli and Daman and Diu
                    </option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="from date" class="form-label"
                    >From Date</label
                  >
                  <input
                    class="form-control datepicker"
                    placeholder="Please select date"
                    type="date"
                    onfocus="focused(this)"
                    onfocusout="defocused(this)"
                  />
                </div>
                <div class="col-md-4">
                  <label for="to date" class="form-label">To Date</label>
                  <input
                    class="form-control datepicker"
                    placeholder="Please select date"
                    type="date"
                    onfocus="focused(this)"
                    onfocusout="defocused(this)"
                  />
                </div>
                <div class="col-12">
                  <button
                    type="submit"
                    class="btn btn-primary float-end px-4"
                  >
                    Submit
                  </button>
                  <button
                    type="submit"
                    class="btn btn-primary float-end px-4 mx-2"
                  >
                    Reset
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
           
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th
                    class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"
                  >
                   S.no
                  </th>
                  <th
                      class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                  >
                  <i class="fa-regular fa-user mx-1"></i> User Id
                  </th>
                    <th
                      class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                    >
                    <i class="fa-solid fa-hashtag mx-1"></i> Product Id
                    </th>
                    <th
                      class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                    >
                    <i class="fa-solid fa-phone mx-1"></i> Product Name
                    </th>
                    <th
                      class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                    >
                    <i class="fa-regular fa-envelope mx-1"></i> Product Desription
                    </th>
                    <th
                      class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                    >
                    <i class="fa-solid fa-tag mx-1"></i> Price
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        <i class="fa-solid fa-eye mx-1"></i> Preview Image 1
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        <i class="fa-solid fa-eye mx-1"></i> Preview Image 2
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <i class="fa-solid fa-plus mx-1"></i> Created at
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <i class="fa-solid fa-pen-to-square mx-1"></i> Updated at
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product )
                        
                  <tr  >
                    <td class="align-middle text-center p-3">
                      <span class="text-secondary text-xs font-weight-bold"
                        >{{ $loop->index + 1 }}</span
                      >
                    </td>
                    <td class="align-middle text-center p-3">
                      <span class="text-secondary text-xs font-weight-bold"
                        >{{ $product->user_id }}</span
                      >
                    </td>
                    <td class="align-middle text-center p-3">
                      <span class="text-secondary text-xs font-weight-bold"
                        >{{ $product->product_id}}</span
                      >
                    </td>
                    <td class="align-middle text-center p-3">
                        <span class="text-secondary text-xs font-weight-bold"
                          >{{ $product->name}}</span
                        >
                      </td>
                    <td class="align-middle text-center p-3">
                      <span class="text-secondary text-xs font-weight-bold"
                        >{{ !!$product->description }}</span
                      >
                    </td>
                    <td class="align-middle text-center p-3">
                      <span class="text-secondary text-xs font-weight-bold"
                        >{{ $product->price }}</span
                      >
                    </td>
                    
                    <td class="align-middle text-center p-3">
                        <span class="text-secondary text-xs font-weight-bold"
                          > <img src="{{ asset('uploads/previewimages/' . $product->image) }}"
                          class="avatar avatar-sm me-3" alt="user2" /></span
                        >
                      </td>
                      
                    <td class="align-middle text-center p-3">
                        <span class="text-secondary text-xs font-weight-bold"
                          > <img src="{{ asset('uploads/previewimages/' . $product->image_2) }}"
                          class="avatar avatar-sm me-3" alt="user2" /></span
                        >
                      </td>
                    </td>
                    <td class="align-middle text-center p-3">
                      <span class="text-secondary text-xs font-weight-bold"
                        >{{ $product->created_at }}</span
                      >
                    </td>
                    <td class="align-middle text-center p-3">
                      <span class="text-secondary text-xs font-weight-bold"
                        >{{ $product->updated_at }}</span
                      >
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
@endsection