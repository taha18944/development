@extends('layouts.producer')

@section('content')
    @include('L2.reports._rodeo_report_header', ['active' => 'judge'])
    <style>
        .border {
            border: 1px solid black !important;
        }
        .table th, .table td {
            color: black !important;
        }
    </style>
    {{-- <div class="text-right">
        <a href="?print=true" target="_blank" class="btn btn-primary">Print</a>
    </div> --}}
    @foreach( $competitions->sortBy('order') as $competition )
        <div class="d-block mt-4 p-4 border border-grey rounded bg-white">
            <h2>Judge Sheets</h2>
            <h3>{{ $organization->name }}</h3>
            <div class="d-flex">
                <div>
                    <h4 class="h-reset font-weight-bold">{{ $rodeo->name }} </h4>    
                </div>
                <div>
                     <p style="margin-left: 20px"> {{ rodeo_date_format($day) }} </p>
                </div>
            </div>
            <div class="d-flex">
                <div class="col-md-3">
                    <h5 class="mt-5 font-weight-bold">{{ $competition->name }}</h5>
                </div>
                <div class="col-md-4">
                    <?php
                        $getDates = \DB::table('judge_sheet')->where('judge_id', $competition->id)->select('judge_date')->first();
                    ?>
                     <span style="margin-right: 40px;font-size:16px;font-weight: 600">Event Start Time</span><input id="{{ $competition->id }}" value="{{ $getDates->judge_date ?? '' }}" class="mt-5 getDateTime font-weight-bold" name="judge_date" type="datetime-local" placeholder="Date">
                </div>
                
            </div>
        </div>
        <table class="table bg-white mb-3">
            <thead class="border">
                <tr class="bg-light font-weight-bold">
                    <th>Draw</th>
                    <th>Contestant</th>
                    {{-- <th>City</th> --}}
                    <th>Stock</th>
                    <th>Stock Score</th>
                    <th>Time / Score</th>
                    <th>Penalty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count = 0;
                @endphp
                @foreach( $entries->where('competition_id', $competition->id)->sortBy('draw') as $entry )
                    <tr>
                        <td class="border">{{ $entry->draw }}</td>
                        <td class="border">{{ $entry->contestant->lexical_name_order }}</td>
                        {{-- <td class="border">{{ $entry->contestant->city }}</td> --}}
                        <td class="border"> </td>
                        <td class="border"> </td>
                        <td class="border"> </td>
                        <td class="border"> </td>
                        <td class="border"> </td>
                    </tr>
                    @php
                        $count++;
                    @endphp
                @endforeach
                <tr><td colspan="8" class="bg-light">Number of entries: {{ $count }}</td></tr>
                <tr><td colspan="8" class="py-4"></td></tr>
            </tbody>
        </table>
    @endforeach
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>

    jQuery(document).on('change','.getDateTime' , function () {
        var getDateTime = $(this).val();
        var getID = $(this).attr('id');

        if (getDateTime != '') {
            let data = {
                getDateTime: getDateTime,
                getID: getID,
                requestType: 'getDateTime',
                _token: "{{ csrf_token() }}",
            };  
            $.post('dummy',data,function(response){
                console.log(response)
            });
        }else{
            console.log('server error')
        }
    });
</script>