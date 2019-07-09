@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <h1>Gestion des batiments</h1>
    </div>

    <div class="row justify-content-center">
      <div class="col-12">
        <table  class='table'>
          <thead>
           <tr>
             <th> </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><h2>Créer un batiment</h2></td>
              <td><input type=button class="btn btn-secondary btn-block" onclick=window.location.href='http://basicwebsite.test'; value="Créer un batiment" /></td>
            </tr>
            <tr>
              <td>Mettre à jour un batiment</td>
              <td><input type=button class="btn btn-secondary btn-block" onclick=window.location.href='http://cdk_energie.test'; value="Mettre à jour un batiment" /></td>
            </tr>

            <tr>
              <td>Consulter un batiment</td>
              <td><input type=button onclick=window.location.href='http://basicwebsite.test'; value="Consulter un batiment" /></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection