@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Višekoraci Prijava - Stranice')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-auth-main.js?v=1.0')}}"></script>
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">

        <!-- Left Text -->
        <div
            class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5 auth-cover-bg-color position-relative auth-multisteps-bg-height">
            <img src="{{ asset('assets/img/illustrations/auth-register-multisteps-illustration.png') }}"
                alt="auth-register-multisteps" class="img-fluid" width="280">

            <img src="{{ asset('assets/img/illustrations/bg-shape-image-'.$configData['style'].'.png') }}"
                alt="auth-register-multisteps" class="platform-bg"
                data-app-light-img="illustrations/bg-shape-image-light.png"
                data-app-dark-img="illustrations/bg-shape-image-dark.png">
        </div>
        <!-- /Left Text -->

        <!--  Multi Steps Registration -->
        <div class="d-flex col-lg-8 align-items-center justify-content-center p-sm-5 p-3">
            <div class="">
                <div id="multiStepsValidation" class="bs-stepper shadow-none">
                    <div class="bs-stepper-header border-bottom-0">
                        <div class="step" data-target="#accountDetailsValidation">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="ti ti-smart-home ti-sm"></i></span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Račun</span>
                                    <span class="bs-stepper-subtitle">Podaci o računu</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="ti ti-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#clinicInfoValidation">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="ti ti-home ti-sm"></i></span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Ordinacija/Klinika</span>
                                    <span class="bs-stepper-subtitle">Informacije o ustanovi</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="ti ti-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#personalInfoValidation">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="ti ti-users ti-sm"></i></span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Vlasnik</span>
                                    <span class="bs-stepper-subtitle">Informacije o vlasniku</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="ti ti-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#billingLinksValidation">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="ti ti-file-text ti-sm"></i></span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Plaćanje</span>
                                    <span class="bs-stepper-subtitle">Podaci o plaćanju</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form id="multiStepsForm" onSubmit="return false">
                            <!-- Account Details -->
                            <div id="accountDetailsValidation" class="content">
                                <div class="content-header mb-4">
                                    <h3 class="mb-1">Podaci o računu</h3>
                                    <p>Unesite detalje vašeg računa</p>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsUsername">Korisničko ime</label>
                                        <input type="text" name="multiStepsUsername" id="multiStepsUsername"
                                            class="form-control" placeholder="johndoe" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsEmail">Email</label>
                                        <input type="email" name="multiStepsEmail" id="multiStepsEmail"
                                            class="form-control" placeholder="john.doe@email.com"
                                            aria-label="john.doe" />
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="multiStepsPass">Lozinka</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="multiStepsPass" name="multiStepsPass"
                                                class="form-control"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="multiStepsPass2" />
                                            <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i
                                                    class="ti ti-eye-off"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="multiStepsConfirmPass">Potvrdite lozinku</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="multiStepsConfirmPass"
                                                name="multiStepsConfirmPass" class="form-control"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="multiStepsConfirmPass2" />
                                            <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i
                                                    class="ti ti-eye-off"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="multiStepsURL">Profilni link</label>
                                        <input type="text" name="multiStepsURL" id="multiStepsURL" class="form-control"
                                            placeholder="johndoe/profile" aria-label="johndoe" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-between mt-4">
                                        <button class="btn btn-label-secondary btn-prev" disabled> <i
                                                class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Prethodno</span>
                                        </button>
                                        <button class="btn btn-primary btn-next"> <span
                                                class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Sljedeće</span>
                                            <i class="ti ti-arrow-right ti-xs"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Clinic Info -->
                            <div id="clinicInfoValidation" class="content">
                                <div class="content-header mb-4">
                                    <h3 class="mb-1">Informacije o klinici</h3>
                                    <p>Unesite informacije o vašoj klinici</p>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="clinicName">Naziv klinike</label>
                                        <input type="text" id="clinicName" name="clinicName" class="form-control"
                                            placeholder="Naziv klinike" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="clinicAddress">Adresa klinike</label>
                                        <input type="text" id="clinicAddress" name="clinicAddress" class="form-control"
                                            placeholder="Adresa klinike" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsMobile">Mobilni</label>
                                        <div class="input-group">
                                            <span class="input-group-text">US (+1)</span>
                                            <input type="text" id="multiStepsMobile" name="multiStepsMobile"
                                                class="form-control multi-steps-mobile" placeholder="202 555 0111" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsPincode">Poštanski broj</label>
                                        <input type="text" id="multiStepsPincode" name="multiStepsPincode"
                                            class="form-control multi-steps-pincode" placeholder="Poštanski broj"
                                            maxlength="6" />
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="multiStepsAddress">Adresa</label>
                                        <input type="text" id="multiStepsAddress" name="multiStepsAddress"
                                            class="form-control" placeholder="Adresa" />
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="multiStepsArea">Obilježje</label>
                                        <input type="text" id="multiStepsArea" name="multiStepsArea"
                                            class="form-control" placeholder="Područje/obilježje" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsCity">Grad</label>
                                        <input type="text" id="multiStepsCity" class="form-control"
                                            placeholder="Grad" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsState">Država</label>
                                        <select id="multiStepsState" class="select2 form-select"
                                            data-allow-clear="true">
                                            <option value="">Izaberite</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">Kalifornija</option>
                                            <option value="CO">Kolorado</option>
                                            <option value="CT">Konektikat</option>
                                            <option value="DE">Delaver</option>
                                            <option value="DC">Distrikt Kolumbija</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Džordžija</option>
                                            <option value="HI">Havaji</option>
                                            <option value="ID">Ajdaho</option>
                                            <option value="IL">Ilinois</option>
                                            <option value="IN">Indijana</option>
                                            <option value="IA">Ajova</option>
                                            <option value="KS">Kanzas</option>
                                            <option value="KY">Kentaki</option>
                                            <option value="LA">Luizijana</option>
                                            <option value="ME">Mejn</option>
                                            <option value="MD">Merilend</option>
                                            <option value="MA">Masačusets</option>
                                            <option value="MI">Mišigan</option>
                                            <option value="MN">Minesota</option>
                                            <option value="MS">Misisipi</option>
                                            <option value="MO">Misuri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">Nju Hempšir</option>
                                            <option value="NJ">Nju Džerzi</option>
                                            <option value="NM">Novi Meksiko</option>
                                            <option value="NY">Nju Jork</option>
                                            <option value="NC">Severna Karolina</option>
                                            <option value="ND">Severna Dakota</option>
                                            <option value="OH">Ohajo</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pensilvanija</option>
                                            <option value="RI">Rod Ajland</option>
                                            <option value="SC">Južna Karolina</option>
                                            <option value="SD">Južna Dakota</option>
                                            <option value="TN">Tenesi</option>
                                            <option value="TX">Teksas</option>
                                            <option value="UT">Juta</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virdžinija</option>
                                            <option value="WA">Vašington</option>
                                            <option value="WV">Zapadna Virdžinija</option>
                                            <option value="WI">Viskonsin</option>
                                            <option value="WY">Vajoming</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="clinicPhone">Telefon klinike</label>
                                        <input type="text" id="clinicPhone" name="clinicPhone" class="form-control"
                                            placeholder="Telefon klinike" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="clinicEmail">Email klinike</label>
                                        <input type="email" id="clinicEmail" name="clinicEmail" class="form-control"
                                            placeholder="Email klinike" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="clinicWebsite">Web stranica klinike</label>
                                        <input type="text" id="clinicWebsite" name="clinicWebsite" class="form-control"
                                            placeholder="Web stranica klinike" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="clinicSpecialization">Specijalizacija
                                            klinike</label>
                                        <input type="text" id="clinicSpecialization" name="clinicSpecialization"
                                            class="form-control" placeholder="Specijalizacija klinike" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-between mt-4">
                                        <button class="btn btn-label-secondary btn-prev"> <i
                                                class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Prethodno</span>
                                        </button>
                                        <button class="btn btn-primary btn-next"> <span
                                                class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Sljedeće</span>
                                            <i class="ti ti-arrow-right ti-xs"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personalInfoValidation" class="content">
                                <div class="content-header mb-4">
                                    <h3 class="mb-1">Informacije o vlasniku ordinacije/klinike</h3>
                                    <p>Unesite svoje osobne informacije</p>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsFirstName">Ime</label>
                                        <input type="text" id="multiStepsFirstName" name="multiStepsFirstName"
                                            class="form-control" placeholder="John" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsLastName">Prezime</label>
                                        <input type="text" id="multiStepsLastName" name="multiStepsLastName"
                                            class="form-control" placeholder="Doe" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsMobile">Mobilni</label>
                                        <div class="input-group">
                                            <span class="input-group-text">US (+1)</span>
                                            <input type="text" id="multiStepsMobile2" name="multiStepsMobile2"
                                                class="form-control multi-steps-mobile" placeholder="202 555 0111" />
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-between mt-4">
                                        <button class="btn btn-label-secondary btn-prev"> <i
                                                class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Prethodno</span>
                                        </button>
                                        <button class="btn btn-primary btn-next"> <span
                                                class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Sljedeće</span>
                                            <i class="ti ti-arrow-right ti-xs"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Billing Links -->
                            <div id="billingLinksValidation" class="content">
                                <div class="content-header">
                                    <h3 class="mb-1">Izaberite Plan</h3>
                                    <p>Izaberite plan prema vašim potrebama</p>
                                </div>
                                <!-- Custom plan options -->
                                <div class="row gap-md-0 gap-3 my-4">
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="basicOption">
                                                <span class="custom-option-body">
                                                    <span class="custom-option-title fs-4 mb-1">Osnovni</span>
                                                    <small class="fs-6">Jednostavan početak za startupe i
                                                        studente</small>
                                                    <span class="d-flex justify-content-center">
                                                        <sup class="text-primary fs-6 lh-1 mt-3">$</sup>
                                                        <span class="fw-medium fs-2 text-primary">0</span>
                                                        <sub class="lh-1 fs-6 mt-auto mb-2 text-muted">/mjesec</sub>
                                                    </span>
                                                </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio"
                                                    value="" id="basicOption" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="standardOption">
                                                <span class="custom-option-body">
                                                    <span class="custom-option-title fs-4 mb-1">Standardni</span>
                                                    <small class="fs-6">Za male do srednje tvrtke</small>
                                                    <span class="d-flex justify-content-center">
                                                        <sup class="text-primary fs-6 lh-1 mt-3">$</sup>
                                                        <span class="fw-medium fs-2 text-primary">99</span>
                                                        <sub class="lh-1 fs-6 mt-auto mb-2 text-muted">/mjesec</sub>
                                                    </span>
                                                </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio"
                                                    value="" id="standardOption" checked />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content"
                                                for="enterpriseOption">
                                                <span class="custom-option-body">
                                                    <span class="custom-option-title fs-4 mb-1">Enterprise</span>
                                                    <small class="fs-6">Rješenje za velike tvrtke i organizacije</small>
                                                    <span class="d-flex justify-content-center">
                                                        <sup class="text-primary fs-6 lh-1 mt-3">$</sup>
                                                        <span class="fw-medium fs-2 text-primary">499</span>
                                                        <sub class="lh-1 fs-6 mt-auto mb-2 text-muted">/godina</sub>
                                                    </span>
                                                </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio"
                                                    value="" id="enterpriseOption" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Custom plan options -->
                                <div class="content-header mb-4">
                                    <h3 class="mb-1">Informacije o plaćanju</h3>
                                    <p>Unesite informacije o vašoj kartici</p>
                                </div>
                                <!-- Credit Card Details -->
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label class="form-label w-100" for="multiStepsCard">Broj kartice</label>
                                        <div class="input-group input-group-merge">
                                            <input id="multiStepsCard" class="form-control multi-steps-card"
                                                name="multiStepsCard" type="text" placeholder="1356 3215 6548 7898"
                                                aria-describedby="multiStepsCardImg" />
                                            <span class="input-group-text cursor-pointer" id="multiStepsCardImg"><span
                                                    class="card-type"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="form-label" for="multiStepsName">Ime na kartici</label>
                                        <input type="text" id="multiStepsName" class="form-control"
                                            name="multiStepsName" placeholder="John Doe" />
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <label class="form-label" for="multiStepsExDate">Datum isteka</label>
                                        <input type="text" id="multiStepsExDate"
                                            class="form-control multi-steps-exp-date" name="multiStepsExDate"
                                            placeholder="MM/YY" />
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <label class="form-label" for="multiStepsCvv">CVV kod</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="multiStepsCvv" class="form-control multi-steps-cvv"
                                                name="multiStepsCvv" maxlength="3" placeholder="654" />
                                            <span class="input-group-text cursor-pointer" id="multiStepsCvvHelp"><i
                                                    class="ti ti-help text-muted" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Card Verification Value"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between mt-4">
                                        <button class="btn btn-label-secondary btn-prev"> <i
                                                class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Prethodno</span>
                                        </button>
                                        <button type="submit"
                                            class="btn btn-success btn-next btn-submit">Pošalji</button>
                                    </div>
                                </div>
                                <!--/ Credit Card Details -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Multi Steps Registration -->
    </div>
</div>

<script>
// Check selected custom option
window.Helpers.initCustomOptionCheck();
</script>
@endsection