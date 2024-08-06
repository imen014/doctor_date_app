@extends('base')

@section('title', 'Doctor Profile')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4 text-center mb-4">
            <img class="img-fluid img-thumbnail rounded mt-3" src="{{ asset($doctor->profil_photo_path) }}" alt="Profile Photo" style="width: 100%;">
        </div>
        <div class="col-lg-8">
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Fullname</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->fullname}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Birthdate</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->birthdate}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Sexe</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->sexe}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Phone number</strong></div>
                <div class="col-sm-8 text-primary"><a href="tel:{{$doctor->phone_number}}" class="text-decoration-none text-primary">{{$doctor->phone_number}} &nbsp; &nbsp;  <i class="bi bi-telephone-forward-fill text-dark"></i></a></div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Email</strong></div>
                <div class="col-sm-8 text-primary"><a href="mailto:{{$doctor->email}}" class="text-decoration-none text-primary">{{$doctor->email}}  &nbsp; &nbsp;    <i class="bi bi-envelope-dash-fill text-dark"></i></a></div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Cabinet address</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->adresse_cabinet}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Website</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->website}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Speciality</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->speciality}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Licence number</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->licence_number}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Affiliated hospital</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->hospital_affilier}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Consultation fee</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->tarif_consulation}}$</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Teleconsultation</strong></div>
                <div class="col-sm-8 text-primary">
                    @if($doctor->tele_consultation == 1)
                        Possible
                    @else
                        Not possible
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Paiement mode</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->paiement_mode}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Language</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->langues}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Accepted assurances</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->assurance_acceptees}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Teleconsultation option</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->option_de_teleconsultation}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Reservation-annulation politique</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->politique_reservation_annulation}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Diplomes-certifications</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->diplome_certifications}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Professionels experiences</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->experiences_professionels}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4"><strong>Membership associations</strong></div>
                <div class="col-sm-8 text-primary">{{$doctor->memberships_associations}}</div>
            </div>
        </div>
    </div>
    <a href="{{route('ask_visite',$doctor->id)}}">Ask visite</a>
</div>
@endsection
