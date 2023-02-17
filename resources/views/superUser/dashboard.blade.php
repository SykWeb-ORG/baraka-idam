@extends('layouts.app')

@section('title')
    Dashboard
@endsection
@section('content_page')
    <div class="container-fluid pt-4 px-4">
        <h4 class="mb-3">Dashboard</h4>
        <div class="periode">
            <label for="social-appointment" class="form-label">Date Du Début</label>
            <input type="date" name="social_visite_date" class="date-periode" id="" value="" required>
            <label for="social-appointment" class="form-label">Date de la Fin</label>
            <input type="date" name="social_visite_date" class="date-periode" id="" value="" required>
        </div>
        <div class="statistics-both">
            {{-- Statistiques selon les programmes --}}
            <div class="mb-4">
                <h6 class="mb-3">Statistiques selon les programmes</h6>
                <div class="table-responsive table-height">
                    <table class="table text-start align-middle table-bordered table-hover mb-0" id="tableUser">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">Programme</th>
                                <th>Béneficiaire</th>
                                <th>Pourcentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                            </tr>
                            <tr>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                            </tr>
                            <tr>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                            </tr>
                            <tr>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Statistiques selon les intervenants --}}
            <div class="mb-4">
                <h6 class="mb-3">Statistiques selon les intervenants</h6>
                <div class="table-responsive table-height">
                    <table class="table text-start align-middle table-bordered table-hover mb-0" id="tableUser">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">Intervenant</th>
                                <th>Béneficiaire</th>
                                <th>Pourcentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                            </tr>
                            <tr>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                            </tr>
                            <tr>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                            </tr>
                            <tr>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                                <td>fdfdfd</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="statistics-both">
            {{-- Statistiques selon l'âge --}}
            <div class="mb-4">
                <h6 class="mb-3">Statistiques selon l'âge</h6>
                <!-- BEGIN: Stastics based on age-->
                <div class="graphBox">
                    <div class="box">
                        <canvas id="myChartAge"></canvas>
                    </div>
                </div>
                <!-- END: Stastics based on age -->
            </div>
            {{-- Statistiques selon le genre --}}
            <!-- BEGIN: Stastics based on gender -->
            <div class="mb-4">
                <h6 class="mb-3">Statistiques selon le genre</h6>
                <div class="graphBox">
                    <div class="box">
                        <canvas id="myChartGender"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Stastics based on gender -->
        </div>
        {{-- Statistiques selon la localisation --}}
        <div class="mb-4">
            <h6 class="mb-3">Statistiques selon la localisation</h6>
            <div class="table-responsive table-height">
                <table class="table text-start align-middle table-bordered table-hover mb-0" id="tableUser">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Localisation</th>
                            <th>Béneficiaire</th>
                            <th>Pourcentage</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Statistiques selon la couverture médicale --}}
        <div class="mb-4">
            <h6 class="mb-3">Statistiques selon la couverture médicale</h6>
            <div class="rowCouv" style="justify-content: center;">
                <div class="col-xl-3 col-sm-6 mt-3 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="text-end pt-1">
                                <p class="text-lg-start mb-0 mt-5 text-capitalize">RAMED</p>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <h4 class="mb-0">12</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mt-3 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="text-end pt-1">
                                <p class="text-lg-start mb-0 mt-5 text-capitalize">CNSS</p>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <h4 class="mb-0">12</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mt-3 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="text-end pt-1">
                                <p class="text-lg-start mb-0 mt-5 text-capitalize">CNOPS</p>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <h4 class="mb-0">12</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mt-3 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="text-end pt-1">
                                <p class="text-lg-start mb-0 mt-5 text-capitalize">AMO</p>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <h4 class="mb-0">12</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mt-3 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="text-end pt-1">
                                <p class="text-lg-start mb-0 mt-5 text-capitalize">Sans</p>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <h4 class="mb-0">12</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Statistiques selon la situation familiale --}}
        <div class="mb-4">
            <h6 class="mb-3">Statistiques selon la situation familiale</h6>
            <div class="table-responsive table-height">
                <table class="table text-start align-middle table-bordered table-hover mb-0" id="tableUser">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Situation familiale</th>
                            <th>Béneficiaire</th>
                            <th>Pourcentage</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="statistics-both">
            {{-- Statistiques selon CIN --}}
            <!-- BEGIN: Stastics based on gender -->
            <div class="mb-4">
                <h6 class="mb-3">Statistiques selon CIN</h6>
                <div class="graphBox">
                    <div class="box">
                        <canvas id="myChartCIN"></canvas>
                    </div>
                </div>
            </div>
            {{-- Statistiques selon la scolarité --}}
            <div class="mb-4">
                <h6 class="mb-3">Statistiques selon la Scolarité</h6>
                <div class="graphBox">
                    <div class="box">
                        <canvas id="myChartScol"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Stastics based on gender -->
        </div>
        <div class="mb-4">
            <h6 class="mb-3">Statistiques selon la cause d'addiction</h6>
            <div class="cardCauseBox">
                <div class="cardCause">
                    <div>
                        <div class="numbers">15</div>
                        <div class="cardName">Famille</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-house-damage"></i>
                    </div>
                </div>
                <div class="cardCause">
                    <div>
                        <div class="numbers">15</div>
                        <div class="cardName">Entourage</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="cardCause">
                    <div>
                        <div class="numbers">15</div>
                        <div class="cardName">Amis</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-user-friends"></i>
                    </div>
                </div>
                <div class="cardCause">
                    <div>
                        <div class="numbers">15</div>
                        <div class="cardName">Autres</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-folder-plus"></i>
                    </div>
                </div>
            </div>
        </div>
        {{-- Statistiques selon Type de Drogue --}}
        <!-- BEGIN: Stastics based on gender -->
        <div class="mb-4">
            <h6 class="mb-3">Statistiques selon Type de Drogue</h6>
            <div class="graphBox">
                <div class="box">
                    <canvas id="myChartTypedrg"></canvas>
                </div>
            </div>
        </div>
        <!-- END: Stastics based on gender -->
        
        {{-- Statistiques selon le service --}}
        <div class="mb-4">
            <h6 class="mb-3">Statistiques selon le service</h6>
            <div class="table-responsive table-height">
                <table class="table text-start align-middle table-bordered table-hover mb-0" id="tableUser">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Service</th>
                            <th>Béneficiaire</th>
                            <th>Pourcentage</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Statistiques selon Présence --}}
        <div class="mb-4">
            <h6 class="mb-3">Statistiques selon la présence au rendez-vous</h6>
            <div class="graphBox">
                <div class="box w-50">
                    <canvas id="myChartpresence"></canvas>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('custom_scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
    <script src="{{ asset('js/my_chart.js') }}"></script>
@endsection
