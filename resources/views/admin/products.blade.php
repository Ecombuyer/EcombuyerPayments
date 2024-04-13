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
              <form class="row g-3" action="" id="filter-form" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4">
                  <label for="userid" class="form-label">User ID</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputEmail4"
                    placeholder="Enter User ID"
                    name = "userid"
                  />
                </div>
                <div class="col-md-4">
                  <label for="payment id" class="form-label"
                    >Product ID</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="inputPassword4"
                    placeholder="Enter Payment ID"
                    name="productid"
                  />
                </div>
                <div class="col-md-4">
                  <label for="payment id" class="form-label">Product Name</label>
                  <input type="text" class="form-control" id="inputPassword4"
                      name="productname" placeholder="Enter Product Name" />
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
                    name="createdat"
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
                    name="updatedat"
                  />
                </div>
                <div class="col-12">
                  <button
                    type="submit"
                    class="btn btn-primary float-end px-4"
                    id ="filter"
                  >
                    Submit
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#filter').on('click', function(event) {
              event.preventDefault(); // Prevent the default form submission behavior

              var formData = $('#filter-form').serialize();
              console.log('Form data:', formData);

              $.ajax({
                  url: "{{ route('admin.productsfilters') }}",
                  type: "POST",
                  data: formData,
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(response) {

                      console.log(response);
                      if (response.length === 0) {
                          // If no data is found, display a message
                          var html =
                              '<tbody><tr><td colspan="5" class="text-center">No data found</td></tr></tbody>';
                      } else {

                          // Assuming response is an array of objects representing table rows
                          var html = '<tbody>';

                          // Iterate through the response data and construct table rows
                          response.forEach(function(row) {
                              html += '<tr>';

                              html += '<td class="align-middle text-center">' + row
                                  .id + '</td>';
                              html += '<td class="align-middle text-center">' + row
                                  .user_id + '</td>';
                              html += '<td class="align-middle text-center">' + row
                                  .product_id + '</td>';
                              html += '<td class="align-middle text-center">' + row
                                  .name +
                                  '</td>';
                              html += '<td class="align-middle text-center">' + row
                                  .price + '</td>';
                              html += '<td class="align-middle text-center">';
                              // Construct the anchor tag dynamically
                              html += '<a class="badge" href="/transaction/' +
                                  row.product_id +
                                  '" style="font-weight: 500; text-transform: capitalize; text-decoration: underline; background-color: #c9c8c3;">Details</a>';
                              html += '</td>';
                              html += '<td class="align-middle text-center">';
                              html += '<div class="">';
                              html += '<div>';
                              // Check if the order has an image
                              if (row.image) {
                                  // If an image exists, construct an <img> tag
                                  html += '<img src="./uploads/previewimages/' + row
                                      .image +
                                      '" class="avatar avatar-sm me-3" alt="user2" />';
                              } else {
                                  // If no image exists, display a text message
                                  html += '<span>No image found!</span>';
                              }
                              html += '</div>';
                              html +=
                                  '<div class="d-flex flex-column justify-content-center">';
                              html += '</div>';
                              html += '</div>';
                              html += '</td>';
                              html += '<td class="align-middle text-center w-1">';
                              // Construct the anchor tag dynamically for previewing the product
                              html += '<a href="/' + row.product_id + '/' + row
                                  .name +
                                  '/show" class="text-white font-weight-bold text-xs mx-1  bg-primary" data-toggle="tooltip" data-original-title="Preview" style=" padding: 7px; border-radius: 10px;">';
                              html +=
                                  '<i class="fa-regular fa-eye" style="margin-right: 3px"></i>';
                              html += 'Preview';
                              html += '</a>';

                              // Share button
                              html +=
                                  '<a class="share-module" data-toggle="tooltip" data-original-title="Edit user" data-title="' +
                                  row.name + '" data-text="' + row.description +
                                  '" data-url="' + row
                                  .product_id + '/' + row.name +
                                  '/show" style="padding: 7px; border-radius: 10px;">';
                              html += '<template class="is-supported">';
                              html +=
                                  '<a class="text-white font-weight-bold text-xs mx-1  bg-gradient-success js-share"><i class="fa-solid fa-share" style="margin-right: 5px"></i>Share</a>';
                              html += '</template>';
                              html += '<template class="not-supported">';
                              html += '<pre>@Html.Partial(\'_Social.html\')</pre>';
                              html += '</template>';
                              html += '</a>';


                              // Edit button
                              html += '<a href="/' + row.id +
                                  '/edit" class="text-white font-weight-bold text-xs mx-1 bg-gradient-warning" data-toggle="tooltip" data-original-title="Edit user" style="padding: 7px; border-radius: 10px;">';
                              html +=
                                  '<i class="fa-regular fa-pen-to-square" style="margin-right: 3px"></i> Edit';
                              html += '</a>';

                              // Delete button
                              html += '<a href="/' + row.id +
                                  '/destory" class="text-white font-weight-bold text-xs mx-1 bg-gradient-danger" data-toggle="tooltip" data-original-title="Edit user" style="padding: 7px; border-radius: 10px;">';
                              html +=
                                  '<i class="fa-solid fa-trash-can" style="margin-right: 3px"></i> Delete';
                              html += '</a>';

                              html += '</td>';
                              // Add more columns as needed
                              html += '</tr>';
                          });

                          html += '</tbody>';
                      }
                      // Replace the contents of the existing table body with the newly constructed HTML
                      $('table').find('tbody').remove();
                      $('table').append(html);
                      class WebShare {
                          constructor({
                              success = () => {},
                              error = (e) => {
                                  console.log('Web Share API error', e);
                              }
                          } = {}) {
                              this.elements = document.querySelectorAll('.share-module');
                              this.isSupported = navigator.share !== undefined;
                              this.success = success;
                              this.error = error;
                              this.init();
                          }

                          init() {
                              this.elements.forEach(element => {
                                  const template = this.isSupported ? element
                                      .querySelector('.is-supported').innerHTML :
                                      element.querySelector('.not-supported')
                                      .innerHTML;
                                  const data = {
                                      url: element.dataset.url,
                                      title: element.dataset.title,
                                      text: element.dataset.text
                                  };
                                  element.innerHTML = this.compileTemplate(
                                      template, data);

                                  if (this.isSupported) {
                                      element.querySelector('.js-share')
                                          .addEventListener('click', (e) => {
                                              e.preventDefault();
                                              navigator.share({
                                                  title: data.title,
                                                  text: data.text,
                                                  url: data.url
                                              }).then(() => {
                                                  this.success();
                                              }).catch((error) => {
                                                  this.error(error);
                                              });
                                          });
                                  }
                              });
                          }

                          compileTemplate(template, scope) {
                              return template.replace(/\{\{(\w+)\}\}/g, (match, key) =>
                                  scope[key]);
                          }
                      }

                      new WebShare({
                          success: () => {
                              document.getElementById('output').innerHTML =
                                  'Thanks for sharing!';
                          }
                      });
                  },
                  error: function(xhr) {
                      console.error('Error:', xhr);
                      // Handle errors
                  }
              });
          });
      });
  </script>
@endsection