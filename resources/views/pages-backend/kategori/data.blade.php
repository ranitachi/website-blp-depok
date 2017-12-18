<table class="table table-striped table-bordered datatable-extended table-head-custom table-responsive" id="table-kategori">
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>    
    <tbody>
    @php
        $no=1;
    @endphp
    @foreach($cat as $k => $v)
        <tr>
            <td>{{$no}}</td>
            <td>{{$v->nama_kategori}}</td>
            <td>{!!$v->desc!!}</td>
            <td>
                <button class="btn btn-xs btn-info" type="button" onclick="edit('{{$v->id}}')">
                    <i class="fa fa-edit"></i>
                </button>
                <button class="btn btn-xs btn-danger" type="button" onclick="hapus('{{$v->id}}')">
                    <i class="fa fa-trash"></i>
                </button>
            </td>
        </tr>  
        @php
            $no++;
        @endphp       
    @endforeach
    </tbody>
</table>