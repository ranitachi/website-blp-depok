<form class="form-horizontal">
  <fieldset class="content-group">
    <div class="form-group">
      <label class="control-label col-lg-4"><h2>{{str_replace('-',' ',strtoupper($category))}}</h2></label>
      <div class="col-lg-12">
        @if (count($profil)!=0)
          {!! str_replace(array('\\n','\\r'), ' ',$profil[0]->desc) !!}
          {{-- <pre>
            {{print_r($profil)}}
          </pre> --}}
          @php
            $id=$profil[0]->id;
          @endphp
        @else
          <center>
            Data <b>{{str_replace('-',' ',strtoupper($category))}}</b> Masih Kosong<br>
            Silahkan Di Tambah Terlebih Dahulu
            <br>
            <button class="btn btn-primary btn-shadowed btn-xs" type="button" onclick="bukaform(-1,'{{$category}}')"><i class="icon-diff-added"></i>&nbsp;&nbsp;Tambah Data {{str_replace('-',' ',strtoupper($category))}}</button>
          </center>
          @php
            $id=-1;
          @endphp
        @endif
      </div>
    </div>
    @if($id!=-1)
    <div class="form-group">
      <div class="text-right">
        <button type="button" onclick="bukaform({{$id}},'{{$category}}')" class="btn btn-primary btn-shadowed btn-xs"><i class="icon-pencil5"></i>&nbsp;&nbsp;Edit</button>
      </div>
    </div>
    @endif
  </fieldset>
</form>
<script>
        function bukaform(id,cat)
        {
            location.href=APP_URL+'/profil-form/'+id+'/'+cat;
        }
</script>
