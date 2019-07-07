@extends('layouts.app')

@section('content')
  <h1>Accueil</h1>

      <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width:22rem;">
            <img src="/img/home.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Gestion des Batiments</h5>
              <p class="card-text text-info">Création des batiments. Mise à jour des batiments. Ici vous accéderez au modules permettant la gestion du patrimoine de la commune.</p>
                <div class="text-center">
                <a href="/batiments" class="btn btn-primary">Accéder</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card" style="width: 22rem;">
            <img src="/img/line-chart.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Gestion des Energies</h5>
              <p class="card-text text-info">Consultations des contrats d'énergies. Des suivi des facturations. Visualisation des consommations totales et par batiments de la commune</p>
                <div class="text-center">
                <a href="#" class="btn btn-primary ">Accéder</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card" style="width: 22rem;">
            <img src="/img/edit-document.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Gestion des Travaux</h5>
              <p class="card-text text-info">Consultations des travaux effectués par batiment. Gestion des dossiers CEE par batiments dans le cadre de la loi de transition énergétique.</p>
              <div class="text-center">
                <a href="#" class="btn btn-primary ">Accéder</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
