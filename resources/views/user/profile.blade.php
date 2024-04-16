@extends('layouts.userlayout')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
  <style>
    .avatar-upload {
  position: relative;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 3px solid white;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  padding: 15px;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "+";
  font-family: 'FontAwesome';
  color: rgb(231, 209, 6);
  position: absolute;
  font-size: 30px;
  font-weight: 100;
  top: -7px;
  left: 4px;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

  </style>

    <div class="container-fluid py-4" style="margin-top: 7rem;">
        <form class="`" action="{{ route('user.addprofile') }}" method="post"
        enctype="multipart/form-data">
            @csrf
      <div class="row mb-4">
        <div class="col-md-12">
          <div class="card shadow-lg">
            <div class="card-header">
              <div class="d-flex justify-content-between">
                <p class="text-uppercase text-sm">User Information</p>
              </div>
            </div>
            <div class="card-body" style="margin-top: -10px;">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="text-sm text-secondary">User name</label>
                        <input class="form-control" type="text" value="{{$userprofile->name}}" name="username">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="text-sm text-secondary">Email address</label>
                        <input class="form-control" type="email" value="{{$userprofile->email}}" name="email ">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="text-sm text-secondary">First name</label>
                        <input class="form-control" type="text" value="{{$userprofile->firstname}}" name="firstname">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="text-sm text-secondary">Last name</label>
                        <input class="form-control" type="text" value="{{$userprofile->lastname}}" name="lastname">
                      </div>
                    </div>
                  </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Contact Information</p>
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1" class="text-sm text-secondary">Address</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="address">{{$userprofile->address}}</textarea>
                    </div>
                  </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="text-sm text-secondary">City</label>
                    <input class="form-control" type="text" value="{{$userprofile->city}}" name="city">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="text-sm text-secondary">State</label>
                    <input class="form-control" type="text" value="{{$userprofile->state}}" name="state">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="text-sm text-secondary">Country</label>
                    <input class="form-control" type="text" value="{{$userprofile->country}}" name="country">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="text-sm text-secondary">Postal code</label>
                    <input class="form-control" type="text" value="{{$userprofile->pin_code}}" name="postalcode">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Business Sector</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="text-sm text-secondary">Business Type</label>
                    <select class="form-control" name="businesstype">
                        <option selected>Select domain </option>
                        <option value="PrivateLimitedCompany"{{ ($userprofile->business_type == 'PrivateLimitedCompany') ? 'selected' : '' }}>Private Limited Company</option>
                        <option value="PublicCompany"{{ ($userprofile->business_type == 'PublicCompany') ? 'selected' : '' }}>Public Company</option>
                        <option value="SoleProprietorship"{{ ($userprofile->business_type == 'SoleProprietorship') ? 'selected' : '' }}>Sole Proprietorship</option>
                        <option value="OnePersonCompany"{{ ($userprofile->business_type == 'OnePersonCompany') ? 'selected' : '' }}>One Person Company</option>
                        <option value="Partnership"{{ ($userprofile->business_type == 'Partnership') ? 'selected' : '' }}>Partnership</option>
                        <option value="LimitedLiabilityPartnership"{{ ($userprofile->business_type == 'LimitedLiabilityPartnership') ? 'selected' : '' }}>Limited Liability Partnership (LLP)</option>
                        <option value="Section8Company"{{ ($userprofile->business_type == 'Section8Company') ? 'selected' : '' }}>Section 8 Company</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="text-sm text-secondary">Business Categorry </label>
                    <select class="form-control" name="businesscategory">
                        <option selected>Select domain</option>

                        <option value="InformationTechnology"{{ ($userprofile->business_category == 'InformationTechnology') ? 'selected' : '' }}>Information Technology (IT)</option>
                        <option value="Construction"{{ ($userprofile->business_category == 'Construction') ? 'selected' : '' }}>Construction</option>
                        <option value="E-commerce"{{ ($userprofile->business_category == 'E-commerce') ? 'selected' : '' }}>E-commerce</option>
                        <option value="IndividualBusiness"{{ ($userprofile->business_category == 'IndividualBusiness') ? 'selected' : '' }}>Individual Business (Sole Proprietorship)</option>
                        <option value="Networking"{{ ($userprofile->business_category == 'Networking') ? 'selected' : '' }}>Networking</option>
                        <option value="Marketing"{{ ($userprofile->business_category == 'Marketing') ? 'selected' : '' }}>Marketing</option>
                        <option value="Healthcare"{{ ($userprofile->business_category == 'Healthcare') ? 'selected' : '' }}>Healthcare</option>
                        <option value="FinanceandBanking"{{ ($userprofile->business_category == 'FinanceandBanking') ? 'selected' : '' }}>Finance and Banking</option>
                        <option value="Education"{{ ($userprofile->business_category == 'Education') ? 'selected' : '' }}>Education</option>
                        <option value="HospitalityandTourism"{{ ($userprofile->business_category == 'HospitalityandTourism') ? 'selected' : '' }}>Hospitality and Tourism</option>
                        <option value="Manufacturing"{{ ($userprofile->business_category == 'Manufacturing') ? 'selected' : '' }}>Manufacturing</option>
                        <option value="TransportationandLogistics"{{ ($userprofile->business_category == 'TransportationandLogistics') ? 'selected' : '' }}>Transportation and Logistics</option>
                        <option value="Retail"{{ ($userprofile->business_category == 'Retail') ? 'selected' : '' }}>Retail</option>
                        <option value="RealEstate"{{ ($userprofile->business_category == 'RealEstate') ? 'selected' : '' }}>Real Estate</option>
                        <option value="EntertainmentandMedia"{{ ($userprofile->business_category == 'EntertainmentandMedia') ? 'selected' : '' }}>Entertainment and Media</option>
                        <option value="FoodandBeverage"{{ ($userprofile->business_category == 'FoodandBeverage') ? 'selected' : '' }}>Food and Beverage</option>
                        <option value="EnergyandUtilities"{{ ($userprofile->business_category == 'EnergyandUtilities') ? 'selected' : '' }}>Energy and Utilities</option>
                        <option value="Consulting"{{ ($userprofile->business_category == 'Consulting') ? 'selected' : '' }}>Consulting</option>
                        <option value="NonprofitandSocialServices"{{ ($userprofile->business_category == 'NonprofitandSocialServices') ? 'selected' : '' }}>Nonprofit and Social Services</option>
                        <option value="LegalServicesothers"{{ ($userprofile->business_category == 'LegalServicesothers') ? 'selected' : '' }}>Legal Services others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="text-sm text-secondary">Company Name</label>
                    <input class="form-control" type="text" value="{{$userprofile->company_name}}" name="company">
                  </div>
                </div>
              </div>
                </div>
                  <!-- profile image -->
                  <div class="col-md-4">
                    <div class="card card-profile">
                      <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                      <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                          <div class="mt-n4 mt-lg-n7  mb-lg-0 d-flex align-items-center justify-content-center">
                              <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="profileimage" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url({{ asset('uploads/profileimages/' . $userprofile->profile_image) }});">
                                    </div>
                                </div>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">

                      </div>
                      <div class="card-body pt-0">
                        <div class="text-center mt-4">
                          <h5>
                            {{$userprofile->name}}
                          </h5>
                          <div class="h6 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{$userprofile->city}},{{$userprofile->state}}
                          </div>
                          <div class="h6 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>{{$userprofile->business_type}} - {{$userprofile->business_category}}
                          </div>
                          <div>
                            <i class="ni education_hat mr-2"></i>{{$userprofile->company_name}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- profile image end -->
            </div>
            <div class="" >
              <button class="btn btn-primary text-uppercase  mt-3">submit</button>
            </div>

          </div>
        </div>
      </div>

    </div>
  </form>
  </div>

  <script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
  </script>
  <!--   Core JS Files   -->
  <script src="{{ env('APP_URL') }}/assets/js/core/popper.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ env('APP_URL') }}/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
@endsection
