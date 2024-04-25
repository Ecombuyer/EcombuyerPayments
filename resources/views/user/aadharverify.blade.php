
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
/>
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
-webkit-appearance: none;
margin: 0;
 }
 .bankimg{
    width: 35rem;
    margin-bottom: 2rem;
    filter: drop-shadow(10px 3px 10px rgb(139, 138, 138));
    /* box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px; */
 }
 @media only screen and (max-width: 767px) {
    .bankimg{

    width: 20rem;

 }
}

</style>
<style>
    .upload-area2{
  width: 100%;
  background-color: var(--clr-white);
  /* box-shadow: 0 10px 60px rgb(218, 229, 255); */
  border: none;
  border-radius: 24px;
  padding: 0rem 1.875rem 2rem 1.875rem;
  margin: 0.625rem;
  text-align: center;
  }

  .upload-area--open2 { /* Slid Down Animation */
  animation: slidDown 500ms ease-in-out;
  }

  @keyframes slidDown {
  from {
    height: 28.125rem; /* 450px */
  }

  to {
    height: 35rem; /* 560px */
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
  height: 11.25rem; /* 180px */
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
  max-width: 6.25rem; /* 100px */
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

  .upload-area--open { /* Slid Down Animation */
    animation: slidDown 500ms ease-in-out;
  }

  @keyframes slidDown {
    from {
      height: 28.125rem; /* 450px */
    }

    to {
      height: 35rem; /* 560px */
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
    height: 11.25rem; /* 180px */
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
    max-width: 6.25rem; /* 100px */
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
    .upload-area3{
  width: 100%;
  background-color: var(--clr-white);
  /* box-shadow: 0 10px 60px rgb(218, 229, 255); */
  border: none;
  border-radius: 24px;
  padding: 0rem 1.875rem 2rem 1.875rem;
  margin: 0.625rem;
  text-align: center;
  }

  .upload-area--open3 { /* Slid Down Animation */
  animation: slidDown 500ms ease-in-out;
  }

  @keyframes slidDown {
  from {
    height: 28.125rem; /* 450px */
  }

  to {
    height: 35rem; /* 560px */
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
  height: 11.25rem; /* 180px */
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
  .uploaded-file3{
  display: flex;
  align-items: center;
  padding: 0.625rem 0;
  visibility: hidden;
  opacity: 0;
  transition: none 500ms ease-in-out;
  transition-property: visibility, opacity;
  }

  /* (duploaded-file--open3 Modifier Class */
  .uploaded-file--open3{
  visibility: visible;
  opacity: 1;
  }

  .uploaded-file__icon-container3{
  position: relative;
  margin-right: 0.3125rem;
  }

  .uploaded-file__icon3{
  font-size: 3.4375rem;
  color: var(--clr-blue);
  }

  .uploaded-file__icon-text3{
  position: absolute;
  top: 1.5625rem;
  left: 50%;
  transform: translateX(-50%);
  font-size: 0.9375rem;
  font-weight: 500;
  color: var(--clr-white);
  }

  .uploaded-file__info3{
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

  @keyframes progressMove3{
  from {
    width: 0%;
    background-color: transparent;
  }

  to {
    width: 100%;
    background-color: var(--clr-blue);
  }
  }

  .uploaded-file__name3{
  width: 100%;
  max-width: 6.25rem; /* 100px */
  display: inline-block;
  font-size: 1rem;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  }

  .uploaded-file__counter3{
  font-size: 1rem;
  color: var(--clr-light-gray);
  }
  </style>

</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="../pages/dashboard.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/tables.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/billing.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/virtual-reality.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/rtl.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-up.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="../assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
  </aside>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
      <div class="container-fluid py-1">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
          </ol>
          <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Sayo Kravits
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Public Relations
              </p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container-fluid">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-7"  style="margin: 7rem 0px;">
            <div class="card" style="border-radius: 30px">
              <div class="card-header">

               <p class="text-uppercase text-secondary"> <i class="fa-solid fa-fingerprint mx-3 text-danger" style="font-size: 2rem;"></i>aadhar & pan verification</p>

              </div>
                <div class="card-body"  style="margin-top: -2rem;">
                  <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <!-- <img src="/assets/img/bankimg.png" class="bankimg"> -->
                  </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="name" class="text-sm text-secondary"  style="font-size: 13px; font-weight: 600;">Aadhar No</label>
                            <div class="form-group">
                              <div class="input-group">
                                  <span class="input-group-text" id=""><i class="fa-regular fa-id-card"></i></span>
                                  <input type="number" class="form-control" placeholder="Enter Your 16 Digit Aadhar No" aria-label="Username" aria-describedby="basic-addon1">
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

                                      <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
                                    </strong>
                                  </p>
                                </div>
                                <!-- End Header -->

                                <!-- Drop Zoon -->
                                <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                                  <span class="drop-zoon__icon">
                                    <i class="fa-regular fa-file-image" style="font-size: 3rem; color:#3333 "></i>
                                  </span>
                                  <p class="drop-zoon__paragraph">Click to Upload your Aadhar Front image</p>
                                  <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
                                  <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
                                  <input type="file" id="fileInput" class="drop-zoon__file-input" accept="image/*">
                                </div>
                                <!-- End Drop Zoon -->

                                <!-- File Details -->
                                <div id="fileDetails" class="upload-area__file-details file-details">
                                  <h3 class="file-details__title">Uploaded File</h3>

                                  <div id="uploadedFile" class="uploaded-file">
                                    <div class="uploaded-file__icon-container">
                                      <i class='bx bxs-file-blank uploaded-file__icon'></i>
                                      <span class="uploaded-file__icon-text"></span> <!-- Data Will be Comes From Js -->
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

                                    <span class="upload-area__tooltip-data2"></span> <!-- Data Will be Comes From Js -->
                                  </strong>
                                </p>
                              </div>
                              <!-- End Header -->

                              <!-- Drop Zoon -->
                              <div id="dropZoon2" class="upload-area__drop-zoon2 drop-zoon2">
                                <span class="yetho">
                                  <i class="fa-regular fa-file-image" style="font-size: 3rem; color:#3333 "></i>
                                </span>
                                <p class="drop-zoon__paragraph2">Click to Upload your Aadhar Back image</p>
                                <span id="loadingText2" class="drop-zoon__loading-text2">Please Wait</span>
                                <img src="" alt="Preview Image2" id="previewImage2" class="drop-zoon__preview-image2" draggable="false">
                                <input type="file" id="fileInput2" class="drop-zoon__file-input2" accept="image/*">
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
                        <label for="name" class="text-sm text-secondary"  style="font-size: 13px; font-weight: 600;">PAN No</label>
                        <div class="form-group">
                          <div class="input-group">
                              <span class="input-group-text" id=""><i class="fa-regular fa-id-card"></i></span>
                              <input type="number" class="form-control" placeholder="Enter Your 10 Digit PAN No" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                      </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                      <div class="col-md-8">
                        <div id="uploadArea3" class="upload-area3">
                            <!-- Header -->
                            <div class="upload-area__header3">
                              <p class="upload-area__paragraph3">
                                PAN Image
                                <strong class="upload-area__tooltip3">

                                  <span class="upload-area__tooltip-data3"></span> <!-- Data Will be Comes From Js -->
                                </strong>
                              </p>
                            </div>
                            <!-- End Header -->

                            <!-- Drop Zoon -->
                            <div id="dropZoon3" class="upload-area__drop-zoon2 drop-zoon3">
                              <span class="yetho">
                                <i class="fa-regular fa-file-image" style="font-size: 3rem; color:#3333 "></i>
                              </span>
                              <p class="drop-zoon__paragraph3">Click to Upload Your PAN Image</p>
                              <span id="loadingText3" class="drop-zoon__loading-text3">Please Wait</span>
                              <img src="" alt="Preview Image3" id="previewImage3" class="drop-zoon__preview-image3" draggable="false">
                              <input type="file" id="fileInput3" class="drop-zoon__file-input3" accept="image/*">
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
  dropZoon.addEventListener('dragover', function (event) {
  // Prevent Default Behavior
  event.preventDefault();

  // Add Class (drop-zoon--over) On (drop-zoon)
  dropZoon.classList.add('drop-zoon--over');
  });

  // When (drop-zoon) has (dragleave) Event
  dropZoon.addEventListener('dragleave', function (event) {
  // Remove Class (drop-zoon--over) from (drop-zoon)
  dropZoon.classList.remove('drop-zoon--over');
  });

  // When (drop-zoon) has (drop) Event
  dropZoon.addEventListener('drop', function (event) {
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
  dropZoon.addEventListener('click', function (event) {
  // Click The (fileInput)
  fileInput.click();
  });

  // When (fileInput) has (change) Event
  fileInput.addEventListener('change', function (event) {
  // Select The Chosen File
  const file = event.target.files[0];

  // Call Function uploadFile(), And Send To Her The Chosen File :)
  uploadFile(file);
  });

  // Upload File Function
  function uploadFile(file) {
  // FileReader()
  const fileReader = new FileReader();
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
    fileReader.addEventListener('load', function () {
      // After Half Second
      setTimeout(function () {
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
  dropZoon2.addEventListener('dragover', function (event) {
  // Prevent Default Behavior
  event.preventDefault();

  // Add Class (drop-zoon--over) On (drop-zoon)
  dropZoon2.classList.add('drop-zoon--over2');
  });

  // When (drop-zoon) has (dragleave) Event
  dropZoon2.addEventListener('dragleave', function (event) {
  // Remove Class (drop-zoon--over) from (drop-zoon)
  dropZoon2.classList.remove('drop-zoon--over2');
  });

  // When (drop-zoon) has (drop) Event
  dropZoon2.addEventListener('drop', function (event) {
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
  dropZoon2.addEventListener('click', function (event) {
  // Click The (fileInput)
  fileInput2.click();
  });

  // When (fileInput) has (change) Event
  fileInput2.addEventListener('change', function (event) {
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
  fileReader.addEventListener('load', function () {
    // After Half Second
    setTimeout(function () {
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

    // Add The (fileReader) Result Inside (previewImage) Source
    previewImage2.setAttribute('src', fileReader.result);

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
    dropZoon3.addEventListener('dragover', function (event) {
    // Prevent Default Behavior
    event.preventDefault();

    // Add Class (drop-zoon--over) On (drop-zoon)
    dropZoon3.classList.add('drop-zoon--over3');
    });

    // When (drop-zoon) has (dragleave) Event
    dropZoon3.addEventListener('dragleave', function (event) {
    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon3.classList.remove('drop-zoon--over3');
    });

    // When (drop-zoon) has (drop) Event
    dropZoon3.addEventListener('drop', function (event) {
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
    dropZoon3.addEventListener('click', function (event) {
    // Click The (fileInput)
    fileInput3.click();
    });

    // When (fileInput) has (change) Event
    fileInput3.addEventListener('change', function (event) {
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
    fileReader.addEventListener('load', function () {
      // After Half Second
      setTimeout(function () {
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
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
