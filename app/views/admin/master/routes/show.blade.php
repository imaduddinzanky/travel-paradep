@section('breadcrumbs')
    {{Helpers::currentBreadcrumbs($route)}}
@stop

@section('content')

    <div class="box">
        <div class="container">
            <div class="panel panel-default">
              <div class="panel-heading">
                  {{Helpers::tableTitle()}}
                  <div class="pull-right panel-action">
                      <div class="btn-group">

                          {{Helpers::link_to('admin.master.routes.edit', '<i class="icon icon-pencil"></i>', ['routes' => $route->id],['class' => 'btn btn-default new-modal-form', 'data-target' => 'modal-edit-route-'.$route->id ])}}

                      </div>
                  </div>
              </div>
              <div class="panel-body">
                    <div class="col-md-6">
                      <dl class="dl-horizontal">
                          <dt>Name</dt>
                          <dd>: {{ $route->name }}</dd>
                          <dt>Code</dt>
                          <dd>: {{ $route->code}}</dd>
                          <dt>Class</dt>
                          <dd>: {{ $route->category->name }}</dd>
                          <dt>Price</dt>
                          <dd>: {{ $route->price }}</dd>
                          <dt>Departure</dt>
                          <dd>: {{ $route->departure_station }}</dd>
                          <dt>Destination</dt>
                          <dd>: {{ $route->destination_station }}</dd>
                          <dt>Durations</dt>
                          <dd>: {{ $route->duration }}</dd>
                      </dl>
                    </div>
                    <div class="col-md-6">

                    </div>
              </div>
            </div>
        </div>
    </div>

@stop
