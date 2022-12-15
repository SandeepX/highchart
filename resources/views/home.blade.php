@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php
                        echo "Calling statically via. Facades <br />";
                        echo  FacadesCalculator::add(5,2)."<br />";
                        echo  FacadesCalculator::subtract(5,2)."<br />";
                        echo  FacadesCalculator::multiply(5,2)."<br />";
                        echo  FacadesCalculator::divide(5,2)."<br />";

                        echo "------------------------<br/>";

                        echo "Calling non-statically via object of a class. <br />";
                        $calculator =  new App\Calculator\Calculator();
                        echo  $calculator->add(5,2)."<br />";
                        echo  $calculator->subtract(5,2)."<br />";
                        echo  $calculator->multiply(5,2)."<br />";
                        echo  $calculator->divide(5,2)."<br />";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
