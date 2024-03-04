@extends('master')

@section('head')
    <style>
        #content {
            background-image: url("/assets/images/menu/thumb2.png");
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        #content::before {
            position: absolute;
            content: "";
            inset: 0;
            background: #1B1B1B;
            opacity: 0.85;
        }
        #content #content_contact .contact_title {
            color: #50D100;
        }
        #content #content_contact .contact_quick .contact_quick__item .contact_quick__desc {
            color: #EEEEEE;
        }
    </style>
@endsection

@section('content')
    <div id="content">
        @include('pages.contact.form')
    </div>
@endsection
