
@extends('layouts.default')
@section('content')

@if(count($components) > 0)
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Components Table </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Value</th>
                  <th>Footprint</th>
                  <th>PN</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Value</th>
                  <th>Footprint</th>
                  <th>PN</th>
                </tr>
              </tfoot>
              <tbody>


  @foreach( $components as $component)
      	         <tr>
                  <td>{{$component->component_id}}</td>
                  <td>{{$component->value}}</td>
                  <td>{{$component->footprint}}</td>
                  <td>{{$component->pn}}</td>
		</tr>

  @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>

@endif

@stop


        

