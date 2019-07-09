@extends('layouts.app')

@section('content')

      <div class="container ">
        <div class="card">
          <div class="card">
            <div class="card-body text-center">
              <h2 class="card-title text-center">Coudenergie</h2>
              <p>Veuillez selectionner une action ci-dessous</p>
            </div>
          </div>
          <hr>

        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 21rem;">
              <img  src= "/img/home.svg" class="card-img-top" alt="icone batiment">
            </div>
              <div class="card-body">
                <h2 class="card-title text-center">Gestion des Batiments</h2>
                <p class="card-text text-info">Création des batiments. Mise à jour des batiments. Ici vous accéderez au modules permettant la gestion du patrimoine de la commune.</p>
                  <div class="text-center">
                  <a href="/menu_batiments" class="btn btn-primary">Accéder</a>
                  </div>
              </div>
          </div>

        <div class="col-md-4">
          <div class="card" style="width: 21rem;">
            <img src="/img/line-chart.svg" class="card-img-top" alt="icone graphiques">
            <div class="card-body">
              <h2 class="card-title  text-body text-center">Gestion des Energies</h2>
              <p class="card-text text-info">Consultations des contrats d'énergies. Des suivi des facturations. Visualisation des consommations totales et par batiments.</p>
                <div class="text-center">
                <a href="#" class="btn btn-primary ">Accéder</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card" style="width: 21rem;">
            <img src="/img/edit-document.svg" class="card-img-top" alt="icone edition docs">
            <div class="card-body">
              <h2 class="card-title text-center">Gestion des Travaux</h2>
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
