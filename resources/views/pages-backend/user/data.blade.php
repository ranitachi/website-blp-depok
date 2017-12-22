<table class="table table-striped table-bordered datatable-extended table-head-custom table-responsive" id="table-user">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIP</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Email</th>
            <th class="text-center">Level</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>    
    <tbody>
    @foreach ($data as $k => $v)
      <tr>
        <td class="text-center">{{($k+1)}}</td>
        <td class="text-center">{{($v->nip)}}</td>
        <td>{{$v->name}}</td>
        <td>{{$v->email}}</td>
        <td class="text-center"><span class="label label-{{($v->level == 0 ? 'primary' : 'info')}} label-rounded">{{($v->level == 0 ? 'Administrator' : 'Kontributor')}}</span></td>
        
        <td class="text-center">
          @if(Auth::user()->level==0)
              
            <a href="{{URL::to('/user/'.$v->id)}}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
            <a href="javascript:hapus({{$v->id}})" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
          @endif
        </td>
      </tr>
    @endforeach

  </tbody>
</table>
<style>
th { font-size: 12px !important; padding:6px 10px !important}
td { font-size: 11px !important; padding:6px 10px !important}
</style>