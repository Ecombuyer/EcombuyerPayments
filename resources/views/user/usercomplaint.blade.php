@extends('layouts.userlayout')
@section('content')
    <main class="main-content position-relative border-radius-lg">
        <!-- Navbar -->

        <!-- End Navbar -->
        <div class="container-fluid mt-3">
            <div class="row pt-5">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h4 class="" style="margin-bottom: 20px;"> <span style="color: #0054A6;">COMPLAINTS </span>
                                DETAILS</h4>

                                <a href="{{ route('user.complaintsform') }}" class="btn btn-primary px-3" type="button">
                                    <i class="fa-solid fa-plus" style="margin-right: 5px"></i>
                                    Add New
                                </a>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <!-- accordian content -->

                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                S.no
                                            </th>


                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-solid fa-box mx-1"></i> Name
                                            </th>

                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-solid fa-box mx-1"></i> Email
                                            </th>

                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-regular fa-image"></i> Mobile No
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-regular fa-image"></i> Reason
                                            </th>
                                            <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-regular fa-image"></i> Descriptions
                                        </th>
                                            {{-- <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-regular fa-pen-to-square"></i> Action
                                            </th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($usercomplaints as $usercomplaint)

                                            <tr>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $loop->index + 1 }}</span>
                                                </td>

                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $usercomplaint->name}}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $usercomplaint->email }}</span>
                                                </td>

                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $usercomplaint->phone }}</span>
                                                </td>


                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $usercomplaint->type }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $usercomplaint->complaints }}</span>
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
    </main>
    @endsection
