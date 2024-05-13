@extends('layouts.userlayout')
@section('content')


    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .bankimg {
            width: 35rem;
            margin-bottom: 2rem;
            filter: drop-shadow(10px 3px 10px rgb(139, 138, 138));
            /* box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px; */
        }

        @media only screen and (max-width: 767px) {
            .bankimg {

                width: 20rem;

            }
        }
    </style>
    <style>
        .upload-area2 {
            width: 100%;
            background-color: var(--clr-white);
            /* box-shadow: 0 10px 60px rgb(218, 229, 255); */
            border: none;
            border-radius: 24px;
            padding: 0rem 1.875rem 2rem 1.875rem;
            margin: 0.625rem;
            text-align: center;
        }

        .upload-area--open2 {
            /* Slid Down Animation */
            animation: slidDown 500ms ease-in-out;
        }

        @keyframes slidDown {
            from {
                height: 28.125rem;
                /* 450px */
            }

            to {
                height: 35rem;
                /* 560px */
            }
        }

        /* Header */
        .upload-area__header2 {
            text-align: left
        }

        .upload-area__title2 {
            font-size: 1.8rem;
            font-weight: 500;
            margin-bottom: 0.3125rem;
        }

        .upload-area__paragraph2 {
            font-size: 0.9375rem;
            color: var(--clr-light-gray);
            margin-left: 0;
        }

        .upload-area__tooltip2 {
            position: relative;
            color: var(--clr-light-blue);
            cursor: pointer;
            transition: color 300ms ease-in-out;
        }

        .upload-area__tooltip2:hover {
            color: var(--clr-blue);
        }

        .upload-area__tooltip-data2 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -125%);
            min-width: max-content;
            background-color: var(--clr-white);
            color: var(--clr-blue);
            border: 1px solid var(--clr-light-blue);
            padding: 0.625rem 1.25rem;
            font-weight: 500;
            opacity: 0;
            visibility: hidden;
            transition: none 300ms ease-in-out;
            transition-property: opacity, visibility;
        }

        .upload-area__tooltip2:hover .upload-area__tooltip-data2 {
            opacity: 1;
            visibility: visible;
        }

        /* Drop Zoon */
        .upload-area__drop-zoon2 {
            position: relative;
            height: 11.25rem;
            /* 180px */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 2px dashed black;
            border-radius: 12px;
            margin-top: 2.1875rem;
            cursor: pointer;
            transition: border-color 300ms ease-in-out;
        }

        .upload-area__drop-zoon2:hover {
            border-color: #0054A6;
        }

        .yetho {
            display: flex;
            font-size: 3.75rem;
            color: var(--clr-blue);
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon__paragraph2 {
            font-size: 0.9375rem;
            color: var(--clr-light-gray);
            margin: 0;
            margin-top: 0.625rem;
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon2:hover .yetho,
        .drop-zoon2:hover .drop-zoon__paragraph2 {
            opacity: 0.7;
        }

        .drop-zoon__loading-text2 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            color: var(--clr-light-blue);
            z-index: 10;
        }

        .drop-zoon__preview-image2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 0.3125rem;
            border-radius: 10px;
            display: none;
            z-index: 1000;
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon2:hover .drop-zoon__preview-image2 {
            opacity: 0.8;
        }

        .drop-zoon__file-input2 {
            display: none;
        }

        /* (drop-zoon--over) Modifier Class */
        .drop-zoon--over2 {
            border-color: var(--clr-blue);
        }

        .drop-zoon--over2 .drop-zoon__icon2,
        .drop-zoon--over2 .drop-zoon__paragraph2 {
            opacity: 0.7;
        }

        /* (drop-zoon--over) Modifier Class */

        .drop-zoon--Uploaded2 .drop-zoon__icon2,
        .drop-zoon--Uploaded2 .drop-zoon__paragraph2 {
            display: none;
        }

        /* File Details Area */
        .upload-area__file-details2 {
            height: 0;
            visibility: hidden;
            opacity: 0;
            text-align: left;
            transition: none 500ms ease-in-out;
            transition-property: opacity, visibility;
            transition-delay: 500ms;
        }

        /* (duploaded-file--open) Modifier Class */
        .file-details--open2 {
            height: auto;
            visibility: visible;
            opacity: 1;
        }

        .file-details__title2 {
            font-size: 1rem;
            font-weight: 500;
            color: var(--clr-light-gray);
            margin-top: 5px;
        }

        /* Uploaded File */
        .uploaded-file2 {
            display: flex;
            align-items: center;
            padding: 0.625rem 0;
            visibility: hidden;
            opacity: 0;
            transition: none 500ms ease-in-out;
            transition-property: visibility, opacity;
        }

        /* (duploaded-file--open2) Modifier Class */
        .uploaded-file--open2 {
            visibility: visible;
            opacity: 1;
        }

        .uploaded-file__icon-container2 {
            position: relative;
            margin-right: 0.3125rem;
        }

        .uploaded-file__icon2 {
            font-size: 3.4375rem;
            color: var(--clr-blue);
        }

        .uploaded-file__icon-text2 {
            position: absolute;
            top: 1.5625rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.9375rem;
            font-weight: 500;
            color: var(--clr-white);
        }

        .uploaded-file__info2 {
            position: relative;
            top: 0rem;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .uploaded-file__info2::before,
        .uploaded-file__info2::after {
            content: '';
            position: absolute;
            bottom: -0.9375rem;
            width: 0;
            height: 0.5rem;
            background-color: #ebf2ff;
            border-radius: 0.625rem;
        }

        .uploaded-file__info2::before {
            width: 100%;
        }

        .uploaded-file__info2::after {
            width: 100%;
            background-color: #0054A6;
        }

        /* Progress Animation */
        .uploaded-file__info2--active::after {
            animation: progressMove2 800ms ease-in-out;
            animation-delay: 300ms;
        }

        @keyframes progressMove2 {
            from {
                width: 0%;
                background-color: transparent;
            }

            to {
                width: 100%;
                background-color: var(--clr-blue);
            }
        }

        .uploaded-file__name2 {
            width: 100%;
            max-width: 6.25rem;
            /* 100px */
            display: inline-block;
            font-size: 1rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .uploaded-file__counter2 {
            font-size: 1rem;
            color: var(--clr-light-gray);
        }
    </style>
    <style>
        /* General Styles */

        * {
            box-sizing: border-box;
        }

        :root {
            --clr-white: rgb(255, 255, 255);
            --clr-black: rgb(0, 0, 0);
            --clr-light: rgb(245, 248, 255);
            --clr-light-gray: rgb(196, 195, 196);
            --clr-blue: rgb(63, 134, 255);
            --clr-light-blue: rgb(171, 202, 255);
        }


        /* End General Styles */

        /* Upload Area */
        .upload-area {
            width: 100%;
            background-color: var(--clr-white);
            /* box-shadow: 0 10px 60px rgb(218, 229, 255); */
            border: none;
            border-radius: 24px;
            padding: 0rem 1.875rem 2rem 1.875rem;
            margin: 0.625rem;
            text-align: center;
        }

        .upload-area--open {
            /* Slid Down Animation */
            animation: slidDown 500ms ease-in-out;
        }

        @keyframes slidDown {
            from {
                height: 28.125rem;
                /* 450px */
            }

            to {
                height: 35rem;
                /* 560px */
            }
        }

        /* Header */
        .upload-area__header {
            text-align: left
        }

        .upload-area__title {
            font-size: 1.8rem;
            font-weight: 500;
            margin-bottom: 0.3125rem;
        }

        .upload-area__paragraph {
            font-size: 0.9375rem;
            color: var(--clr-light-gray);
            margin-left: 0;
        }

        .upload-area__tooltip {
            position: relative;
            color: var(--clr-light-blue);
            cursor: pointer;
            transition: color 300ms ease-in-out;
        }

        .upload-area__tooltip:hover {
            color: var(--clr-blue);
        }

        .upload-area__tooltip-data {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -125%);
            min-width: max-content;
            background-color: var(--clr-white);
            color: var(--clr-blue);
            border: 1px solid var(--clr-light-blue);
            padding: 0.625rem 1.25rem;
            font-weight: 500;
            opacity: 0;
            visibility: hidden;
            transition: none 300ms ease-in-out;
            transition-property: opacity, visibility;
        }

        .upload-area__tooltip:hover .upload-area__tooltip-data {
            opacity: 1;
            visibility: visible;
        }

        /* Drop Zoon */
        .upload-area__drop-zoon {
            position: relative;
            height: 11.25rem;
            /* 180px */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 2px dashed black;
            border-radius: 12px;
            margin-top: 2.1875rem;
            cursor: pointer;
            transition: border-color 300ms ease-in-out;
        }

        .upload-area__drop-zoon:hover {
            border-color: #0054A6;
        }

        .drop-zoon__icon {
            display: flex;
            font-size: 3.75rem;
            color: var(--clr-blue);
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon__paragraph {
            font-size: 0.9375rem;
            color: var(--clr-light-gray);
            margin: 0;
            margin-top: 0.625rem;
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon:hover .drop-zoon__icon,
        .drop-zoon:hover .drop-zoon__paragraph {
            opacity: 0.7;
        }

        .drop-zoon__loading-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            color: var(--clr-light-blue);
            z-index: 10;
        }

        .drop-zoon__preview-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 0.3125rem;
            border-radius: 10px;
            display: none;
            z-index: 1000;
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon:hover .drop-zoon__preview-image {
            opacity: 0.8;
        }

        .drop-zoon__file-input {
            display: none;
        }

        /* (drop-zoon--over) Modifier Class */
        .drop-zoon--over {
            border-color: var(--clr-blue);
        }

        .drop-zoon--over .drop-zoon__icon,
        .drop-zoon--over .drop-zoon__paragraph {
            opacity: 0.7;
        }

        /* (drop-zoon--over) Modifier Class */


        .drop-zoon--Uploaded .drop-zoon__icon,
        .drop-zoon--Uploaded .drop-zoon__paragraph {
            display: none;
        }

        /* File Details Area */
        .upload-area__file-details {
            height: 0;
            visibility: hidden;
            opacity: 0;
            text-align: left;
            transition: none 500ms ease-in-out;
            transition-property: opacity, visibility;
            transition-delay: 500ms;
        }

        /* (duploaded-file--open) Modifier Class */
        .file-details--open {
            height: auto;
            visibility: visible;
            opacity: 1;
        }

        .file-details__title {
            font-size: 1rem;
            font-weight: 500;
            color: var(--clr-light-gray);
            margin-top: 5px;
        }

        /* Uploaded File */
        .uploaded-file {
            display: flex;
            align-items: center;
            padding: 0.625rem 0;
            visibility: hidden;
            opacity: 0;
            transition: none 500ms ease-in-out;
            transition-property: visibility, opacity;
        }

        /* (duploaded-file--open) Modifier Class */
        .uploaded-file--open {
            visibility: visible;
            opacity: 1;
        }

        .uploaded-file__icon-container {
            position: relative;
            margin-right: 0.3125rem;
        }

        .uploaded-file__icon {
            font-size: 3.4375rem;
            color: var(--clr-blue);
        }

        .uploaded-file__icon-text {
            position: absolute;
            top: 1.5625rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.9375rem;
            font-weight: 500;
            color: var(--clr-white);
        }

        .uploaded-file__info {
            position: relative;
            top: 0rem;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .uploaded-file__info::before,
        .uploaded-file__info::after {
            content: '';
            position: absolute;
            bottom: -0.9375rem;
            width: 0;
            height: 0.5rem;
            background-color: #ebf2ff;
            border-radius: 0.625rem;
        }

        .uploaded-file__info::before {
            width: 100%;
        }

        .uploaded-file__info::after {
            width: 100%;
            background-color: #0054A6;
        }

        /* Progress Animation */
        .uploaded-file__info--active::after {
            animation: progressMove 800ms ease-in-out;
            animation-delay: 300ms;
        }

        @keyframes progressMove {
            from {
                width: 0%;
                background-color: transparent;
            }

            to {
                width: 100%;
                background-color: var(--clr-blue);
            }
        }

        .uploaded-file__name {
            width: 100%;
            max-width: 6.25rem;
            /* 100px */
            display: inline-block;
            font-size: 1rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .uploaded-file__counter {
            font-size: 1rem;
            color: var(--clr-light-gray);
        }
    </style>
    <!-- pan image upload style -->
    <style>
        .upload-area3 {
            width: 100%;
            background-color: var(--clr-white);
            /* box-shadow: 0 10px 60px rgb(218, 229, 255); */
            border: none;
            border-radius: 24px;
            padding: 0rem 1.875rem 2rem 1.875rem;
            margin: 0.625rem;
            text-align: center;
        }

        .upload-area--open3 {
            /* Slid Down Animation */
            animation: slidDown 500ms ease-in-out;
        }

        @keyframes slidDown {
            from {
                height: 28.125rem;
                /* 450px */
            }

            to {
                height: 35rem;
                /* 560px */
            }
        }

        /* Header */
        .upload-area__header3 {
            text-align: left
        }

        .upload-area__title3 {
            font-size: 1.8rem;
            font-weight: 500;
            margin-bottom: 0.3125rem;
        }

        .upload-area__paragraph3 {
            font-size: 0.9375rem;
            color: var(--clr-light-gray);
            margin-left: 0;
        }

        .upload-area__tooltip3 {
            position: relative;
            color: var(--clr-light-blue);
            cursor: pointer;
            transition: color 300ms ease-in-out;
        }

        .upload-area__tooltip3:hover {
            color: var(--clr-blue);
        }

        .upload-area__tooltip-data3 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -125%);
            min-width: max-content;
            background-color: var(--clr-white);
            color: var(--clr-blue);
            border: 1px solid var(--clr-light-blue);
            padding: 0.625rem 1.25rem;
            font-weight: 500;
            opacity: 0;
            visibility: hidden;
            transition: none 300ms ease-in-out;
            transition-property: opacity, visibility;
        }

        .upload-area__tooltip3:hover .upload-area__tooltip-data3 {
            opacity: 1;
            visibility: visible;
        }

        /* Drop Zoon */
        .upload-area__drop-zoon3 {
            position: relative;
            height: 11.25rem;
            /* 180px */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 2px dashed black;
            border-radius: 12px;
            margin-top: 2.1875rem;
            cursor: pointer;
            transition: border-color 300ms ease-in-out;
        }

        .upload-area__drop-zoon3:hover {
            border-color: #0054A6;
        }

        .yetho {
            display: flex;
            font-size: 3.75rem;
            color: var(--clr-blue);
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon__paragraph3 {
            font-size: 0.9375rem;
            color: var(--clr-light-gray);
            margin: 0;
            margin-top: 0.625rem;
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon3:hover .yetho,
        .drop-zoon3:hover .drop-zoon__paragraph3 {
            opacity: 0.7;
        }

        .drop-zoon__loading-text3 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            color: var(--clr-light-blue);
            z-index: 10;
        }

        .drop-zoon__preview-image3 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 0.3125rem;
            border-radius: 10px;
            display: none;
            z-index: 1000;
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon3:hover .drop-zoon__preview-image3 {
            opacity: 0.8;
        }

        .drop-zoon__file-input3 {
            display: none;
        }

        /* (drop-zoon--over) Modifier Class */
        .drop-zoon--over3 {
            border-color: var(--clr-blue);
        }

        .drop-zoon--over3 .drop-zoon__icon3,
        .drop-zoon--over3 .drop-zoon__paragraph3 {
            opacity: 0.7;
        }

        /* (drop-zoon--over) Modifier Class */

        .drop-zoon--Uploaded3 .drop-zoon__icon3,
        .drop-zoon--Uploaded3 .drop-zoon__paragraph3 {
            display: none;
        }

        /* File Details Area */
        .upload-area__file-details3 {
            height: 0;
            visibility: hidden;
            opacity: 0;
            text-align: left;
            transition: none 500ms ease-in-out;
            transition-property: opacity, visibility;
            transition-delay: 500ms;
        }

        /* (duploaded-file--open) Modifier Class */
        .file-details--open3 {
            height: auto;
            visibility: visible;
            opacity: 1;
        }

        .file-details__title3 {
            font-size: 1rem;
            font-weight: 500;
            color: var(--clr-light-gray);
            margin-top: 5px;
        }

        /* Uploaded File */
        .uploaded-file3 {
            display: flex;
            align-items: center;
            padding: 0.625rem 0;
            visibility: hidden;
            opacity: 0;
            transition: none 500ms ease-in-out;
            transition-property: visibility, opacity;
        }

        /* (duploaded-file--open3 Modifier Class */
        .uploaded-file--open3 {
            visibility: visible;
            opacity: 1;
        }

        .uploaded-file__icon-container3 {
            position: relative;
            margin-right: 0.3125rem;
        }

        .uploaded-file__icon3 {
            font-size: 3.4375rem;
            color: var(--clr-blue);
        }

        .uploaded-file__icon-text3 {
            position: absolute;
            top: 1.5625rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.9375rem;
            font-weight: 500;
            color: var(--clr-white);
        }

        .uploaded-file__info3 {
            position: relative;
            top: 0rem;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .uploaded-file__info3:before,
        .uploaded-file__info3:after {
            content: '';
            position: absolute;
            bottom: -0.9375rem;
            width: 0;
            height: 0.5rem;
            background-color: #ebf2ff;
            border-radius: 0.625rem;
        }

        .uploaded-file__info3:before {
            width: 100%;
        }

        .uploaded-file__info3:after {
            width: 100%;
            background-color: #0054A6;
        }

        /* Progress Animation */
        .uploaded-file__info-active3::after {
            animation: progressMove2 800ms ease-in-out;
            animation-delay: 300ms;
        }

        @keyframes progressMove3 {
            from {
                width: 0%;
                background-color: transparent;
            }

            to {
                width: 100%;
                background-color: var(--clr-blue);
            }
        }

        .uploaded-file__name3 {
            width: 100%;
            max-width: 6.25rem;
            /* 100px */
            display: inline-block;
            font-size: 1rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .uploaded-file__counter3 {
            font-size: 1rem;
            color: var(--clr-light-gray);
        }
    </style>



{{-- @dd($aadhar_pan); --}}
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-7" style="margin: 7rem 0px;">
                    <div class="card" style="border-radius: 30px">
                        <div class="card-header">

                            <p class="text-uppercase text-secondary"> <i
                                    class="fa-solid fa-fingerprint mx-3 text-danger"
                                    style="font-size: 2rem;"></i>aadhar & pan verification</p>

                        </div>
                        <div class="card-body" style="margin-top: -2rem;">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <!-- <img src="/assets/img/bankimg.png" class="bankimg"> -->
                            </div>
                            <form class="`" action="{{ route('user.add_adhar_pan') }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="name" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">Aadhar No</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i
                                                    class="fa-regular fa-id-card"></i></span>
                                                    {{-- @dd($aadhar_pan->aadhar_no); --}}
                                            <input type="number" name ="aadharno"  id ="aadharno"  class="form-control"
                                                value="{{ @$aadhar_pan->aadhar_no ? $aadhar_pan->aadhar_no : '' }}"
                                                placeholder="Enter Your 16 Digit Aadhar No" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="uploadArea" class="upload-area">
                                        <!-- Header -->

                                        <div class="upload-area__header">
                                            <p class="upload-area__paragraph">
                                                Aadhar Front Image
                                                <strong class="upload-area__tooltip">

                                                    <span class="upload-area__tooltip-data"></span>
                                                    <!-- Data Will be Comes From Js -->
                                                </strong>
                                            </p>
                                        </div>
                                        <!-- End Header -->

                                        <!-- Drop Zoon -->
                                        <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                                            <span class="drop-zoon__icon">
                                                <i class="fa-regular fa-file-image"
                                                    style="font-size: 3rem; color:#3333 "></i>
                                            </span>
                                            <p class="drop-zoon__paragraph">Click to Upload your Aadhar Front image</p>
                                            <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
                                            <img src="{{ asset('uploads/aadhar_pan/' . @$aadhar_pan->aadhar_front_page) }}" alt="Preview Image" id="previewImage"
                                                class="drop-zoon__preview-image" draggable="false">
                                            <input type="file" id="fileInput" name="aadhar_front_page" class="drop-zoon__file-input"
                                                accept="image/*">
                                        </div>
                                        <!-- End Drop Zoon -->

                                        <!-- File Details -->
                                        <div id="fileDetails" class="upload-area__file-details file-details">
                                            <h3 class="file-details__title">Uploaded File</h3>

                                            <div id="uploadedFile" class="uploaded-file">
                                                <div class="uploaded-file__icon-container">
                                                    <i class='bx bxs-file-blank uploaded-file__icon'></i>
                                                    <span class="uploaded-file__icon-text"></span>
                                                    <!-- Data Will be Comes From Js -->
                                                </div>

                                                <div id="uploadedFileInfo" class="uploaded-file__info">
                                                    <span class="uploaded-file__name">Proejct 1</span>
                                                    <span class="uploaded-file__counter">0%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End File Details -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="uploadArea2" class="upload-area2">
                                        <!-- Header -->

                                        <div class="upload-area__header2">
                                            <p class="upload-area__paragraph2">
                                                Aadhar Back image
                                                <strong class="upload-area__tooltip2">

                                                    <span class="upload-area__tooltip-data2"></span>
                                                    <!-- Data Will be Comes From Js -->
                                                </strong>
                                            </p>
                                        </div>
                                        <!-- End Header -->

                                        <!-- Drop Zoon -->
                                        <div id="dropZoon2" class="upload-area__drop-zoon2 drop-zoon2">
                                            <span class="yetho">
                                                <i class="fa-regular fa-file-image"
                                                    style="font-size: 3rem; color:#3333 "></i>
                                            </span>
                                            <p class="drop-zoon__paragraph2">Click to Upload your Aadhar Back image</p>
                                            <span id="loadingText2" class="drop-zoon__loading-text2">Please
                                                Wait</span>
                                            <img src="{{ asset('uploads/aadhar_pan/' . @$aadhar_pan->aadhar_back_page) }}" alt="Preview Image2" id="previewImage2"
                                                class="drop-zoon__preview-image2" draggable="false">
                                            <input type="file" id="fileInput2" name="aadhar_back_page" class="drop-zoon__file-input2"
                                                accept="image/*">
                                        </div>
                                        <!-- End Drop Zoon -->

                                        <!-- File Details -->
                                        <div id="fileDetails2" class="upload-area__file-details2 file-details2">
                                            <h3 class="file-details__title2">Uploaded File</h3>

                                            <div id="uploadedFile2" class="uploaded-file2">
                                                <div class="uploaded-file__icon-container2">
                                                    <i class='bx bxs-file-blank uploaded-file__icon2'></i>
                                                    <span class="uploaded-file__icon-text2"></span>
                                                </div>

                                                <div id="uploadedFileInfo2" class="uploaded-file__info2">
                                                    <span class="uploaded-file__name2">Proejct 1</span>
                                                    <span class="uploaded-file__counter2">0%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End File Details -->
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="name" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">PAN No</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i
                                                    class="fa-regular fa-id-card"></i></span>
                                            <input type="text" name ="panno" id ="panno" value="{{ @$aadhar_pan->pan_no ? $aadhar_pan->pan_no : '' }}" class="form-control"
                                                placeholder="Enter Your 10 Digit PAN No" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-md-12">
                                        <div id="uploadArea3" class="upload-area3">
                                            <!-- Header -->
                                            <div class="upload-area__header3">
                                                <p class="upload-area__paragraph3">
                                                    PAN Image
                                                    <strong class="upload-area__tooltip3">

                                                        <span class="upload-area__tooltip-data3"></span>
                                                        <!-- Data Will be Comes From Js -->
                                                    </strong>
                                                </p>
                                            </div>
                                            <!-- End Header -->

                                            <!-- Drop Zoon -->
                                            <div id="dropZoon3" class="upload-area__drop-zoon2 drop-zoon3">
                                                <span class="yetho">
                                                    <i class="fa-regular fa-file-image"
                                                        style="font-size: 3rem; color:#3333 "></i>
                                                </span>
                                                <p class="drop-zoon__paragraph3">Click to Upload Your PAN Image</p>
                                                <span id="loadingText3" class="drop-zoon__loading-text3">Please
                                                    Wait</span>
                                                <img src="{{ asset('uploads/aadhar_pan/' . @$aadhar_pan->pan_image) }}" alt="Preview Image3" id="previewImage3"
                                                    class="drop-zoon__preview-image3" draggable="false">
                                                <input type="file" id="fileInput3" name="pan_image" class="drop-zoon__file-input3"
                                                    accept="image/*">
                                            </div>
                                            <!-- End Drop Zoon -->

                                            <!-- File Details -->
                                            <div id="fileDetails3" class="upload-area__file-details3 file-details3">
                                                <h3 class="file-details__title3">Uploaded File</h3>

                                                <div id="uploadedFile3" class="uploaded-file3">
                                                    <div class="uploaded-file__icon-container3">
                                                        <i class='bx bxs-file-blank uploaded-file__icon3'></i>
                                                        <span class="uploaded-file__icon-text3"></span>
                                                    </div>

                                                    <div id="uploadedFileInfo3" class="uploaded-file__info3">
                                                        <span class="uploaded-file__name3">Proejct 1</span>
                                                        <span class="uploaded-file__counter3">0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End File Details -->
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-lg-6 " style="margin-top: 3.7rem;">
                                    <div class="card ">
                                        <div class="card-body" style="max-height: 200px; overflow-y: scroll;">
                                        uploading Aadhar and PAN numbers along with images serves as a crucial verification step to ensure the authenticity and credibility of sellers and their products. Aadhar and PAN numbers act as unique identifiers, allowing us to establish a secure and reliable connection between the seller and their financial records. By collecting these details, we can verify the seller's identity, validate their legal status, and mitigate the risk of fraudulent activities. Additionally, requesting images of relevant documents enhances transparency and further reinforces trustworthiness in the selling process, assuring buyers of the legitimacy of the products they intend to purchase. Through this comprehensive verification process, we prioritize the safety and satisfaction of both buyers and sellers, fostering a trustworthy marketplace environment.
                                        </div>
                                    </div>
                                    </div> -->
                            </div>
                            <button class="btn btn-primary text-uppercase float-end mt-4" type="">next</button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </script>
        <script>
            // Design By
            // - https://dribbble.com/shots/13992184-File-Uploader-Drag-Drop

            // Select Upload-Area
            const uploadArea = document.querySelector('#uploadArea')

            // Select Drop-Zoon Area
            const dropZoon = document.querySelector('#dropZoon');

            // Loading Text
            const loadingText = document.querySelector('#loadingText');

            // Slect File Input
            const fileInput = document.querySelector('#fileInput');

            // Select Preview Image
            const previewImage = document.querySelector('#previewImage');
          //  console.log(previewImage)

            // File-Details Area
            const fileDetails = document.querySelector('#fileDetails');

            // Uploaded File
            const uploadedFile = document.querySelector('#uploadedFile');

            // Uploaded File Info
            const uploadedFileInfo = document.querySelector('#uploadedFileInfo');

            // Uploaded File  Name
            const uploadedFileName = document.querySelector('.uploaded-file__name');

            // Uploaded File Icon
            const uploadedFileIconText = document.querySelector('.uploaded-file__icon-text');

            // Uploaded File Counter
            const uploadedFileCounter = document.querySelector('.uploaded-file__counter');

            // ToolTip Data
            const toolTipData = document.querySelector('.upload-area__tooltip-data');

            // Images Types
            const imagesTypes = [
                "jpeg",
                "png",
                "svg",
                "gif"
            ];

            // Append Images Types Array Inisde Tooltip Data
            toolTipData.innerHTML = [...imagesTypes].join(', .');

            // When (drop-zoon) has (dragover) Event
            dropZoon.addEventListener('dragover', function(event) {
                // Prevent Default Behavior
                event.preventDefault();

                // Add Class (drop-zoon--over) On (drop-zoon)
                dropZoon.classList.add('drop-zoon--over');
            });

            // When (drop-zoon) has (dragleave) Event
            dropZoon.addEventListener('dragleave', function(event) {
                // Remove Class (drop-zoon--over) from (drop-zoon)
                dropZoon.classList.remove('drop-zoon--over');
            });

            // When (drop-zoon) has (drop) Event
            dropZoon.addEventListener('drop', function(event) {
                // Prevent Default Behavior
                event.preventDefault();

                // Remove Class (drop-zoon--over) from (drop-zoon)
                dropZoon.classList.remove('drop-zoon--over');

                // Select The Dropped File
                const file = event.dataTransfer.files[0];

                // Call Function uploadFile(), And Send To Her The Dropped File :)
                uploadFile(file);
            });

            // When (drop-zoon) has (click) Event
            dropZoon.addEventListener('click', function(event) {
                // Click The (fileInput)
                fileInput.click();
            });

            // When (fileInput) has (change) Event
            fileInput.addEventListener('change', function(event) {
                // Select The Chosen File
                const file = event.target.files[0];

                // Call Function uploadFile(), And Send To Her The Chosen File :)
                if (file) {
                 // If a file is selected, call the uploadFile function with the chosen file
               uploadFile(file);
              } else {
                // If no file is selected, display the old image

                // Replace 'oldImageUrl' with the URL of the old image
                const previewImage = document.getElementById('previewImage');
                        console.log(previewImage);
                // const oldImageUrl = "{{ asset('uploads/aadhar_pan/' . @$aadhar_pan->aadhar_front_page) }}";

                // Set the src attribute of the previewImage element to the old image URL
                previewImage.setAttribute('src', oldImageUrl);
            }
            });

            // Upload File Function
            function uploadFile(file) {
                // FileReader()
                const fileReader = new FileReader();
                // console.log(fileReader)
                // File Type
                const fileType = file.type;
                // File Size
                const fileSize = file.size;

                // If File Is Passed from the (File Validation) Function
                if (fileValidate(fileType, fileSize)) {
                    // Add Class (drop-zoon--Uploaded) on (drop-zoon)
                    dropZoon.classList.add('drop-zoon--Uploaded');

                    // Show Loading-text
                    loadingText.style.display = "block";
                    // Hide Preview Image
                    previewImage.style.display = 'none';

                    // Remove Class (uploaded-file--open) From (uploadedFile)
                    uploadedFile.classList.remove('uploaded-file--open');
                    // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
                    uploadedFileInfo.classList.remove('uploaded-file__info--active');

                    // After File Reader Loaded
                    fileReader.addEventListener('load', function() {
                        // After Half Second
                        setTimeout(function() {
                            // Add Class (upload-area--open) On (uploadArea)
                            uploadArea.classList.add('upload-area--open');

                            // Hide Loading-text (please-wait) Element
                            loadingText.style.display = "none";
                            // Show Preview Image
                            previewImage.style.display = 'block';

                            // Add Class (file-details--open) On (fileDetails)
                            fileDetails.classList.add('file-details--open');
                            // Add Class (uploaded-file--open) On (uploadedFile)
                            uploadedFile.classList.add('uploaded-file--open');
                            // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
                            uploadedFileInfo.classList.add('uploaded-file__info--active');
                        }, 500); // 0.5s

                        // Add The (fileReader) Result Inside (previewImage) Source
                        const previewImage = document.getElementById('previewImage');
                        // console.log(previewImage);
                        // Get the src attribute value
                        const srcValue = previewImage.getAttribute('src');

                        // Log the src attribute value


                        previewImage.setAttribute('src', fileReader.result);

                        // Add File Name Inside Uploaded File Name
                        uploadedFileName.innerHTML = file.name;

                        // Call Function progressMove();
                        progressMove();
                    });

                    // Read (file) As Data Url
                    fileReader.readAsDataURL(file);
                } else { // Else

                    this; // (this) Represent The fileValidate(fileType, fileSize) Function

                };
            };

            // Progress Counter Increase Function
            function progressMove() {
                // Counter Start
                let counter = 0;

                // After 600ms
                setTimeout(() => {
                    // Every 100ms
                    let counterIncrease = setInterval(() => {
                        // If (counter) is equle 100
                        if (counter === 100) {
                            // Stop (Counter Increase)
                            clearInterval(counterIncrease);
                        } else { // Else
                            // plus 10 on counter
                            counter = counter + 10;
                            // add (counter) vlaue inisde (uploadedFileCounter)
                            uploadedFileCounter.innerHTML = `${counter}%`
                        }
                    }, 100);
                }, 600);
            };


            // Simple File Validate Function
            function fileValidate(fileType, fileSize) {
                // File Type Validation
                let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

                // If The Uploaded File Type Is 'jpeg'
                if (isImage[0] === 'jpeg') {
                    // Add Inisde (uploadedFileIconText) The (jpg) Value
                    uploadedFileIconText.innerHTML = 'jpg';
                } else { // else
                    // Add Inisde (uploadedFileIconText) The Uploaded File Type
                    uploadedFileIconText.innerHTML = isImage[0];
                };

                // If The Uploaded File Is An Image
                if (isImage.length !== 0) {
                    // Check, If File Size Is 2MB or Less
                    if (fileSize <= 2000000) { // 2MB :)
                        return true;
                    } else { // Else File Size
                        return alert('Please Your File Should be 2 Megabytes or Less');
                    };
                } else { // Else File Type
                    return alert('Please make sure to upload An Image File Type');
                };
            };

            // :)
        </script>


        <script>
            // Design By
            // - https://dribbble.com/shots/13992184-File-Uploader-Drag-Drop

            // Select Upload-Area
            const uploadArea2 = document.querySelector('#uploadArea2')

            // Select Drop-Zoon Area
            const dropZoon2 = document.querySelector('#dropZoon2');

            // Loading Text
            const loadingText2 = document.querySelector('#loadingText2');

            // Slect File Input
            const fileInput2 = document.querySelector('#fileInput2');

            // Select Preview Image
            const previewImage2 = document.querySelector('#previewImage2');

            // File-Details Area
            const fileDetails2 = document.querySelector('#fileDetails2');

            // Uploaded File
            const uploadedFile2 = document.querySelector('#uploadedFile2');

            // Uploaded File Info
            const uploadedFileInfo2 = document.querySelector('#uploadedFileInfo2');

            // Uploaded File  Name
            const uploadedFileName2 = document.querySelector('.uploaded-file__name2');

            // Uploaded File Icon
            const uploadedFileIconText2 = document.querySelector('.uploaded-file__icon-text2');

            // Uploaded File Counter
            const uploadedFileCounter2 = document.querySelector('.uploaded-file__counter2');

            // ToolTip Data
            const toolTipData2 = document.querySelector('.upload-area__tooltip-data2');

            // Images Types
            const imagesTypes2 = [
                "jpeg",
                "png",
                "svg",
                "gif"
            ];

            // Append Images Types Array Inisde Tooltip Data
            toolTipData2.innerHTML = [...imagesTypes2].join(', .');

            // When (drop-zoon) has (dragover) Event
            dropZoon2.addEventListener('dragover', function(event) {
                // Prevent Default Behavior
                event.preventDefault();

                // Add Class (drop-zoon--over) On (drop-zoon)
                dropZoon2.classList.add('drop-zoon--over2');
            });

            // When (drop-zoon) has (dragleave) Event
            dropZoon2.addEventListener('dragleave', function(event) {
                // Remove Class (drop-zoon--over) from (drop-zoon)
                dropZoon2.classList.remove('drop-zoon--over2');
            });

            // When (drop-zoon) has (drop) Event
            dropZoon2.addEventListener('drop', function(event) {
                // Prevent Default Behavior
                event.preventDefault();

                // Remove Class (drop-zoon--over) from (drop-zoon)
                dropZoon2.classList.remove('drop-zoon--over2');

                // Select The Dropped File
                const file = event.dataTransfer.files[0];

                // Call Function uploadFile(), And Send To Her The Dropped File :)
                uploadFile2(file);
            });

            // When (drop-zoon) has (click) Event
            dropZoon2.addEventListener('click', function(event) {
                // Click The (fileInput)
                fileInput2.click();
            });

            // When (fileInput) has (change) Event
            fileInput2.addEventListener('change', function(event) {
                // Select The Chosen File
                const file = event.target.files[0];

                // Call Function uploadFile(), And Send To Her The Chosen File :)
                uploadFile2(file);
            });

            // Upload File Function
            function uploadFile2(file) {
                // FileReader()
                const fileReader = new FileReader();
                // File Type
                const fileType = file.type;
                // File Size
                const fileSize = file.size;

                // If File Is Passed from the (File Validation) Function
                if (fileValidate(fileType, fileSize)) {
                    // Add Class (drop-zoon--Uploaded2) on (drop-zoon)
                    dropZoon2.classList.add('drop-zoon--Uploaded2');

                    // Show Loading-text
                    loadingText2.style.display = "block";
                    // Hide Preview Image
                    previewImage2.style.display = 'none';

                    // Remove Class (uploaded-file--open) From (uploadedFile)
                    uploadedFile2.classList.remove('uploaded-file--open2');
                    // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
                    uploadedFileInfo2.classList.remove('uploaded-file__info2--active');

                    // After File Reader Loaded
                    fileReader.addEventListener('load', function() {
                        // After Half Second
                        setTimeout(function() {
                            // Add Class (upload-area--open) On (uploadArea)
                            uploadArea2.classList.add('upload-area--open2');

                            // Hide Loading-text (please-wait) Element
                            loadingText2.style.display = "none";
                            // Show Preview Image
                            previewImage2.style.display = 'block';

                            // Add Class (file-details--open) On (fileDetails)
                            fileDetails2.classList.add('file-details--open2');
                            // Add Class (uploaded-file--open) On (uploadedFile)
                            uploadedFile2.classList.add('uploaded-file--open2');
                            // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
                            uploadedFileInfo2.classList.add('uploaded-file__info2--active');
                        }, 500); // 0.5s
                        console.log(fileReader.result);
                        const imageUrl = "{{ asset('uploads/aadhar_pan/' . @$aadhar_pan->aadhar_back_page) }}";
                        // Add The (fileReader) Result Inside (previewImage) Source
                        previewImage2.setAttribute('src', imageUrl);

                        // Add File Name Inside Uploaded File Name
                        uploadedFileName2.innerHTML = file.name;

                        // Call Function progressMove();
                        progressMove2();
                    });

                    // Read (file) As Data Url
                    fileReader.readAsDataURL(file);
                } else { // Else

                    this; // (this) Represent The fileValidate(fileType, fileSize) Function

                };
            };

            // Progress Counter Increase Function
            function progressMove2() {
                // Counter Start
                let counter = 0;

                // After 600ms
                setTimeout(() => {
                    // Every 100ms
                    let counterIncrease = setInterval(() => {
                        // If (counter) is equle 100
                        if (counter === 100) {
                            // Stop (Counter Increase)
                            clearInterval(counterIncrease);
                        } else { // Else
                            // plus 10 on counter
                            counter = counter + 10;
                            // add (counter) vlaue inisde (uploadedFileCounter)
                            uploadedFileCounter2.innerHTML = `${counter}%`
                        }
                    }, 100);
                }, 600);
            };


            // Simple File Validate Function
            function fileValidate(fileType, fileSize) {
                // File Type Validation
                let isImage = imagesTypes2.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

                // If The Uploaded File Type Is 'jpeg'
                if (isImage[0] === 'jpeg') {
                    // Add Inisde (uploadedFileIconText) The (jpg) Value
                    uploadedFileIconText2.innerHTML = '';
                } else { // else
                    // Add Inisde (uploadedFileIconText) The Uploaded File Type
                    uploadedFileIconText2.innerHTML = isImage[0];
                };

                // If The Uploaded File Is An Image
                if (isImage.length !== 0) {
                    // Check, If File Size Is 2MB or Less
                    if (fileSize <= 2000000) { // 2MB :)
                        return true;
                    } else { // Else File Size
                        return alert('Please Your File Should be 2 Megabytes or Less');
                    };
                } else { // Else File Type
                    return alert('Please make sure to upload An Image File Type');
                };
            };

            // :)
        </script>
        <!-- pan Script -->
        <script>
            // Design By
            // - https://dribbble.com/shots/13992184-File-Uploader-Drag-Drop

            // Select Upload-Area
            const uploadArea3 = document.querySelector('#uploadArea3')

            // Select Drop-Zoon Area
            const dropZoon3 = document.querySelector('#dropZoon3');

            // Loading Text
            const loadingText3 = document.querySelector('#loadingText3');

            // Slect File Input
            const fileInput3 = document.querySelector('#fileInput3');

            // Select Preview Image
            const previewImage3 = document.querySelector('#previewImage3');

            // File-Details Area
            const fileDetails3 = document.querySelector('#fileDetails3');

            // Uploaded File
            const uploadedFile3 = document.querySelector('#uploadedFile3');

            // Uploaded File Info
            const uploadedFileInfo3 = document.querySelector('#uploadedFileInfo3');

            // Uploaded File  Name
            const uploadedFileName3 = document.querySelector('.uploaded-file__name3');

            // Uploaded File Icon
            const uploadedFileIconText3 = document.querySelector('.uploaded-file__icon-text3');

            // Uploaded File Counter
            const uploadedFileCounter3 = document.querySelector('.uploaded-file__counter3');

            // ToolTip Data
            const toolTipData3 = document.querySelector('.upload-area__tooltip-data3');

            // Images Types
            const imagesTypes3 = [
                "jpeg",
                "png",
                "svg",
                "gif"
            ];

            // Append Images Types Array Inisde Tooltip Data
            toolTipData3.innerHTML = [...imagesTypes3].join(', .');

            // When (drop-zoon) has (dragover) Event
            dropZoon3.addEventListener('dragover', function(event) {
                // Prevent Default Behavior
                event.preventDefault();

                // Add Class (drop-zoon--over) On (drop-zoon)
                dropZoon3.classList.add('drop-zoon--over3');
            });

            // When (drop-zoon) has (dragleave) Event
            dropZoon3.addEventListener('dragleave', function(event) {
                // Remove Class (drop-zoon--over) from (drop-zoon)
                dropZoon3.classList.remove('drop-zoon--over3');
            });

            // When (drop-zoon) has (drop) Event
            dropZoon3.addEventListener('drop', function(event) {
                // Prevent Default Behavior
                event.preventDefault();

                // Remove Class (drop-zoon--over) from (drop-zoon)
                dropZoon3.classList.remove('drop-zoon--over2');

                // Select The Dropped File
                const file = event.dataTransfer.files[0];

                // Call Function uploadFile(), And Send To Her The Dropped File :)
                uploadFile3(file);
            });

            // When (drop-zoon) has (click) Event
            dropZoon3.addEventListener('click', function(event) {
                // Click The (fileInput)
                fileInput3.click();
            });

            // When (fileInput) has (change) Event
            fileInput3.addEventListener('change', function(event) {
                // Select The Chosen File
                const file = event.target.files[0];

                // Call Function uploadFile(), And Send To Her The Chosen File :)
                uploadFile3(file);
            });

            // Upload File Function
            function uploadFile3(file) {
                // FileReader()
                const fileReader = new FileReader();
                // File Type
                const fileType = file.type;
                // File Size
                const fileSize = file.size;

                // If File Is Passed from the (File Validation) Function
                if (fileValidate(fileType, fileSize)) {
                    // Add Class (drop-zoon--Uploaded2) on (drop-zoon)
                    dropZoon3.classList.add('drop-zoon--Uploaded3');

                    // Show Loading-text
                    loadingText3.style.display = "block";
                    // Hide Preview Image
                    previewImage3.style.display = 'none';

                    // Remove Class (uploaded-file--open) From (uploadedFile)
                    uploadedFile3.classList.remove('uploaded-file--open3');
                    // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
                    uploadedFileInfo3.classList.remove('uploaded-file__info3--active');

                    // After File Reader Loaded
                    fileReader.addEventListener('load', function() {
                        // After Half Second
                        setTimeout(function() {
                            // Add Class (upload-area--open) On (uploadArea)
                            uploadArea3.classList.add('upload-area--open3');

                            // Hide Loading-text (please-wait) Element
                            loadingText3.style.display = "none";
                            // Show Preview Image
                            previewImage3.style.display = 'block';

                            // Add Class (file-details--open) On (fileDetails)
                            fileDetails3.classList.add('file-details--open3');
                            // Add Class (uploaded-file--open) On (uploadedFile)
                            uploadedFile3.classList.add('uploaded-file--open3');
                            // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
                            uploadedFileInfo3.classList.add('uploaded-file__info3--active');
                        }, 500); // 0.5s

                        // Add The (fileReader) Result Inside (previewImage) Source
                        previewImage3.setAttribute('src', fileReader.result);

                        // Add File Name Inside Uploaded File Name
                        uploadedFileName3.innerHTML = file.name;

                        // Call Function progressMove();
                        progressMove3();
                    });

                    // Read (file) As Data Url
                    fileReader.readAsDataURL(file);
                } else { // Else

                    this; // (this) Represent The fileValidate(fileType, fileSize) Function

                };
            };

            // Progress Counter Increase Function
            function progressMove3() {
                // Counter Start
                let counter = 0;

                // After 600ms
                setTimeout(() => {
                    // Every 100ms
                    let counterIncrease = setInterval(() => {
                        // If (counter) is equle 100
                        if (counter === 100) {
                            // Stop (Counter Increase)
                            clearInterval(counterIncrease);
                        } else { // Else
                            // plus 10 on counter
                            counter = counter + 10;
                            // add (counter) vlaue inisde (uploadedFileCounter)
                            uploadedFileCounter2.innerHTML = `${counter}%`
                        }
                    }, 100);
                }, 600);
            };


            // Simple File Validate Function
            function fileValidate(fileType, fileSize) {
                // File Type Validation
                let isImage = imagesTypes3.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

                // If The Uploaded File Type Is 'jpeg'
                if (isImage[0] === 'jpeg') {
                    // Add Inisde (uploadedFileIconText) The (jpg) Value
                    uploadedFileIconText3.innerHTML = '';
                } else { // else
                    // Add Inisde (uploadedFileIconText) The Uploaded File Type
                    uploadedFileIconText3.innerHTML = isImage[0];
                };

                // If The Uploaded File Is An Image
                if (isImage.length !== 0) {
                    // Check, If File Size Is 2MB or Less
                    if (fileSize <= 2000000) { // 2MB :)
                        return true;
                    } else { // Else File Size
                        return alert('Please Your File Should be 2 Megabytes or Less');
                    };
                } else { // Else File Type
                    return alert('Please make sure to upload An Image File Type');
                };
            };

            // :)
        </script>

@endsection
