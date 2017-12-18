<table class="table table-striped table-bordered datatable-extended table-head-custom table-responsive" id="table-video">
    <thead>
        <tr>
            <th style="width:20px !important;">No</th>
            <th >Title</th>
            <th >URL</th>
            <th >Flag</th>
            <th class="text-center" style="width:100px !important;">Actions</th>
        </tr>
    </thead>    
   <tbody>
  @foreach ($data as $k => $v)
    @php
      if(strpos($v->url,'youtube')!==false)
      {
        $url = $v->url;
        preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
        $id = $matches[1];
        $width = '300px';
        $height = '150px';
        $video='<iframe id="ytplayer" type="text/html" width="'.$width.'" height="'.$height.'"
                src="https://www.youtube.com/embed/'.$id.'?rel=0&showinfo=0&color=white&iv_load_policy=3"
                frameborder="0" allowfullscreen></iframe> ';
      }
      else
        $video='';
    @endphp
    <tr>
      <td class="text-center" style="width:20px !important;">{{($k+1)}}</td>
      <td class="" style="">{{$v->title}}</td>
      <td style="vertical-align:top;" class="text-center">{!!$video!!}</td>
      <td class="text-center">
        @if ($v->flag==0)
          <input type="checkbox" id="status" class="switch" value="{{$v->id}}" data-on-text="Active" data-off-text="DeActive" data-size="mini" onclick="ubah()">
        @else
          <input type="checkbox" id="status" class="switch" value="{{$v->id}}" data-on-text="Active" data-off-text="DeActive" checked="checked" data-size="mini" onclick="ubah()">
        @endif
      </td>
      <td class="text-center" style="width:100px !important;">
        <a href="javascript:edit({{$v->id}})"><i class="icon-pencil5"></i></a>
        <a href="javascript:hapus({{$v->id}})"><i class="icon-trash"></i></a>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>
<style>
th { font-size: 12px !important; padding:6px 10px !important; text-align: center;}
td { font-size: 11px !important; padding:6px 10px !important}
</style>
