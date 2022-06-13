<div class="mb-2">
    <div class="container px-4 mx-auto">

        <div class="p-6 m-20 bg-white rounded shadow">
            {!! $chart->container() !!}
        </div>
        <div class="p-6 m-20 bg-white rounded shadow">
            {!! $pie->container() !!}
        </div>

    </div>
</div>
<script src="{{ $chart->cdn() }}"></script>
<script src="{{ $pie->cdn() }}"></script>

{{ $chart->script() }}
{{ $pie->script() }}
