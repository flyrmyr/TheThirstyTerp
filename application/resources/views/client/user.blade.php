@extends('layouts.client')

@section('title', 'User')

@section('style')

    <style type="text/css">
        /* Space out content a bit */
        /*body {
          padding-top: 20px;
          padding-bottom: 20px;
        }*/

        /* Everything but the jumbotron gets side spacing for mobile first views */
        .header,
        .marketing,
        .footer {
          padding-right: 15px;
          padding-left: 15px;
        }

        /* Custom page header */
        .header {
          padding-bottom: 20px;
          border-bottom: 1px solid #e5e5e5;
        }
        /* Make the masthead heading the same height as the navigation */
        .header h3 {
          margin-top: 0;
          margin-bottom: 0;
          line-height: 40px;
        }

        /* Customize container */
        @media (min-width: 768px) {
          .container {
            max-width: 730px;
          }
        }
        .container-narrow > hr {
          margin: 30px 0;
        }

        /* Responsive: Portrait tablets and up */
        @media screen and (min-width: 768px) {
          /* Remove the padding we set earlier */
          .header,
          .marketing,
          .footer {
            padding-right: 0;
            padding-left: 0;
          }
          /* Space out the masthead */
          .header {
            margin-bottom: 30px;
          }
          /* Remove the bottom border on the jumbotron for visual effect */
          .jumbotron {
            border-bottom: 0;
          }
        }
    </style>
@stop

@section('content')
    <div class="container-narrow">

        <div class="container">
            User Stuff
        </div>

    </div> <!-- /container -->
@stop